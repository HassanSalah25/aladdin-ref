@extends('frontend.layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css') }}"/>
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
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{route('page.states')}}">
                        {{ __('frontend.search.state-or-city') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $state->state_name }}  ( {{$all_cities->total()}} )
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="pt pb d-flex provinces provinces-list position-relative">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3">
                @foreach($all_cities as $city)
                    <div class="col">
                        @if($city->city_image)
                            <a href="{{ route('page.city', ['state_slug' => $city->state->state_slug,'city_slug' => $city->city_slug]) }}"
                               class="provinces__items__item d-block">
                                <!-- img  -->
                                <img
                                    src="{{ Storage::disk('public')->url('state/' . $city->city_image . '.jpg') }}"
                                    alt=""
                                    class="provinces__items__item__img"
                                />
                                <!-- info  -->
                                <div class="provinces__items__item__info">
                                    <h4 class="provinces__items__item__info__title">{{$city->city_name}}</h4>
                                    <h5 class="provinces__items__item__info__subtitle">
                                        تعرف على الأماكن
                                    </h5>
                                </div>
                            </a>
                        @else
                            <a
                                href="{{ route('page.city', ['state_slug' => $city->state->state_slug,'city_slug' => $city->city_slug]) }}"
                               >
                                <!-- info  -->
                                <div class="col d-flex justify-content-center"
                                     style="display:table !important">
                                    <a
                                    href="{{route('page.city',['state_slug' => $city->state->state_slug,'city_slug'=>$city->city_slug])}}"

                                        class="registeration__categories__item" style="display: table-cell;
padding: 1.2rem;background-color: #9fc1d7; border-radius: 20px;color:#000;">
                                        {{$city->city_name}} </a>
                                </div>
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="container d-flex justify-content-center mt-lg mb-lg">
        {!! $all_cities->appends(request()->query())->links() !!}
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('frontend/js/index.js')}}"></script>
@endpush
