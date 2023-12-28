<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\State;
use Artesaos\SEOTools\Facades\SEOMeta;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Intervention\Image\Facades\Image;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('advertisement.seo.index-ad', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        $all_advertisements = Advertisement::orderBy('created_at', 'DESC')->get();

        return response()->view('backend.admin.ad.index',
            compact('all_advertisements'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $settings = app('site_global_settings');
        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('advertisement.seo.create-ad', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */
        $categories = Category::where('locale', app()->getLocale())
            ->whereNotNull('category_parent_id')
            ->orderBy('category_name', 'ASC')->get();
        $states = State::where('locale', app()->getLocale())
            ->orderBy('state_name', 'ASC')->get();
        $advertisement_place = $request->advertisement_place > 0 ? $request->advertisement_place : 0;
        $advertisement_place_states = $request->advertisement_place_states > 0 ? $request->advertisement_place_states : 0;
        $advertisement_place_categories = $request->advertisement_place_categories > 0 ? $request->advertisement_place_categories : 0;
        $advertisement_place_type = $request->advertisement_place_type > 0 ? $request->advertisement_place_type : 0;

        return response()->view('backend.admin.ad.create',
            compact('advertisement_place',
                    'advertisement_place_type',
                'states',
                'categories',
                'advertisement_place_states',
                'advertisement_place_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'advertisement_name' => 'required',
            'advertisement_status' => 'required|numeric|min:0|max:1',
            'advertisement_position' => 'required|numeric|min:1|max:18'
        ]);

        $image1 = empty($request->image1) ? null : $request->image1;

        $image2 = empty($request->image2) ? null : $request->image2;

        $advertisement_name = $request->advertisement_name;
        $advertisement_status = $request->advertisement_status == Advertisement::AD_STATUS_ENABLE ? Advertisement::AD_STATUS_ENABLE : Advertisement::AD_STATUS_DISABLE;
        $advertisement_place = $request->advertisement_place;
        $advertisement_code = $request->advertisement_code;
        $advertisement_position = $request->advertisement_position;
        $advertisement_alignment = $request->advertisement_alignment;


        $ad_image_file_name1 = null;
        if (!empty($image1)) {
            $currentDate = Carbon::now()->toDateString();

            $ad_image_file_name1 = $advertisement_name . '_' . $currentDate . '_' . uniqid() . '.jpg';

            // create category storage folder if not exist
            if (!Storage::disk('public')->exists('ads')) {
                Storage::disk('public')->makeDirectory('ads');
            }

            $ad_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image1)))->stream('jpg', 100);
            Storage::disk('public')->put('ads/' . $ad_image_file_name1, $ad_image_obj);
        }

        $ad_image_file_name2 = null;
        if (!empty($image2)) {
            $currentDate = Carbon::now()->toDateString();

            $ad_image_file_name2 = $advertisement_name . '_' . $currentDate . '_' . uniqid() . '.jpg';

            // create category storage folder if not exist
            if (!Storage::disk('public')->exists('ads')) {
                Storage::disk('public')->makeDirectory('ads');
            }

            $ad_image_obj2 = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image2)))->stream('jpg', 100);
            Storage::disk('public')->put('ads/' . $ad_image_file_name2, $ad_image_obj2);
        }

        if($request->advertisement_place != 0){
            $advertisement = new Advertisement(array(
                'advertisement_name' => $advertisement_name,
                'advertisement_status' => $advertisement_status,
                'advertisementable_id' => $request->advertisement_place,
                'advertisement_place' => $advertisement_place,
                'advertisement_code' => $advertisement_code,
                'advertisement_position' => $advertisement_position,
                'advertisement_alignment' => $advertisement_alignment,
                'ad_image_vertical' => $ad_image_file_name1,
                'ad_image_horizontal' => $ad_image_file_name2,
            ));
        }
        if($request->advertisement_place_states != 0){
            $advertisement = new Advertisement(array(
                'advertisement_name' => $advertisement_name,
                'advertisement_status' => $advertisement_status,
                'advertisementable_id' => $request->advertisement_place_states,
                'advertisementable_type' => 'App\Models\State',
                'advertisement_place' => $advertisement_place,
                'advertisement_code' => $advertisement_code,
                'advertisement_position' => $advertisement_position,
                'advertisement_alignment' => $advertisement_alignment,
                'ad_image_vertical' => $ad_image_file_name1,
                'ad_image_horizontal' => $ad_image_file_name2,
            ));
        }
        if($request->advertisement_place_categories != 0){
            $advertisement = new Advertisement(array(
                'advertisement_name' => $advertisement_name,
                'advertisement_status' => $advertisement_status,
                'advertisementable_id' => $request->advertisement_place_categories,
                'advertisementable_type' => 'App\Models\Category',
                'advertisement_code' => $advertisement_code,
                'advertisement_place' => $advertisement_place,
                'advertisement_position' => $advertisement_position,
                'advertisement_alignment' => $advertisement_alignment,
                'ad_image_vertical' => $ad_image_file_name1,
                'ad_image_horizontal' => $ad_image_file_name2,
            ));
        }



        $advertisement->save();

        \Session::flash('flash_message', __('advertisement.create-ad-success'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.advertisements.edit', $advertisement);

    }

    /**
     * Display the specified resource.
     *
     * @param Advertisement $advertisement
     * @return RedirectResponse
     */
    public function show(Advertisement $advertisement)
    {
        return redirect()->route('admin.advertisements.edit', $advertisement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Advertisement $advertisement
     * @return Response
     */
    public function edit(Advertisement $advertisement)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('advertisement.seo.update-ad', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        return response()->view('backend.admin.ad.edit',
            compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Advertisement $advertisement
     * @return RedirectResponse
     */
    public function update(Request $request, Advertisement $advertisement)
    {
        $request->validate([
            'advertisement_name' => 'required',
            'advertisement_status' => 'required|numeric|min:0|max:1',
            'advertisement_place' => 'required',
//            'advertisement_code' => 'required',
            'advertisement_position' => 'required|numeric|min:1|max:18',
        ]);

        $image1 = empty($request->image1) ? null : $request->image1;

        $image2 = empty($request->image2) ? null : $request->image2;

        $advertisement_name = $request->advertisement_name;
        $advertisement_status = $request->advertisement_status == Advertisement::AD_STATUS_ENABLE ? Advertisement::AD_STATUS_ENABLE : Advertisement::AD_STATUS_DISABLE;
        $advertisement_place = $request->advertisement_place;
        $advertisement_code = $request->advertisement_code;
        $advertisement_position = $request->advertisement_position;
        $advertisement_alignment = $request->advertisement_alignment;


        $ad_image_file_name1 = $advertisement->ad_image_vertical;
        if (!empty($image1)) {
            $currentDate = Carbon::now()->toDateString();

            $ad_image_file_name1 = $advertisement_name . '_' . $currentDate . '_' . uniqid() . '.jpg';

            // create category storage folder if not exist
            if (!Storage::disk('public')->exists('ads')) {
                Storage::disk('public')->makeDirectory('ads');
            }

            // delete the old category image file if exist
            if (Storage::disk('public')->exists('ads/' . $advertisement->ad_image_vertical)) {
                Storage::disk('public')->delete('ads/' . $advertisement->ad_image_vertical);
            }

            $ad_image_obj = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image1)))->stream('jpg', 100);
            Storage::disk('public')->put('ads/' . $ad_image_file_name1, $ad_image_obj);
        }

        $ad_image_file_name2 = $advertisement->ad_image_horizontal;
        if (!empty($image2)) {
            $currentDate = Carbon::now()->toDateString();

            $ad_image_file_name2 = $advertisement_name . '_' . $currentDate . '_' . uniqid() . '.jpg';

            // create category storage folder if not exist
            if (!Storage::disk('public')->exists('ads')) {
                Storage::disk('public')->makeDirectory('ads');
            }

            // delete the old category image file if exist
            if (Storage::disk('public')->exists('ads/' . $advertisement->ad_image_horizontal)) {
                Storage::disk('public')->delete('ads/' . $advertisement->ad_image_horizontal);
            }

            $ad_image_obj2 = Image::make(base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image2)))->stream('jpg', 100);
            Storage::disk('public')->put('ads/' . $ad_image_file_name2, $ad_image_obj2);
        }


        $advertisement->advertisement_name = $advertisement_name;
        $advertisement->advertisement_status = $advertisement_status;
        $advertisement->advertisement_place = $advertisement_place;
        $advertisement->advertisement_code = $advertisement_code;
        $advertisement->advertisement_position = $advertisement_position;
        $advertisement->advertisement_alignment = $advertisement_alignment;
        $advertisement->ad_image_vertical = $ad_image_file_name1;
        $advertisement->ad_image_horizontal = $ad_image_file_name2;
        $advertisement->save();

        \Session::flash('flash_message', __('advertisement.update-ad-success'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.advertisements.edit', $advertisement);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Advertisement $advertisement
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Advertisement $advertisement)
    {
        $advertisement->delete();

        \Session::flash('flash_message', __('advertisement.delete-ad-success'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.advertisements.index');
    }
}
