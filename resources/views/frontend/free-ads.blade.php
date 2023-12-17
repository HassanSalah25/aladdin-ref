    @extends('frontend.layouts.app')
@push('styles')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap");

        .packages {
            margin: 20px;
            width: 56%;
            padding-bottom: 1.5em;
            height: 100%;
            background-color: #1e2321;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 19px 38px rgba(30, 35, 33, 1), 0 15px 12px rgba(30, 35, 33, 0.2);
            flex-wrap: wrap;
            color: #f4f4f4;
        }

        h1,
        h2 {
            font-size: 2.2em;
        }

        .list li {
            font-size: 20px;
            list-style: none;
            border-bottom: 1px solid #f4f4f4;
            padding-inline-start: 0;
            border-width: 1px;
            padding: 10px;
        }

        .first {
            margin-top: 40px;
            border-top: 1px solid #f4f4f4;
        }

        .list {
            width: 80%;
        }

        ol,
        ul {
            padding: 0;
        }

        .top {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input,
        label {
            display: inline-block;
            vertical-align: middle;
            margin: 10px 0;
        }

        .button {
            padding: 10px 30px;
            text-decoration: none;
            font-size: 1.4em;
            margin: 15px 15px;
            border-radius: 50px;
            color: #f4f4f4;
            transition: all 0.3s ease 0s;
        }

        .button:hover {
            transform: scale(1.2);
        }

        .button1 {
            background-color: #00cc99;
            box-shadow: 0 0 10px 0 #00cc99 inset, 0 0 20px 2px #00cc99;
        }

        .button2 {
            background-color: #ff007c;
            box-shadow: 0 0 10px 0 #ff007c inset, 0 0 20px 2px #ff007c;
        }

        .button3 {
            background-color: #ffae42;
            box-shadow: 0 0 10px 0 #ffae42 inset, 0 0 20px 2px #ffae42;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #1e2321;
            -webkit-transition: 0.4s;

            box-shadow: 2px 6px 25px #1e2321;
            transform: translate(0px, 0px);
            transition: 0.6s ease transform, 0.6s box-shadow;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: 0.4s;
            transition: 0.4s;
        }

        input:checked + .slider {
            background-color: #50bfe6;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #50bfe6;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .package-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 10%;
        }

    </style>
@endpush
@section('content')
    <div class="container" style="margin-top: 15%;">
        <div class="package-container" >
            @php
                $package = \App\Models\Package::orderBy('id','DESC')->first();
            @endphp
            <div class="packages">
                <h1>{{$package->package_name??"لا"}}</h1>
                <ul class="list">
                    <li class="">اسم النشاط التجاري : {{$package->name}}</li>
                    <li class="">عنوان النشاط : {{$package->address}}</li>
                    <li class="">التليفونات : {{$package->phones}}</li>
                    <li class="">بريد الالكتروني  : {{$package->show_emails_address}}</li>
                    <li class="">لوجو : {{$package->logo}}</li>
                    <li class="">المجال : {{$package->category}}</li>
                    <li class="">نبذة عن الشركة  : {{$package->about_you}}</li>
                   </ul>
                <a href="{{route('page.subscripe','free')}}" class="button button2">اشترك الآن</a>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        function check() {
            var checkBox = document.getElementById("checbox");
            var text1 = document.getElementsByClassName("text1");
            var text2 = document.getElementsByClassName("text2");

            for (var i = 0; i < text1.length; i++) {
                if (checkBox.checked == true) {
                    text1[i].style.display = "block";
                    text2[i].style.display = "none";
                } else if (checkBox.checked == false) {
                    text1[i].style.display = "none";
                    text2[i].style.display = "block";
                }
            }
        }
        check();

    </script>
    @endpush