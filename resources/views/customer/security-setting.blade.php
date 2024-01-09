<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Gloryinvestmentlimited</title>
    @include('include.c_css')
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">


</head>

<body class="g-sidenav-show  bg-gray-100">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    @include('include.c_sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('include.c_header')

        <main class="main-content  mt-0">
            <section class="min-vh-100 mb-8">
                <div class="container" style="margin-top: 100px">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8 mx-auto">
                            <div class="card z-index-0">
                                <div class="card-header text-center pt-4">
                                    <h3>Transaction Pin Reset Section</h3>
                                </div>



                                <div class="card-body">
                                    <form action="{{ route('user.setting.view', ['security']) }}" method="POST">
                                        @csrf
                                        <div class="col-sm-12  form-row">
                                            @if (!empty($success))
                                                <span class="info_box text-success">{{ $success }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-12  form-row">
                                            @if (!empty($error))
                                                <span class="info_box text-danger">{{ $error }}</span>
                                            @endif
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="current_pin">Current
                                                    Pin</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="current_pin"
                                                        value="{{ old('current_pin') }}"
                                                        placeholder="Enter Current Pin">
                                                </div>
                                                @error('current_pin')
                                                    <span class="text-danger" id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="new_pin">New
                                                    Pin</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" name="new_pin"
                                                        value="{{ old('new_pin') }}" placeholder="Enter new Pin">
                                                </div>
                                                @error('new_pin')
                                                    <span class="text-danger" id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mt-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <button type="submit" style="text-align:center;"
                                                        class="d-block bg-gradient-primary form-control btn btn-primary "
                                                        id="edit-plan">Change Pin</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-8 mx-auto">
                            <div class="card z-index-0">
                                <div class="card-header text-center pt-4">
                                    <h3>Password Reset Section</h3>
                                </div>



                                <div class="card-body">
                                    <form action="{{ route('user.setting.view', ['security']) }}" method="POST">
                                        @csrf
                                        <div class="col-sm-12  form-row">
                                            @if (!empty($success_p))
                                                <span class="info_box text-success">{{ $success_p }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-12  form-row">
                                            @if (!empty($error_p))
                                                <span class="info_box text-danger">{{ $error_p }}</span>
                                            @endif
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="current_password">Current
                                                    Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" name="current_password"
                                                        value="{{ old('current_password') }}"
                                                        placeholder="Enter Current Password">
                                                </div>
                                                @error('current_password')
                                                    <span class="text-danger" id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="new_password">New
                                                    Password</label>
                                                <div class="form-control-wrap">
                                                    <input type="password" class="form-control" name="new_password"
                                                        value="{{ old('new_password') }}"
                                                        placeholder="Enter New Password">
                                                </div>
                                                @error('new_password')
                                                    <span class="text-danger" id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mt-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <button type="submit" style="text-align:center;"
                                                        class="d-block bg-gradient-primary form-control btn btn-primary "
                                                        id="edit-plan">Change Password</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>


        {{-- </div> --}}
        {{-- </div> --}}
    </main>
    @include('include.settings')



    @include('include.c_script')
</body>


</html>
