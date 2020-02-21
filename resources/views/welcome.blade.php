<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'GEM GALAXY') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .body-bg {
                /*background: black;*/
                background-image: linear-gradient(#fff,#eee);
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .top-nav-btn {
                color:#404040 !important;font-size: 14px;border: 1px solid #404040;padding-top:10px !important;padding-bottom: 10px !important;
                /*background-image: linear-gradient(#ece29a, #dfc16f);*/
            }
            .top-nav-btn:hover {
                background-image: linear-gradient(#26A69A, #00897B);
                border: 1px solid #00897B;
                color: #fff !important;
            }
        </style>
    </head>
    <body class="body-bg">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('admin.home') }}" class="top-nav-btn" >Home</a>
                    @else
                        <a href="{{ route('login') }}" class="top-nav-btn">Login</a>

                        
                    @endauth
                </div>
             
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <!-- GEM GALAXY -->
                    <img src="{{asset('new/main_logo_t.png')}}" style="width: 100%;">

                </div>
                <!-- <div style="width: 100%;"> -->
                    <!-- <img src="{{asset('images/new_logo.png')}}"> -->
                <!-- </div> -->

            </div>
        </div>
    </body>
</html>
