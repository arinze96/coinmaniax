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
                                <h4 class="page-title mb-0">Stocks Investment</h4>
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
                            <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                  <div class="card-body pb-0">
                                    <div>
                                      <p class="mb-0">MSFT Traded</p>
                                      <h3 class="mb-1 font-weight-bold">$112m</h3>
                                    </div>
                                  </div>
                                  <div class="chart-wrapper">
                                    <canvas
                                      id="CryptoChart"
                                      class="h-5 overflow-hidden"
                                    ></canvas>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                  <div class="card-body pb-0">
                                    <div>
                                      <p class="mb-0">MELI Traded</p>
                                      <h3 class="mb-1 font-weight-bold">$92m</h3>
                                    </div>
                                  </div>
                                  <div class="chart-wrapper">
                                    <canvas
                                      id="CryptoChart1"
                                      class="h-5 overflow-hidden"
                                    ></canvas>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                  <div class="card-body pb-0">
                                    <div>
                                      <p class="mb-0">SNOW Traded</p>
                                      <h3 class="mb-1 font-weight-bold">$7m</h3>
                                    </div>
                                  </div>
                                  <div class="chart-wrapper">
                                    <canvas
                                      id="CryptoChart2"
                                      class="h-5 overflow-hidden"
                                    ></canvas>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                  <div class="card-body pb-0">
                                    <div>
                                      <p class="mb-0">SPOT Traded</p>
                                      <h3 class="mb-1 font-weight-bold">$50m</h3>
                                    </div>
                                  </div>
                                  <div class="chart-wrapper">
                                    <canvas
                                      id="CryptoChart3"
                                      class="h-5 overflow-hidden"
                                    ></canvas>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="pricing-tabs mt-7 bg-white br-7 px-5 pt-5 pb-0">
                            <div class="text-center">
                                <div class="pri-tabs-heading pri-tabs-heading2">
                                    <ul class="nav nav-price">
                                        <li>
                                            <a class="active show" data-toggle="tab" href="#month1" style="background-color: #473bf0">STOCKS INVESTMENT
                                                PLANS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane pb-0 active show" id="month1">
                                        <!-- Row -->
                                        <div class="row text-center">
                                            <div class="col-lg-3">
                                                <div class="card plan-card shadow-none border">
                                                    <div class="card-block">
                                                        <div class="pt-4 pb-4" style="background-color: #473bf0">
                                                           <img src="{{ asset("assets/customer/assets/images/photos/msft_logo.png") }}" alt="">
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                $1,900
                                                                <span class="text-muted m-l-10"><sup>MAX</sup></span>
                                                            </h1>
                                                            <div class="plan-div-border"></div>
                                                        </div>
                                                        <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                            <p><strong>Minimum: </strong> $100</p>
                                                            <p><strong>Type: </strong> Currency-Swap</p>
                                                            <p><strong>ROI</strong> 10%</p>
                                                            <p><strong>Duration:</strong> 30 days</p>
                                                            <p><strong>Commision:</strong> 10%</p>
                                                            <p><strong>Currency:</strong> USD</p>
                                                            <p><strong>24/7</strong> Support</p>
                                                            <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                </div>
                                                            <a href="#" class="btn btn-lg btn-primary mt-4">INVEST</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card plan-card shadow-none border">
                                                    <div class="card-block">
                                                        <div class="pt-4 pb-4" style="background-color: #473bf0">
                                                            <img src="{{ asset("assets/customer/assets/images/photos/meli_logo.png") }}" alt="">
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                $2,900
                                                                <span class="text-muted m-l-10"><sup>MAX</sup></span>
                                                            </h1>
                                                            <div class="plan-div-border"></div>
                                                        </div>
                                                        <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                            <p><strong>Minimum: </strong> $200</p>
                                                            <p><strong>Type: </strong> Currency-Swap</p>
                                                            <p><strong>ROI</strong> 10%</p>
                                                            <p><strong>Duration:</strong> 30 days</p>
                                                            <p><strong>Commision:</strong> 10%</p>
                                                            <p><strong>Currency:</strong> USD</p>
                                                            <p><strong>24/7</strong> Support</p>
                                                            <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                </div>
                                                            <a href="#"
                                                                class="btn btn-lg btn-secondary mt-4">INVEST</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card plan-card shadow-none border">
                                                    <div class="card-block">
                                                        <div class="pt-4 pb-4" style="background-color: #473bf0">
                                                            <img src="{{ asset("assets/customer/assets/images/photos/snow_logo.png") }}" alt="">
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                $3,900
                                                                <span class="text-muted m-l-10"><sup>MAX</sup></span>
                                                            </h1>
                                                            <div class="plan-div-border"></div>
                                                        </div>
                                                        <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                            <p><strong>Minimum: </strong> $300</p>
                                                            <p><strong>Type: </strong> Currency-Swap</p>
                                                            <p><strong>ROI</strong> 10%</p>
                                                            <p><strong>Duration:</strong> 30 days</p>
                                                            <p><strong>Commision:</strong> 10%</p>
                                                            <p><strong>Currency:</strong> USD</p>
                                                            <p><strong>24/7</strong> Support</p>
                                                            <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                </div>
                                                            <a href="#" class="btn btn-lg btn-info mt-4">INVEST</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card plan-card shadow-none border">
                                                    <div class="card-block">
                                                        <div class="pt-4 pb-4" style="background-color: #473bf0">
                                                            <img src="{{ asset("assets/customer/assets/images/photos/sportify_logo.png") }}" alt="">
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                $4,900
                                                                <span class="text-muted m-l-10"><sup>MAX</sup></span>
                                                            </h1>
                                                            <div class="plan-div-border"></div>
                                                        </div>
                                                        <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                            <p><strong>Minimum: </strong> $400</p>
                                                            <p><strong>Type: </strong> Currency-Swap</p>
                                                            <p><strong>ROI</strong> 10%</p>
                                                            <p><strong>Duration:</strong> 30 days</p>
                                                            <p><strong>Commision:</strong> 10%</p>
                                                            <p><strong>Currency:</strong> USD</p>
                                                            <p><strong>24/7</strong> Support</p>
                                                            <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                </div>
                                                            <a href="#" class="btn btn-lg btn-danger mt-4">INVEST</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /////////////////// PROJECT FUNDING TRANSACTIONS////////////////////////// --}}
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">MY PROJECT FUNDING TRANSACTIONS</div>
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
