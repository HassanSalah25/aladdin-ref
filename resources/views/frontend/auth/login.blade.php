@extends('frontend.layouts.app')
@section('content')
<section class="auth auth-login pt pb">
    <div class="container">
        <div class="auth__inner border">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="auth__inner__form">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <h3 class="auth-title">{{ __('auth.login') }}</h3>
                            <div class="form-group">
                                <label class="my-input-container">
                                    <span class="my-input-container__label">{{ __('auth.email-addr') }} *</span>
                                    <input type="email" name="email" class="form-control my-input-container__input" />

                                </label>
                                @error('email')
                                <span class="invalid-feedback" style="display:block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="my-input-container">
                                    <span class="my-input-container__label">{{ __('auth.password') }} *</span>
                                    <input type="password" class="form-control my-input-container__input" name="password" />
                                </label>
                                @error('password')
                                <span class="invalid-feedback" style="display:block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
{{--                            <h5 class="auth__inner__form__divider position-relative text-center">--}}
{{--                                <span>{{ __('social_login.social-login') }}</span>--}}
{{--                            </h5>--}}
{{--                            <div class="auth__inner__form__auth-list d-flex align-items-center justify-content-center gap-3">--}}
{{--                                <a href="{{ route('auth.login.facebook') }}">--}}
{{--                                    <img src="assets/images/facebook.png" alt="facbook" class="img-fluid img-fluid auth__inner__form__auth-list__btn" />--}}
{{--                                </a>--}}
{{--                                <a href="{{ route('auth.login.google') }}">--}}
{{--                                    <img src="assets/images/google.png" alt="google" class="img-fluid auth__inner__form__auth-list__btn" />--}}
{{--                                </a>--}}
{{--                                <a href="{{ route('auth.login.linkedin') }}">--}}
{{--                                    <img src="assets/images/linkedin.png" alt="linkedin" class="img-fluid auth__inner__form__auth-list__btn" />--}}
{{--                                </a>--}}
{{--                                <a href="{{ route('auth.login.twitter') }}">--}}
{{--                                    <img src="assets/images/Twitter.webp" alt="twitter" class="img-fluid auth__inner__form__auth-list__btn" />--}}
{{--                                </a>   --}}
{{--                            </div>--}}

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="auth__inner__form__submit btn btn-primary my-btn">
                                {{ __('auth.login') }}
                                </button>
                            </div>
                            {{--<div class="text-center auth__inner__form__note">
                                {{ __('auth.no-account-yet') }} <a href="{{ route('register') }}">{{ __('auth.register') }}</a>
                            </div>--}}
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 order-first order-lg-last">
                    <div class="auth__inner_img h-100 text-center d-flex flex-column align-items-center">
                        <h2 class="fw-bold auth__inner__img__title">
                        {{ __('auth.enjoy-our-experince') }} <span>{{ __('auth.for-free') }}</span>
                        </h2>
                        <img src="assets/images/Fingerprint.png" alt="auth" class="img-fluid mt-auto" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@prepend('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/auth.css') }}" />
@endprepend