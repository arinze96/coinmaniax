<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coinmaniax</title>
    @include('include.a_css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('include.a_sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('include.a_topbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card corona-gradient-card">
                                <div class="card-body py-0 px-0 px-sm-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-sm-3 col-xl-2">
                                            <img src="assets/admin/images/dashboard/Group126@2x.png"
                                                class="gradient-corona-img img-fluid" alt="">
                                        </div>
                                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                                            <h4 class="mb-1 mb-sm-0">Edit Password</h4>
                                        </div>
                                        <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                            <span>
                                                <a href="{{ route('app.home') }}" target="_blank"
                                                    class="btn btn-outline-light btn-rounded get-started-btn">Go to
                                                    Home</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <form class="" method="POST" data-post-type="edit-plan"  action="{{ route('user.change-password', [$user->id]) }}">

                                @csrf
                                <div class="col-sm-12 form-row" style="margin-bottom: 30px">
                                    @if(session('success'))
                                        <span class="info_box text-success">{{ session('success') }}</span>
                                    @endif
                                </div>
                                <div class="col-sm-12  form-row" style="margin-bottom: 30px">
                                    {{-- {{ dd($success) }} --}}
                                    @if (!empty($success))
                                        <span class="info_box text-success">{{ $success }}</span>
                                    @endif
                                </div>

                                <div class="col-sm-12  form-row" style="margin-bottom: 30px">
                                    @if (!empty($error))
                                        <span class="info_box text-danger">{{ $error }}</span>
                                    @endif
                                </div>


                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="firstname">Current Password</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" required name="current_password"
                                                class="form-control @error('current_password') is-invalid @enderror" id="current_password" placeholder="Enter Current Password"
                                                {{-- value="{{ !empty(old('firstname')) ? old('firstname') : $user->firstname }}" --}}
                                                >
                                        </div>
                                        @error('current_password')
                                            <span class="text-danger" id="error_current_password">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="lastname">New Password</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" required name="password"
                                                class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter New Password"
                                                {{-- value="{{ !empty(old('lastname')) ? old('lastname') : $user->lastname }}" --}}
                                                >
                                        </div>
                                        @error('password')
                                            <span class="text-danger" id="error_password">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="username">Confirm Password</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" required name="password_confirmation"
                                                class="form-control" id="password_confirmation" placeholder="Enter username"
                                                {{-- value="{{ !empty(old('username')) ? old('username') : $user->username }}" --}}
                                                >
                                        </div>
                                        @error('password_confirmation')
                                            <span class="text-danger" id="error_password_confirmation">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-sm-4 mt-3">
                                    <div class="form-group">
                                        <div class="form-control-wrap">
                                            <button type="submit"  style="text-align:center;"
                                                class="d-block form-control btn btn-primary ">Edit Password
                                                Record</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>



                </div>
                @include('include.a_footer')
            </div>
        </div>
    </div>
    @include('include.a_scripts')
</body>

</html>
