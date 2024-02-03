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
                            <div class="col-xl-4 col-md-12 col-lg-6">
                                <div class="card overflow-hidden">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col">
                                                <p class="mb-1">Total Coinmaniax 401(k)</p>
                                                <h2 class="mb-0 font-weight-bold"><span>$</span><span id="rt1">12.90</span><span>m</span></h2>
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
                                                <p class="mb-1">Total Coinmaniax IRA(s)</p>
                                                <h2 class="mb-0 font-weight-bold"><span>$</span><span id="rt2">3.45</span><span>m</span></h2>
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
                                                <p class="mb-1">Total Fixed Annuities</p>
                                                <h2 class="mb-0 font-weight-bold"><span>$</span><span id="rt3">17.50</span><span>m</span></h2>
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
                            @if (!$plans->isEmpty())
                                @foreach ($plans as $key => $plan)
                                    <div class="col-md-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            @if ($plan->name == 'Coinmaniax 401(k)')
                                            <a href="#"><img class="card-img-top "
                                                src="{{ asset('assets/customer/assets/images/photos/rtt1.png') }}"
                                                alt="img"></a>
                                            @elseif($plan->name == 'Fixed Index Annuities')
                                            <a href="#"><img class="card-img-top "
                                                src="{{ asset('assets/customer/assets/images/photos/rtt2.png') }}"
                                                alt="img"></a>
                                            @else
                                            <a href="#"><img class="card-img-top "
                                                src="{{ asset('assets/customer/assets/images/photos/rtt3.png') }}"
                                                alt="img"></a>
                                            @endif
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
                        </div>
                        {{-- /////////////////// AGRITECH TRANSACTIONS////////////////////////// --}}
                       
                        @if (!$investments->isEmpty())
                            <div class="row">
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
                function updateRetirementCount1() {
                    var currentCount1 = parseInt(localStorage.getItem('retirement1')) || 12.90;
                    var randomIncrement1 = (Math.random() * 0.1) + 0.25;
                    var newCount1 = currentCount1 + randomIncrement1;
                    document.getElementById('rt1').innerText = `${newCount1.toLocaleString()}`;
                    localStorage.setItem('retirement1', newCount1);
                }
                setInterval(updateRetirementCount1, 3600000);
                updateRetirementCount1();

                function updateRetirementCount2() {
                    var currentCount2 = parseInt(localStorage.getItem('retirement2')) || 3.45;
                    var randomIncrement2 = (Math.random() * 0.2) + 0.32;
                    var newCount2 = currentCount2 + randomIncrement2;
                    document.getElementById('rt2').innerText = `${newCount2.toLocaleString()}`;
                    localStorage.setItem('retirement2', newCount2);
                }
                setInterval(updateRetirementCount2, 3600000);
                updateRetirementCount2();

                function updateRetirementCount3() {
                    var currentCount3 = parseInt(localStorage.getItem('retirement3')) || 17.50;
                    var randomIncrement3 = (Math.random() * 0.3) + 0.125;
                    var newCount3 = currentCount3 + randomIncrement3;
                    document.getElementById('rt3').innerText = `${newCount3.toLocaleString()}`;
                    localStorage.setItem('retirement3', newCount3);
                }
                setInterval(updateRetirementCount3, 3600000);
                updateRetirementCount3();
            </script>
</body>

</html>
