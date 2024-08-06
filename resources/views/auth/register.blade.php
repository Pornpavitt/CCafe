<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        section{
            height: 100vh !important;
            width: 100% !important;
            background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(0, 0, 0, 0.5)),
                url(https://images.pexels.com/photos/2775827/pexels-photo-2775827.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat center center/cover !important;
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
            font-family: "Jost", sans-serif;
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h1 class="mb-5 display-5 fw-bold">REGISTER</h1>
                            <x-jet-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" id="name" class="form-control form-control-lg" :value="old('name')" required autofocus autocomplete="name" />
                                    <label class="form-label" for="name" value="{{ __('Name') }}">Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="email" class="form-control form-control-lg" :value="old('email')" required />
                                    <label class="form-label" for="email" value="{{ __('Email') }}">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" name="password" required autocomplete="new-password" />
                                    <label class="form-label" for="password" value="{{ __('Password') }}">Password</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input id="password_confirmation" class="form-control form-control-lg" name="password_confirmation" type="password" required autocomplete="new-password" />
                                    <label class="form-label" for="pasword_confirmatsion" value="{{ __('Confirm Password') }}">Confirm Password</label>
                                </div>
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                                @endif

                                <button class="btn btn-block " type="submit">{{ __('Register') }}</button>
                                 <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        section{
            height: 100vh !important;
            width: 100% !important;
            background: linear-gradient(rgba(0, 0, 0, 0.63), rgba(0, 0, 0, 0.5)),
                url(https://images.pexels.com/photos/2775827/pexels-photo-2775827.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat center center/cover !important;
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
            font-family: "Jost", sans-serif;
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h1 class="mb-5 display-5 fw-bold">REGISTER</h1>
                            <x-jet-validation-errors class="mb-4" />
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" id="name" class="form-control form-control-lg" :value="old('name')" required autofocus autocomplete="name" />
                                    <label class="form-label" for="name" value="{{ __('Name') }}">Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="email" class="form-control form-control-lg" :value="old('email')" required />
                                    <label class="form-label" for="email" value="{{ __('Email') }}">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control form-control-lg" name="password" required autocomplete="new-password" />
                                    <label class="form-label" for="password" value="{{ __('Password') }}">Password</label>
                                </div>
                                <div class="form-outline mb-4">
                                    <input id="password_confirmation" class="form-control form-control-lg" name="password_confirmation" type="password" required autocomplete="new-password" />
                                    <label class="form-label" for="pasword_confirmatsion" value="{{ __('Confirm Password') }}">Confirm Password</label>
                                </div>
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms" />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                                @endif

                                <button class="btn btn-block " type="submit">{{ __('Register') }}</button>
                                 <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>

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