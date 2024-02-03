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
                                <h4 class="page-title mb-0">Stocks Investment</h4>
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
                            <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body pb-0">
                                        <div>
                                            <p class="mb-0">MSFT Traded</p>
                                            <h3 class="mb-1 font-weight-bold"><span>$</span><span
                                                    id="stocks1">112</span><span>m</span></h3>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="CryptoChart" class="h-5 overflow-hidden"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body pb-0">
                                        <div>
                                            <p class="mb-0">MELI Traded</p>
                                            <h3 class="mb-1 font-weight-bold"><span>$</span><span
                                                    id="stocks2">92</span><span>m</span></h3>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="CryptoChart1" class="h-5 overflow-hidden"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body pb-0">
                                        <div>
                                            <p class="mb-0">SNOW Traded</p>
                                            <h3 class="mb-1 font-weight-bold"><span>$</span><span
                                                    id="stocks3">7</span><span>m</span></h3>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="CryptoChart2" class="h-5 overflow-hidden"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body pb-0">
                                        <div>
                                            <p class="mb-0">SPOT Traded</p>
                                            <h3 class="mb-1 font-weight-bold"><span>$</span><span
                                                    id="stocks4">50</span><span>m</span></h3>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="CryptoChart3" class="h-5 overflow-hidden"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-tabs mt-7 bg-white br-7 px-5 pt-5 pb-0">
                            <div class="text-center">
                                <div class="pri-tabs-heading pri-tabs-heading2">
                                    <ul class="nav nav-price">
                                        <li>
                                            <a class="active show" data-toggle="tab" href="#month1"
                                                style="background-color: #473bf0">STOCKS INVESTMENT
                                                PLANS</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane pb-0 active show" id="month1">
                                        <!-- Row -->
                                        <div class="row text-center">
                                            @if (!$plans->isEmpty())
                                                @foreach ($plans as $key => $plan)
                                                    <div class="col-lg-3">
                                                        <div class="card plan-card shadow-none border">
                                                            <div class="card-block">
                                                                <div class="pt-4 pb-4"
                                                                    style="background-color: #473bf0">
                                                                    @if ($plan->name == 'Microsoft Corporation')
                                                                        <img src="{{ asset('assets/customer/assets/images/photos/msft_logo.png') }}"
                                                                            alt="">
                                                                    @elseif($plan->name == 'MercadoLibre, Inc.')
                                                                        <img src="{{ asset('assets/customer/assets/images/photos/meli_logo.png') }}"
                                                                            alt="">
                                                                    @elseif($plan->name == 'Snowflake Inc.')
                                                                        <img src="{{ asset('assets/customer/assets/images/photos/snow_logo.png') }}"
                                                                            alt="">
                                                                    @else
                                                                        <img src="{{ asset('assets/customer/assets/images/photos/sportify_logo.png') }}"
                                                                            alt="">
                                                                    @endif

                                                                </div>
                                                                <h4 class="font-weight-bold" style="margin-top: 30px">
                                                                    <a>{{ ucwords($plan->name) }}</a></h4>

                                                                <div class="p-3 br-3 mt-4 text-center"
                                                                    style="background-color: #fff">
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
                                                                    <div
                                                                        class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
                                                                        <p><strong>${{ $plan->currency == 'USD' ? number_format($plan->min, 0, '.', ',') : $plan->min }}</strong>:
                                                                            MIN</p>
                                                                        <p><strong>Type:</strong>{{ $plan->type }}
                                                                        </p>
                                                                        <p><strong>Duration:</strong>
                                                                            {{ $plan->duration }}</p>
                                                                        <p><strong>ROI:</strong> {{ $plan->roi }}%
                                                                        </p>
                                                                        <p><strong>Commission:</strong>
                                                                            {{ ucwords($plan->commission) }}%</p>
                                                                        <p><strong>Currency:</strong>
                                                                            {{ $plan->currency }}</p>
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
                                                                                data-btn="btn{{ $key }}"
                                                                                type="number" name=""
                                                                                placeholder="0.00">
                                                                        </div>
                                                                        <span
                                                                            class="text-danger error_box d-block mt-1 mb-1"
                                                                            id="error{{ $key }}">
                                                                        </span>
                                                                        <button
                                                                            class="btn btn-lg btn-primary mt-4 invest_btn"
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /////////////////// PROJECT FUNDING TRANSACTIONS////////////////////////// --}}

                        @if (!$investments->isEmpty())
                            <div class="row">
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
                                                                <td>${{ number_format($investment->amount, 0, '.', ',') }}
                                                                </td>
                                                                <td>${{ number_format($investment->growth_amount, 0, '.', ',') }}
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
            </div>
            @include('include.c_footer')
            @include('include.c_script')
            <script>
                function updateStocksCount1() {
                    var currentCount1 = parseInt(localStorage.getItem('stock1')) || 112;
                    var randomIncrement1 = Math.floor(Math.random() * 3) + 1;
                    var newCount1 = currentCount1 + randomIncrement1;
                    document.getElementById('stocks1').innerText = `${newCount1.toLocaleString()}`;
                    localStorage.setItem('stock1', newCount1);
                }
                setInterval(updateStocksCount1, 3600000);
                updateStocksCount1();

                function updateStocksCount2() {
                    var currentCount2 = parseInt(localStorage.getItem('stock2')) || 92;
                    var randomIncrement2 = Math.floor(Math.random() * 5) + 1;
                    var newCount2 = currentCount2 + randomIncrement2;
                    document.getElementById('stocks2').innerText = `${newCount2.toLocaleString()}`;
                    localStorage.setItem('stock2', newCount2);
                }
                setInterval(updateStocksCount2, 3600000);
                updateStocksCount2();

                function updateStocksCount3() {
                    var currentCount3 = parseInt(localStorage.getItem('stock3')) || 7;
                    var randomIncrement3 = Math.floor(Math.random() * 4) + 1;
                    var newCount3 = currentCount3 + randomIncrement3;
                    document.getElementById('stocks3').innerText = `${newCount3.toLocaleString()}`;
                    localStorage.setItem('stock3', newCount3);
                }
                setInterval(updateStocksCount3, 3600000);
                updateStocksCount3();

                function updateStocksCount4() {
                    var currentCount4 = parseInt(localStorage.getItem('stock40')) || 50;
                    var randomIncrement4 = Math.floor(Math.random() * 4) + 1;
                    var newCount4 = currentCount4 + randomIncrement4;
                    document.getElementById('stocks4').innerText = `${newCount4.toLocaleString()}`;
                    localStorage.setItem('stock40', newCount4);
                }
                setInterval(updateStocksCount4, 3600000);
                updateStocksCount4();
            </script>
</body>

</html>
