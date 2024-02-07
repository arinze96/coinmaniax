<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.main_css')
    <title>Coinmaniax</title>
</head>

<body class="register">
    <div class="container register">
        <div class="row row-bg">
            <div class="col-md-3 register-left">
                <div class="logo-container">
                    <img src="{{ asset('assets/home/assets/img/logo-img.png') }}" alt="">
                </div>
                <h3 class="welcome-txt">Welcome</h3>
                <p class="description">Coinmaniax revolutionizes finance with cutting-edge asset management solutions,
                    seamlessly blending
                    technology and expertise.</p>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Forgot Password</h3>
                        <form class="login100-form validate-form" method="POST" action="{{ route('user.login') }}">
                            @csrf

                            @if (!empty($noMatch))
                                <p class="text-danger" style="text-align: center">{{ $noMatch }}</p>
                            @endif

                            <div class="row register-form">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">

                                    {{-- *************EMAIL*********** --}}
                                    <div class="form-group validate-input" data-validate="Please enter email">
                                        <input type="text" class="form-control input100" value="{{ old('email') }}"
                                            name="email" placeholder="Email Address *" />
                                    </div>
                                    @error('email')
                                        <p class="text-danger reduced-font">{{ $message }} </p>
                                    @enderror

                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline">
                                                <input type="radio" name="gender" value="female">
                                                <span class="acct1">Remembered your login details? </span><a class="acct1"
                                                    href="{{ route('user.pages.view', ['login']) }}">Sign in
                                                    now</a><span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <input type="submit" id="submit" class="btnRegister" value="Send Mail" />
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>