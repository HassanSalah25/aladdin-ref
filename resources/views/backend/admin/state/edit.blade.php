@extends('backend.admin.layouts.app')

@section('styles')
<link href="{{ asset('backend/vendor/croppie/croppie.css') }}" rel="stylesheet" />
@endsection

@section('content')

<div class="row justify-content-between">
    <div class="col-9">
        <h1 class="h3 mb-2 text-gray-800">{{ __('backend.state.edit-state') }}</h1>
        <p class="mb-4">{{ __('backend.state.edit-state-desc') }}</p>
    </div>
    <div class="col-3 text-right">
        <a href="{{ route('admin.states.index') }}" class="btn btn-info btn-icon-split">
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
                <form method="POST" action="{{ route('admin.states.update', $state) }}" class="">
                    @csrf
                    @method('PUT')
                    <div class="row form-group">
                        <div class="col-md-12">
                            Country: {{ $state->country->country_name }}
                            <input id="country_id" type="hidden" class="form-control" name="country_id" value="{{ $state->country->id }}">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="state_name" class="text-black">{{ __('backend.state.state-name') }}</label>
                            <input id="state_name" type="text" class="form-control @error('state_name') is-invalid @enderror" name="state_name" value="{{ old('state_name') ? old('state_name') : $state->state_name }}" autofocus>
                            @error('state_name')
                            <span class="invalid-tooltip">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="state_abbr">{{ __('backend.state.state-abbr') }}</label>
                            <input id="state_abbr" type="text" class="form-control @error('state_abbr') is-invalid @enderror" name="state_abbr" value="{{ old('state_abbr') ? old('state_abbr') : $state->state_abbr }}">
                            @error('state_abbr')
                            <span class="invalid-tooltip">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="state_slug">{{ __('setting_language.location.url-slug') }}</label>
                            <input id="state_slug" type="text" class="form-control @error('state_slug') is-invalid @enderror" name="state_slug" value="{{ old('state_slug') ? old('state_slug') : $state->state_slug }}">
                            <small class="form-text text-muted">
                                {{ __('setting_language.location.url-slug-help') }}
                            </small>
                            @error('state_slug')
                            <span class="invalid-tooltip">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-md-6">
                            <span class="text-lg text-gray-800">{{ __('backend.item.feature-image') }}</span>
                            <small class="form-text text-muted">
                                {{ __('backend.item.feature-image-help') }}
                            </small>
                            @error('feature_image')
                            <span class="invalid-tooltip">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="row mt-3">
                                <div class="col-8">

                                    <button id="upload_image" type="button" class="btn btn-primary btn-block mb-2">{{ __('backend.item.select-image') }}</button>
                                    @if(empty($state->state_image))
                                    <img id="image_preview" src="{{ asset('backend/images/placeholder/full_item_feature_image.webp') }}" class="img-responsive">
                                    @else
                                    <img id="image_preview" src="{{ Storage::disk('public')->url('state/'. $state->state_image .'.jpg') }}" class="img-responsive rounded">
                                    @endif
                                    <input id="feature_image" type="hidden" name="feature_image">
                                </div>
                            </div>

                            <div class="row mt-1">
                                <div class="col-8">
                                    <a class="btn btn-danger btn-block text-white" id="delete_feature_image_button">
                                        <i class="fas fa-trash-alt"></i>
                                        {{ __('role_permission.item.delete-feature-image') }}
                                    </a>
                                </div>
                            </div>

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
                                           id="pageTitle" name="meta_title[en]" value="{{$state->getTranslation('meta_title','en')}}">
                                </div>


                                <div class="col-md-6">
                                    <label for="metaDescription">{{__('backend.meta_description')}}</label>
                                    <textarea id="meta_description" name="meta_description[en]"
                                              rows="4" class="form-control">{{$state->getTranslation('meta_description','en')}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="metaKeywords">{{__('backend.meta_keywords')}}</label>
                                    <input type="text" id="meta_keywords"
                                           name="meta_keywords[en]" value="{{$state->getTranslation('meta_keywords','en')}}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="alt_image">{{__('backend.alt_image')}}</label>
                                    <input type="text" id="alt_image"
                                           name="alt_image[en]" value="{{$state->getTranslation('alt_image','en')}}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="canonical">{{__('backend.canonical')}}</label>
                                    <input type="url" id="canonical"
                                           name="canonical[en]" value="{{$state->getTranslation('canonical','en')}}" class="form-control">
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">


                                <div class="col-md-6">
                                    <label for="pageTitle">{{__('backend.meta_title')}}</label>
                                    <input type="text" class="form-control"
                                           id="meta_title" name="meta_title[ar]" value="{{$state->getTranslation('meta_title','ar')}}">
                                </div>


                                <div class="col-md-6">
                                    <label for="metaDescription">{{__('backend.meta_description')}}</label>
                                    <textarea id="meta_description" name="meta_description[ar]"
                                              rows="4" class="form-control">{{$state->getTranslation('meta_description','ar')}}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="metaKeywords">{{__('backend.meta_keywords')}}</label>
                                    <input type="text" id="meta_keywords"
                                           name="meta_keywords[ar]" value="{{$state->getTranslation('meta_keywords','ar')}}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="alt_image">{{__('backend.alt_image')}}</label>
                                    <input type="text" id="alt_image"
                                           name="alt_image[ar]" value="{{$state->getTranslation('alt_image','ar')}}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="canonical">{{__('backend.canonical')}}</label>
                                    <input type="url" id="canonical"
                                           name="canonical[ar]" value="{{$state->getTranslation('canonical','ar')}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group justify-content-between">
                        <div class="col-8">
                            <button type="submit" class="btn btn-success text-white">
                                Update
                            </button>
                        </div>
                        <div class="col-4 text-right">
                            <a class="text-danger" href="#" data-toggle="modal" data-target="#deleteModal">
                                Delete
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
                <p>{{ __('country_delete.delete-state-warning') }}</p>
                <p>{{ __('backend.shared.delete-message', ['record_type' => __('backend.shared.state'), 'record_name' => $state->state_name]) }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('backend.shared.cancel') }}</button>
                <form action="{{ route('admin.states.destroy', $state) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">{{ __('backend.shared.delete') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal - feature image -->
<div class="modal fade" id="image-crop-modal" tabindex="-1" role="dialog" aria-labelledby="image-crop-modal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('backend.item.crop-feature-image') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="image_demo"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="custom-file">
                            <input id="upload_image_input" type="file" class="custom-file-input">
                            <label class="custom-file-label" for="upload_image_input">{{ __('backend.item.choose-image') }}</label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('backend.shared.cancel') }}</button>
                <button id="crop_image" type="button" class="btn btn-primary">{{ __('backend.item.crop-image') }}</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script src="{{ asset('backend/vendor/croppie/croppie.js') }}"></script>

