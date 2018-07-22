<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aqeeb Imtiaz Harun</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img {
                border-radius: 50%;
            }
            /* #ppimg p {
                opacity: 0;
                font-size: 21px;
                margin-top: 25px;
                text-align: center;
            } */
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div id="content" class="content">
                <div><img src="img/pp.jpg" id="ppimg" alt="Avatar" height="200" width="200"></div>
                <br></br>
                <strong>Hi! I'm</strong>
                <div class="title m-b-md">
                    Aqeeb Imtiaz Harun
                </div>

                <div class="links">
                    <strong>Fresh graduate in Software Engineering and a Web developer who is obsessed to learn & experiment!</strong>
                    <br></br>
                    <a href="mailto:aqeebimtiaz@gmail.com?subject=I%20Found%20You,%20Aqeeb&body=Let%27s%20talk%20about%20Aqeeb.">Mail me!</a>
                    <a href="{{ route('resume') }}">Resume</a>
                    <a href="{{ route('contact') }}">Contact me</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                //$('#ppimg').fadeIn(4000);
                $("#content").addClass('animated fadeInLeft');
            });
        </script>

    </body>
</html>
