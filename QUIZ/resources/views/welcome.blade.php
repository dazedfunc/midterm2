<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #C0C0C0;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
                font-size: 85px;
            }

            .title > a {
                color: #0000FF;
            }

            .links > a {
                color: #0000FF;
                padding: 0 30px;
                font-size: 15px;
                font-weight: 700;
                letter-spacing: .3rem;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">HOME</a>
                    @else
                        <a href="{{ route('login') }}">LOG IN</a>


                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    <a href="{{ route('client.test') }}">QUIZ</a>
                </div>
            </div>
        </div>
    </body>
</html>
