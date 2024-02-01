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
                                <h4 class="page-title mb-0">Invest In Agrictech</h4>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
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
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Curated Agritech Startup Potfolio We Invest</h3>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="under-countdown row">
                                            <div class="col-md-3" style="margin-bottom: 10px;">
                                                <div class="countdown">
                                                    <span class="days numbers" id="product1">35</span>
                                                    <span class="">Precision Farming Startups</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="margin-bottom: 10px;">
                                                <div class="countdown bg-secondary">
                                                    <span class="hours numbers" id="product2">17</span>
                                                    <span class="">Automated Vertical Farms.</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="margin-bottom: 10px;">
                                                <div class="countdown bg-info">
                                                    <span class="minutes numbers" id="product3">50</span>
                                                    <span class="">Automated Poultry Breeding</span>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="margin-bottom: 10px;">
                                                <div class="countdown bg-warning">
                                                    <span class="seconds numbers" id="product4">39</span>
                                                    <span class="">Industrial Meat Production</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if (!$plans->isEmpty())
                                @foreach ($plans as $key => $plan)
                                    <div class="col-md-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            @if ($plan->name == 'Precision Farming Startups Plan')
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/ag0.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/skycrops.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/instacrops.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif($plan->name == 'Automated Vertical Farms.')
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/vg.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/onepointone.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/hexagroM.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/po.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/tera.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/trinity.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            {{-- <a href="#"><img class="card-img-top  "
                                            src="{{ asset('assets/customer/assets/images/photos/ag0.png') }}"
                                            alt="img"></a> --}}
                                            <div class="card-body d-flex flex-column">
                                                <h4 class="font-weight-bold"><a>{{ ucwords($plan->name) }}</a></h4>
                                                <div class="text-muted"
                                                    style="padding-bottom: 10px; border-bottom: 1px solid #dfcfcf;">
                                                    {{ ucwords($plan->plan_description) }}
                                                </div>
                                                <div class="p-3 br-3 mt-4 text-center" style="background-color: #fff">
                                                    <div>
                                                        <h1
                                                            class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">
                                                            ${{ $plan->currency == 'USD' ? number_format($plan->max, 0, '.', ',') : $plan->max }}
                                                            <span class="text-muted m-l-10"
                                                                style="font-size: 20px; color: #000"><sup
                                                                    style="color: #000">MAX</sup></span>
                                                        </h1>
                                                        <div class="plan-div-border"></div>
                                                    </div>
                                                    <div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                        <p><strong>${{ $plan->currency == 'USD' ? number_format($plan->min, 0, '.', ',') : $plan->min }}</strong>:
                                                            MIN</p>
                                                        <p><strong>Type:</strong>{{ $plan->type }}</p>
                                                        <p><strong>Duration:</strong> {{ $plan->duration }}</p>
                                                        <p><strong>ROI:</strong> {{ $plan->roi }}%</p>
                                                        <p><strong>Commission:</strong>
                                                            {{ ucwords($plan->commission) }}%</p>
                                                        <p><strong>Currency:</strong> {{ $plan->currency }}</p>
                                                        <p><strong>24/7</strong> Support</p>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="text"
                                                                class="form-control investment_amount"
                                                                aria-label="Amount (to the nearest dollar)"
                                                                placeholder="Enter Amount "
                                                                id="input{{ $key }}"
                                                                data-btn="btn{{ $key }}" type="number"
                                                                name="" placeholder="0.00">
                                                        </div>
                                                        <span class="text-danger error_box d-block mt-1 mb-1"
                                                            id="error{{ $key }}">
                                                        </span>
                                                        <button class="btn btn-lg btn-primary mt-4 invest_btn"
                                                            data-key="{{ $key }}"
                                                            data-error="error{{ $key }}"
                                                            id="btn{{ $key }}"
                                                            data-currency="{{ $plan->currency }}"
                                                            data-min="{{ $plan->currency == 'USD' ? number_format(round($plan->min, 2), 0, '.', '') : $plan->min }}"
                                                            data-max="{{ $plan->currency == 'USD' ? number_format(round($plan->max, 2), 0, '.', '') : $plan->max }}"
                                                            data-plan-url="{{ route('user.plan.view', ['currency']) }}"
                                                            data-plan-id="{{ $plan->id }}">Invest
                                                            Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            {{-- <div class="col-md-12 col-xl-4">
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
                            </div> --}}
                        </div>
                        {{-- /////////////////// AGRITECH TRANSACTIONS////////////////////////// --}}


                        @if (!$investments->isEmpty())
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">MY AGRITECH INVESTMENT TRANSACTIONS</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap" id="example1">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">S/N</th>
                                                            <th class="wd-15p border-bottom-0">MESSAGE</th>
                                                            <th class="wd-15p border-bottom-0">AMOUNT</th>
                                                            <th class="wd-15p border-bottom-0">GROWTH AMOUNT</th>
                                                            <th class="wd-10p border-bottom-0">INVESTMENT TYPE</th>
                                                            <th class="wd-25p border-bottom-0">STATUS</th>
                                                            <th class="wd-25p border-bottom-0">START DATE</th>
                                                            <th class="wd-25p border-bottom-0">CLOSE DATE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($investments as $key => $investment)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>{{ ucwords($investment->message) }}</td>
                                                                <td>{{ number_format($investment->amount, 0, '.', ',') }}
                                                                </td>
                                                                <td>{{ number_format($investment->growth_amount, 0, '.', ',') }}
                                                                </td>
                                                                <td>{{ ucwords($investment->type) }}</td>
                                                                <td>{{ ucwords(config('app.tx_status')[$investment->status]) }}
                                                                </td>
                                                                <td>{{ date('d M,Y', strtotime($investment->created_at)) }}
                                                                <td>{{ date('d M,Y', strtotime($investment->close_date)) }}
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
                <!-- End app-content-->
            </div>
            <!--Footer-->
            @include('include.c_footer')
            @include('include.c_script1')
            <script>
                function updateProductCount() {
                    var currentCount = parseInt(localStorage.getItem('product1Count')) || 35;
                    var currentCount1 = parseInt(localStorage.getItem('product2Count')) || 17;
                    var currentCount2 = parseInt(localStorage.getItem('product3Count')) || 50;
                    var currentCount3 = parseInt(localStorage.getItem('product4Count')) || 39;
                    var randomIncrement = Math.floor(Math.random() * 3) + 1;
                    var randomIncrement1 = Math.floor(Math.random() * 5) + 1;
                    var randomIncrement2 = Math.floor(Math.random() * 4) + 1;
                    var randomIncrement3 = Math.floor(Math.random() * 2) + 1;
                    var newCount = currentCount + randomIncrement;
                    var newCount1 = currentCount1 + randomIncrement1;
                    var newCount2 = currentCount2 + randomIncrement2;
                    var newCount3 = currentCount3 + randomIncrement3;
                    document.getElementById('product1').innerText = newCount;
                    document.getElementById('product2').innerText = newCount1;
                    document.getElementById('product3').innerText = newCount2;
                    document.getElementById('product4').innerText = newCount3;
                    localStorage.setItem('product1Count', newCount);
                    localStorage.setItem('product2Count', newCount1);
                    localStorage.setItem('product3Count', newCount2);
                    localStorage.setItem('product4Count', newCount3);
                }
                setInterval(updateProductCount, 3600000);
                updateProductCount();
            </script>
</body>

</html>
