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
                                <h4 class="page-title mb-0">Edit Security Details</h4>
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
                                <form action="{{ route('user.setting.view', ['security']) }}" method="POST">
                                    @csrf
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Edit Password</div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 form-row"
                                            style="width: 100%; justify-content: center">
                                            @if (!empty($success_p))
                                                <span style="margin-top: 10px"
                                                    class="info_box text-success">{{ $success_p }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-12 col-md-12 form-row"
                                            style="width: 100%; justify-content: center">
                                            @if (!empty($error_p))
                                                <span style="margin-top: 10px"
                                                    class="info_box text-danger">{{ $error_p }}</span>
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="form-label">Current Password</label>
                                                <input type="password" class="form-control" name="current_password"
                                                    value="{{ old('current_password') }}"
                                                    placeholder="Enter Current Password">
                                            </div>
                                            @error('current_password')
                                                <span class="text-danger" id="error_name"
                                                    style="margin-top: -20px">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label class="form-label">New Password</label>
                                                <input type="password" class="form-control" name="new_password"
                                                    value="{{ old('new_password') }}" placeholder="Enter New Password">
                                            </div>
                                            @error('new_password')
                                                <span class="text-danger" id="error_name"
                                                    style="margin-top: -20px">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" id="edit-plan" class="btn btn-primary">Change
                                                Password</button>
                                        </div>
                                    </div>
                                </form>
                                <form action="{{ route('user.setting.view', ['security']) }}" method="POST">
                                    @csrf
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Edit Pin</div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 form-row"
                                            style="width: 100%; justify-content: center">
                                            @if (!empty($success))
                                                <span style="margin-top: 10px"
                                                    class="info_box text-success">{{ $success }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-12 col-md-12 form-row"
                                            style="width: 100%; justify-content: center">
                                            @if (!empty($error))
                                                <span style="margin-top: 10px"
                                                    class="info_box text-danger">{{ $error }}</span>
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label class="form-label">Change Pin</label>
                                                <input type="text" class="form-control" name="current_pin"
                                                    value="{{ old('current_pin') }}" placeholder="Enter Current Pin">
                                            </div>
                                            @error('current_pin')
                                                <span class="text-danger" id="error_name">{{ $message }}</span>
                                            @enderror
                                            <div class="form-group">
                                                <label class="form-label">New Pin</label>
                                                <input type="text" class="form-control" name="new_pin"
                                                    value="{{ old('new_pin') }}" placeholder="Enter new Pin">
                                            </div>
                                            @error('new_pin')
                                                <span class="text-danger" id="error_name">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" id="edit-plan" class="btn btn-primary">Change
                                                Pin</button>
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
