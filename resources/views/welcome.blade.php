<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laradmin</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+ES+Deco+Guides&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right,
                    rgba(106, 17, 203, 1),
                    rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right,
                    rgba(106, 17, 203, 1),
                    rgba(37, 117, 252, 1));
            color: #000;
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

        .roboto-condensed-title {
            font-family: "Roboto Condensed", serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-size: 80px;
        }

        .playwrite-es-deco-guides-regular {
            font-family: "Playwrite ES Deco Guides", serif;
            font-weight: 400;
            font-style: normal;
            font-size: 60px;
        }

        .links>a {
            color: #000;
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

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="playwrite-es-deco-guides-regular m-b-md">
                Laradmin
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="http://boottrap.com/">Bootstrap</a>
                <a href="https://https://x.com/SadanPosts">Twitter</a>
                <a href="https://medium.com/@sadan.posts">Blogs</a>
                <a href="https://github.com/laradmin-cse/laradmin">GitHub</a>
            </div>
        </div>
    </div>
</body>

</html>