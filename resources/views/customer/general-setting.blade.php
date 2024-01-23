<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('include.c_css')
</head>

<body class="app sidebar-mini">
    <div class="switcher-wrapper">
        @include('include.switcher')
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
                                    <a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General
                                        Settings
                                    </a>
                                    <a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Deposit
                                    </a>
                                    <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i>
                                        Withdraw
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End Page header-->
                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Edit Profile</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title font-weight-bold">Basci info:</div>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">First Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="First Name" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Last Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Last Name" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="number" class="form-control" placeholder="Number" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="#" class="btn btn-primary">Updated</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('include.c_footer')
                @include('include.c_script')
</body>

</html>
