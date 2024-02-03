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
                            <div class="col-md-12 col-xl-3 col-lg-6">
                                <div class="card text-center">
                                    <div class="card-body"> <span>Our Global Funded Building Projects</span>
                                        <h1 class=" mb-1 mt-1 font-weight-bold" id="projects1">6,532</h1>
                                        <div class="text-muted"><i class="si si-arrow-up-circle text-danger"></i> <span
                                                class="">15%</span> Increase</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 col-lg-6">
                                <div class="card text-center">
                                    <div class="card-body"> <span>Our Global Funded Energy Projects</span>
                                        <h1 class=" mb-1 mt-1 font-weight-bold" id="projects2">5,835</h1>
                                        <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span
                                                class="">22%</span> Increase</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 col-lg-6">
                                <div class="card text-center">
                                    <div class="card-body"> <span>Our Global Funded Health Projects</span>
                                        <h1 class=" mb-1 mt-1 font-weight-bold" id="projects3">9,588</h1>
                                        <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span
                                                class="">32%</span> Increase</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 col-lg-6">
                                <div class="card text-center">
                                    <div class="card-body"> <span>Our Global Funded Charity Projects</span>
                                        <h1 class=" mb-1 mt-1 font-weight-bold" id="projects4">1,200</h1>
                                        <div class="text-muted"><i class="si si-arrow-up-circle text-warning"></i> <span
                                                class=""></span> Increase from 1,108 to 1,200</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if (!$plans->isEmpty())
                                @foreach ($plans as $key => $plan)
                                    <div class="col-md-12 col-xl-4">
                                        <div class="card overflow-hidden">
                                            @if ($plan->name == 'Community Infrastructure & Project')
                                            <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/pf4.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/pfd3.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/pfd4.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            @elseif($plan->name == 'Renewable Energy Revolution')
                                            <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/pf3.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/pfd5.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/pfd6.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                            <div id="carouselExampleSlidesOnly" class="carousel slide"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/pf2.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/pfd1.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src="{{ asset('assets/customer/assets/images/photos/pfd2.png') }}"
                                                                class="d-block w-100" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
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
                function updatePropertiesCount1() {
                    var currentCount1 = parseInt(localStorage.getItem('PF1Count')) || 6532;
                    var randomIncrement1 = Math.floor(Math.random() * 3) + 1;
                    var newCount1 = currentCount1 + randomIncrement1;
                    document.getElementById('projects1').innerText = `${newCount1.toLocaleString()}`;
                    localStorage.setItem('PF1Count', newCount1);
                }
                setInterval(updatePropertiesCount1, 3600000);
                updatePropertiesCount1();

                function updatePropertiesCount2() {
                    var currentCount2 = parseInt(localStorage.getItem('PF2Count')) || 5835;
                    var randomIncrement2 = Math.floor(Math.random() * 5) + 1;
                    var newCount2 = currentCount2 + randomIncrement2;
                    document.getElementById('projects2').innerText = `${newCount2.toLocaleString()}`;
                    localStorage.setItem('PF2Count', newCount2);
                }
                setInterval(updatePropertiesCount2, 3600000);
                updatePropertiesCount2();

                function updatePropertiesCount3() {
                    var currentCount3 = parseInt(localStorage.getItem('PF3Count')) || 9588;
                    var randomIncrement3 = Math.floor(Math.random() * 4) + 1;
                    var newCount3 = currentCount3 + randomIncrement3;
                    document.getElementById('projects3').innerText = `${newCount3.toLocaleString()}`;
                    localStorage.setItem('PF3Count', newCount3);
                }
                setInterval(updatePropertiesCount3, 3600000);
                updatePropertiesCount3();

                function updatePropertiesCount4() {
                    var currentCount4 = parseInt(localStorage.getItem('PF4Count')) || 1200;
                    var randomIncrement4 = Math.floor(Math.random() * 4) + 1;
                    var newCount4 = currentCount4 + randomIncrement4;
                    document.getElementById('projects4').innerText = `${newCount4.toLocaleString()}`;
                    localStorage.setItem('PF4Count', newCount4);
                }
                setInterval(updatePropertiesCount4, 3600000);
                updatePropertiesCount4();
            </script>
</body>

</html>