<script>
    $(document).ready(function() {

        $('#upload_image').on('click', function() {

            $('#image-crop-modal').modal('show');
        });
        var image_crop = null;

        var window_height = $(window).height();
        var window_width = $(window).width();
        var viewport_height = 0;
        var viewport_width = 0;

        if (window_width >= 800) {
            viewport_width = 800;
            viewport_height = 687;
        } else {
            viewport_width = window_width * 0.8;
            viewport_height = (viewport_width * 687) / 800;
        }

        $('#upload_image_input').on('change', function() {

            if (!image_crop) {
                image_crop = $('#image_demo').croppie({
                    enableExif: true,
                    mouseWheelZoom: false,
                    viewport: {
                        width: viewport_width,
                        height: viewport_height,
                        type: 'square',
                    },
                    boundary: {
                        width: viewport_width + 5,
                        height: viewport_width + 5,
                    }
                });

                $('#image-crop-modal .modal-dialog').css({
                    'max-width': '100%'
                });
            }

            var reader = new FileReader();

            reader.onload = function(event) {

                image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });

            };
            reader.readAsDataURL(this.files[0]);
        });

        $('#crop_image').on("click", function(event) {

            image_crop.croppie('result', {
                type: 'base64',
                size: 'viewport'
            }).then(function(response) {
                $('#feature_image').val(response);
                $('#image_preview').attr("src", response);
            });

            $('#image-crop-modal').modal('hide')
        });
        $('#delete_feature_image_button').on('click', function(){

            $('#delete_feature_image_button').attr("disabled", true);

            var ajax_url = '/ajax/state/image/delete/' + '{{ $state->id }}';

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: ajax_url,
                method: 'post',
                data: {
                },
                success: function(result){
                    console.log(result);

                    $('#image_preview').attr("src", "{{ asset('backend/images/placeholder/full_item_feature_image.webp') }}");
                    $('#feature_image').val("");

                    $('#delete_feature_image_button').attr("disabled", false);
                }});
            });

    });
</script>
@endsection
