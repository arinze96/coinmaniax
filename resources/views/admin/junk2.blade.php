<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">


</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.c_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.c_header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="buysell wide-xs m-auto">
                                <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void()">Deposit Fund</a>
                                        </li>
                                    </ul>
                                </div><!-- .buysell-nav -->
                                <div class="buysell-title text-center">
                                    <h4 class="title">Top Up Your Account Balance!</h4>
                                </div><!-- .buysell-title -->
                                <div class="buysell-block">


                                    <div class="col-md-12 error_box mt-4">
                                        <p id="error_box" class="text-danger"></p>
                                        <p id="error_box1" class="text-danger"></p>
                                    </div>

                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="">Choose Currency</label>
                                            <span class="error_box text-center text-danger"></span>
                                        </div>
                                        <div class="form-control-group">
                                            <select name="currency" id="currency"
                                                class="form-control  form-control-number">
                                                <option {{ request()->account == 'usd' ? 'selected' : '' }}
                                                    value="usd" class="small">USD</option>
                                            </select>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    <div class="buysell-field form-group">
                                        <div class="form-label-group error_box">
                                            <label class="form-label" for="buysell-amount">Amount to Deposit</label>
                                            <span class=" text-center text-danger" id="error_box"></span>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="text" class="form-control  form-control-number"
                                                id="buysell-amount" name="bs-amount" placeholder="Enter Amount">
                                            <div class="form-dropdown">
                                                <div class="text">USD</div>
                                            </div>
                                        </div>
                                    </div><!-- .buysell-field -->
                                    {{-- <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="buysell-amount">Select Plan</label>
                                                <span class="error_box text-center text-danger"></span>
                                            </div>
                                            <div class="form-control-group">
                                                <select name="method" id="method" class="form-control  form-control-number">
                                                    
                                                    <option value="o">Select Plan </option>
                                                    <option value="1">Beginners Plan </option>
                                                    <option value="2">Amateur Plan </option>
                                                    <option value="3">Advanced Plan </option>
                                                    <option value="4">Professional Plan </option>
                                                    
                                                </select>
                                            </div>
                                        </div> --}}
                                    <!-- .buysell-field -->

                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="buysell-amount">Payment Method</label>
                                            <span class="error_box text-center text-danger"></span>
                                        </div>
                                        <div class="form-control-group">
                                            <select name="method" id="method"
                                                class="form-control  form-control-number">
                                                @if ($application->bitcoin_address)
                                                    <option value="BTC">BITCOIN </option>
                                                @endif

                                                @if ($application->ethereum_address)
                                                    <option value="ETH">ETHEREUM </option>
                                                @endif

                                                @if ($application->litecoin_address)
                                                    <option value="LTC">LITCOIN </option>
                                                @endif

                                                @if ($application->btc_cash_address)
                                                    <option value="BCH">BITCOIN CASH </option>
                                                @endif

                                                @if ($application->binancecoin_address)
                                                    <option value="BNB">BINANCE COIN </option>
                                                @endif

                                                @if ($application->dodgecoin_address)
                                                    <option value="DODGE">DODGE COIN </option>
                                                @endif

                                                @if ($application->usdt_address)
                                                    <option value="USDT">TETHER (USDT) </option>
                                                @endif
                                            </select>
                                        </div>
                                    </div><!-- .buysell-field -->

                                    <div class="row">
                                        <div class="col-sm-12 py-2 my-1 col-md-6 col-lg-6">
                                            <div class="rounded d-flex p-2 px-3 align-items-center"
                                                style="border: 1px dashed #171a1d;">
                                                <i style="font-size: 1.6rem;" class="zmdi zmdi-pocket mr-2"></i>
                                                <p style="flex: 1; font-size: 13px;">
                                                    <span class="font-weight-light">Final balance:</span>
                                                    <b class="px-2"><span class="_display">0</span> USD</b>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 py-3 ">
                                            <button data-url="{{ route('user.deposit.post') }}"
                                                class="btn btn-primary btn-block deposit_cash">
                                                + Add funds
                                            </button>
                                        </div>
                                    </div>


                                </div><!-- .buysell-block -->
                            </div><!-- .buysell -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    {{-- modal --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="buy-coin">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <h5 class="nk-block-title">
                            <!-- <h4 class="time_counter mt-3">10min</h4> -->
                        </h5>
                        <div class="nk-block-text">
                            <div class="title-sub d-none bank text-primary">
                                Make Payment to the Account below , upload your reciept and click the confirm button.
                                <ul class="text-justify p-3 text-dark">
                                    <li>Bank Name : <strong class="text-primary">
                                            <?= ucwords($application->bank_name) ?></strong></li>
                                    <li>Account Number :<strong class="text-primary">
                                            <?= ucwords($application->bank_account_no) ?></strong></li>
                                    <li>Account Name :<strong class="text-primary">
                                            <?= ucwords($application->bank_account_name) ?></strong></li>
                                </ul>
                            </div>
                            <div class="nk-refwg-invite d-none btc">
                                <div class="nk-refwg-head ">
                                    <div class="nk-refwg-title">
                                        <div class="title-sub text-primary">Make Payments of <strong
                                                class="converted_payment"></strong> to the wallet address below ,
                                            upload your transaction screenshot and click confirm button.</div>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6 col-sm-7 p-1">
                                        <input readonly style="width:100%;" type="text" class="form-control"
                                            value="" id="btc_amount">
                                    </div>
                                    <div class="col-md-6 col-sm-5 p-1">
                                        <button style="width:100%;text-align:center !important;"
                                            class="btn btn-primary d-block " onclick="copyText('btc_amount')">Copy
                                            Amount</button>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6 col-sm-7 p-1">
                                        <input readonly style="width:100%;" type="text" class="form-control"
                                            value="<?= $application->btc_address ?>" id="wallet_address">
                                    </div>
                                    <div class="col-md-6 col-sm-5 p-1">
                                        <button style="width:100%;text-align:center !important;"
                                            class="btn btn-primary d-block " onclick="copyText('wallet_address')">Copy
                                            Address</button>
                                    </div>
                                </div>
                            </div><!-- .nk-refwg-invite -->
                        </div>
                    </div>
                    <div class="dropzone"></div>
                    <div class="nk-block">
                        <div class="buysell-field form-action text-center">
                            <div>
                                <a href="#" class="btn btn-primary mt-4 btn-lg confirm_deposit"
                                    data-url="{{ route('user.deposit.confirm.post') }}">Confirm
                                    Payments</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    {{-- modal --}}

    {{-- footer --}}
    <script>
        var $imageArray = [];
        var $site = "{{ route('app.home') }}";
        let $proof_upload = "{{ route('user.deposit.proof.post', ['add']) }}";
        let $proof_delete = "{{ route('user.deposit.proof.post', ['delete']) }}";
    </script>
    {{-- footer --}}
    @include('include.c_script')
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom_dropzone.js') }}"></script>
    <!-- END PAGE CONTAINER-->
</body>

</html>


{{-- //////////////////DEPOSIT///////////////////// --}}


<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.c_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.c_header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block">
                                <div class="row gy-gs">
                                    <div class="nk-content-body">
                                        <div class="nk-content-wrap">
                                            <div class="nk-block-head nk-block-head-lg">
                                                <div class="nk-block-head-sub"><span>Pricing</span></div>
                                                <div class="nk-block-between-md g-4">
                                                    <div class="nk-block-head-content mt-4 mb-1">
                                                        <h3 class="nk-block-title fw-normal text-center">Choose A
                                                            Suitable Investment Plan</h3>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="nk-block">
                                                @if (!$plans->isEmpty())
                                                    <div class="row g-gs">
                                                        @foreach ($plans as $key => $plan)
                                                            <div class="col-md-4">
                                                                <div class="price-plan card card-bordered text-center">
                                                                    <div class="card-inner">
                                                                        <div class="price-plan-media">
                                                                            <img src="{{ asset('assets/images/plans/' . random_int(1, 5) . '.svg') }}"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="price-plan-info">
                                                                            <h5 class="title">
                                                                                {{ ucwords($plan->name) }}</h5>
                                                                        </div>
                                                                        <div class="price-plan-amount">


                                                                            @if (ucwords(str_replace(['swap', '-'], '', $plan->type)) != 'Currency')
                                                                                <div class="bill">Type -
                                                                                    {{ strtoupper(str_replace(['swap', '-'], '', $plan->type)) }}<span></span>
                                                                                </div>
                                                                            @endif

                                                                            <div class="bill">Min -
                                                                                {{ $plan->currency == 'USD' ? number_format($plan->min, 0, '.', ',') : $plan->min }}
                                                                                {{ $plan->currency }}<span></span>
                                                                            </div>

                                                                            <div class="bill">ROI -
                                                                                {{ $plan->roi }}<span></span></div>

                                                                            <div class="bill">Max -
                                                                                {{ $plan->currency == 'USD' ? number_format($plan->max, 0, '.', ',') : $plan->max }}
                                                                                {{ $plan->currency }}<span></span>
                                                                            </div>

                                                                            <div class="bill">Duration -
                                                                                {{ ucwords($plan->duration) }}<span></span>
                                                                            </div>
                                                                            <div class="bill">Commission -
                                                                                {{ ucwords($plan->commission) }}%<span></span>
                                                                            </div>
                                                                            <div class="bill">Currency -
                                                                                {{ $plan->currency }}<span></span>
                                                                            </div>



                                                                        </div>
                                                                        <div class="price-plan-action">
                                                                            <input
                                                                                style="border:2px solid #526484;border-radius:12px;"
                                                                                class="form-control investment_amount"
                                                                                placeholder="Enter Amount "
                                                                                id="input{{ $key }}"
                                                                                data-btn="btn{{ $key }}"
                                                                                type="number" name=""
                                                                                placeholder="0.00">

                                                                            <span
                                                                                class="text-danger error_box d-block mt-1 mb-1"
                                                                                id="error{{ $key }}"></span>

                                                                            <button disabled="true"
                                                                                data-key="{{ $key }}"
                                                                                data-error="error{{ $key }}"
                                                                                id="btn{{ $key }}"
                                                                                data-currency="{{ $plan->currency }}"
                                                                                data-min="{{ $plan->currency == 'USD' ? number_format(round($plan->min, 2), 0, '.', '') : $plan->min }}"
                                                                                data-max="{{ $plan->currency == 'USD' ? number_format(round($plan->max, 2), 0, '.', '') : $plan->max }}"
                                                                                data-plan-url="{{ route('user.plan.view', ['currency']) }}"
                                                                                data-plan-id="{{ $plan->id }}"
                                                                                class="btn btn-primary p-1  invest_btn"
                                                                                disabled="true">
                                                                                Select Plan
                                                                            </button>


                                                                        </div>
                                                                    </div>
                                                                </div><!-- .price-item -->
                                                            </div><!-- .col -->
                                                        @endforeach

                                                    </div><!-- .row -->
                                                @else
                                                    <div class="row g-gs">
                                                        <div class="col-md-12 card">
                                                            <h4 class="text-center">No Investment Plan's at the moment
                                                            </h4>
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                @endif



                                            </div><!-- .nk-block -->
                                            <!-- recent investment -->
                                        </div>
                                        <!-- footer @s -->
                                        <!-- footer @e -->
                                    </div>
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>

{{-- ///////////////////////PLANS/////////////////////////// --}}


<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.c_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.c_header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="buysell wide-xs m-auto">
                                <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void()">WITHDRAWALS</a>
                                        </li>
                                    </ul>
                                </div><!-- .buysell-nav -->
                                <div class="buysell-title text-center">
                                    <p class="title">Withdrawal of funds from your
                                        {{ ucwords(strtolower(config('app.name'))) }} account balance is available
                                        using 5 payment systems - BTC, ETH, LTC, USDT, Perfect Money. Select the account
                                        then select the payment system to which you want to withdraw funds, enter the
                                        withdrawal amount and click the "Withdraw".</p>

                                    <p>IMPORTANT!!! Withdrawals are available only to those wallets that are saved in
                                        the "Payment Data" section.</p>
                                </div><!-- .buysell-title -->
                                <div class="buysell-block">


                                    <div class="col-md-12 error_box mt-4">
                                        <p id="error_box" class="text-danger"></p>
                                        <p id="error_box1" class="text-danger"></p>
                                    </div>

                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="">Choose Account</label>
                                            <span class="error_box text-center text-danger"></span>
                                        </div>
                                        <div class="form-control-group">
                                            <select name="currency" id="currency"
                                                class="charge_account  form-control  form-control-number">
                                                <option data-balance="{{ $account->dolla_balance }}" value="USD"
                                                    class="small"></i>USD</option>
                                                <option data-balance="{{ $account->bitcoin_balance }}" value="BTC"
                                                    class="small"></i>BTC</option>
                                                <option data-balance="{{ $account->ethereum_balance }}"
                                                    value="ETH" class="small"></i>ETH</option>
                                                <option data-balance="{{ $account->referral_balance }}"
                                                    value="BONUS" class="small"></i>BONUS</option>
                                            </select>
                                        </div>
                                    </div><!-- .buysell-field -->

                                    <div class="buysell-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="">Payment Method</label>
                                            <span class="error_box text-danger"></span>
                                        </div>
                                        <div class="form-control-group">
                                            <select
                                                class="payment_account form-control form-select  form-control-number">
                                                @if (!empty($account->perfectmoney_address))
                                                    <option value="Perfect-Money">Perfect Money</option>
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

                                    </div><!-- .buysell-field -->

                                    <div class="buysell-field form-group">
                                        <div class="form-label-group error_box">
                                            <label class="form-label">Amount to Withdraw</label>
                                            <span class=" text-center text-danger"></span>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="text"
                                                class="form-control  form-control-number withdrawal_amount"
                                                placeholder="Enter Amount">
                                        </div>
                                    </div><!-- .buysell-field -->

                                    <div class="buysell-field form-group">
                                        <div class="form-label-group error_box">
                                            <label class="form-label">Transaction Pin</label>
                                            <span class=" text-center text-danger"></span>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="text"
                                                class="form-control  form-control-number transaction_pin"
                                                placeholder="Financial Pin">
                                        </div>
                                    </div><!-- .buysell-field -->


                                    <div class="row">
                                        <div class="col-sm-12 py-2 my-1 col-md-612 col-lg-12">
                                            <div class="rounded d-flex p-2 px-3 align-items-center"
                                                style="border: 1px dashed #171a1d;">
                                                <div
                                                    class="col-sm-12 col-md-12 col-lg-12 small-p muted my-3 position-relative">
                                                    {{-- <input type="number" name="" class="form-control"> --}}
                                                    {{-- <span class="absolute">Enter amount</span> --}}
                                                    <p class="label-price">Final balance: <b
                                                            class="px-2 font-weight-bold main_display"
                                                            style="color: #ED8B58;"> 0 USD</b></p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-12 py-3 ">
                                                <button data-url="{{ route('user.withdraw.view') }}"
                                                    class="btn btn-primary btn-block process_withdraw">
                                                    Withdraw
                                                </button>
                                            </div>
                                        </div>


                                    </div><!-- .buysell-block -->
                                </div><!-- .buysell -->
                            </div>
                            <!-- table -->
                            {{-- <div class="nk-block nk-block-lg mt-5 ">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Recent Deposit History</h4>
                                    <p>The table contain the history of your last 10 <strong class="text-primary"> deposit </strong>
                                        transactions and thier status.</p>
                                </div>
                            </div>
                            <div class="card card-bordered card-preview">
                                <table class="table table-tranx">
                                    <thead>
                                        <tr class="tb-tnx-head">
                                            <th class="tb-tnx-id"><span class="">#</span></th>
                                            <th class="tb-tnx-info">
                                                <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                    <span>Message</span>
                                                </span>
                                                <span class="tb-tnx-date d-md-inline-block d-none">
                                                    <span class="d-md-none">Date</span>
                                                    <span class="d-none d-md-block">
                                                        <span>Date</span>
                                                    </span>
                                                </span>
                                            </th>
                                            <th class="tb-tnx-amount">
                                                <span class="tb-tnx-total">Amount</span>
                                                <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tb-tnx-item">
                                            <td class="tb-tnx-id">
                                                <a href="#"><span>1</span></a>
                                            </td>
                                            <td class="tb-tnx-info">
                                                <div class="tb-tnx-desc">
                                                    <span class="title">You deposited $40000.00</span>
                                                </div>
                                                <div class="tb-tnx-date">
                                                    <span class="date">19th Dec 2020</span>
                                                </div>
                                            </td>
                                            <td class="tb-tnx-amount">
                                                <div class="tb-tnx-total">
                                                    <span class="amount">$40,000.00</span>
                                                </div>
                                                <div class="tb-tnx-status">
                                                    <span class="badge badge-dot badge-success">Completed</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                            <!-- nk-block -->
                            <!-- table -->
                        </div>
                    </div>
                    <!-- content @e -->
                    <!-- footer @s -->
                    @include('include.c_footer')
                    <!-- footer @e -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- main @e -->
        </div>


        {{-- footer --}}

        {{-- footer --}}
        @include('include.c_script')

        <!-- END PAGE CONTAINER-->
</body>

</html>

{{-- ///////////////////////////WITHDRAWALS//////////////////////////// --}}

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('include.c_sidebar')
            <div class="nk-wrap ">
                @include('include.c_header')
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to"
                                                    href="javascript:void(0)" onclick="history.go(-1)"><em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                            <h3 class="nk-block-title fw-normal text-center">DEPOSIT ON YOUR RETIREMENT
                                                ACCOUNT</h3>
                                        </div>
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner" style="background-color: #798bff">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title"></span>
                                                    <div class="">
                                                        <form action="{{ route('user.retirement_account') }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($success))
                                                                        <span
                                                                            class="info_box text-success">{{ $success }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($error))
                                                                        <span
                                                                            class="info_box text-danger">{{ $error }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="firstname">Firstname</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="firstname"
                                                                                value="{{ $userDetails->firstname }}"
                                                                                placeholder="Enter firstname">
                                                                        </div>
                                                                        @error('firstname')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="lastname">Lastname</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="lastname"
                                                                                value="{{ $userDetails->lastname }}"
                                                                                placeholder="Enter lastname">
                                                                        </div>
                                                                        @error('lastname')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="email">Email</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="email"
                                                                                class="form-control" name="email"
                                                                                value="{{ $userDetails->email }}"
                                                                                placeholder="Enter email">
                                                                        </div>
                                                                        @error('email')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="phone">Phone</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="phone"
                                                                                value="{{ $userDetails->phone }}"
                                                                                placeholder="Enter Phone Number">
                                                                        </div>
                                                                        @error('phone')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="phone">Next of Kin</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control"
                                                                                name="next_of_kin"
                                                                                value="{{ old('next_of_kin') }}"
                                                                                placeholder="Enter The Name Of Your Next of Kin">
                                                                        </div>
                                                                        @error('next_of_kin')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="currency">Payment Method</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="currency"
                                                                                id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Payment Method
                                                                                </option>
                                                                                <option value="BTC">BTC</option>
                                                                                <option value="USD">USD</option>
                                                                                <option value="ETH">ETH</option>
                                                                            </select>
                                                                        </div>
                                                                        @error('currency')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="phone">Amount</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="amount" id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Amount</option>
                                                                                <option value="5000">$5,000</option>
                                                                                <option value="7000">$7,000</option>
                                                                                <option value="10000">$10,000</option>
                                                                                <option value="15000">$15,000</option>
                                                                                <option value="25000">$25,000</option>
                                                                                <option value="35000">$35,000</option>
                                                                                <option value="50000">$50,000</option>
                                                                                <option value="100000">$100,000
                                                                                </option>
                                                                                <option value="500000">$500,000
                                                                                </option>
                                                                                <option value="1000000">$1,000,000
                                                                                </option>

                                                                            </select>
                                                                        </div>
                                                                        @error('amount')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="phone">Duration</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="duration"
                                                                                id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Duration </option>
                                                                                <option value="3 years">3 years
                                                                                </option>
                                                                                <option value="6 years">6 years
                                                                                </option>
                                                                                <option value="10 year">10 year
                                                                                </option>
                                                                                <option value="15 years">15 years
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        @error('duration')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-4 mt-3">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <button type="submit"
                                                                                style="text-align:center; background-color:rgb(48, 48, 102)"
                                                                                class="d-block form-control btn btn-primary ">
                                                                                Submit Request</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div><!-- .nk-block -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>


{{-- ////////////////////////////////RETIREMENT////////////////////////// --}}


<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('include.c_sidebar')
            <div class="nk-wrap ">
                @include('include.c_header')
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to"
                                                    href="javascript:void(0)" onclick="history.go(-1)"><em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                            <h3 class="nk-block-title fw-normal text-center">YOUR HELP CAN GO ALONG WAY
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner" style="background-color: #798bff">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title"></span>
                                                    <div class="">
                                                        <form action="{{ route('user.charity') }}" method="POST">
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($success))
                                                                        <span
                                                                            class="info_box text-success">{{ $success }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($error))
                                                                        <span
                                                                            class="info_box text-danger">{{ $error }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="firstname">Firstname</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="firstname"
                                                                                value="{{ $userDetails->firstname }}"
                                                                                placeholder="Enter firstname">
                                                                        </div>
                                                                        @error('firstname')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="lastname">Lastname</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="lastname"
                                                                                value="{{ $userDetails->lastname }}"
                                                                                placeholder="Enter lastname">
                                                                        </div>
                                                                        @error('lastname')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="email">Email</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="email"
                                                                                class="form-control" name="email"
                                                                                value="{{ $userDetails->email }}"
                                                                                placeholder="Enter email">
                                                                        </div>
                                                                        @error('email')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="phone">Phone</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="phone"
                                                                                value="{{ $userDetails->phone }}"
                                                                                placeholder="Enter Phone Number">
                                                                        </div>
                                                                        @error('address')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="currency">Payment Method</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="currency"
                                                                                id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Payment Method
                                                                                </option>
                                                                                <option value="BTC">BTC</option>
                                                                                <option value="USD">USD</option>
                                                                                <option value="ETH">ETH</option>
                                                                            </select>
                                                                        </div>
                                                                        @error('currency')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="amount">Amount</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="amount" id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Amount</option>
                                                                                <option value="200">$200</option>
                                                                                <option value="500">$500</option>
                                                                                <option value="1000">$1,000</option>
                                                                                <option value="3000">$3,000</option>
                                                                                <option value="5000">$5,000</option>
                                                                                <option value="7000">$7,000</option>
                                                                                <option value="10000">$10,000</option>
                                                                                <option value="15000">$15,000</option>
                                                                                <option value="25000">$25,000</option>
                                                                                <option value="35000">$35,000</option>
                                                                                <option value="50000">$50,000</option>
                                                                                <option value="100000">$100,000
                                                                                </option>
                                                                                <option value="500000">$500,000
                                                                                </option>
                                                                                <option value="1000000">$1,000,000
                                                                                </option>

                                                                            </select>
                                                                        </div>
                                                                        @error('amount')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-4 mt-3">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <button type="submit"
                                                                                style="text-align:center; background-color:rgb(48, 48, 102)"
                                                                                class="d-block form-control btn btn-primary ">
                                                                                Submit Request</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div><!-- .nk-block -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>

{{-- /////////////////////////////////CHARITY////////////////////////// --}}

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('include.c_sidebar')
            <div class="nk-wrap ">
                @include('include.c_header')
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to"
                                                    href="javascript:void(0)" onclick="history.go(-1)"><em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                            <h3 class="nk-block-title fw-normal text-center">NON FARM PAYROLL</h3>
                                        </div>
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner" style="background-color: #798bff">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title"></span>
                                                    <div class="">
                                                        <form action="{{ route('user.customerNFP') }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($success))
                                                                        <span
                                                                            class="info_box text-success">{{ $success }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($error))
                                                                        <span
                                                                            class="info_box text-danger">{{ $error }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="firstname">Firstname</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="firstname"
                                                                                value="{{ $userDetails->firstname }}"
                                                                                placeholder="Enter firstname">
                                                                        </div>
                                                                        @error('firstname')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="lastname">Lastname</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="lastname"
                                                                                value="{{ $userDetails->lastname }}"
                                                                                placeholder="Enter lastname">
                                                                        </div>
                                                                        @error('lastname')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="email">Email</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="email"
                                                                                class="form-control" name="email"
                                                                                value="{{ $userDetails->email }}"
                                                                                placeholder="Enter email">
                                                                        </div>
                                                                        @error('email')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="phone">Phone</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="phone"
                                                                                value="{{ $userDetails->phone }}"
                                                                                placeholder="Enter Phone Number">
                                                                        </div>
                                                                        @error('address')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="currency">Payment Method</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="currency"
                                                                                id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Payment Method
                                                                                </option>
                                                                                <option value="BTC">BTC</option>
                                                                                <option value="USD">USD</option>
                                                                                <option value="ETH">ETH</option>
                                                                            </select>
                                                                        </div>
                                                                        @error('currency')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="amount">Amount</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="amount" id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Amount</option>
                                                                                <option value="200">$200</option>
                                                                                <option value="500">$500</option>
                                                                                <option value="1000">$1,000</option>
                                                                                <option value="3000">$3,000</option>
                                                                                <option value="5000">$5,000</option>
                                                                                <option value="7000">$7,000</option>
                                                                                <option value="10000">$10,000</option>
                                                                                <option value="15000">$15,000</option>
                                                                                <option value="25000">$25,000</option>
                                                                                <option value="35000">$35,000</option>
                                                                                <option value="50000">$50,000</option>
                                                                                <option value="100000">$100,000
                                                                                </option>
                                                                                <option value="500000">$500,000
                                                                                </option>
                                                                                <option value="1000000">$1,000,000
                                                                                </option>

                                                                            </select>
                                                                        </div>
                                                                        @error('amount')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-4 mt-3">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <button type="submit"
                                                                                style="text-align:center; background-color:rgb(48, 48, 102)"
                                                                                class="d-block form-control btn btn-primary ">
                                                                                Submit Request</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div><!-- .nk-block -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>

{{-- ////////////////////////NFP////////////////////////////////////////// --}}


<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('include.c_sidebar')
            <div class="nk-wrap ">
                @include('include.c_header')
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to"
                                                    href="javascript:void(0)" onclick="history.go(-1)"><em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                            <h3 class="nk-block-title fw-normal text-center">INVEST IN YOUR CHILDRENS
                                                FUTURE</h3>
                                        </div>
                                    </div>
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner" style="background-color: #798bff">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title"></span>
                                                    <div class="">
                                                        <form action="{{ route('user.children_account') }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($success))
                                                                        <span
                                                                            class="info_box text-success">{{ $success }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($error))
                                                                        <span
                                                                            class="info_box text-danger">{{ $error }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="childs_fullname">Childs
                                                                            Fullname</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control"
                                                                                name="childs_fullname"
                                                                                value="{{ old('childs_fullname') }}"
                                                                                placeholder="Enter Childs fullname">
                                                                        </div>
                                                                        @error('childs_fullname')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="childs_age">Childs Age</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="childs_age"
                                                                                id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Childs Age</option>
                                                                                <option value="0-5">0-5</option>
                                                                                <option value="6-15">6-15</option>
                                                                                <option value="16-25">16-25</option>
                                                                            </select>
                                                                        </div>
                                                                        @error('childs_age')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="phone">Payment Method</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="currency"
                                                                                id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Payment Method
                                                                                </option>
                                                                                <option value="BTC">BTC</option>
                                                                                <option value="USD">USD</option>
                                                                                <option value="ETH">ETH</option>
                                                                            </select>
                                                                        </div>
                                                                        @error('currency')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="phone">Amount</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="amount" id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Amount</option>
                                                                                <option value="5000">$5,000</option>
                                                                                <option value="7000">$7,000</option>
                                                                                <option value="10000">$10,000</option>
                                                                                <option value="15000">$15,000</option>
                                                                                <option value="25000">$25,000</option>
                                                                                <option value="35000">$35,000</option>
                                                                                <option value="50000">$50,000</option>
                                                                                <option value="100000">$100,000
                                                                                </option>
                                                                                <option value="500000">$500,000
                                                                                </option>
                                                                                <option value="1000000">$1,000,000
                                                                                </option>

                                                                            </select>
                                                                        </div>
                                                                        @error('amount')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label" style="color: white"
                                                                            for="phone">Duration</label>
                                                                        <div class="form-control-wrap">
                                                                            <select name="duration"
                                                                                id="strategySelect"
                                                                                class="form-control">
                                                                                <option value="" disabled
                                                                                    selected hidden>Duration </option>
                                                                                <option value="3 years">3 years
                                                                                </option>
                                                                                <option value="6 years">6 years
                                                                                </option>
                                                                                <option value="10 year">10 year
                                                                                </option>
                                                                                <option value="15 years">15 years
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        @error('duration')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-6 col-md-6 mb-2">
                                                                    <div class="form-group">
                                                                    </div>

                                                                </div>
                                                            </div>


                                                            <div class="col-sm-4 mt-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <button type="submit"
                                                                            style="text-align:center; background-color:rgb(48, 48, 102)"
                                                                            class="d-block form-control btn btn-primary ">
                                                                            Submit Request</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div><!-- .nk-block -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>


{{-- //////////////////////////////CHILDREN ACCOUNT /////////////////////////// --}}

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.c_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.c_header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to"
                                                    href="javascript:void(0)" onclick="history.go(-1)"><em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                            <h3 class="nk-block-title fw-normal text-center">General Profile</h3>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title"></span>
                                                    <div class="">
                                                        <form action="{{ route('user.setting.view', ['general']) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($success))
                                                                        <span
                                                                            class="info_box text-success">{{ $success }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($error))
                                                                        <span
                                                                            class="info_box text-danger">{{ $error }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="firstname">Firstname</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="firstname"
                                                                                value="{{ !empty(old('firstname')) ? old('firstname') : $user->firstname }}"
                                                                                placeholder="Enter firstname">
                                                                        </div>
                                                                        @error('firstname')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="lastname">Lastname</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="lastname"
                                                                                value="{{ !empty(old('lastname')) ? old('lastname') : $user->lastname }}"
                                                                                placeholder="Enter lastname">
                                                                        </div>
                                                                        @error('lastname')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>



                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="username">Username</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="text"
                                                                                class="form-control" name="username"
                                                                                value="{{ !empty(old('username')) ? old('username') : $user->username }}"
                                                                                placeholder="Enter username">
                                                                        </div>
                                                                        @error('username')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="email">Email</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="email"
                                                                                class="form-control" name="email"
                                                                                value="{{ !empty(old('email')) ? old('email') : $user->email }}"
                                                                                placeholder="Enter email">
                                                                        </div>
                                                                        @error('email')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="phone">Phone</label>
                                                                        <div class="form-control-wrap">
                                                                            <input required="" type="phone"
                                                                                class="form-control" name="phone"
                                                                                value="{{ !empty(old('phone')) ? old('phone') : $user->phone }}"
                                                                                placeholder="Enter phone">
                                                                        </div>
                                                                        @error('phone')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>


                                                                <div class="col-sm-4 mt-3">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <button type="submit"
                                                                                style="text-align:center;"
                                                                                class="d-block form-control btn btn-primary "
                                                                                id="edit-plan">Update General
                                                                                Data</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div><!-- .nk-block -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>

{{-- //////////////////////////////GENERAL PROFILE SETTINGS////////////////////// --}}


<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('include.c_sidebar')
            <div class="nk-wrap ">
                @include('include.c_header')
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to"
                                                    href="javascript:void(0)" onclick="history.go(-1)"><em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                            <h4 class="nk-block-title fw-normal text-center">PERSONAL PAYMENT DATA</h4>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="preview-block">
                                                    <span class="preview-title-lg overline-title"></span>
                                                    <div class="">
                                                        <form action="{{ route('user.setting.view', ['payment']) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($success))
                                                                        <span
                                                                            class="info_box text-success">{{ $success }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-12  form-row">
                                                                    @if (!empty($error))
                                                                        <span
                                                                            class="info_box text-danger">{{ $error }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="bitcoin_address">Bitcoin
                                                                            Address</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                name="bitcoin_address"
                                                                                value="{{ $account->bitcoin_address }}"
                                                                                placeholder="Enter bitcoin address">
                                                                        </div>
                                                                        @error('bitcoin_address')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="ethereum_address">Ethereum
                                                                            Address</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                name="ethereum_address"
                                                                                value="{{ $account->ethereum_address }}"
                                                                                placeholder="Enter ethereum address">
                                                                        </div>
                                                                        @error('ethereum_address')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="litecoin_address">Litecoin
                                                                            Address</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="litecoin_address"
                                                                                value="{{ $account->litecoin_address }}"
                                                                                placeholder="Enter litecoin address">
                                                                        </div>
                                                                        @error('litecoin_address')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                {{-- <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="perfectmoney_address">Perfectmoney Address</label>
                                 <div class="form-control-wrap">
                                  <input  type="text"  class="form-control" name="perfectmoney_address"  value="{{ $account->perfectmoney_address }}" placeholder="Enter perfectmoney address">
                                 </div>
                                 @error('perfectmoney_address')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div> --}}

                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="usdt_address">USDT Address</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="usdt_address"
                                                                                value="{{ $account->usdt_address }}"
                                                                                placeholder="Enter usdt address">
                                                                        </div>
                                                                        @error('usdt_address')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6 col-md-12 mb-2">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="transaction_pin">Transaction
                                                                            Pin</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text"
                                                                                class="form-control"
                                                                                name="transaction_pin"
                                                                                value="{{ $account->transaction_pin }}"
                                                                                placeholder="Enter Transaction Pin">
                                                                        </div>
                                                                        @error('transaction_pin')
                                                                            <span class="text-danger"
                                                                                id="error_name">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>





                                                                <div class="col-sm-4 mt-3">
                                                                    <div class="form-group">
                                                                        <div class="form-control-wrap">
                                                                            <button type="submit"
                                                                                style="text-align:center;"
                                                                                class="d-block form-control btn btn-primary "
                                                                                id="edit-plan">Update Payment
                                                                                Data</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div><!-- .nk-block -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>



{{-- ///////////////////////////PERSONAL PAYMENT SETTINGS////////////////////// --}}

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config('app.name') }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.c_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.c_header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">

                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to"
                                                    href="javascript:void(0)" onclick="history.go(-1)"><em
                                                        class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                                            <h4 class="nk-block-title fw-normal text-center">YOUR SECURITY DETAILS
                                            </h4>

                                            <p class="text-center small-p mt-2 mb-2" style="line-height: 20px;">Your
                                                Security Details are required to perform most transactions in our
                                                platform and it is advised to keep it secret.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                            <div class="preview-block">
                                                <span class="preview-title-lg overline-title"></span>
                                                <div class="">
                                                    <h5 class="text-center">Transaction Pin Reset Section </h5>

                                                    <form action="{{ route('user.setting.view', ['security']) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="col-sm-12  form-row">
                                                            @if (!empty($success))
                                                                <span
                                                                    class="info_box text-success">{{ $success }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="col-sm-12  form-row">
                                                            @if (!empty($error))
                                                                <span
                                                                    class="info_box text-danger">{{ $error }}</span>
                                                            @endif
                                                        </div>

                                                        <div class="col-sm-6 col-md-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="current_pin">Current
                                                                    Pin</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        name="current_pin"
                                                                        value="{{ old('current_pin') }}"
                                                                        placeholder="Enter Current Pin">
                                                                </div>
                                                                @error('current_pin')
                                                                    <span class="text-danger"
                                                                        id="error_name">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new_pin">New
                                                                    Pin</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        name="new_pin"
                                                                        value="{{ old('new_pin') }}"
                                                                        placeholder="Enter new Pin">
                                                                </div>
                                                                @error('new_pin')
                                                                    <span class="text-danger"
                                                                        id="error_name">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4 mt-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <button type="submit"
                                                                        style="text-align:center;"
                                                                        class="d-block form-control btn btn-primary "
                                                                        id="edit-plan">Change Pin</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div><!-- .nk-block -->
                            </div><!-- .nk-block -->

                            {{-- second --}}

                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <div class="nk-block-head-content mt-5">

                                        {{-- <h4 class="nk-block-title fw-normal text-center">PERSONAL PAYMENT  DATA</h4> --}}
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                            <div class="preview-block">
                                                <span class="preview-title-lg overline-title"></span>
                                                <div class="">
                                                    <h5 class="text-center">Password Reset Section </h5>
                                                    <form action="{{ route('user.setting.view', ['security']) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="col-sm-12  form-row">
                                                            @if (!empty($success_p))
                                                                <span
                                                                    class="info_box text-success">{{ $success_p }}</span>
                                                            @endif
                                                        </div>
                                                        <div class="col-sm-12  form-row">
                                                            @if (!empty($error_p))
                                                                <span
                                                                    class="info_box text-danger">{{ $error_p }}</span>
                                                            @endif
                                                        </div>

                                                        <div class="col-sm-6 col-md-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="current_password">Current Password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" class="form-control"
                                                                        name="current_password"
                                                                        value="{{ old('current_password') }}"
                                                                        placeholder="Enter Current Password">
                                                                </div>
                                                                @error('current_password')
                                                                    <span class="text-danger"
                                                                        id="error_name">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6 col-md-12 mb-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="new_password">New
                                                                    Password</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="password" class="form-control"
                                                                        name="new_password"
                                                                        value="{{ old('new_password') }}"
                                                                        placeholder="Enter New Password">
                                                                </div>
                                                                @error('new_password')
                                                                    <span class="text-danger"
                                                                        id="error_name">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-4 mt-3">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <button type="submit"
                                                                        style="text-align:center;"
                                                                        class="d-block form-control btn btn-primary "
                                                                        id="edit-plan">Change Password</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div><!-- .nk-block -->
                            </div><!-- .nk-block -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- content @e -->
            <!-- footer @s -->
            @include('include.c_footer')
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>

{{-- /////////////////////////////SECURITY SETTINGS////////////////////////////////////////// --}}


<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('app.home') }}" class="logo-link nk-sidebar-logo h3 text-light">

                {{-- {{ config("app.name") }} --}}Glory
                        Limited Company LTD

            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.dashboard.view') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-out"></em></span>
                            <span class="nk-menu-text">Deposits</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.deposit.view', ['active']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Active Deposits</span></a>
                                <a href="{{ route('admin.deposit.view', ['all']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">All Deposits</span></a>

                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-heart-fill"></em></span>
                            <span class="nk-menu-text">Charity</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.charity.view', ['active']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Active Charity Donations</span></a>
                                <a href="{{ route('admin.charity.view', ['all']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">All Charity Donations</span></a>

                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-code-download"></em></span>
                            <span class="nk-menu-text">NFP</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.nfp.view', ['active']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Active NFP</span></a>
                                <a href="{{ route('admin.nfp.view', ['all']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">All NFP</span></a>

                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-clock"></em></span>
                            <span class="nk-menu-text">Retirements</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.retirement.view', ['active']) }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Active Retirement
                                        Accounts</span></a>
                                <a href="{{ route('admin.retirement.view', ['all']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">All Retirement Accounts</span></a>

                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                            <span class="nk-menu-text">Children Account</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.child.view', ['active']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Active Child Investments</span></a>
                                <a href="{{ route('admin.child.view', ['all']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">All Child Investments</span></a>

                            </li>
                        </ul>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-block-over"></em></span>
                            <span class="nk-menu-text">Withdrawals</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.withdraw.view', ['active']) }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Active Withdrawal</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                            <span class="nk-menu-text">Investments</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.investment.view', ['active']) }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Active Investments</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.investment.view', ['all']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">All Investments </span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                            <span class="nk-menu-text">Wallets</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.wallet.view') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Customer's Wallets</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">App Users</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.users.view', ['customer']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Customers</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.users.view', ['admin']) }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Administrators </span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                            <span class="nk-menu-text">App Settings</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.plans.view') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Plans Settings</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.application.view') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Application Settings </span></a>
                            </li>
                            {{-- <li class="nk-menu-item">
                              <a href="{{ route("admin.fake_transaction.view") }}" class="nk-menu-link"><span class="nk-menu-text">Fake Transaction </span></a>
                             </li> --}}
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.profile.view') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                            <span class="nk-menu-text">Profile</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.logout') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span>
                            <span class="nk-menu-text">Logout</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>


{{-- ////////////////////////////////ADMIN SIDEBAR////////////////////////////////////////// --}}

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('include.a_css')
    <!-- Page Title  -->
    <title>{{ config('app.name') }}</title>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61f3fcb0b9e4e21181bc612c/1fqgh65mk';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.a_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.a_topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Overview</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to
                                                    {{ ucwords(config('app.name')) }} Administator Dashboard.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-6">
                                            <div class="row g-gs">
                                                <div class="col-lg-12 col-xxl-12">
                                                    <div class="row g-gs">

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">App USD Balance
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Current balance of all the customers USD account"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">${{ number_format($account->total_dolla_balance, 0, '.', ',') }}</span>
                                                                            <span class="sub-title ">Current balance
                                                                                of all the customers USD account</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">App BTC Balance
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Current balance of all the customer's bitcoin account"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $account->total_bitcoin_balance }}</span>
                                                                            <span class="sub-title ">Balance of all
                                                                                the customer's bitcoin account</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">App ETH Balance
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Current balance of all the customer's ethereum account"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $account->total_ethereum_balance }}</span>
                                                                            <span class="sub-title ">Balance of all
                                                                                the customer's ethereum account</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div>

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Total Deposits
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total Amount Deposited Into the App"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">${{ number_format($account->total_deposits, 0, '.', ',') }}</span>
                                                                            <span class="sub-title ">Total Amount
                                                                                Deposited Into the App</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div>

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">USD Paid Out</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total amount of money paid out to customer's in dolla"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">${{ number_format($account->total_dolla_withdrawals, 0, '.', ',') }}</span>
                                                                            <span class="sub-title ">Total money
                                                                                paid out to customer's in dolla</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">BTC Paid Out</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total  paid out to customer's from their BTC Account"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $account->total_bitcoin_withdrawals }}</span>
                                                                            <span class="sub-title ">Total BTC paid
                                                                                out to customer's</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">ETH Paid Out
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total Ethereum paid out to customer's"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $account->total_ethereum_withdrawals }}</span>
                                                                            <span class="sub-title ">Total ethereum
                                                                                paid out to customer's</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Our Customer's
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Number of Customers using our App"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $customer->total_customers }}</span>
                                                                            <span class="sub-title ">Number of
                                                                                Customers using our App</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Administrators
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Total administrators in your application"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $admin->total_admins }}</span>
                                                                            <span class="sub-title ">Total
                                                                                administrators in your
                                                                                application</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Plans</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Number of active investment plans in your app"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $plan->total_plans }}</span>
                                                                            <span class="sub-title ">Number of
                                                                                active investment plans in your
                                                                                app</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Active Deposits
                                                                            </h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Deposits awaiting approval by admin"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $deposit->total_deposits }}</span>
                                                                            <span class="sub-title ">Deposits
                                                                                awaiting approval by admin</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Active
                                                                                Withdrawals</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="Withdrawals awaiting approval by admin"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $withdraw->total_withdrawal }}</span>
                                                                            <span class="sub-title ">Withdrawals
                                                                                awaiting approval by admin</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                        <div class="col-sm-6 col-lg-4 col-xxl-6">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start mb-2">
                                                                        <div class="card-title">
                                                                            <h6 class="title">Active
                                                                                Investments</h6>
                                                                        </div>
                                                                        <div class="card-tools">
                                                                            <em class="card-hint icon ni ni-help-fill"
                                                                                data-toggle="tooltip"
                                                                                data-placement="left" title=""
                                                                                data-original-title="All the investments that are currently active"></em>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="align-end flex-sm-wrap g-4 flex-md-nowrap">
                                                                        <div class="nk-sale-data">
                                                                            <span
                                                                                class="amount">{{ $investment->total_investment }}</span>
                                                                            <span class="sub-title ">All the
                                                                                investments that are currently
                                                                                active</span>
                                                                        </div>
                                                                        <div class="nk-sales-ck">
                                                                            <canvas class="sales-bar-chart"
                                                                                id="activeSubscription"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->
                                                    </div><!-- .row -->
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->

                                        @if (!$activities->isEmpty())

                                            <div class="col-md-6 col-xxl-4">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner border-bottom">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Recent Activities</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <ul class="card-tools-nav">
                                                                    {{-- <li><a href="#"><span>View All</span></a></li> --}}
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-activity">
                                                        @foreach ($activites as $key => $activity)
                                                            <li class="nk-activity-item">
                                                                <div class="nk-activity-media user-avatar bg-pink">SO
                                                                </div>
                                                                <div class="nk-activity-data">
                                                                    <div class="label">
                                                                        {{ ucwords($activity->message) }}</div>
                                                                    <span
                                                                        class="time">{{ date('d M , Y', strtotime($activity->created_at)) }}</span>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div><!-- .card -->
                                            </div><!-- .col -->

                                        @endif

                                        @if (!$newCustomers->isEmpty())
                                            <div class="col-md-6 col-xxl-4">
                                                <div class="card card-bordered card-full">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner">
                                                            <div class="card-title-group">
                                                                <div class="card-title">
                                                                    <h6 class="title">New Users</h6>
                                                                </div>
                                                                <div class="card-tools">
                                                                    <a href="{{ route('admin.users.view', ['customer']) }}"
                                                                        class="link">View All</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @foreach ($newCustomers as $key => $customer)
                                                            <div class="card-inner card-inner-md">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-primary-dim">
                                                                        <span>{{ strtoupper(substr($customer->username, 0, 2)) }}</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span
                                                                            class="lead-text">{{ ucwords($customer->username) }}</span>
                                                                        <span
                                                                            class="sub-text">{{ ucwords($customer->email) }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                        @endif

                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.a_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('include.a_scripts')
</body>

</html>

{{-- ////////////////////////////////ADMIN DASHBOARD////////////////////////////////////////// --}}


<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ route('app.home') }}" class="logo-link h3">
                    {{ config('app.name') }}
                </a>
            </div><!-- .nk-header-brand -->

            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status">Administrator</div>
                                    <div class="user-name dropdown-indicator">
                                        {{ auth()->user()->username }}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>
                                            {{ substr(auth()->user()->username, 0, 2) }}
                                        </span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">
                                            {{ auth()->user()->username }}
                                        </span>
                                        <span class="sub-text">
                                            {{ auth()->user()->email }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('admin.profile.view') }}"><em
                                                class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="{{ route('admin.plans.view') }}"><em
                                                class="icon ni ni-setting-alt"></em><span>App Plan</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('admin.logout') }}"><em
                                                class="icon ni ni-signout"></em><span>Log out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li><!-- .dropdown -->

                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>

{{-- /////////////////////////////TOPBAR ADMIN/////////////////////////////////////////// --}}

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('include.a_css')
    <!-- Page Title  -->
    <title>Coinmaniax</title>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('include.a_sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('include.a_topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">All Deposits</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>This is the list of all deposit requests from customers.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-12">
                                            {{-- table start --}}
                                            <div class="card card-bordered card-preview">
                                                <div class="card-inner">
                                                    <div class="table-responsive">
                                                        @if (!$deposits->isEmpty())
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Fullname</th>
                                                                    <th scope="col">Username</th>
                                                                    <th scope="col">Currency</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col">Phone</th>
                                                                    <th scope="col">Country</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Date</th>
                                                                    <th scope="col">Action</th>
                                                                    <th scope="col">Action</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($deposits as $key => $deposit)
                                                                <tr>
                                                                    <th scope="row">{{ $key + 1 }}</th>
                                                                    <td>{{ ucwords($deposit->firstname) }} {{ ucwords($deposit->lastname) }}</td>
                                                                    <td>{{ ucwords($deposit->username) }}</td>
                                                                    <td>{{ ucwords($deposit->currency) }}</td>
                                                                    <td>{{ number_format($deposit->amount,0,".",",") }}</td>
                                                                    <td>{{ ucwords($deposit->phone) }}</td>
                                                                    <td>{{ ucwords($deposit->country) }}</td>
                                                                    <td>{{ ucwords(config("app.tx_status")[$deposit->status]) }}</td>
                                                                    <td>{{ date("d M,Y",strtotime($deposit->created_at)) }}</td>
                                                                    <td>
                                                                        <a href="{{ route("admin.deposit.view",["edit",$deposit->id]) }}"><em class="icon ni ni-edit"></em></a>
                                                                        <a class="delete_data" href="{{ route("admin.deposit.view",["delete",$deposit->id]) }}" data-type="deposit" ><em  class="icon ni ni-trash-fill "></em></a>
                                                                        <a href="{{ route("admin.deposit.view",["view",$deposit->id]) }}"><em class="icon ni ni-eye-fill"></em></a>
                                                                    </td>
                                                                    <td class="tb-tnx-action">
                                                                      <div class="dropdown">
                                                                          <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                              <ul class="link-list-plain">
                                                                                  
                                                                                  <li><a data-action="approve" data-type="deposit"  class="decline_approve" href="{{ route("admin.deposit.view",["approve",$deposit->id]) }}">Approve</a></li>
                                                                                  <li><a  data-action="decline" data-type="deposit" class="decline_approve" href="{{ route("admin.deposit.view",["decline",$deposit->id]) }}">Decline</a></li>
                                                                                  
                                                                              </ul>
                                                                          </div>
                                                                      </div>
                                                                  </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                        @else
                                                            <h4 class="text-center">No Active deposit at the moment</h4>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div><!-- .card-preview -->
                                            {{-- table ends --}}
                                        </div>
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.a_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @include('include.a_scripts')
</body>

</html>

{{-- /////////////////////ALL DEPOSITS/////////////////////////////// --}}

<div class="row ">
    @if (!$charities->isEmpty())
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Active Deposits</h4>
                    <h6 class="card-title">This is the list of all active deposit requests from
                        customers.</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fullname</th>
                                    <th>Currency</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($charities as $key => $charity)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ ucwords($charity->firstname) }} {{ ucwords($charity->lastname) }}</td>
                                        <td>{{ ucwords($charity->currency) }}</td>
                                        <td> {{ number_format($charity->amount, 0, '.', ',') }}
                                        </td>
                                        <td>{{ $charity->status == 0 ? 'unapproved' : 'Approved' }}</td>
                                        
                                        <td style="justify-content: space-between">
                                            <a href="{{ route("admin.charity.view",["edit",$charity->id]) }}"><i class="icon-sm mdi mdi-pen text-warning ms-auto"
                                                style="margin-right: 5px"></i></a>
                                            <a class="delete_data" href="{{ route("admin.charity.view",["delete",$charity->id]) }}" data-type="donation" ><i class="icon-sm mdi mdi-popcorn text-warning ms-auto"
                                                style="margin-right: 5px"></i></a>
                                        </td>
                                        <td>
                                            <a data-action="approve" data-type="donation"
                                                class="decline_approve"
                                                href="{{ route("admin.charity.view",["approve",$charity->id]) }}">
                                                <div class="badge badge-outline-success">Approve
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            <a data-action="decline" data-type="donation"
                                                class="decline_approve"
                                                href="{{ route("admin.charity.view",["decline",$charity->id]) }}">
                                                <div class="badge badge-outline-danger">Decline
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        <h4 class="text-center">No Active Donations at the moment</h4>
    @endif
</div>
