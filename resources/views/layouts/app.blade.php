<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - @yield('title')</title>
        <link rel="manifest" href="{{asset('/manifest.webmanifest')}}">
        <script src="{{asset('/index.js')}}" defer></script>        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @laravelPWA
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
            .add-button {
              position: absolute;
                top: 1px;
                left: 1px;
            }

        </style>
    </head>
    <body>
        <script>
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
            img.src = img.dataset.src;
            });
        } else {
            // Dynamically import the LazySizes library
            const script = document.createElement('script');
            script.src =
            'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
            document.body.appendChild(script);
        }
        </script>
        @yield('content')        
    </body>
</html>
