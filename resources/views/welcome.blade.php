<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>اﻻرشيف اﻻلكترونى</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('front-end/css/katniss.css') }}" rel="stylesheet">


    <style>
        .kt-headpanel {
            right: 0 !important;
        }

        .col-md-offset-3 {
            margin-left: 25%;
            margin-top: 100px;
        }

    </style>
</head>

<body>


    <div class="flex-center position-ref full-height">


        <div class="kt-headpanel">
            <div class="kt-headpanel-left">

            </div><!-- kt-headpanel-left -->


        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card pd-40 tx-center">
                    <div class="d-flex justify-content-center mg-b-30">
                        <img src="{{ asset('front-end/img/icon1.svg') }}" class="wd-100" alt="">
                    </div>
                    <h6 class="tx-md-20 tx-inverse mg-b-20">Document Management</h6>
                    <p class="tx-13">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>

                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}" class="btn btn-default btn-block">الصفحة الرئيسية</a>
                                {{-- <a href="{{ url('/home') }}">Home</a> --}}
                            @else
                                <a href="{{ route('login') }}" class="btn btn-default btn-block">تسجيل دخول</a>
                                {{-- <a href="{{ route('login') }}">Login</a> --}}



                                <a href="#" class="btn btn-default btn-block">تعليمات اﻻستخدام</a>
                                {{-- <a href="{{ route('register') }}">Register</a> --}}

                            @endauth
                        </div>
                    @endif




                </div><!-- card -->

            </div>


        </div>
</body>

</html>
