<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .fc {
            color: white !important;
        }

        .fc:hover {
            text-decoration: underline;
        }

        .mall {
            margin: 0 0 0 1.05rem;
        }

        @media only screen and (max-width: 992px) {
            .mall {
                margin: 0 !important;
            }

            .heightcon {
                height: 60vh !important;
            }

        }

        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Jost", sans-serif;
        }

        #hero .animated {
            animation: up-down 2s ease-in-out infinite alternate-reverse both;
        }

        @-webkit-keyframes up-down {
            0% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(-10px);
            }
        }

        @keyframes up-down {
            0% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(-10px);
            }
        }



        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            height: 100vh;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(0, 0, 0, 0.5)),
                url(https://images.pexels.com/photos/2775827/pexels-photo-2775827.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat center center/cover;
        }

        .banner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
        }

        .heading {
            animation-name: slide;
            animation-duration: 2s;
        }

        .main {
            animation-name: slide;
            animation-duration: 2s;
            animation-delay: .5s;
            animation-fill-mode: backwards;
        }

        @keyframes slide {
            0% {
                transform: translateX(-1000px);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .text {
            font-size: 1.8em;
            line-height: 1.8em;
        }

        @media (max-width: 991px) {
            .text {
                font-size: 5vw;
            }


        }

        @media (max-width: 768px) {
            #hero h1 {
                font-size: 28px;
                line-height: 36px;
            }

            #hero h2 {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
            }

            #hero .hero-img img {
                margin-top: -30%;
                width: 80%;
            }
        }

        @media (max-width: 575px) {
            #hero .hero-img img {
                margin-top: -30%;
                width: 90%;
            }
        }

        .navbar-toggler{
            background-color: white !important;
        }


    </style>

</head>

<body class="antialiased">
    <header>
        <div class="bg-c">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#" style="font-weight:bold ; font-size:1.5rem; color:white;">Cashier Cafe</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @if (Route::has('login'))
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item mall">
                                @auth
                                <a class="nav-link fc" href="{{ url('/dashboard') }}">{{ Auth::user()->name }}</a>
                                @else
                            </li>
                            <li class="nav-item mall">
                                <a class="nav-link fc" href="{{ route('login') }}">Log in</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item mall">
                                <a class="nav-link fc" href="{{ route('register') }}">Register</a>
                            </li>
                            @endif
                            @endauth
                        </ul>
                        @endif
                    </div>
                </div>
            </nav>


            <div class="text-light text-right banner">
                <h1 class="display-4 text-center font-weight-bold heading fw-bold">
                    Welcome to Cashier's Cafe
                </h1>
                <p class="main text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, modi.
                </p>
            </div>
        </div>
    </header>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>