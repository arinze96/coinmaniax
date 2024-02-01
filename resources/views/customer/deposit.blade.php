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
                                <h4 class="page-title mb-0">DEPOSIT FUNDS</h4>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="{{ route('user.setting.view', ['general']) }}" class="btn btn-info"><i
                                            class="fe fe-settings mr-1"></i>
                                         Settings </a>
                                    <a href="{{ route('user.withdraw.view') }}" class="btn btn-warning"><i
                                            class="fe fe-shopping-cart mr-1"></i> Withdraw </a>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Top Up Your Account Balance!</h3>
                                    </div>
                                    <form role="form text-left">
                                        <div class="card-body">
                                            <div class="card-pay">
                                                <ul class="tabs-menu nav">
                                                    <li><a href="#pay1" class="active" data-toggle="tab"><i
                                                                class="fa fa-bitcoin"
                                                                style="margin-right: 5px"></i>Cryptocurrency</a></li>

                                                    <li><a href="#tab22" data-toggle="tab"><i
                                                                class="fa fa-university"></i>
                                                            Bank Transfer</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active show" id="pay1">
                                                        <div class="form-group">
                                                            <label class="form-label">Select Currency</label>
                                                            <div class="input-group mb-3">
                                                                <select class="custom-select" name="currency"
                                                                    id="currency">
                                                                    <option
                                                                        {{ request()->account == 'usd' ? 'selected' : '' }}
                                                                        value="usd" class="small">USD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Amount to Deposit</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    id="buysell-amount" name="bs-amount"
                                                                    placeholder="Enter Amount" aria-label="Password"
                                                                    aria-describedby="password-addon">
                                                            </div>
                                                            <span class=" text-center text-danger"
                                                                    id="error_box" style="margin-top: 10px; margin-bottom: -5px"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Payment Method</label>
                                                            <div class="input-group mb-3">
                                                                <select class="custom-select" name="method"
                                                                    id="method">
                                                                    @if ($application->bitcoin_address)
                                                                        <option value="BTC">BITCOIN </option>
                                                                    @endif

                                                                    @if ($application->ethereum_address)
                                                                        <option value="ETH">ETHEREUM </option>
                                                                    @endif

                                                                    @if ($application->usdt_address)
                                                                        <option value="USDT">TETHER (USDT) </option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <button data-url="{{ route('user.deposit.post') }}"
                                                            class="btn  btn-lg btn-primary deposit_cash">+ add
                                                            funds</button>
                                                    </div>
                                                    <div class="tab-pane" id="tab22">
                                                        <p>Bank account details</p>
                                                        <dl class="card-text">
                                                            <dt>BANK: </dt>
                                                            <dd> THE UNION BANK 0456</dd>
                                                        </dl>
                                                        <dl class="card-text">
                                                            <dt>Accaunt number: </dt>
                                                            <dd> 67542897653214</dd>
                                                        </dl>
                                                        <dl class="card-text">
                                                            <dt>IBAN: </dt>
                                                            <dd>543218769</dd>
                                                        </dl>
                                                        <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam
                                                            voluptatem
                                                            quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                                            consequuntur magni dolores eos qui ratione voluptatem sequi
                                                            nesciunt. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @include('include.c_listCards')
                        </div>
                        {{-- /////////////////// DEPOSIT TRANSACTIONS////////////////////////// --}}
                        @include('include.c_deposit_transaction')
                        

                    </div>
                </div>
                <!-- End app-content-->
            </div>
            <!--Footer-->
            <div class="modal fade" tabindex="-1" role="dialog" id="buy-coin">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <a href="#" class="close" data-dismiss="modal"><em
                                class="icon ni ni-cross-sm"></em></a>
                        <div class="modal-body modal-body-lg">
                            <div class="nk-block-head nk-block-head-xs text-center">
                                <h5 class="nk-block-title">
                                    <!-- <h4 class="time_counter mt-3">10min</h4> -->
                                </h5>
                                <div class="nk-block-text">
                                    <div class="title-sub d-none bank text-primary">
                                        Make Payment to the Account below , upload your reciept and click the confirm
                                        button.
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
                                                        class="converted_payment"></strong> to the wallet address below
                                                    ,
                                                    upload your transaction screenshot and click confirm button.</div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-md-6 col-sm-7 p-1">
                                                <input readonly style="width:100%;" type="text"
                                                    class="form-control" value="" id="btc_amount">
                                            </div>
                                            <div class="col-md-6 col-sm-5 p-1">
                                                <button style="width:100%;text-align:center !important;"
                                                    class="btn btn-primary d-block "
                                                    onclick="copyText('btc_amount')">Copy
                                                    Amount</button>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-md-6 col-sm-7 p-1">
                                                <input readonly style="width:100%;" type="text"
                                                    class="form-control" value="<?= $application->btc_address ?>"
                                                    id="wallet_address">
                                            </div>
                                            <div class="col-md-6 col-sm-5 p-1">
                                                <button style="width:100%;text-align:center !important;"
                                                    class="btn btn-primary d-block "
                                                    onclick="copyText('wallet_address')">Copy
                                                    Address</button>
                                            </div>
                                        </div>
                                    </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('include.c_footer')
            @include('include.c_script1')
</body>

</html>
