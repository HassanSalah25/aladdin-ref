@extends('backend.admin.layouts.app')

@section('styles')
    <!-- Image Crop Css -->
    <link href="{{ asset('backend/vendor/croppie/croppie.css') }}" rel="stylesheet" />

@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('backend.testimonial.add-testimonial') }}</h1>
            <p class="mb-4">{{ __('backend.testimonial.add-testimonial-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.testimonials.index') }}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-backspace"></i>
                </span>
                <span class="text">{{ __('backend.shared.back') }}</span>
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-6">
                    <form method="POST" action="{{ route('admin.testimonials.store') }}" class="">
                        @csrf

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="testimonial_name" class="text-black">{{ __('backend.testimonial.name') }}</label>
                                <input id="testimonial_name" type="text" class="form-control @error('testimonial_name') is-invalid @enderror" name="testimonial_name" value="{{ old('testimonial_name') }}" autofocus>
                                @error('testimonial_name')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="testimonial_company">{{ __('backend.testimonial.company') }}</label>
                                <input id="testimonial_company" type="text" class="form-control @error('testimonial_company') is-invalid @enderror" name="testimonial_company" value="{{ old('testimonial_company') }}">
                                @error('testimonial_company')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="testimonial_job_title">{{ __('backend.testimonial.job-title') }}</label>
                                <input id="testimonial_job_title" type="text" class="form-control @error('testimonial_job_title') is-invalid @enderror" name="testimonial_job_title" value="{{ old('testimonial_job_title') }}">
                                @error('testimonial_job_title')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="testimonial_description">{{ __('backend.testimonial.description') }}</label>

                                <textarea rows="4" id="testimonial_description" type="text" class="form-control @error('testimonial_description') is-invalid @enderror" name="testimonial_description">{{ old('testimonial_description') }}</textarea>
                                @error('testimonial_description')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-6">
                                <span class="text-lg text-gray-800">{{ __('backend.testimonial.profile-image') }}</span>
                                <small class="form-text text-muted">
                                    {{ __('backend.testimonial.profile-image-help') }}
                                </small>
                                @error('testimonial_image')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="row mt-3">
                                    <div class="col-8">
                                        <button id="upload_image" type="button" class="btn btn-primary btn-block mb-2">{{ __('backend.testimonial.select-image') }}</button>
                                        <img id="image_preview" src="{{ asset('backend/images/placeholder/profile-' . intval(rand(0,9)) . '.webp') }}" class="img-responsive">
                                        <input id="feature_image" type="hidden" name="testimonial_image">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success py-2 px-4 text-white">
                                    {{ __('backend.shared.create') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

