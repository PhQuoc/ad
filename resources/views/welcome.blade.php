<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('website/images/icons/favicon.ico') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website/css/main.css') }}">
    <!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <div class="container-register100">
            <div class="wrap-register100">
                <div class="register100-pic js-tilt" data-tilt>
                    <img src="{{ asset('website/images/img-02.png') }}" alt="IMG">
                </div>

                <form class="register100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="register100-form-title">
                        Register Account
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Username is required">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Username">
                        @error('name')
                            <span class="error-icon">
                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            </span>
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: xyz@hcmut.edu.vn">
                        <label for="email">{{ __('Email') }}</label>
                        <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                        @error('email')
                            <span class="error-icon">
                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            </span>
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                        @error('password')
                            <span class="error-icon">
                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            </span>
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Confirm Password is required">
                        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                        <input id="password_confirmation" class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                        @error('password_confirmation')
                            <span class="error-icon">
                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            </span>
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-register100-form-btn">
                        <button type="submit" class="register100-form-btn">
                            Register
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ route('login') }}">
                            Back to login
                            <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('website/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('website/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('website/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('website/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('website/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="{{ asset('website/js/main.js') }}"></script>

</body>
</html>
