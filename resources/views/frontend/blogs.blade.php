    @extends('frontend.layouts.app')

    @push('styles')

        @if($site_global_settings->setting_site_map == \App\Models\Setting::SITE_MAP_OPEN_STREET_MAP)
            <link href="{{ asset('frontend/vendor/leaflet/leaflet.css') }}" rel="stylesheet"/>
        @endif

        <link href="{{ asset('frontend/css/category.css') }}" rel="stylesheet"/>
        <!-- my css  -->
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="{{asset('frontend/css/blogs.css')}}"/>

    @endpush

    @section('content')
        <!-- **************************            ******************************  -->
        <!-- ************************** end header ******************************  -->
        <!-- **************************            ******************************  -->

        <!-- bread crumb  -->
        <div class="mt-header-height">
            <div class="container">
                <nav
                    class="breadcrumb-wrapper"
                    style="--bs-breadcrumb-divider: '>'"
                    aria-label="breadcrumb"
                >
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('frontend.header.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('page.blogs')}}">{{__('frontend.footer.blogs')}}</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <section class="blogs pb">
            <div class="container row">
                @foreach($all_blogs as $blog)

                    <div class="card m-3" style="width: 18rem;">
                        <img class="card-img-top mt-2" src="{{asset('storage/blog/'.$blog->image)}}" alt="{{$blog->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$blog->title}}</h5>
                            <p class="card-text">{!! str_limit(strip_tags($blog->content,120)) !!}</p>
                            <a class="btn btn-primary" href="{{route('page.blog', $blog->blog_slug)}}">{{__('frontend.contact.more')}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$all_blogs->links()}}
        </section>

    @endsection

    @push('scripts')
        <script src="{{ asset('frontend/vendor/goodshare/goodshare.min.js') }}"></script>

    @endpush
