<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="This is my first portfolio website, i still learned so give me your opinion about this website">
    <meta name="author" content="Anthon">
    <title>Portfolio Anthon | {{ $title }}</title>

    <link rel="icon" href="image/favicon.png" sizes="16x16">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- Bootstrap Script Bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    {{-- Custom styles for this template --}}
    <link href="css/cover.css" rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Permanent+Marker&display=swap"
        rel="stylesheet">

    {{-- Animate Style --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

</head>

<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0" style="font-family: 'Dancing Script', cursive;
                font-family: 'Permanent Marker', cursive;">AH</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">Home</a>
                    <a class="nav-link {{ Request::is('experience') ? 'active' : '' }}" href="
                        /experience">Experience</a>
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href=" /contact">Contact</a>
                </nav>
            </div>
        </header>
        {{-- UI yang bakalan di rubah sisanya ngambil dari sini --}}
        @yield('main-ui')

        <footer class="mt-auto text-white-50">
            <p>Created by Anthonius Hendriyanto <a href="https://www.linkedin.com/in/anthonius-hendriyanto/"
                    target="_blank" class="text-white">
                    <img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAA2klEQVRIie2UMQ4BURRF7xPRqnQTEo01WILYxxT2obEIYgkarVKhYQ2j0otEyNF8yZiYGfM/Gk713+Tdd+/L/BnpTxWAIbDHnwQYpGdaxiCRFAXmTMysnbcBAL6Tn+lrBc1dYAaMfA0LEwATV16BRlX9nXpB/1RSR9LazM7eqcsShOqL3sE4KwAO7tESWAEnYAv0KicoMQA4ps6LyhuUsJHUlDR3dT+v0ddgZ2YXSTtXt95t8PJF8DV4mY8bPPDV7+BdZH8Ve0lRyBaSknSR3SB2JiHD4wD9L3IDv/MQkm7jLXEAAAAASUVORK5CYII=">
                </a>
            </p>
        </footer>

    </div>
</body>

</html>
