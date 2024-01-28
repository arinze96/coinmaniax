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
                                <h4 class="page-title mb-0">WITHDRAW FUNDS</h4>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="{{ route('user.setting.view', ['general']) }}" class="btn btn-info"><i
                                            class="fe fe-settings mr-1"></i>
                                        General Settings </a>
                                    <a href="{{ route('user.deposit.view', ['usd']) }}" class="btn btn-danger"><i
                                            class="fe fe-printer mr-1"></i>
                                        Deposit </a>
                                    <a href="{{ route('user.withdraw.view') }}" class="btn btn-warning"><i
                                            class="fe fe-shopping-cart mr-1"></i> Withdraw </a>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Initiate a Seamless fund withdrawal!</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-pay">
                                            <p style="text-align: center; color: rgb(171, 167, 167)">
                                                Withdrawal of funds from your Glorylimited account balance is available
                                                using 5 payment systems - BTC, ETH, LTC, USDT, Perfect Money. Select the
                                                account then select the payment system to which you want to withdraw
                                                funds, enter the withdrawal amount and click the "Withdraw". <br>
                                                IMPORTANT!!! Withdrawals are available only to those wallets that are
                                                saved in the "Payment Data" section.
                                            </p>
                                            <ul class="tabs-menu nav">
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active show" id="pay1">
                                                    <div class="form-group">
                                                        <label class="form-label">Choose Account</label>
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" id="inputGroupSelect03">
                                                                <option selected>Choose...</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Payment Method</label>
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" id="inputGroupSelect03">
                                                                <option selected>Choose...</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Amount Withdraw</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Search for...">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Transaction Pin</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Search for...">
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn  btn-lg btn-primary">Confirm</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12">
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
                                                        <span class="font-weight-semibold fs-16 number-font">$558</span>
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
                                                        <span class="font-weight-semibold fs-16 number-font">$458</span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /////////////////// DEPOSIT TRANSACTIONS////////////////////////// --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">MY WITHDRAWAL TRANSACTIONS</div>
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
            @include('include.c_script')
</body>

</html>
