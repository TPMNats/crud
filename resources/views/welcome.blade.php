<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Support Call Logs</title>

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
            
            .button {
              background-color: #24a0ed; /* Primary Blue */
              border: none;
              color: white;
              padding: 15px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 15px;
              font-weight: bold;
              margin: 10px 5px;
              cursor: pointer;
            }

            .button1 {border-radius: 2px;}
            .button2 {border-radius: 4px;}
            .button3 {border-radius: 8px;}
            .button4 {border-radius: 12px;}
            .button5 {border-radius: 50%;}
            
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right">
                    @auth
                        <a href="{{ url('/home') }}" class="button button2">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="button button2">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button button2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Technical Support Logs
                </div>

                <div class="links">
                    <a href="https://laravel.com">Powered by Laravel</a>
<!--                     <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>
    </body>
</html>
