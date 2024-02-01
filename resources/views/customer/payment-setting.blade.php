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
                                <h4 class="page-title mb-0">Payment Data Settings</h4>
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
                        <!--End Page header-->
                        <!-- Row -->
                        <div class="row">
                            <div class="col-xl-9 col-lg-8">
                                <form action="{{ route('user.setting.view', ['payment']) }}" method="POST">
                                    @csrf
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title">Edit Payment Data</div>
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
                                            <div class="card-title font-weight-bold">Basci info:</div>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Bitcoin Address</label>
                                                        <input type="text" class="form-control"
                                                            name="bitcoin_address"
                                                            value="{{ $account->bitcoin_address }}"
                                                            placeholder="Enter bitcoin address">
                                                    </div>
                                                    @error('bitcoin_address')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Ethereum Address</label>
                                                        <input type="text" class="form-control"
                                                            name="ethereum_address"
                                                            value="{{ $account->ethereum_address }}"
                                                            placeholder="Enter ethereum address">
                                                    </div>
                                                    @error('ethereum_address')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Litecoin Address</label>
                                                        <input type="text" class="form-control"
                                                            name="litecoin_address"
                                                            value="{{ $account->litecoin_address }}"
                                                            placeholder="Enter litecoin address">
                                                    </div>
                                                    @error('litecoin_address')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">USDT Address</label>
                                                        <input type="text" class="form-control" name="usdt_address"
                                                            value="{{ $account->usdt_address }}"
                                                            placeholder="Enter usdt address">
                                                    </div>
                                                    @error('usdt_address')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Transaction Pin</label>
                                                        <input type="text" class="form-control"
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
                                            <div class="card-footer text-right">
                                                <button type="submit" id="edit-plan" class="btn btn-primary">Update Payment
                                                    Data</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @include('include.c_footer')
                @include('include.c_script')
</body>

</html>
