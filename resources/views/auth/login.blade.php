{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/background/MT_Trans_Vector.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    @include('include.c_css')
</head>

<body style="background-color: #6b6d69">

    <div class="limiter" style="background-color: #6b6d69">
        <div class="container-login100"
            style="background-color: #6b6d69">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST"
                    action="{{ route('user.login') }}">
                    <span class="login100-form-title" style="background-color: rgb(80, 80, 80)">
                        Sign In
                    </span>
                    @csrf

                    @if (!empty($noMatch))
                        <p class="text-danger" style="text-align: center">{{ $noMatch }}</p>
                    @endif

                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
                        <input class="input100" type="text" name="email" value="{{ old('email') }}"
                            placeholder="Email">
                        <span class="focus-input100"></span>
                    </div>

                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                        <span class="txt1">
                            Forgot
                        </span>

                        <a href="{{ route('user.pages.view', ['forgot-password']) }}" class="txt2"
                            style="color: black">
                            Password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn"  style="background-color: rgb(80, 80, 80)"  type="submit" id="submit">
                            Sign in
                        </button>
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Don’t have an account?
                        </span>

                        <a href="{{ route('user.pages.view', ['register']) }}" class="txt3" style="color: black">
                            Sign up now
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html> --}}
<html lang="en">
  <head>
    @include('include.auth_css')
    <title>Coinmaniax</title>
  </head>
  <body>
    <div class="container">
        <div class="login">
            <img src="{{ asset('assets/home/assets/img/fabicon.png') }}" class="logo" alt="">
            <h1 style="margin-top: 10px">Login</h1>
            <form action="">
                <div class="input-box">
                    <input type="email" placeholder="Email">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="rembar">
                    <input id="rembar" type="checkbox">
                    <label for="rembar">remember me</label>
                </div>
                <button type="submit">LOGIN</button>
                <div class="links">
                    <a href="#">Forgot password</a>
                    <a href="{{ route("user.register") }}">You don't have an account</a>
                </div>
            </form>
        </div>
    </div>
  </body>
</html> 

