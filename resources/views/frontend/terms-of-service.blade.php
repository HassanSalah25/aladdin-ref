@extends('frontend.layouts.app')

@push('styles')

@if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
<link href="{{ asset('frontend/vendor/leaflet/leaflet.css') }}" rel="stylesheet" />
@endif

<link href="{{ asset('frontend/css/category.css') }}" rel="stylesheet" />

@endpush

@section('content')

<div class="mt-header-height">
    <div class="mt-header-height">
    <div class="container">
        <nav class="breadcrumb-wrapper" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{route('page.home')}}">{{__('frontend.footer.terms-of-service')}}</a></li>
         
            </ol>
        </nav>
    </div>
</div>
    
    <div class="container ">
    {!! $terms_of_service !!}
    </div>
    </div>
@endsection

  