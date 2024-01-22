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
                                <h4 class="page-title mb-0">Invest In Real Estate</h4>
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
                            <div class="col-lg-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-2 fs-18 text-muted">
                                                    Total Condos (Europe)
                                                </div>
                                                <h1 class="font-weight-bold mb-1">45,675</h1>
                                                <span class="text-primary"><i class="fa fa-arrow-up mr-1"></i>
                                                    +1.4%</span>
                                            </div>
                                            <div class="col col-auto">
                                                <div class="mx-auto chart-circle chart-circle-md chart-circle-primary mt-sm-0 mb-0"
                                                    data-value="0.85" data-thickness="12" data-color="#60499a">
                                                    <div class="mx-auto chart-circle-value text-center fs-20">
                                                        85%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-2 fs-18 text-muted">Total Villas (Dubai)</div>
                                                <h1 class="font-weight-bold mb-1">30,175</h1>
                                                <span class="text-success"><i class="fa fa-arrow-up mr-1"></i>
                                                    +1.8%</span>
                                            </div>
                                            <div class="col col-auto">
                                                <div class="mx-auto chart-circle chart-circle-md chart-circle-success mt-sm-0 mb-0"
                                                    data-value="0.60" data-thickness="12" data-color="#2dce89">
                                                    <div class="mx-auto chart-circle-value text-center fs-20">
                                                        60%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-2 fs-18 text-muted">Total Apartments (Asia)</div>
                                                <h1 class="font-weight-bold mb-1">7,745</h1>
                                                <span class="text-danger"><i class="fa fa-arrow-down mr-1"></i>
                                                    -2.4%</span>
                                            </div>
                                            <div class="col col-auto">
                                                <div class="mx-auto chart-circle chart-circle-md chart-circle-secondary mt-sm-0 mb-0"
                                                    data-value="0.45" data-thickness="12" data-color="#f7346b">
                                                    <div class="mx-auto chart-circle-value text-center fs-20">
                                                        25%
                                                    </div>
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
                                            src="{{ asset('assets/customer/assets/images/photos/real3.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Warsaw condo complex</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">Experience the height of luxury in this Warsaw high-rise condo complex, where breathtaking views meet cutting-edge design. Indulge in stylish, spacious living spaces with top-tier amenities, all nestled in the heart of Barcelona's dynamic and culturally rich atmosphere.
                                        </div>
                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $23,500
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
                                            src="{{ asset('assets/customer/assets/images/photos/real4.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Barcelona condo complex</a>
                                        </h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">Embrace cosmopolitan living in our Barcelona high-rise condo complex. A fusion of contemporary architecture and Mediterranean allure, each residence boasts stunning sea or city views. Elevate your lifestyle with modern amenities and the vibrant energy of this thriving urban enclave.
                                        </div>
                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1
                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $13,560
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$2,750</strong>: MIN</p>
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
                                            src="{{ asset('assets/customer/assets/images/photos/real1.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a href="#">Rotterdam high-rise apartment</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">Discover unparalleled elegance in this Rotterdam high-rise apartment, seamlessly blending modern design and panoramic city views. Immerse yourself in luxury with premium finishes, exclusive amenities, and a central location, creating a lifestyle that epitomizes urban sophistication and comfort.
                                        </div>

                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1
                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $6,850
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$3,400</strong>: MIN</p>
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

                        <div class="row">
                            <div class="col-md-12 col-xl-4">
                                <div class="card overflow-hidden">
                                    <a href="#"><img class="card-img-top  "
                                            src="{{ asset('assets/customer/assets/images/photos/real2.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Frankfurt high-rise apartment</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">Elevate your lifestyle in a Frankfurt high-rise apartment that redefines urban living. Enjoy breathtaking cityscape views, contemporary design, and premium amenities. Experience the epitome of sophistication at the intersection of style and comfort in this cosmopolitan residence.
                                        </div>
                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $6,230
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$3,300</strong>: MIN</p>
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
                                            src="{{ asset('assets/customer/assets/images/photos/real5.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a>Dubai Creek Club Villas.</a>
                                        </h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">Experience the pinnacle of sophistication in this stunning Dubai villa, a masterpiece of modern design and luxury. Nestled in a serene locale, it offers majestic architectural beauty, state-of-the-art facilities, and lush, landscaped gardens, creating an oasis of tranquility and elegance in Dubai's dynamic environment.
                                        </div>
                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1
                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $3,500
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$1,750</strong>: MIN</p>
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
                                            src="{{ asset('assets/customer/assets/images/photos/real6.png') }}"
                                            alt="img"></a>
                                    <div class="card-body d-flex flex-column">
                                        <h4 class="font-weight-bold"><a href="#">Club Villas at Dubai Hills</a></h4>
                                        <div class="text-muted"
                                            style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">Indulge in opulent living with this exquisite Dubai villa, boasting unparalleled luxury and panoramic skyline views. Immerse yourself in contemporary elegance, featuring lavish interiors, private amenities, and seamless integration of cutting-edge technology. Elevate your lifestyle amidst the allure of this prestigious residence in the heart of Dubai's vibrant landscape.
                                        </div>

                                        <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                            <div>
                                                <h1
                                                    class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                    $3,850
                                                    <span class="text-muted m-l-10"
                                                        style="font-size: 20px; color: #000"><sup
                                                            style="color: #000">MAX</sup></span>
                                                </h1>
                                                <div class="plan-div-border"></div>
                                            </div>
                                            <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                <p><strong>$1,300</strong>: MIN</p>
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

                        {{-- /////////////////// REAL ESTATE TRANSACTIONS////////////////////////// --}}
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">MY REAL ESTATE TRANSACTIONS</div>
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
