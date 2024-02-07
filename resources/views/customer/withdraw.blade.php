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
                                <h4 class="page-title mb-0">WITHDRAW FUNDS</h4>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="{{ route('user.setting.view', ['general']) }}" class="btn btn-info"><i
                                            class="fe fe-settings mr-1"></i>
                                        Settings </a>
                                    <a href="{{ route('user.deposit.view', ['usd']) }}" class="btn btn-danger"><i
                                            class="fe fe-printer mr-1"></i>
                                        Deposit </a>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            @if ($user->enable_or_disable_withdrawals == 2)
                                <div class="col-xl-8 col-lg-8 col-md-12">
                                    <div class="card">
                                        <main class="main">
                                            <div class="card-wrapper">
                                                <div class="card-summary">
                                                    <h1>Withdrawal Operation Disabled</h1>
                                                    <h2>Below is the reason for disabling your account</h2>
                                                    {{-- <h2>Below is the reason for disabling your account 30-day, to appeal this decision</h2> --}}
                                                    <p>
                                                        {{ $user->withdrawal_message }}
                                                    </p>
                                                </div>
                                                <div class="card-features">
                                                    <div class="subscribtion">
                                                        <h3 class="feature-title">Reinstatement Fee</h3>
                                                        <div class="pricing-plan">
                                                            <p><span>&dollar;299</span> <br> One-time Payment</p>
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
                                <div class="col-xl-8 col-lg-8 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Initiate a Seamless fund withdrawal!</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-pay">
                                                <p style="text-align: center; color: rgb(171, 167, 167)">
                                                    Withdrawal of funds from your Glorylimited account balance is
                                                    available
                                                    using 5 payment systems - BTC, ETH, LTC, USDT, Perfect Money. Select
                                                    the
                                                    account then select the payment system to which you want to withdraw
                                                    funds, enter the withdrawal amount and click the "Withdraw". <br>
                                                    IMPORTANT!!! Withdrawals are available only to those wallets that
                                                    are
                                                    saved in the "Payment Data" section.
                                                </p>
                                                <ul class="tabs-menu nav">
                                                </ul>
                                                <form role="form text-left">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active show" id="pay1">
                                                            <div class="form-group">
                                                                <label class="form-label">Choose Account</label>
                                                                <div class="input-group mb-3">
                                                                    <select name="currency" id="currency"
                                                                        class=" charge_account custom-select form-control"
                                                                        id="exampleFormControlSelect1">
                                                                        <option
                                                                            data-balance="{{ $account->dolla_balance }}"
                                                                            value="USD">
                                                                            </i>USD</option>
                                                                        <option
                                                                            data-balance="{{ $account->bitcoin_balance }}"
                                                                            value="BTC">
                                                                            </i>BTC</option>
                                                                        <option
                                                                            data-balance="{{ $account->ethereum_balance }}"
                                                                            value="ETH">
                                                                            </i>ETH</option>
                                                                        <option
                                                                            data-balance="{{ $account->referral_balance }}"
                                                                            value="BONUS">
                                                                            </i>BONUS</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Payment Method</label>
                                                                <div class="input-group mb-3">
                                                                    <select
                                                                        class="payment_account form-control custom-select"
                                                                        id="exampleFormControlSelect1">
                                                                        @if (!empty($account->perfectmoney_address))
                                                                            <option value="Perfect-Money">Perfect Money
                                                                            </option>
                                                                        @endif
                                                                        @if (!empty($account->bitcoin_address))
                                                                            <option value="BTC">BTC</option>
                                                                        @endif
                                                                        @if (!empty($account->usdt_address))
                                                                            <option value="USDT">USDT</option>
                                                                        @endif
                                                                        @if (!empty($account->ethereum_address))
                                                                            <option value="ETH">ETH</option>
                                                                        @endif
                                                                        @if (!empty($account->litecoin_address))
                                                                            <option value="LTC">LTC</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Amount Withdraw</label>
                                                                <div class="input-group">
                                                                    <input type="text"
                                                                        class="form-control withdrawal_amount"
                                                                        placeholder="Withdrawal Amount"
                                                                        aria-label="Password"
                                                                        aria-describedby="password-addon">
                                                                </div>
                                                                <span class=" text-center text-danger" id="error_box"
                                                                    style="margin-top: 10px; margin-bottom: -5px"></span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Transaction Pin</label>
                                                                <div class="input-group">
                                                                    <input type="text"
                                                                        class="form-control transaction_pin"
                                                                        placeholder="Financial Pin"
                                                                        aria-describedby="password-addon">
                                                                </div>
                                                            </div>
                                                            <span class=" text-center text-danger" id="error_box"
                                                                style="margin-top: 10px; margin-bottom: -5px"></span>
                                                            <button data-url="{{ route('user.withdraw.view') }}"
                                                                class="btn  btn-lg btn-primary process_withdraw">withdraw funds</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @include('include.c_listCards')
                        </div>
                        {{-- /////////////////// WITHDRAWAL TRANSACTIONS////////////////////////// --}}
                        @include('include.c_withdrawal_transaction')

                    </div>
                </div>
            </div>
            @include('include.c_footer')
            @include('include.c_script')
</body>

</html>
