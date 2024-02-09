<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('include.c_css')
    <style>
        :root {
            --Cyan: hsl(179, 62%, 43%);
            --Light-Cyan: hsl(179, 47%, 52%);
            --Bright-Yellow: hsl(71, 73%, 54%);
            --Light-Bright-Yellow: hsl(71, 73%, 62%);
            --Light-Gray: hsl(204, 43%, 93%);
            --Grayish-Blue: hsl(218, 22%, 67%);
            --border-radius: 6px;
        }

        ul,
        ol {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .main {
            display: flex;
            align-items: center;
            justify-content: center;
            /* min-height: 100vh; */
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #fff;
        }

        .card-wrapper {
            max-width: 90%;
            margin: auto;
            text-align: start;
            overflow: hidden;
            border-radius: calc(var(--border-radius) + 2px);
            box-shadow: 4px 10px 15px hsla(217, 22%, 67%, 0.438);
        }

        @media (min-width: 767px) {
            .card-wrapper {
                max-width: 640px;
            }
        }

        .card-wrapper .card-summary {
            background-color: #fff;
            padding: 30px 25px;
        }

        @media (min-width: 767px) {
            .card-wrapper .card-summary {
                padding: 45px 40px;
            }
        }

        .card-summary h1 {
            color: var(--Cyan);
            margin-bottom: 20px;
        }

        .card-summary h2 {
            color: var(--Bright-Yellow);
            margin-bottom: 25px;
            font-size: 20px;
        }

        @media (min-width: 767px) {
            .card-summary h2 {
                margin-bottom: 10px;
            }
        }

        .card-summary p {
            color: var(--Grayish-Blue);
            line-height: 1.7;
        }

        @media (min-width: 767px) {
            .card-wrapper .card-features {
                display: flex;
            }
        }

        .card-wrapper .card-features>div {
            padding: 30px 24px;
            color: var(--Light-Gray);
        }

        @media (min-width: 767px) {
            .card-wrapper .card-features>div {
                padding: 40px;
                flex: 1;
            }
        }

        .card-features .feature-title {
            margin-bottom: 20px;
            font-size: 22px;
            color: #fff;
        }

        .card-features .subscribtion {
            background-color: var(--Cyan);
        }

        .card-features .why-us {
            background-color: var(--Light-Cyan);
        }

        .subscribtion .pricing-plan p:first-child {
            font-size: 18px;
            margin-bottom: 12px;
        }

        .subscribtion .pricing-plan p:first-child span {
            font-weight: 700;
            font-size: 35px;
            color: #fff;
            margin-right: 15px;
        }

        .subscribtion .btn {
            display: block;
            width: 100%;
            margin-top: 30px;
            padding: 15px;
            text-align: center;
            font-weight: 700;
            font-size: 18px;
            color: #fff;
            background-color: var(--Bright-Yellow);
            border-radius: var(--border-radius);
            transition: 200ms linear;
        }

        .subscribtion .btn:hover {
            background-color: var(--Light-Bright-Yellow);
        }

        .why-us ul li:not(:last-child) {
            margin-bottom: 5px;
        }
    </style>
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
                                    <div class="card-body"> <span style="font-size: 10px">Our Global Funded Building Projects</span>
                                        <h1 class=" mb-1 mt-1 font-weight-bold" id="projects1">6,532</h1>
                                        <div class="text-muted"><i class="si si-arrow-up-circle text-danger"></i> <span
                                                class="">15%</span> Increase</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 col-lg-6">
                                <div class="card text-center">
                                    <div class="card-body"> <span style="font-size: 10px">Our Global Funded Energy Projects</span>
                                        <h1 class=" mb-1 mt-1 font-weight-bold" id="projects2">5,835</h1>
                                        <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span
                                                class="">22%</span> Increase</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 col-lg-6">
                                <div class="card text-center">
                                    <div class="card-body"> <span style="font-size: 10px">Our Global Funded Health Projects</span>
                                        <h1 class=" mb-1 mt-1 font-weight-bold" id="projects3">9,588</h1>
                                        <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span
                                                class="">32%</span> Increase</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-3 col-lg-6">
                                <div class="card text-center">
                                    <div class="card-body"> <span style="font-size: 10px">Our Global Funded Charity Projects</span>
                                        <h1 class=" mb-1 mt-1 font-weight-bold" id="projects4">1,200</h1>
                                        <div class="text-muted"><i class="si si-arrow-up-circle text-warning"></i> <span
                                                class=""></span> Increase from 1,108 to 1,200</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
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
                                            @elseif($plan->name == 'Renewable Energy Project Revolution')
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
                        </div> --}}

                        {{-- ////////////////////////FORM///////////////////////// --}}
                        @if ($p_funds->status == 0)
                            <form action="{{ route('customer.project_funding') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Project Funding Information Collection</h3>
                                            </div>
                                            <div class="col-sm-12 col-md-12 form-row"
                                                style="width: 100%; justify-content: center">
                                                @if (!empty($success))
                                                    <span style="margin-top: 10px"
                                                        class="info_box text-success">{{ $success }}</span>
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-md-12 form-row"
                                                style="width: 100%; justify-content: center">
                                                @if (!empty($error))
                                                    <span style="margin-top: 10px"
                                                        class="info_box text-danger">{{ $error }}</span>
                                                @endif
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Project Name <span
                                                                    class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="project_name" value="{{ old('project_name') }}"
                                                                placeholder="Project Name">
                                                        </div>
                                                        @error('project_name')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Brief Project Description <span
                                                                    class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="project_description"
                                                                value="{{ old('project_description') }}"
                                                                placeholder="Project Description">
                                                        </div>
                                                        @error('project_description')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Project Location/ Address <span
                                                                    class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="project_location"
                                                                value="{{ old('project_location') }}"
                                                                placeholder="Enter Project Location">
                                                        </div>
                                                        @error('project_location')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Name of Your Organization <span
                                                                    class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="organization" value="{{ old('organization') }}"
                                                                placeholder="Enter Name of Your Organization">
                                                        </div>
                                                        @error('organization')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Name of Yor Principal Officer
                                                                <span class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="principal_officer"
                                                                value="{{ old('principal_officer') }}"
                                                                placeholder="Enter The Name Of Your Next of Kin">
                                                        </div>
                                                        @error('principal_officer')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Prefered Method To Receive Funds
                                                                <span class="text-red">*</span></label>
                                                            <select name="currency" id="strategySelect"
                                                                class="form-control">
                                                                <option value="" disabled selected hidden>
                                                                    Select----
                                                                </option>
                                                                <option value="BTC">BTC</option>
                                                                <option value="USD">USD</option>
                                                                <option value="ETH">ETH</option>
                                                                <option value="USDT">USDT</option>
                                                            </select>
                                                        </div>
                                                        @error('currency')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Project Amount <span
                                                                    class="text-red">*</span></label>
                                                            <select name="amount" id="strategySelect"
                                                                class="form-control">
                                                                <option value="" disabled selected hidden>
                                                                    Select----
                                                                </option>
                                                                <option value="1000">Less than $10,000</option>
                                                                <option value="3000">$10,000 to $50,000</option>
                                                                <option value="5000">$50,000 to $200,000</option>
                                                                <option value="7000">$200,000 to $500,000</option>
                                                                <option value="10000">$500,000 to $1,000,000</option>
                                                                <option value="10000">Over $1,000,000</option>
                                                            </select>
                                                        </div>
                                                        @error('amount')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Duration of Project <span
                                                                    class="text-red">*</span></label>
                                                            <select name="duration" id="strategySelect"
                                                                class="form-control">
                                                                <option value="" disabled selected hidden>
                                                                    Select----
                                                                </option>
                                                                <option value="3 months">3 months</option>
                                                                <option value="6 months">6 months</option>
                                                                <option value="1 year">1 year</option>
                                                                <option value="2 years">2 years</option>
                                                            </select>
                                                        </div>
                                                        @error('duration')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Select Project Type <span
                                                                    class="text-red">*</span></label>
                                                            <select name="type" id="strategySelect"
                                                                class="form-control">
                                                                <option value="" disabled selected hidden>
                                                                    Select----
                                                                </option>
                                                                <option value="Construction Project">Construction
                                                                    Project
                                                                </option>
                                                                <option value="Healthcare Project">Healthcare Project
                                                                </option>
                                                                <option value="Charity Project">Charity Project
                                                                </option>
                                                                <option value="Agricultural Project">Agricultural
                                                                    Project
                                                                </option>
                                                                <option value="Renewable Energy Project">Renewable
                                                                    Energy
                                                                    Project</option>
                                                                <option value="Non-profit Projects">Non-profit Projects
                                                                </option>
                                                            </select>
                                                        </div>
                                                        @error('type')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary mt-4 mb-0">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @elseif ($p_funds->status == 1)
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <main class="main" style="background-color: #ebeef1">
                                        <div class="card-wrapper">
                                            <div class="card-summary">
                                                <h1>Project Funding Request Submitted</h1>
                                                <h2>Request Under Review</h2>
                                                {{-- <h2>Below is the reason for disabling your account 30-day, to appeal this
                                                decision</h2> --}}
                                                <p>
                                                    We are pleased to inform you that your project funding request has
                                                    been
                                                    successfully submitted. Our team will review it promptly and get
                                                    back to
                                                    you with further details. Thank you for choosing us for your funding
                                                    needs.
                                                </p>
                                            </div>
                                            <div class="card-features">
                                                <div class="subscribtion">
                                                    <h3 class="feature-title">Our Availability Status</h3>
                                                    <div class="pricing-plan">
                                                        <p><span>24/7</span> <br> Agent Available</p>
                                                        <p>Contact support for more enquires</p>
                                                    </div>
                                                    <a href="mailto:support@coinmaniax.com" class="btn">Email
                                                        Us</a>
                                                </div>
                                                <div class="why-us">
                                                    <h3 class="feature-title">Why Work With Us at Coinmaniax</h3>
                                                    <ul>
                                                        <li>Financial Solutions</li>
                                                        <li>Accelerated Growth</li>
                                                        <li>Sustainable Investment</li>
                                                        <li>Modern Solutions</li>
                                                        <li>Expert Strategies</li>
                                                        <li>top-tier asset</li>
                                                        <li>certified team</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </div>
                            </div>
                        @else
                            <form action="{{ route('customer.project_funding') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Project Funding Information Collection</h3>
                                            </div>
                                            <div class="col-sm-12 col-md-12 form-row"
                                                style="width: 100%; justify-content: center">
                                                @if (!empty($success))
                                                    <span style="margin-top: 10px"
                                                        class="info_box text-success">{{ $success }}</span>
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-md-12 form-row"
                                                style="width: 100%; justify-content: center">
                                                @if (!empty($error))
                                                    <span style="margin-top: 10px"
                                                        class="info_box text-danger">{{ $error }}</span>
                                                @endif
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Project Name <span
                                                                    class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="project_name" value="{{ old('project_name') }}"
                                                                placeholder="Project Name">
                                                        </div>
                                                        @error('project_name')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Brief Project Description <span
                                                                    class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="project_description"
                                                                value="{{ old('project_description') }}"
                                                                placeholder="Project Description">
                                                        </div>
                                                        @error('project_description')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Project Location/ Address <span
                                                                    class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="project_location"
                                                                value="{{ old('project_location') }}"
                                                                placeholder="Enter Project Location">
                                                        </div>
                                                        @error('project_location')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Name of Your Organization <span
                                                                    class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="organization" value="{{ old('organization') }}"
                                                                placeholder="Enter Name of Your Organization">
                                                        </div>
                                                        @error('organization')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Name of Yor Principal Officer
                                                                <span class="text-red">*</span></label>
                                                            <input required="" type="text" class="form-control"
                                                                name="principal_officer"
                                                                value="{{ old('principal_officer') }}"
                                                                placeholder="Enter The Name Of Your Next of Kin">
                                                        </div>
                                                        @error('principal_officer')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Prefered Method To Receive Funds
                                                                <span class="text-red">*</span></label>
                                                            <select name="currency" id="strategySelect"
                                                                class="form-control">
                                                                <option value="" disabled selected hidden>
                                                                    Select----
                                                                </option>
                                                                <option value="BTC">BTC</option>
                                                                <option value="USD">USD</option>
                                                                <option value="ETH">ETH</option>
                                                                <option value="USDT">USDT</option>
                                                            </select>
                                                        </div>
                                                        @error('currency')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Project Amount <span
                                                                    class="text-red">*</span></label>
                                                            <select name="amount" id="strategySelect"
                                                                class="form-control">
                                                                <option value="" disabled selected hidden>
                                                                    Select----
                                                                </option>
                                                                <option value="1000">Less than $10,000</option>
                                                                <option value="3000">$10,000 to $50,000</option>
                                                                <option value="5000">$50,000 to $200,000</option>
                                                                <option value="7000">$200,000 to $500,000</option>
                                                                <option value="10000">$500,000 to $1,000,000</option>
                                                                <option value="10000">Over $1,000,000</option>
                                                            </select>
                                                        </div>
                                                        @error('amount')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Duration of Project <span
                                                                    class="text-red">*</span></label>
                                                            <select name="duration" id="strategySelect"
                                                                class="form-control">
                                                                <option value="" disabled selected hidden>
                                                                    Select----
                                                                </option>
                                                                <option value="3 months">3 months</option>
                                                                <option value="6 months">6 months</option>
                                                                <option value="1 year">1 year</option>
                                                                <option value="2 years">2 years</option>
                                                            </select>
                                                        </div>
                                                        @error('duration')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Select Project Type <span
                                                                    class="text-red">*</span></label>
                                                            <select name="type" id="strategySelect"
                                                                class="form-control">
                                                                <option value="" disabled selected hidden>
                                                                    Select----
                                                                </option>
                                                                <option value="Construction Project">Construction
                                                                    Project
                                                                </option>
                                                                <option value="Healthcare Project">Healthcare Project
                                                                </option>
                                                                <option value="Charity Project">Charity Project
                                                                </option>
                                                                <option value="Agricultural Project">Agricultural
                                                                    Project
                                                                </option>
                                                                <option value="Renewable Energy Project">Renewable
                                                                    Energy
                                                                    Project</option>
                                                                <option value="Non-profit Projects">Non-profit Projects
                                                                </option>
                                                            </select>
                                                        </div>
                                                        @error('type')
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <button type="submit"
                                                        class="btn btn-primary mt-4 mb-0">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif



                        {{-- /////////////////// PROJECT FUNDING TRANSACTIONS////////////////////////// --}}

                        {{-- @if (!$investments->isEmpty())
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
                        @endif --}}
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

            @if (session('success'))
                <script>
                    Swal.fire({
                        title: 'Success!',
                        text: '{{ session('success') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                </script>
            @endif
</body>

</html>
