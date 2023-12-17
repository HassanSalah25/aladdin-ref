<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Artesaos\SEOTools\Facades\SEOMeta;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Intervention\Image\Facades\Image;

class SocialMediaController extends Controller
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
        SEOMeta::setTitle(__('seo.backend.admin.social-media.social-media', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        $all_social_medias = SocialMedia::orderBy('created_at', 'DESC')->get();

        return response()->view('backend.admin.social-media.index', compact('all_social_medias'));
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
        SEOMeta::setTitle(__('seo.backend.admin.social-media.create-social-media', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        return response()->view('backend.admin.social-media.create');
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
            'social_media_name' => 'required|unique:social_medias|max:255',
            'social_media_icon' => 'dimensions:min_width=512,min_height=512,max_width=512,max_height=512',
            'social_media_link' => 'required|url|max:255',
            'social_media_order' => 'numeric',
        ]);

        $total_social_medias = SocialMedia::all()->count();

        $social_media = new SocialMedia();
        $social_media->social_media_name = $request->social_media_name;
        $social_media->social_media_link = $request->social_media_link;
        $social_media->social_media_order = empty($request->social_media_order) ? $total_social_medias + 1 : $request->social_media_order;

        if (!empty($request->social_media_icon)) {
            $currentDate = Carbon::now()->toDateString();

            $social_media_icon = $request->file('social_media_icon')->getClientOriginalName();

            // create category storage folder if not exist
            if (!Storage::disk('public')->exists('social_media_icon')) {
                Storage::disk('public')->makeDirectory('social_media_icon');
            }
            $name_image = Storage::disk('public')->put('social_media_icon/' . $social_media_icon, $request->file('social_media_icon'));
        }

        $social_media->social_media_icon = $name_image;
        $social_media->save();

        \Session::flash('flash_message', __('alert.social-media-created'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.social-medias.edit', compact('social_media'));
    }

    /**
     * Display the specified resource.
     *
     * @param SocialMedia $socialMedia
     * @return RedirectResponse
     */
    public function show(SocialMedia $socialMedia)
    {
        return redirect()->route('admin.social-medias.edit', compact('socialMedia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param SocialMedia $socialMedia
     * @return Response
     */
    public function edit(SocialMedia $socialMedia)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.backend.admin.social-media.edit-social-media', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        return response()->view('backend.admin.social-media.edit', compact('socialMedia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param SocialMedia $socialMedia
     * @return RedirectResponse
     */
    public function update(Request $request, SocialMedia $socialMedia)
    {
        $request->validate([
            'social_media_name' => 'required|max:255',
            'social_media_icon' => 'required|dimensions:min_width=512,min_height=512,max_width=512,max_height=512',
            'social_media_link' => 'required|url|max:255',
            'social_media_order' => 'numeric',
        ]);

        $total_social_medias = SocialMedia::all()->count();

        $socialMedia->social_media_name = $request->social_media_name;
        $socialMedia->social_media_link = $request->social_media_link;

        $socialMedia->social_media_order = empty($request->social_media_order) ? $total_social_medias + 1 : $request->social_media_order;

        if (!empty($request->social_media_icon)) {
            $currentDate = Carbon::now()->toDateString();

            $social_media_icon = $request->file('social_media_icon')->getClientOriginalName();

            // create category storage folder if not exist
            if (!Storage::disk('public')->exists('social_media_icon')) {
                Storage::disk('public')->makeDirectory('social_media_icon');
            }
            $name_image = Storage::disk('public')->put('social_media_icon/' . $social_media_icon, $request->file('social_media_icon'));
        }

        $socialMedia->social_media_icon = $name_image;
        $socialMedia->save();

        \Session::flash('flash_message', __('alert.social-media-updated'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.social-medias.edit', $socialMedia);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SocialMedia $socialMedia
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();

        \Session::flash('flash_message', __('alert.social-media-deleted'));
        \Session::flash('flash_type', 'success');

        return redirect()->route('admin.social-medias.index');
    }
}
