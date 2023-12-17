@extends('frontend.layouts.app')
@section('content')
<section class="auth pt pb">
    <div class="container">
        <div class="auth__inner border">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="auth__inner__form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h3 class="auth-title">انشاء حساب كمقدم خدمة</h3>
                            <div class="form-group">
                                <label class="my-input-container">
                                    <span class="my-input-container__label">{{ __('auth.name') }} *</span>
                                    <input type="text" name="name" value="{{ old('name') }}" required class="form-control my-input-container__input" />
                                </label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="my-input-container">
                                    <span class="my-input-container__label">{{ __('auth.email-addr') }} *</span>
                                    <input value="{{ old('email') }}" required type="email" name="email" class="form-control my-input-container__input" />
                                </label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="my-input-container">
                                    <span class="my-input-container__label">رقم الهاتف *</span>
                                    <input type="text" name="phone" class="form-control my-input-container__input" />
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="my-input-container">
                                    <span class="my-input-container__label">{{ __('auth.password') }} *</span>
                                    <input type="password" name="password" required class="form-control my-input-container__input" />
                                </label>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="my-input-container">
                                    <span class="my-input-container__label">{{ __('auth.confirm-password') }} *</span>
                                    <input type="password" name="password_confirmation" required class="form-control my-input-container__input" />
                                </label>
                            </div>
                            <h5 class="auth__inner__form__divider position-relative text-center">
                                <span> او الدخول عن طريق </span>
                            </h5>
                            <div class="auth__inner__form__auth-list d-flex align-items-center justify-content-center gap-3">
                                <a href="{{ route('auth.login.facebook') }}">
                                    <img src="assets/images/facebook.png" alt="facbook" class="img-fluid img-fluid auth__inner__form__auth-list__btn" />
                                </a>
                                <a href="{{ route('auth.login.google') }}">
                                    <img src="assets/images/google.png" alt="google" class="img-fluid auth__inner__form__auth-list__btn" />
                                </a>
                                <a href="{{ route('auth.login.linkedin') }}">
                                    <img src="assets/images/linkedin.png" alt="linkedin" class="img-fluid auth__inner__form__auth-list__btn" />
                                </a>
                                <a href="{{ route('auth.login.twitter') }}">
                                    <img src="assets/images/Twitter.webp" alt="twitter" class="img-fluid auth__inner__form__auth-list__btn" />
                                </a>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="auth__inner__form__submit btn btn-primary my-btn">
                                    {{ __('auth.register') }}
                                </button>
                            </div>
                            <div class="text-center auth__inner__form__note">
                            {{ __('auth.have-an-account') }} <a href="{{route('login')}}">{{ __('auth.login') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 order-first order-lg-last">
                    <div class="auth__inner_img h-100 text-center d-flex flex-column">
                        <h2 class="fw-bold auth__inner__img__title">
                            انشئ حساب كمقدم الخدمة الان و ابدأ استخدام موقعنا
                            <span>مجاناً</span> بكل سهولة
                        </h2>
                        <img src="assets/images/Artificial Intelligence.png" alt="auth" class="img-fluid mt-auto" />
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