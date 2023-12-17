<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Http\Controllers\Controller;
use App\Models\State;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;


class StateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.backend.admin.state.states', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        $country_id = $request->country;

        if ($country_id) {
            $country = Country::findOrFail($country_id);

            $all_states = $country->states()->orderBy('state_name')->get();
        } else {
            $all_states = State::orderBy('state_name')->get();
        }

        $all_countries = Country::orderBy('country_name')->get();

        return response()->view(
            'backend.admin.state.index',
            compact('all_countries', 'country_id', 'all_states')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.backend.admin.state.create-state', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        $all_countries = Country::orderBy('country_name')->get();
        return response()->view('backend.admin.state.create', compact('all_countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @throws ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'country_id' => 'required|numeric',
            'state_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'state_abbr' => 'required|max:255',
            'state_slug' => 'required|max:255|regex:/^[\w-]*$/',
        ]);

        $country = Country::find($request->country_id);

        if ($country) {
            $state_name = $request->state_name;
            $state_abbr = $request->state_abbr;
            $state_slug = $request->state_slug;
            $state_country_abbr = $country->country_abbr;

            $validate_error = array();
            $state_name_exist = $country->states()
                ->where('state_name', $state_name)
                ->count();
            if ($state_name_exist > 0) {
                $validate_error['state_name'] = __('prefer_country.error.state-name-exist');
            }
            $state_abbr_exist = $country->states()
                ->Where('state_abbr', $state_abbr)
                ->count();
            if ($state_abbr_exist > 0) {
                $validate_error['state_abbr'] = __('prefer_country.error.state-abbr-exist');
            }
            $state_slug_exist = $country->states()
                ->Where('state_slug', $state_slug)
                ->count();
            if ($state_slug_exist > 0) {
                $validate_error['state_slug'] = __('setting_language.location.url-slug-exist');
            }

            if (count($validate_error) > 0) {
                throw ValidationException::withMessages($validate_error);
            } else {

                // start upload feature image
                $feature_image = $request->feature_image;
                $state_feature_image_name = null;
                $state_feature_image_name_medium = null;
                $state_feature_image_name_small = null;
                $state_feature_image_name_tiny = null;
                $state_feature_image_name_blur = null;
                if (!empty($feature_image)) {

                    $currentDate = Carbon::now()->toDateString();

                    $state_feature_image_name = $state_slug . '-' . $currentDate . '-' . uniqid() . '.jpg';
                    $state_feature_image_name_medium = $state_slug . '-' . $currentDate . '-' . uniqid() . '-medium.jpg';
                    $state_feature_image_name_small = $state_slug . '-' . $currentDate . '-' . uniqid() . '-small.jpg';
                    $state_feature_image_name_tiny = $state_slug . '-' . $currentDate . '-' . uniqid() . '-tiny.jpg';

                    // blur feature image name
                    $state_feature_image_name_blur = $state_slug . '-' . $currentDate . '-' . uniqid() . '-blur.jpg';

                    if (!Storage::disk('public')->exists('state')) {
                        Storage::disk('public')->makeDirectory('state');
                    }

                    // original size
                    $state_feature_image = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)))->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name, $state_feature_image);

                    // medium size
                    $state_feature_image_medium = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)))
                        ->resize(350, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    $state_feature_image_medium = $state_feature_image_medium->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name_medium, $state_feature_image_medium);

                    // small size
                    $state_feature_image_small = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)))
                        ->resize(230, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    $state_feature_image_small = $state_feature_image_small->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name_small, $state_feature_image_small);

                    // tiny size
                    $state_feature_image_tiny = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)))
                        ->resize(160, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    $state_feature_image_tiny = $state_feature_image_tiny->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name_tiny, $state_feature_image_tiny);

                    // blur feature image
                    $state_feature_image_blur = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)));
                    $state_feature_image_blur->blur(50);
                    $state_feature_image_blur->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name_blur, $state_feature_image_blur);
                }

                // now can store
                $new_state = new State(array(
                    'state_name' => $state_name,
                    'state_abbr' => $state_abbr,
                    'state_slug' => $state_slug,
                    'state_country_abbr' => $state_country_abbr,
                    'state_image' => $state_feature_image_name,
                    'state_image_medium' => $state_feature_image_name_medium,
                    'state_image_small' => $state_feature_image_name_small,
                    'state_image_tiny' => $state_feature_image_name_tiny,
                    'state_image_blur' => $state_feature_image_name_blur,
                    "meta_title" => $request->meta_title,
                    "meta_description" => $request->meta_description,
                    "meta_keywords" => $request->meta_keywords,
                    "alt_image" => $request->alt_image,
                    "canonical" => $request->canonical,
                ));

                $created_state = $country->states()->save($new_state);

                \Session::flash('flash_message', __('alert.state-created'));
                \Session::flash('flash_type', 'success');

                return redirect()->route('admin.states.edit', $created_state->id);
            }
        } else {
            throw ValidationException::withMessages(['country_id' => 'Country not found']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param State $state
     */
    public function show(State $state)
    {
        return redirect()->route('admin.states.edit', $state);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param State $state
     * @return Response
     */
    public function edit(State $state)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.backend.admin.state.edit-state', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        return response()->view('backend.admin.state.edit', compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param State $state
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, State $state)
    {
        $request->validate([
            'country_id' => 'required|numeric',
            'state_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'state_abbr' => 'required|max:255',
            'state_slug' => 'required|max:255|regex:/^[\w-]*$/',
        ]);

        $country = Country::find($request->country_id);

        if ($country) {
            $state_name = $request->state_name;
            $state_abbr = $request->state_abbr;
            $state_slug = $request->state_slug;

            $validate_error = array();
            $state_name_exist = $country->states()
                ->where('state_name', $state_name)
                ->where('id', '!=', $state->id)
                ->count();
            if ($state_name_exist > 0) {
                $validate_error['state_name'] = __('prefer_country.error.state-name-exist');
            }
            $state_abbr_exist = $country->states()
                ->Where('state_abbr', $state_abbr)
                ->where('id', '!=', $state->id)
                ->count();
            if ($state_abbr_exist > 0) {
                $validate_error['state_abbr'] = __('prefer_country.error.state-abbr-exist');
            }
            $state_slug_exist = $country->states()
                ->Where('state_slug', $state_slug)
                ->where('id', '!=', $state->id)
                ->count();
            if ($state_slug_exist > 0) {
                $validate_error['state_slug'] = __('setting_language.location.url-slug-exist');
            }

            if (count($validate_error) > 0) {
                throw ValidationException::withMessages($validate_error);
            } else {
                // start upload feature image
                $feature_image = $request->feature_image;
                $state_feature_image_name = null;
                $state_feature_image_name_medium = null;
                $state_feature_image_name_small = null;
                $state_feature_image_name_tiny = null;
                $state_feature_image_name_blur = null;
                if (!empty($feature_image)) {
                    $currentDate = Carbon::now()->toDateString();

                    $state_feature_image_name = $state_slug . '-' . $currentDate . '-' . uniqid() . '.jpg';
                    $state_feature_image_name_medium = $state_slug . '-' . $currentDate . '-' . uniqid() . '-medium.jpg';
                    $state_feature_image_name_small = $state_slug . '-' . $currentDate . '-' . uniqid() . '-small.jpg';
                    $state_feature_image_name_tiny = $state_slug . '-' . $currentDate . '-' . uniqid() . '-tiny.jpg';

                    // blur feature image name
                    $state_feature_image_name_blur = $state_slug . '-' . $currentDate . '-' . uniqid() . '-blur.jpg';

                    if (!Storage::disk('public')->exists('state')) {
                        Storage::disk('public')->makeDirectory('state');
                    }

                    // original size
                    $state_feature_image = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)))->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name, $state_feature_image);

                    // medium size
                    $state_feature_image_medium = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)))
                        ->resize(350, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    $state_feature_image_medium = $state_feature_image_medium->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name_medium, $state_feature_image_medium);

                    // small size
                    $state_feature_image_small = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)))
                        ->resize(230, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    $state_feature_image_small = $state_feature_image_small->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name_small, $state_feature_image_small);

                    // tiny size
                    $state_feature_image_tiny = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)))
                        ->resize(160, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    $state_feature_image_tiny = $state_feature_image_tiny->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name_tiny, $state_feature_image_tiny);

                    // blur feature image
                    $state_feature_image_blur = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $feature_image)));
                    $state_feature_image_blur->blur(50);
                    $state_feature_image_blur->stream('jpg', 70);
                    Storage::disk('public')->put('state/' . $state_feature_image_name_blur, $state_feature_image_blur);

                    $state->state_image = $state_feature_image_name;
                    $state->state_image_medium = $state_feature_image_name_medium;
                    $state->state_image_small = $state_feature_image_name_small;
                    $state->state_image_tiny = $state_feature_image_name_tiny;
                    $state->state_image_blur = $state_feature_image_name_blur;

                }

                $state->state_name = $state_name;
                $state->state_abbr = $state_abbr;
                $state->state_slug = $state_slug;

                $state->meta_title = $request->meta_title;
                $state->meta_description = $request->meta_description;
                $state->meta_keywords = $request->meta_keywords;
                $state->alt_image = $request->alt_image;
                $state->canonical = $request->canonical;
                $state->save();

                \Session::flash('flash_message', __('alert.state-updated'));
                \Session::flash('flash_type', 'success');

                return redirect()->route('admin.states.edit', $state);
            }
        } else {
            throw ValidationException::withMessages(['country_id' => 'Country not found']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param State $state
     * @return RedirectResponse
     */
    public function destroy(State $state)
    {
        $state->deleteState();

        \Session::flash('flash_message', __('alert.state-deleted'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.states.index');
    }
}
