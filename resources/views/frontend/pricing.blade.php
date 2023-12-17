@extends('frontend.layouts.app')

@push('styles')

    @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
        <link href="{{ asset('frontend/vendor/leaflet/leaflet.css') }}" rel="stylesheet"/>
    @endif

    <link href="{{ asset('frontend/css/category.css') }}" rel="stylesheet"/>

@endpush

@section('content')

    <div class="mt-header-height">
        <div class="mt-header-height">
            <div class="container">
                <nav class="breadcrumb-wrapper" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{route('page.home')}}">{{__('frontend.plan.pricing')}}</a></li>

                    </ol>
                </nav>
            </div>
        </div>

        <div class="container m-5">
            <div class="row">
                @foreach($plans as $plan)
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ app()->getLocale() == 'en' ? $plan->plan_name : $plan->plan_name_ar}}</h5>
                                {!! app()->getLocale() == 'en' ? $plan->plan_description : $plan->plan_description_ar !!}
                            </div>
                            <ul class="list-group list-group-flush p-0 text-center">
                                @foreach($plan->features_value as $feature)
                                    <li class="list-group-item ">
                                        {{app()->getLocale() == 'en' ? $feature->feature->name : $feature->feature->name_ar}}
                                       @if($feature->value) : {{ $feature->value }} @endif
                                        @if($feature->feature->type  != 4 && $feature->feature->type != 3)
                                        : {{ $feature->feature->getType() }}
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            <div class="card-body text-center">
                                <a type="button" href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">{{__('frontend.plan.subscribe')}}</a>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong"
                             tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog w-50" role="document">
                                <form method="POST" action="{{route('subscripe')}}" class="modal-content">
                                    @csrf
                                    <input type="hidden" name="plan_id" value="{{$plan->id}}">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">{{ app()->getLocale() == 'en' ? $plan->plan_name : $plan->plan_name_ar}}</h5>
                                        <button type="button" class="close btn" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{__('frontend.pricing.confirm')}}
                                        <div class="form-group mt-5">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label">{{ __('frontend.contact.phone')}}</span>
                                                <input type="text" name="phone" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label">{{ __('frontend.item.name')}}</span>
                                                <input type="text" name="name" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label">{{ __('اسم الشركة')}}</span>
                                                <input type="text" name="activity_name" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label">{{ __('رقم الشركة')}}</span>
                                                <input type="text" name="activity_phone" class="form-control my-input-container__input" required />
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label">{{ __('عنوان الشركة')}}</span>
                                                <input type="text" name="activity_address" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label">{{ __('ايميل الشركة')}}</span>
                                                <input type="text" name="activity_email" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label">{{ __('وصف الشركة')}}</span>
                                                <input type="text" name="activity_description" class="form-control my-input-container__input" />
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="my-input-container">
                                                <span class="my-input-container__label">{{ __('النشاط')}}</span>
                                                <input type="text" name="activity" class="form-control my-input-container__input" required/>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs--dismiss="modal">{{__('frontend.pricing.cancel')}}</button>
                                        <button type="submit" class="btn btn-primary">{{__('frontend.pricing.save')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

