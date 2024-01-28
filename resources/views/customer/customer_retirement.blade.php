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
                                <h4 class="page-title mb-0">Invest In Your Retirement</h4>
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
                            <div class="col-xl-4 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <p class="mb-1">Coinmaniax 401(k)</p>
                                                <h2 class="mb-0 font-weight-bold">$0.00</h2>
                                            </div>
                                            <div class="col">
                                                <div id="spark1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <p class="mb-1">Coinmaniax IRA(s)</p>
                                                <h2 class="mb-0 font-weight-bold">$0.00</h2>
                                            </div>
                                            <div class="col">
                                                <div id="spark2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <p class="mb-1">Fixed Annuities</p>
                                                <h2 class="mb-0 font-weight-bold">$0.00</h2>
                                            </div>
                                            <div class="col">
                                                <div id="spark3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xl-4">
                                <div class="card overflow-hidden">
                                    <a href="#"><img class="card-img-top  "
                                            src="{{ asset('assets/customer/assets/images/photos/rtt1.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Coinmaniax 401(k)</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">A 401(k) plan is a widely-utilized retirement savings tool offered by many employers in the United States. It is named after the section of the U.S. Internal Revenue Code that governs it. This type of plan allows employees to save and invest a portion of their paycheck before taxes are taken out. Here are key aspects of 401(k) plans
                                        </div>
                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $9,119
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$3000</strong>: MIN</p>
                                                <p><strong>Type:</strong>currency-swap</p>
                                                <p><strong>Duration:</strong> 30 days</p>
                                                <p><strong>ROI:</strong> 25%</p>
                                                <p><strong>Currency:</strong> USD</p>
                                                <p><strong>24/7</strong> Support</p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                </div>
                                                <a href="#" class="btn btn-lg btn-primary mt-4">Invest Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card overflow-hidden">
                                    <a href="#"><img class="card-img-top "
                                            src="{{ asset('assets/customer/assets/images/photos/rtt2.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Fixed Index Annuities</a>
                                        </h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">An annuity is a type of insurance contract that can supplement your retirement savings. There are many forms of annuities to choose from, but we believe that fixed annuities are your best choice. Fixed annuities are easier to understand and compare to one another than some different kinds of annuity contracts, like indexed or variable annuities. 
                                        </div>
                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $3,500
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$750</strong>: MIN</p>
                                                <p><strong>Type:</strong>currency-swap</p>
                                                <p><strong>Duration:</strong> 30 days</p>
                                                <p><strong>ROI:</strong> 25%</p>
                                                <p><strong>Currency:</strong> USD</p>
                                                <p><strong>24/7</strong> Support</p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                </div>
                                                <a href="#" class="btn btn-lg btn-primary mt-4">Invest Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card overflow-hidden">
                                    <a href="#"><img class="card-img-top "
                                            src="{{ asset('assets/customer/assets/images/photos/rtt3.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Coinmaniax IRA(s)</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">Individual Retirement Accounts (IRAs) are tax-advantaged accounts that allow individuals in the United States to save for retirement. They are a critical component of many people's retirement plans, offering various tax benefits and investment opportunities. Here are the key features of IRAs
                                        </div>

                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1
                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $1,850
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$300</strong>: MIN</p>
                                                <p><strong>Type:</strong>currency-swap</p>
                                                <p><strong>Duration:</strong> 30 days</p>
                                                <p><strong>ROI:</strong> 25%</p>
                                                <p><strong>Currency:</strong> USD</p>
                                                <p><strong>24/7</strong> Support</p>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                </div>
                                                <a href="#" class="btn btn-lg btn-primary mt-4">Invest Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /////////////////// AGRITECH TRANSACTIONS////////////////////////// --}}
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">MY RETIREMENT INVESTMENT TRANSACTIONS</div>
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @include('include.c_footer')
            @include('include.c_script')
</body>

</html>
