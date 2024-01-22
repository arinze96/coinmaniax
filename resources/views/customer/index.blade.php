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
        <!--- End Global-loader-->
        <!-- Page -->
        <div class="page">
            <div class="page-main">
                @include('include.c_sidebar')
                <!--aside closed--> <!-- App-Content -->
                <div class="app-content main-content">
                    <div class="side-app">
                        <!--app header-->
                        @include('include.c_header')
                        <!--/app header--> <!--Page header-->
                        <div class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index-2.html#"><i
                                                class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="index-2.html#">Client Dashboard</a></li>
                                </ol>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="index-2.html#" class="btn btn-info"><i class="fe fe-settings mr-1"></i>
                                        General Settings </a>
                                    <a href="index-2.html#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i>
                                        Deposit </a>
                                    <a href="index-2.html#" class="btn btn-warning"><i
                                            class="fe fe-shopping-cart mr-1"></i> Withdraw </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class=" mb-1 ">Total Sales</p>
                                        <h2 class="mb-1 number-font">$3,257</h2>
                                        <small class="fs-12 text-muted">Compared to Last Month</small>
                                        <span class="ratio bg-warning">76%</span>
                                        <span class="ratio-text text-muted">Goals Reached</span>
                                    </div>
                                    <div id="spark1"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class=" mb-1 ">Total User</p>
                                        <h2 class="mb-1 number-font">1,678</h2>
                                        <small class="fs-12 text-muted">Compared to Last Month</small>
                                        <span class="ratio bg-info">85%</span>
                                        <span class="ratio-text text-muted">Goals Reached</span>
                                    </div>
                                    <div id="spark2"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class=" mb-1 ">Total Income</p>
                                        <h2 class="mb-1 number-font">$2,590</h2>
                                        <small class="fs-12 text-muted">Compared to Last Month</small>
                                        <span class="ratio bg-danger">62%</span>
                                        <span class="ratio-text text-muted">Goals Reached</span>
                                    </div>
                                    <div id="spark3"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class=" mb-1">Total Tax</p>
                                        <h2 class="mb-1 number-font">$1,954</h2>
                                        <small class="fs-12 text-muted">Compared to Last Month</small>
                                        <span class="ratio bg-success">53%</span>
                                        <span class="ratio-text text-muted">Goals Reached</span>
                                    </div>
                                    <div id="spark4"></div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-1 -->

                        <!-- Row-2 -->
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Sales Analysis</h3>
                                        <div class="card-options">
                                            <div class="btn-group p-0">
                                                <button class="btn btn-outline-light btn-sm"
                                                    type="button">Week</button>
                                                <button class="btn btn-light btn-sm" type="button">Month</button>
                                                <button class="btn btn-outline-light btn-sm"
                                                    type="button">Year</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-xl-3 col-6">
                                                <p class="mb-1">Total Sales</p>
                                                <h3 class="mb-0 fs-20 number-font1">$52,618</h3>
                                                <p class="fs-12 text-muted"><span class="text-danger mr-1"><i
                                                            class="fe fe-arrow-down"></i>0.9%</span>this month</p>
                                            </div>
                                            <div class="col-xl-3 col-6 ">
                                                <p class=" mb-1">Maximum Sales</p>
                                                <h3 class="mb-0 fs-20 number-font1">$26,197</h3>
                                                <p class="fs-12 text-muted"><span class="text-success mr-1"><i
                                                            class="fe fe-arrow-up"></i>0.15%</span>this month</p>
                                            </div>
                                            <div class="col-xl-3 col-6">
                                                <p class=" mb-1">Total Units Sold</p>
                                                <h3 class="mb-0 fs-20 number-font1">13,876</h3>
                                                <p class="fs-12 text-muted"><span class="text-danger mr-1"><i
                                                            class="fe fe-arrow-down"></i>0.8%</span>this month</p>
                                            </div>
                                            <div class="col-xl-3 col-6">
                                                <p class=" mb-1">Maximum Units Sold</p>
                                                <h3 class="mb-0 fs-20 number-font1">5,876</h3>
                                                <p class="fs-12 text-muted"><span class="text-success mr-1"><i
                                                            class="fe fe-arrow-up"></i>0.06%</span>this month</p>
                                            </div>
                                        </div>
                                        <div id="echart1" class="chart-tasks chart-dropshadow text-center"></div>
                                        <div class="text-center mt-2">
                                            <span class="mr-4"><span class="dot-label bg-primary"></span>Total
                                                Sales</span>
                                            <span><span class="dot-label bg-secondary"></span>Total Units Sold</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Recent Activity</h3>
                                        <div class="card-options">
                                            <a href="index-2.html#" class="option-dots" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="index-2.html#">Today</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Week</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Month</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="latest-timeline scrollbar3" id="scrollbar3">
                                            <ul class="timeline mb-0">
                                                <li class="mt-0">
                                                    <div class="d-flex"><span class="time-data">Task
                                                            Finished</span><span class="ml-auto text-muted fs-11">09
                                                            June
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Joseph
                                                            Ellison</span> finished task on<a href="index-2.html#"
                                                            class="font-weight-semibold"> Project Management</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">New
                                                            Comment</span><span class="ml-auto text-muted fs-11">05
                                                            June 2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Elizabeth
                                                            Scott</span> Product delivered<a href="index-2.html#"
                                                            class="font-weight-semibold"> Service Management</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">Target
                                                            Completed</span><span class="ml-auto text-muted fs-11">01
                                                            June
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Sonia
                                                            Peters</span> finished target on<a href="index-2.html#"
                                                            class="font-weight-semibold"> this month Sales</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">Revenue
                                                            Sources</span><span class="ml-auto text-muted fs-11">26 May
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Justin
                                                            Nash</span> source report on<a href="index-2.html#"
                                                            class="font-weight-semibold"> Generated</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">Dispatched
                                                            Order</span><span class="ml-auto text-muted fs-11">22 May
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Ella
                                                            Lambert</span> ontime order delivery <a
                                                            href="index-2.html#" class="font-weight-semibold">Service
                                                            Management</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">New User
                                                            Added</span><span class="ml-auto text-muted fs-11">19 May
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Nicola
                                                            Blake</span> visit the site<a href="index-2.html#"
                                                            class="font-weight-semibold"> Membership allocated</a></p>
                                                </li>
                                                <li>
                                                    <div class="d-flex"><span class="time-data">Revenue
                                                            Sources</span><span class="ml-auto text-muted fs-11">15 May
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Richard
                                                            Mills</span> source report on<a href="index-2.html#"
                                                            class="font-weight-semibold"> Generated</a></p>
                                                </li>
                                                <li class="mb-0">
                                                    <div class="d-flex"><span class="time-data">New Order
                                                            Placed</span><span class="ml-auto text-muted fs-11">11 May
                                                            2020</span></div>
                                                    <p class="text-muted fs-12"><span class="text-info">Steven
                                                            Hart</span> is proces the order<a href="index-2.html#"
                                                            class="font-weight-semibold"> #987</a></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row-2 -->

                        <!-- Row-3 -->
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Recent Customers</h3>
                                        <div class="card-options">
                                            <a href="index-2.html#" class="option-dots" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="index-2.html#">Today</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Week</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Month</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="list-card">
                                            <span class="bg-warning list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1">@Marshall</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 2342<span
                                                                    class="ml-2 text-success fs-13 font-weight-semibold">Paid</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$558</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-card">
                                            <span class="bg-info list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1">@Chapman</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 6720<span
                                                                    class="ml-2 text-danger fs-13 font-weight-semibold">Pending</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$458</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-card">
                                            <span class="bg-danger list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1">@Sonia</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 8763<span
                                                                    class="ml-2 text-success fs-13 font-weight-semibold">Paid</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$358</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-card">
                                            <span class="bg-success list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1">@Joseph</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 1076<span
                                                                    class="ml-2 text-danger fs-13 font-weight-semibold">Pending</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$796</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-card">
                                            <span class="bg-primary list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1"> @Abraham</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 986<span
                                                                    class="ml-2 text-success fs-13 font-weight-semibold">Paid</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$867</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Revenue by customers in Countries</h3>
                                        <div class="card-options">
                                            <a href="index-2.html#" class="option-dots" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="index-2.html#">Today</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Week</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Month</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="country-card">
                                            <div class="mb-5">
                                                <div class="d-flex">
                                                    <span class=""><img
                                                            src="{{ asset('assets/customer/assets/images/flags/us.svg') }}"
                                                            class="w-5 h-5 mr-2" alt="">United States</span>
                                                    <div class="ml-auto"><span class="text-success mr-1"><i
                                                                class="fe fe-trending-up"></i></span><span
                                                            class="number-font">$45,870</span> (86%)</div>
                                                </div>
                                                <div class="progress h-2  mt-1">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                                        style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="d-flex">
                                                    <span class=""><img
                                                            src="{{ asset('assets/customer/assets/images/flags/in.svg') }}"
                                                            class="w-5 h-5 mr-2" alt="">India</span>
                                                    <div class="ml-auto"><span class="text-danger mr-1"><i
                                                                class="fe fe-trending-down"></i></span><span
                                                            class="number-font">$32,879</span> (65%)</div>
                                                </div>
                                                <div class="progress h-2  mt-1">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                                        style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="d-flex">
                                                    <span class=""><img
                                                            src="{{ asset('assets/customer/assets/images/flags/ru.svg') }}"
                                                            class="w-5 h-5 mr-2" alt="">Russia</span>
                                                    <div class="ml-auto"><span class="text-success mr-1"><i
                                                                class="fe fe-trending-up"></i></span><span
                                                            class="number-font">$22,710</span> (55%)</div>
                                                </div>
                                                <div class="progress h-2  mt-1">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                        style="width: 50%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="d-flex">
                                                    <span class=""><img
                                                            src="{{ asset('assets/customer/assets/images/flags/ca.svg') }}"
                                                            class="w-5 h-5 mr-2" alt="">Canada</span>
                                                    <div class="ml-auto"><span class="text-danger mr-1"><i
                                                                class="fe fe-trending-down"></i></span><span
                                                            class="number-font">$56,291</span> (69%)</div>
                                                </div>
                                                <div class="progress h-2  mt-1">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                                        style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="d-flex">
                                                    <span class=""><img
                                                            src="{{ asset('assets/customer/assets/images/flags/ge.svg') }}"
                                                            class="w-5 h-5 mr-2" alt="">Georgia</span>
                                                    <div class="ml-auto"><span class="text-success mr-1"><i
                                                                class="fe fe-trending-up"></i></span><span
                                                            class="number-font">$67,357</span> (73%)</div>
                                                </div>
                                                <div class="progress h-2  mt-1">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-teal"
                                                        style="width: 70%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="d-flex">
                                                    <span class=""><img
                                                            src="{{ asset('assets/customer/assets/images/flags/br.svg') }}"
                                                            class="w-5 h-5 mr-2" alt="">Brazil</span>
                                                    <div class="ml-auto"><span class="text-success mr-1"><i
                                                                class="fe fe-trending-up"></i></span><span
                                                            class="number-font">$34,209</span> (60%)</div>
                                                </div>
                                                <div class="progress h-2  mt-1">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-indigo"
                                                        style="width: 60%"></div>
                                                </div>
                                            </div>
                                            <div class="mb-0">
                                                <div class="d-flex">
                                                    <span class=""><img
                                                            src="{{ asset('assets/customer/assets/images/flags/au.svg') }}"
                                                            class="w-5 h-5 mr-2" alt="">Australia</span>
                                                    <div class="ml-auto"><span class="text-success mr-1"><i
                                                                class="fe fe-trending-up"></i></span><span
                                                            class="number-font">$12,876</span> (46%)</div>
                                                </div>
                                                <div class="progress h-2  mt-1">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                                        style="width: 40%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4  col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                                <p class=" mb-1 fs-14">Users</p>
                                                <h2 class="mb-0"><span class="number-font1">12,769</span><span
                                                        class="ml-2 text-muted fs-11"><span class="text-danger"><i
                                                                class="fa fa-caret-down"></i> 43.2</span> this
                                                        month</span></h2>

                                            </div>
                                            <span
                                                class="text-primary fs-35 dash1-iocns bg-primary-transparent border-primary"><i
                                                    class="las la-users"></i></span>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div>
                                                <span class="text-muted fs-12 mr-1">Last Month</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-up mr-1 text-success"></i>10,876</span>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-muted fs-12 mr-1">Last Year</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-down mr-1 text-danger"></i>88,345</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                                <p class=" mb-1 fs-14">Sales</p>
                                                <h2 class="mb-0"><span class="number-font1">$34,789</span><span
                                                        class="ml-2 text-muted fs-11"><span class="text-success"><i
                                                                class="fa fa-caret-up"></i> 19.8</span> this
                                                        month</span>
                                                </h2>
                                            </div>
                                            <span
                                                class="text-secondary fs-35 dash1-iocns bg-secondary-transparent border-secondary"><i
                                                    class="las la-hand-holding-usd"></i></span>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div>
                                                <span class="text-muted fs-12 mr-1">Last Month</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-up mr-1 text-success"></i>$12,786</span>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-muted fs-12 mr-1">Last Year</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-down mr-1 text-danger"></i>$89,987</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                                <p class=" mb-1 fs-14">Subscribers</p>
                                                <h2 class="mb-0"><span class="number-font1">4,876</span><span
                                                        class="ml-2 text-muted fs-11"><span class="text-success"><i
                                                                class="fa fa-caret-up"></i> 0.8%</span> this
                                                        month</span>
                                                </h2>
                                            </div>
                                            <span
                                                class="text-info fs-35 bg-info-transparent border-info dash1-iocns"><i
                                                    class="las la-thumbs-up"></i></span>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div>
                                                <span class="text-muted fs-12 mr-1">Last Month</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-up mr-1 text-success"></i>1,034</span>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-muted fs-12 mr-1">Last Year</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-down mr-1 text-danger"></i>8,610</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- /////////////////// DEPOSIT TRANSACTIONS////////////////////////// --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">MY DEPOSIT TRANSACTIONS</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap" id="example1">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">S/N</th>
                                                        <th class="wd-15p border-bottom-0">MESSAGE</th>
                                                        <th class="wd-20p border-bottom-0">CURRENCY</th>
                                                        <th class="wd-15p border-bottom-0">AMOUNT</th>
                                                        <th class="wd-10p border-bottom-0">TYPE</th>
                                                        <th class="wd-25p border-bottom-0">STATUS</th>
                                                        <th class="wd-25p border-bottom-0">DATE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Bella</td>
                                                        <td>Chloe</td>
                                                        <td>System Developer</td>
                                                        <td>2018/03/12</td>
                                                        <td>$654,765</td>
                                                        <td>b.Chloe@datatables.net</td>
                                                        <td>$654,765</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Donna</td>
                                                        <td>Bond</td>
                                                        <td>Account Manager</td>
                                                        <td>2012/02/21</td>
                                                        <td>$543,654</td>
                                                        <td>d.bond@datatables.net</td>
                                                        <td>$543,654</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harry</td>
                                                        <td>Carr</td>
                                                        <td>Technical Manager</td>
                                                        <td>20011/02/87</td>
                                                        <td>$86,000</td>
                                                        <td>h.carr@datatables.net</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--/div-->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End app-content-->
            </div>
            <!--Footer-->
            @include('include.c_footer')
            @include('include.c_script')
</body>

</html>
