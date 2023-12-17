@extends('frontend.layouts.app')
@push('styles')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap");

        .packages {
            margin: 20px;

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
            margin: 10%;
            font-size: 1.5em;
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
            align-items: flex-start;
            justify-content: center;
            flex-wrap: nowrap;
            margin-top: 10%;
            flex-direction: row;
        }
        .content{
            margin-top: 15%;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

    </style>
@endpush
@section('content')
    <div class="container content" style="margin-top: 15%;">
        <div class="package-container">
            @foreach($packages as $package)
                <div class="packages col-md-3">
                    <h1>{{$package->package_name}}</h1>
                    <ul class="list">
                        <li class="">اسم النشاط : {{$package->name}}</li>
                        <li class="">عنوان النشاط : {{$package->address??"لا"}}</li>
                        <li class="">التليفونات : {{$package->phones??"لا"}}</li>
                        <li class="">البريد الإلكتروني : {{$package->show_emails_address??"لا"}}
                        <li class="">المجال : {{$package->category}}</li>
                        <li class="">صور : {{$package->images}}</li>
                        <li class="">وسائل التواصل الاجتماعي : {{$package->social_media}}</li>
                        <li class="">نبذة عن الشركة : {{$package->about_you??"لا"}}</li>
                        @if($loop->iteration > 1)
                            <li class="">بوستات : {{$package->posts??"لا"}}</li>
                            <li class="">تهيئة صفحات الموقع الالكتروني لمحرك البحث جوجل
                                : {{$package->seo_pages??"لا"}}</li>
                           {{-- @if($loop->iteration > 2)
                                <li class="">علامة الواتس اب : {{$package->wa??"لا"}}</li>
                                <li class="">موقع إلكتروني : {{$package->website??"لا"}}</li>
                                <li class="">سنة التأسيس : {{$package->year_established??"لا"}}</li>
                                <li class="">فيديو : {{$package->videos??"لا"}}</li>
                                <li class="">طرق الدفع : {{$package->payment??"لا"}}</li>
                                <li class="">لوجو الشركة : {{$package->logo??"لا"}}</li>
                                <li class="">طلب عرض سعر او تقييم طبي : {{$package->rate??"لا"}}</li>
                                <li class="">أيام / ساعات العمل : {{$package->working_days_hours??"لا"}}</li>
                                <li class="">نرشحك لعملاء اخرين علي الموقع : {{$package->reco_site??"لا"}}</li>
                                <li class="">نرشحك لعملاء اخرين علي الموبايل : {{$package->reco_phone??"لا"}}</li>
                            @endif--}}
                        @endif
                    </ul>
                </div>
            @endforeach

        </div>
        <a href="{{route('page.subscripe','paid')}}" class="button button2">اشترك الآن</a>

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