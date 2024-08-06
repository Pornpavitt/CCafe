<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        section{
            background-color: #6875F5 !important;
        }
        .mt {
            margin-top: 30px !important;
        }

        .btn {
            background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%) !important;
            color: white;
            padding: 15px 50px !important;
            margin-bottom: 20px !important;
            box-sizing: border-box !important;
        }
        .btn:hover{
            color: white !important;
            text-decoration: underline !important;
        }
        a:hover{
            text-decoration: underline !important;
        }
        *{
            font-family: "Jost", sans-serif !important;
        }
        section{
            height: 100vh !important;
            width: 100% !important;
            background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(0, 0, 0, 0.5)),
                url(https://images.pexels.com/photos/2775827/pexels-photo-2775827.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat center center/cover !important;
        }

    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h1 class="mb-5 display-5 fw-bold">LOGIN</h1>
                            @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="email" class="form-control form-control-lg" :value="old('email')" required autofocus />
                                    <label class="form-label" for="email" value="{{ __('Email') }}">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" name="password" required autocomplete="current-password" />
                                    <label class="form-label" for="password" value="{{ __('Password') }}">Password</label>
                                </div>

                                <button class="btn btn-block " type="submit">{{ __('Log in') }}</button><p>Not a member? <a href="{{ route('register') }}">Register</a></p>

                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 mt" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>

</html>