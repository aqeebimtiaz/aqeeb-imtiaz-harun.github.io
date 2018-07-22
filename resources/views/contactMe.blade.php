<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aqeeb</title>

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

            .top-left {
                position: absolute;
                font-size: 30px;
                left: 10px;
                top: 18px;
            }

            .top-right {
                position: absolute;
                font-size: 30px;
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

                <div class="top-left links">
                        <a href="{{ route('home') }}">Home</a>
                </div>

                <div class="top-right links">
                    <a href="{{ route('resume') }}">Resume</a>
                </div>

            <div class="content">

                <div class="title m-b-md">
                    Contact Me
                </div>

                <div class="links">
                    <strong>Feel free to contact me. I would love to hear from you! :)</strong>
                    <br></br>
                    <a href="mailto:aqeebimtiaz@gmail.com?subject=I%20Found%20You,%20Aqeeb&body=Let%27s%20talk%20about%20Aqeeb.">Mail me:</a> <strong>aqeebimtiaz@gmail.com</strong>
                    <br>
                    <br>
                    <div><strong>Phone: +60 1126 649886</strong></div>
                    <br>
                    <div><strong>Address: C2-5-1, Cyberia Smarthomes, Cyberjaya, Malaysia</strong></div>
                    <br>
                    <a href="https://www.facebook.com/aqeeb01"><img src="img/facebook.png" alt="fb" height="30" width="30"></a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel"><img src="img/github.png" alt="github" height="30" width="30"></a>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#ppimg').fadeIn(4000);
            });
        </script>
    </body>
</html>
