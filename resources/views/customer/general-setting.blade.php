<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('include.c_css')
</head>

<body class="app sidebar-mini">
    <div class="switcher-wrapper">
        {{-- @include('include.switcher') --}}
        <div id="global-loader">
            <img src="{{ asset('assets/customer/assets/images/svgs/loader.svg') }}" alt="loader">
        </div>
        <div class="page">
            <div class="page-main">
                @include('include.c_sidebar')
                <div class="app-content main-content">
                    <div class="side-app">
                        @include('include.c_header')
                        <div class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0">Edit Profile</h4>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="{{ route('user.setting.view', ['general']) }}" class="btn btn-info"><i
                                            class="fe fe-settings mr-1"></i>
                                        Settings </a>
                                    <a href="{{ route('user.deposit.view', ['usd']) }}" class="btn btn-danger"><i
                                            class="fe fe-printer mr-1"></i>
                                        Deposit </a>
                                    <a href="{{ route('user.withdraw.view') }}" class="btn btn-warning"><i
                                            class="fe fe-shopping-cart mr-1"></i> Withdraw </a>
                                </div>
                            </div>
                        </div>
                        <!--End Page header-->
                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('user.setting.view', ['general']) }}"
                                  method="POST">
                                  @csrf

                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Edit Profile</div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 form-row" style="width: 100%; justify-content: center">
                                        @if (!empty($success))
                                            <span style="margin-top: 10px"
                                                class="info_box text-success">{{ $success }}</span>
                                        @endif
                                    </div>
                                    <div class="col-sm-12 col-md-12 form-row" style="width: 100%; justify-content: center">
                                        @if (!empty($error))
                                            <span style="margin-top: 10px"
                                                class="info_box text-danger">{{ $error }}</span>
                                        @endif
                                    </div>
                                    
                                    <div class="card-body">
                                        <div class="card-title font-weight-bold">Basci info:</div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First Name</label>
                                                        <input required="" type="text"
                                                      class="form-control" name="firstname"
                                                      value="{{ !empty(old('firstname')) ? old('firstname') : $user->firstname }}"
                                                      placeholder="Enter firstname">
                                                </div>
                                                @error('firstname')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Last Name</label>
                                                    <input required="" type="text"
                                                      class="form-control" name="lastname"
                                                      value="{{ !empty(old('lastname')) ? old('lastname') : $user->lastname }}"
                                                      placeholder="Enter lastname">
                                                </div>
                                                @error('lastname')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Username</label>
                                                    <input required="" type="text"
                                                      class="form-control" name="username"
                                                      value="{{ !empty(old('username')) ? old('username') : $user->username }}"
                                                      placeholder="Enter username">
                                                </div>
                                                @error('username')
                                                <span class="text-danger"
                                                    id="error_name">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Email address</label>
                                                    <input required="" type="email"
                                                      class="form-control" name="email"
                                                      value="{{ !empty(old('email')) ? old('email') : $user->email }}"
                                                      placeholder="Enter email">
                                                </div>
                                                @error('email')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Phone Number</label>
                                                    <input required="" type="phone"
                                                      class="form-control" name="phone"
                                                      value="{{ !empty(old('phone')) ? old('phone') : $user->phone }}"
                                                      placeholder="Enter phone">
                                                </div>
                                                @error('phone')
                                                <span class="text-danger"
                                                    id="error_name">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" id="edit-plan" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @include('include.c_footer')
                @include('include.c_script')
</body>

</html>
