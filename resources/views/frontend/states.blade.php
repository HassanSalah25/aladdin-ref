@extends('frontend.layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}" />
@endpush
@section('content')
<!-- bread crumb  -->
<div class="mt-header-height">
    <div class="container">
    <nav
        class="breadcrumb-wrapper"
        style="--bs-breadcrumb-divider: '>'"
        aria-label="breadcrumb"
    >
        <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ __('frontend.header.home') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">
        {{ __('frontend.search.state-or-city') }}
        </li>
        </ol>
    </nav>
    </div>
</div>

<section class="pt pb d-flex provinces provinces-list position-relative">
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
        @foreach($all_states as $state)
            <div class="col">
                <a href="{{ route('page.cities', ['state_slug' => $state->state_slug]) }}" class="provinces__items__item d-block">
                <!-- img  -->
                <img
                    src="{{ Storage::disk('public')->url('state/' . $state->state_image . '.jpg') }}"
                    alt=""
                    class="provinces__items__item__img"
                />
                <!-- info  -->
                <div class="provinces__items__item__info">
                    <h4 class="provinces__items__item__info__title">{{$state->state_name}}</h4>
                    <h5 class="provinces__items__item__info__subtitle">
                    تعرف على الأماكن
                    </h5>
                </div>
                </a>
            </div>
        @endforeach
        </div>
      </div>
    </section>
    <div class="container d-flex justify-content-center mt-lg mb-lg">
        {!! $all_states->appends(request()->query())->links() !!}
    </div>
@endsection
@push('scripts')
<script src="{{ asset('frontend/js/index.js')}}"></script>
@endpush
