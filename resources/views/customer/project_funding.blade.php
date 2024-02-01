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
                                <h4 class="page-title mb-0">Invest In The Projects We Fund</h4>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="{{ route('user.setting.view', ['general']) }}" class="btn btn-info"><i class="fe fe-settings mr-1"></i>
                                        Settings </a>
                                    <a href="{{ route('user.deposit.view', ['usd']) }}" class="btn btn-danger"><i class="fe fe-printer mr-1"></i>
                                        Deposit </a>
                                    <a href="{{ route('user.withdraw.view') }}" class="btn btn-warning"><i
                                            class="fe fe-shopping-cart mr-1"></i> Withdraw </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Our Global Funded Building Projects</span>
									  <h1 class=" mb-1 mt-1 font-weight-bold">6,532</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-danger"></i> <span class="">15%</span> Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Our Global Funded Energy Projects</span>
									  <h1 class=" mb-1 mt-1 font-weight-bold">5,835</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span class="">22%</span> Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Our Global Funded Health Projects</span>
									  <h1 class=" mb-1 mt-1 font-weight-bold">9,588</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span class="">32%</span> Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Our Global Funded Charity Projects</span>
									  <h1 class=" mb-1 mt-1 font-weight-bold">1,200</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-warning"></i> <span class=""></span> Increase from 1,108 to 1,200</div>
									</div>
								</div>
							</div>
						</div>
                        <div class="row">
                            <div class="col-md-12 col-xl-4">
                                <div class="card overflow-hidden">
                                    <a href="#"><img class="card-img-top  "
                                            src="{{ asset('assets/customer/assets/images/photos/pf4.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Community Infrastructure & Project</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">Strengthen communities against disasters by funding projects that build resilient infrastructure, early warning systems, and community preparedness programs.
                                        </div>
                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $150,000
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$5,000</strong>: MIN</p>
                                                <p><strong>Type:</strong>currency-swap</p>
                                                <p><strong>Duration:</strong> 30 days</p>
                                                <p><strong>ROI:</strong> 35%</p>
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
                                            src="{{ asset('assets/customer/assets/images/photos/pf3.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Renewable Energy Revolution</a>
                                        </h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">We fund startups that harness clean energy sources for a sustainable future, investing in solar, wind, and innovative green technologies. We invest in high growth renewable energy startups

                                        </div>
                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1
                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $1,000,000
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$20,000</strong>: MIN</p>
                                                <p><strong>Type:</strong>currency-swap</p>
                                                <p><strong>Duration:</strong> 30 days</p>
                                                <p><strong>ROI:</strong> 35%</p>
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
                                            src="{{ asset('assets/customer/assets/images/photos/pf2.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a href="#">Healthcare Innovations Fund</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">We Support breakthrough medical solutions, advancing healthcare accessibility, and technology-driven innovations for a healthier and more connected world
                                        </div>

                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1
                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $500,000
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$50,000</strong>: MIN</p>
                                                <p><strong>Type:</strong>currency-swap</p>
                                                <p><strong>Duration:</strong> 30 days</p>
                                                <p><strong>ROI:</strong> 35%</p>
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
                <!-- End app-content-->
            </div>
            <!--Footer-->
            @include('include.c_footer')
            @include('include.c_script')
</body>

</html>
