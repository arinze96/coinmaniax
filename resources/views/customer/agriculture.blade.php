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
                                <h4 class="page-title mb-0">Invest In Agrictech</h4>
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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Curated Agritech Startup Potfolio We Invest</h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="under-countdown row">
                                            <div class="col">
                                                <div class="countdown">
                                                    <span class="days">35</span>
                                                    <span class="">Precision Farming Startups</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="countdown bg-secondary">
                                                    <span class="hours">17</span>
                                                    <span class="">Automated Vertical Farms.</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="countdown bg-info">
                                                    <span class="minutes">50</span>
                                                    <span class="">Automated Poultry Breeding</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="countdown bg-warning">
                                                    <span class="seconds">39</span>
                                                    <span class="">Automated Poultry Feeding</span>
                                                </div>
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
                                            src="{{ asset('assets/customer/assets/images/photos/ag0.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Precision Farming Startups</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">Precision
                                            farming involves the precise management of
                                            agricultural practices tailored to specific conditions of each part of the
                                            field. Explore strategic investment opportunities in carefully curated
                                            startup enterprises specializing in the fields of GPS technology, remote
                                            sensing, and soil/fertility analysis.
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
                                            src="{{ asset('assets/customer/assets/images/photos/vg.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Automated Vertical Farms.</a>
                                        </h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">It's an
                                            innovative approach to food production that
                                            maximizes space efficiency and minimizes environmental impact. Explore
                                            strategic investment opportunities in carefully curated startup enterprises
                                            specializing in the fields of Stacked Layers, Controlled Environment
                                            Agriculture (CEA), and Hydroponics
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
                                            src="{{ asset('assets/customer/assets/images/photos/po.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a href="#">Automated Poultry Breeding &
                                                Feeding</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">The
                                            startup’s robots automate the breeding process and
                                            encourage poultry to lay eggs in the nests, increasing fertility rates.
                                            Explore strategic investment opportunities in carefully curated startup
                                            enterprises specializing in the Automated Poultry Breeding, Automated
                                            Poultry Feeding, and Airation
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
                        {{-- <div class="pricing-tabs mt-7 bg-white br-7 px-5 pt-5 pb-0">
                            <div class="text-center">
                                <div class="pri-tabs-heading pri-tabs-heading2">
                                    <ul class="nav nav-price">
                                        <li>
                                            <a class="" data-toggle="tab" href="#year1">INVESTMENT PLANS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane pb-0 active show" id="month1">
                                        <div class="row text-center">
                                            <div class="col-lg-3">
                                                <div class="card plan-card shadow-none border">
                                                    <div class="card-block">
                                                        <div class="pt-4 pb-4">
                                                            <h1>
                                                                <i class="fa fa-plane plan-icon bg-primary"></i>
                                                            </h1>
                                                            <h6
                                                                class="text-uppercase font-weight-semibold text-primary">
                                                                Starter Pack
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                $19
                                                                <span class="text-muted m-l-10"><sup>Per
                                                                        Month</sup></span>
                                                            </h1>
                                                            <div class="plan-div-border"></div>
                                                        </div>
                                                        <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                            <p><strong>2 </strong> FreeDomain Name</p>
                                                            <p><strong>2</strong> One-Click Apps</p>
                                                            <p><strong>1</strong> Databases</p>
                                                            <p><strong>Money</strong> BackGuarntee</p>
                                                            <p><strong>24/7</strong> Support</p>
                                                            <a href="#" class="btn btn-lg btn-primary mt-4">Sign
                                                                Up Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card plan-card shadow-none border">
                                                    <div class="card-block">
                                                        <div class="pt-4 pb-4">
                                                            <h1>
                                                                <i class="fa fa-trophy plan-icon bg-secondary"></i>
                                                            </h1>
                                                            <h6
                                                                class="text-uppercase font-weight-semibold text-secondary">
                                                                Professional Pack
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                $29
                                                                <span class="text-muted m-l-10"><sup>Per
                                                                        Month</sup></span>
                                                            </h1>
                                                            <div class="plan-div-border"></div>
                                                        </div>
                                                        <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                            <p><strong>3 </strong> FreeDomain Name</p>
                                                            <p><strong>5</strong> One-Click Apps</p>
                                                            <p><strong>3</strong> Databases</p>
                                                            <p><strong>Money</strong> BackGuarntee</p>
                                                            <p><strong>24/7</strong> Support</p>
                                                            <a href="#"
                                                                class="btn btn-lg btn-secondary mt-4">Sign Up Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card plan-card shadow-none border">
                                                    <div class="card-block">
                                                        <div class="pt-4 pb-4">
                                                            <h1>
                                                                <i class="fa fa-umbrella plan-icon bg-info"></i>
                                                            </h1>
                                                            <h6 class="text-uppercase font-weight-semibold text-info">
                                                                Enterprise Pack
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                $39
                                                                <span class="text-muted m-l-10"><sup>Per
                                                                        Month</sup></span>
                                                            </h1>
                                                            <div class="plan-div-border"></div>
                                                        </div>
                                                        <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                            <p><strong>10 </strong> FreeDomain Name</p>
                                                            <p><strong>10</strong> One-Click Apps</p>
                                                            <p><strong>8</strong> Databases</p>
                                                            <p><strong>Money</strong> BackGuarntee</p>
                                                            <p><strong>24/7</strong> Support</p>
                                                            <a href="#" class="btn btn-lg btn-info mt-4">Sign Up
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card plan-card shadow-none border">
                                                    <div class="card-block">
                                                        <div class="pt-4 pb-4">
                                                            <h1>
                                                                <i class="fa fa-cube plan-icon bg-danger"></i>
                                                            </h1>
                                                            <h6
                                                                class="text-uppercase font-weight-semibold text-danger">
                                                                Unlimited Pack
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <h1
                                                                class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                                $49
                                                                <span class="text-muted m-l-10"><sup>Per
                                                                        Month</sup></span>
                                                            </h1>
                                                            <div class="plan-div-border"></div>
                                                        </div>
                                                        <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                            <p><strong>12 </strong> FreeDomain Name</p>
                                                            <p><strong>10</strong> One-Click Apps</p>
                                                            <p><strong>6</strong> Databases</p>
                                                            <p><strong>Money</strong> BackGuarntee</p>
                                                            <p><strong>24/7</strong> Support</p>
                                                            <a href="#" class="btn btn-lg btn-danger mt-4">Sign
                                                                Up Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- /////////////////// DEPOSIT TRANSACTIONS////////////////////////// --}}
                        <div class="row" style="margin-top: 30px;">
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
