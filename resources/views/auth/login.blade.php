{{-- <!DOCTYPE html>
<html lang="en">
<head>
    @include('include.auth_css')
    <title>Coinmaniax</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <img src="{{ asset('assets/home/assets/img/mug.png') }}" class="logo" alt="">
            <h1 style="margin-top: 10px">Login</h1>
            <form class="validate-form" action="{{ route('user.login') }}">
                @csrf
                @if (!empty($noMatch))
                    <p class="text-danger" style="text-align: center">{{ $noMatch }}</p>
                @endif

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="input-box validate-input" data-validate="Please enter email">
                    <input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Email" >
                    <i class="fa fa-envelope"></i>
                </div>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="input-box validate-input" data-validate="Please enter password">
                    <input class="input100" type="password" placeholder="Password" >
                    <i class="fa fa-lock"></i>
                </div>
                <div class="rembar">
                    <input id="rembar" type="checkbox">
                    <label for="rembar">remember me</label>
                </div>
                <button type="submit" id="submit" href="{{ route('user.pages.view', ['register']) }}">Sign in now</button>
                <div class="links">
                    <a href="{{ route('user.pages.view', ['forgot-password']) }}">Forgot password</a>
                    <a href="{{ route('user.register') }}">You don't have an account</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.main_css')
    <title>Coinmaniax</title>
</head>

<body class="register1">
    @include('include.auth_nav')
    <div class="container register">
        <div class="row row-bg">
            <div class="col-md-3 register-left">
                <div class="logo-container">
                    <a href="{{ route("app.home") }}"><img src="{{ asset('assets/home/assets/img/logo-img.png') }}" alt=""></a>
                </div>
                <h3 class="welcome-txt">Welcome</h3>
                <p class="description">Coinmaniax revolutionizes finance with cutting-edge asset management solutions,
                    seamlessly blending
                    technology and expertise.</p>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Login into your Coinmaniax Account</h3>
                        <form class="login100-form validate-form" method="POST" action="{{ route('user.login') }}">
                            @csrf
                            <div class="row register-form">

                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    @if (!empty($noMatch))
                                        <p class="text-danger" style="text-align: center">{{ $noMatch }}</p>
                                    @endif
                                    {{-- *************EMAIL*********** --}}
                                    <div class="form-group validate-input" data-validate="Please enter email">
                                        <input type="text" class="form-control input100" value="{{ old('email') }}"
                                            name="email" placeholder="Email Address *" />
                                    </div>
                                    @error('email')
                                        <p class="text-danger reduced-font">{{ $message }} </p>
                                    @enderror


                                    {{-- *************PASSWORD*********** --}}
                                    <div class="form-group validate-input" data-validate="Please enter password">
                                        <input class="form-control input100" type="password" name="password"
                                            placeholder="Password *" />
                                    </div>


                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span class="acct1">I don't have an account? </span><a class="acct1"
                                                    href="{{ route('user.pages.view', ['register']) }}">Sign up
                                                    now</a><span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <p class="acct2"><a
                                            href="{{ route('user.pages.view', ['forgot-password']) }}">Forgot
                                            Password</a></p>
                                    <button type="submit" id="submit" class="btnRegister" value="Login"
                                        class="btn btn-primary">
                                        <img id="loader-img" src="{{ asset('assets/home/assets/img/loading.gif') }}"
                                            style="width: 20px; height: 20px" alt="">
                                        <span>Login</span>
                                    </button>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('include.auth_js')
</body>

</html>
