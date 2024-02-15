<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('include.c_css')
    <style>
        @media screen and (max-width: 479px) {
            #settings {
                display: none
            }
            #translator{
                margin-left: 100px

            }
        }
    </style>
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
                                <h4 class="page-title mb-0">Welcome {{ ucfirst(auth()->user()->username) }}</h4>
                                {{-- <ol class="breadcrumb">

                                    <li class="breadcrumb-item active" aria-current="page">
                                        <input type="text" class=" form-control" id="myInput"
                                            value="{{ route('user.register', [auth()->user()->username]) }}">
                                    </li>
                                    <li class=""><i style="margin-left: 10px; margin-top: 10px; font-size: 20px"
                                            id="copyIcon" class="fa fa-clone" aria-hidden="true"></i></li>
                                </ol> --}}
                                <div id="translator">
                                    <div id="ytWidget2" class="w-60" style="margin-top: 10px;"></div>
                                    <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget2&pageLang=en&widgetTheme=light&autoMode=false"type="text/javascript"></script>
                                </div>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list" id="settings">
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
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class="mb-1">Dollar Balance</p>
                                        <h2 class="mb-1 number-font">
                                            ${{ number_format($account->dolla_balance, 0, '.', ',') }}</h2>
                                        <small class="fs-12 text-muted">General Statistics</small>
                                        <span class="ratio bg-warning">100%</span>
                                    </div>
                                    <div id="spark1"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class="mb-1">Total Deposit</p>
                                        <h2 class="mb-1 number-font">
                                            ${{ number_format($account->deposits, 0, '.', ',') }}</h2>
                                        <small class="fs-12 text-muted">General Statistics</small>
                                        <span class="ratio bg-info">100%</span>
                                    </div>
                                    <div id="spark2"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class="mb-1">Total Withdrawals</p>
                                        <h2 class="mb-1 number-font">${{ number_format($totalWithdrawal, 0, '.', ',') }}</h2>
                                        <small class="fs-12 text-muted">General Statistics</small>
                                        <span class="ratio bg-danger">100%</span>
                                    </div>
                                    <div id="spark3"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <p class="mb-1">Total Investment</p>
                                        <h2 class="mb-1 number-font">${{ number_format($totalInvestment, 0, '.', ',') }}</h2>
                                        <small class="fs-12 text-muted">General Statistics</small>
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
                                                <h3 class="mb-0 fs-20 number-font1" id="t_investment">$3,552,618</h3>
                                                <p class="fs-12 text-muted"><span class="text-danger mr-1"><i
                                                            class="fe fe-arrow-down"></i>0.9%</span>this month</p>
                                            </div>
                                            <div class="col-xl-3 col-6 ">
                                                <p class=" mb-1">Average Investment</p>
                                                <h3 class="mb-0 fs-20 number-font1" id="a_investment">$26,197</h3>
                                                <p class="fs-12 text-muted"><span class="text-success mr-1"><i
                                                            class="fe fe-arrow-up"></i>0.15%</span>this month</p>
                                            </div>
                                            <div class="col-xl-3 col-6">
                                                <p class=" mb-1">Total Assets</p>
                                                <h3 class="mb-0 fs-20 number-font1">7</h3>
                                                <p class="fs-12 text-muted"><span class="text-danger mr-1"><i
                                                            class="fe fe-arrow-down"></i>0.8%</span>this month</p>
                                            </div>
                                            <div class="col-xl-3 col-6">
                                                <p class=" mb-1">Total Investors</p>
                                                <h3 class="mb-0 fs-20 number-font1" id="total_investors">5,876</h3>
                                                <p class="fs-12 text-muted"><span class="text-success mr-1"><i
                                                            class="fe fe-arrow-up"></i>0.06%</span>this month</p>
                                            </div>
                                        </div>
                                        <div id="echart1" class="chart-tasks chart-dropshadow text-center"></div>
                                        <div class="text-center mt-2">
                                            <span class="mr-4"><span class="dot-label bg-primary"></span></span>
                                            <span><span class="dot-label bg-secondary"></span></span>
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
                                            <ul class="timeline mb-0" id="taskList">
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @include('include.c_listCards')
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
                                                            class="number-font" id="country1">$45,870</span> (86%)
                                                    </div>
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
                                                            class="number-font" id="country2">$32,879</span> (65%)
                                                    </div>
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
                                                            class="number-font" id="country3">$22,710</span> (55%)
                                                    </div>
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
                                                            class="number-font" id="country4">$56,291</span> (69%)
                                                    </div>
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
                                                            class="number-font" id="country5">$67,357</span> (73%)
                                                    </div>
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
                                                            class="number-font" id="country6">$34,209</span> (60%)
                                                    </div>
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
                                                            class="number-font" id="country7">$12,876</span> (46%)
                                                    </div>
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
                                                <p class=" mb-1 fs-14">Coinmaniax Total Users</p>
                                                <h2 class="mb-0"><span class="number-font1"
                                                        id="total_users">112,769</span><span
                                                        class="ml-2 text-muted fs-11"><span class="text-success"><i
                                                                class="fa fa-caret-up"></i> 43.2</span> this
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
                                                <p class=" mb-1 fs-14">Coinmaniax Daily Investment</p>

                                                <h2 class="mb-0"><span class="number-font1"
                                                        id="daily_investments">344,789</span><span
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
                                                <p class=" mb-1 fs-14">Coinmaniax Loan Applications</p>
                                                <h2 class="mb-0"><span class="number-font1"
                                                        id="daily_loan_applicants">4,876</span><span
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
                        @include('include.c_deposit_transaction')
                        {{-- /////////////////// INVESTMENT TRANSACTIONS////////////////////////// --}}
                        @include('include.c_investments_transactions')
                        {{-- /////////////////// WITHDRAWAL TRANSACTIONS////////////////////////// --}}
                        @include('include.c_withdrawal_transaction')
                    </div>
                </div>
            </div>
            @include('include.c_footer')
            @include('include.c_script1')
</body>

</html>
