<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Setting;
use App\Models\Theme;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function show(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start SEO
         */
        SEOMeta::setTitle(__('seo.auth.email-verification', ['site_name' => empty($settings->setting_site_name) ? config('app.name', 'Laravel') : $settings->setting_site_name]));
        SEOMeta::setDescription('');
        SEOMeta::setCanonical(URL::current());
        SEOMeta::addKeyword($settings->setting_site_seo_home_keywords);
        /**
         * End SEO
         */

        /**
         * Start initial blade view file path
         */
        $theme_view_path = Theme::find($settings->setting_site_active_theme_id);
        $theme_view_path = $theme_view_path->getViewPath();
        /**
         * End initial blade view file path
         */

        return $request->user()->hasVerifiedEmail()
            ? redirect($this->redirectPath())
            : view($theme_view_path . 'auth.verify');
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        $settings = app('site_global_settings');

        /**
         * Start initial SMTP settings
         */
        if($settings->settings_site_smtp_enabled == Setting::SITE_SMTP_ENABLED)
        {
            // config SMTP
            config_smtp(
                $settings->settings_site_smtp_sender_name,
                $settings->settings_site_smtp_sender_email,
                $settings->settings_site_smtp_host,
                $settings->settings_site_smtp_port,
                $settings->settings_site_smtp_encryption,
                $settings->settings_site_smtp_username,
                $settings->settings_site_smtp_password
            );
        }
        /**
         * End initial SMTP settings
         */

        if(!empty($settings->setting_site_name))
        {
            // set up APP_NAME
            config([
                'app.name' => $settings->setting_site_name,
            ]);
        }

        if ($request->user()->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        /**
         * Use try catch to avoid the 500 internal server error due to the SMTP email
         * may not able to send. The purpose is to improve the user experience.
         */
        try
        {
            $request->user()->sendEmailVerificationNotification();
        }
        catch (\Exception $e)
        {
            Log::error($e->getMessage() . "\n" . $e->getTraceAsString());

            \Session::flash('flash_message', __('theme_alaadin.email.alert.sending-problem'));
            \Session::flash('flash_type', 'danger');

            return back()->with('resent', false);
        }

        return back()->with('resent', true);
    }
}
