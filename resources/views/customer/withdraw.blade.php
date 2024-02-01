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
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Initiate a Seamless fund withdrawal!</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-pay">
                                            <p style="text-align: center; color: rgb(171, 167, 167)">
                                                Withdrawal of funds from your Glorylimited account balance is available
                                                using 5 payment systems - BTC, ETH, LTC, USDT, Perfect Money. Select the
                                                account then select the payment system to which you want to withdraw
                                                funds, enter the withdrawal amount and click the "Withdraw". <br>
                                                IMPORTANT!!! Withdrawals are available only to those wallets that are
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
                                                                    <option data-balance="{{ $account->dolla_balance }}"
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
                                                            class="btn  btn-lg btn-primary process_withdraw">- withdraw
                                                            funds</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
