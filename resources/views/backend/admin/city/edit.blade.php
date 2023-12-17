@extends('backend.admin.layouts.app')

@section('styles')
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('backend.city.edit-city') }}</h1>
            <p class="mb-4">{{ __('backend.city.edit-city-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.cities.index') }}" class="btn btn-info btn-icon-split">
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
                <div class="col-12 col-md-12 col-lg-12">
                    <form method="POST" action="{{ route('admin.cities.update', $city) }}" class="">
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                            <div class="col-md-12">
                                {{ __('backend.city.country') }}: {{ $city->state->country->country_name }}<br>
                                {{ __('backend.city.state') }}: {{ $city->state->state_name }}
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="city_name" class="text-black">{{ __('backend.city.city-name') }}</label>
                                <input id="city_name" type="text" class="form-control @error('city_name') is-invalid @enderror" name="city_name" value="{{ old('city_name') ? old('city_name') : $city->city_name }}" autofocus>
                                @error('city_name')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="city_slug" class="text-black">{{ __('setting_language.location.url-slug') }}</label>
                                <input id="city_slug" type="text" class="form-control @error('city_slug') is-invalid @enderror" name="city_slug" value="{{ old('city_slug') ? old('city_slug') : $city->city_slug }}">
                                <small class="form-text text-muted">
                                    {{ __('setting_language.location.url-slug-help') }}
                                </small>
                                @error('city_slug')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="city_lat">{{ __('backend.city.city-lat') }}</label>
                                <input id="city_lat" type="text" class="form-control @error('city_lat') is-invalid @enderror" name="city_lat" value="{{ old('city_lat') ? old('city_lat') : $city->city_lat }}">
                                @error('city_lat')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="city_lng">{{ __('backend.city.city-lng') }}</label>
                                <input id="city_lng" type="text" class="form-control @error('city_lng') is-invalid @enderror" name="city_lng" value="{{ old('city_lng') ? old('city_lng') : $city->city_lng }}">
                                @error('city_lng')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row border-left-primary mb-4">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active col-md-6" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">{{__('backend.language_en')}}
                                    </button>
                                    <button class="nav-link col-md-6" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile"
                                            aria-selected="false">{{__('backend.language_ar')}}
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">


                                    <div class="col-md-6">
                                        <label for="pageTitle">{{__('backend.meta_title')}}</label>
                                        <input type="text" class="form-control"
                                               id="pageTitle" name="meta_title[en]" value="{{$city->getTranslation('meta_title','en')}}">
                                    </div>


                                    <div class="col-md-6">
                                        <label for="metaDescription">{{__('backend.meta_description')}}</label>
                                        <textarea id="meta_description" name="meta_description[en]"
                                                  rows="4" class="form-control">{{$city->getTranslation('meta_description','en')}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="metaKeywords">{{__('backend.meta_keywords')}}</label>
                                        <input type="text" id="meta_keywords"
                                               name="meta_keywords[en]" value="{{$city->getTranslation('meta_keywords','en')}}" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="alt_image">{{__('backend.alt_image')}}</label>
                                        <input type="text" id="alt_image"
                                               name="alt_image[en]" value="{{$city->getTranslation('alt_image','en')}}" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="canonical">{{__('backend.canonical')}}</label>
                                        <input type="url" id="canonical"
                                               name="canonical[en]" value="{{$city->getTranslation('canonical','en')}}" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade show" id="nav-profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">


                                    <div class="col-md-6">
                                        <label for="pageTitle">{{__('backend.meta_title')}}</label>
                                        <input type="text" class="form-control"
                                               id="meta_title" name="meta_title[ar]" value="{{$city->getTranslation('meta_title','ar')}}">
                                    </div>


                                    <div class="col-md-6">
                                        <label for="metaDescription">{{__('backend.meta_description')}}</label>
                                        <textarea id="meta_description" name="meta_description[ar]"
                                                  rows="4" class="form-control">{{$city->getTranslation('meta_description','ar')}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="metaKeywords">{{__('backend.meta_keywords')}}</label>
                                        <input type="text" id="meta_keywords"
                                               name="meta_keywords[ar]" value="{{$city->getTranslation('meta_keywords','ar')}}" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="alt_image">{{__('backend.alt_image')}}</label>
                                        <input type="text" id="alt_image"
                                               name="alt_image[ar]" value="{{$city->getTranslation('alt_image','ar')}}" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="canonical">{{__('backend.canonical')}}</label>
                                        <input type="url" id="canonical"
                                               name="canonical[ar]" value="{{$city->getTranslation('canonical','ar')}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group justify-content-between">
                            <div class="col-8">
                                <button type="submit" class="btn btn-success text-white">
                                    {{ __('backend.shared.update') }}
                                </button>
                            </div>
                            <div class="col-4 text-right">
                                <a class="text-danger" href="#" data-toggle="modal" data-target="#deleteModal">
                                    {{ __('backend.shared.delete') }}
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ __('backend.shared.delete-confirm') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ __('country_delete.delete-city-warning') }}</p>
                    <p>{{ __('backend.shared.delete-message', ['record_type' => __('backend.shared.city'), 'record_name' => $city->city_name]) }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('backend.shared.cancel') }}</button>
                    <form action="{{ route('admin.cities.destroy', $city) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('backend.shared.delete') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection
