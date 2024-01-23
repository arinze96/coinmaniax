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
                                <h4 class="page-title mb-0">Hi! Welcome Back</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index-2.html#"><i
                                                class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a>Client Dashboard</a></li>
                                </ol>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="{{ route('user.setting.view', ['general']) }}" class="btn btn-info"><i class="fe fe-settings mr-1"></i>
                                        General Settings </a>
                                    <a href="{{ route('user.deposit.view', ['usd']) }}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i>
                                        Deposit </a>
                                    <a href="{{ route('user.withdraw.view') }}" class="btn btn-warning"><i
                                            class="fe fe-shopping-cart mr-1"></i> Withdraw </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class="mb-1">Total Investment</p>
                                        <h2 class="mb-1 number-font">$0.00</h2>
                                        <small class="fs-12 text-muted">Compared to Last Month</small>
                                        <span class="ratio bg-warning">100%</span>
                                    </div>
                                    <div id="spark1"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class="mb-1">Total Withdrawal</p>
                                        <h2 class="mb-1 number-font">$0.00</h2>
                                        <small class="fs-12 text-muted">Compared to Last Month</small>
                                        <span class="ratio bg-info">100%</span>
                                    </div>
                                    <div id="spark2"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class="mb-1">Total Investment</p>
                                        <h2 class="mb-1 number-font">$0.00</h2>
                                        <small class="fs-12 text-muted">Compared to Last Month</small>
                                        <span class="ratio bg-danger">100%</span>
                                    </div>
                                    <div id="spark3"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class="mb-1">Total Tax</p>
                                        <h2 class="mb-1 number-font">$0.00</h2>
                                        <small class="fs-12 text-muted">Compared to Last Month</small>
                                        <span class="ratio bg-success">100%</span>
                                    </div>
                                    <div id="spark4"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Coinmaniax Investment Analysis</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-xl-3 col-6">
                                                <p class="mb-1">Total Investment Amount</p>
                                                <h3 class="mb-0 fs-20 number-font1">$3,552,618</h3>
                                                <p class="fs-12 text-muted"><span class="text-danger mr-1"><i
                                                            class="fe fe-arrow-down"></i>0.9%</span>this month</p>
                                            </div>
                                            <div class="col-xl-3 col-6 ">
                                                <p class=" mb-1">Individual Investment</p>
                                                <h3 class="mb-0 fs-20 number-font1">$26,197</h3>
                                                <p class="fs-12 text-muted"><span class="text-success mr-1"><i
                                                            class="fe fe-arrow-up"></i>0.15%</span>this month</p>
                                            </div>
                                            <div class="col-xl-3 col-6">
                                                <p class=" mb-1">Total Assets Investments</p>
                                                <h3 class="mb-0 fs-20 number-font1">13,876</h3>
                                                <p class="fs-12 text-muted"><span class="text-danger mr-1"><i
                                                            class="fe fe-arrow-down"></i>0.8%</span>this month</p>
                                            </div>
                                            <div class="col-xl-3 col-6">
                                                <p class=" mb-1">Total Investors</p>
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
                                        <h3 class="card-title">Recent Customer Activity</h3>
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
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Recent Customers</h3>
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
                                                <p class=" mb-1 fs-14">Total Users</p>
                                                <h2 class="mb-0"><span class="number-font1">112,769</span><span
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
                                                        class="fa fa-caret-up mr-1 text-success"></i>90,876</span>
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
                                                <p class=" mb-1 fs-14">Daily Investment</p>
                                                <h2 class="mb-0"><span class="number-font1">$344,789</span><span
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
                                                        class="fa fa-caret-up mr-1 text-success"></i>$1,112,786</span>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-muted fs-12 mr-1">Last Year</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-down mr-1 text-danger"></i>$899,987</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                                <p class=" mb-1 fs-14">Loan Applications</p>
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
            </div>
            @include('include.c_footer')
            @include('include.c_script1')
</body>

</html>
