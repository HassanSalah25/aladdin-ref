<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&family=Noto+Sans+Arabic:wght@400;500;700&display=swap"
        rel="stylesheet"/>
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css"/>
    <link rel="preload" onload="this.rel='stylesheet'"
          href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}" as="style">
    <link href="{{ asset('frontend/js/select2/select2.min.css') }}" rel="stylesheet"/>
    <!-- animation css  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
    <!-- map -> css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/leaflet.css') }}"/>

    <!-- swiper  CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    @stack('preload-bootstrap')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- my css  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"/>
</head>
<body>
    <div class="container">
        <p> Welcome Mr {{$name}} !</p>
        <p> Please Click <a href="{{route('emails.verify',$order_id)}}">here</a> To Verify Your Email !</p>
    </div>

</body>
</html>
