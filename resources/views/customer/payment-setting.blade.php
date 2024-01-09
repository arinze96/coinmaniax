<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Gloryinvestmentlimited</title>
    @include('include.c_css')
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">


</head>

<body class="g-sidenav-show  bg-gray-100">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    @include('include.c_sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('include.c_header')

        <main class="main-content  mt-0">
            <section class="min-vh-100 mb-8">
                <div class="container" style="margin-top: 100px">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8 mx-auto">
                            <div class="card z-index-0">
                                <div class="card-header bg-gradient-primary text-center pt-4">
                                    <h3 style="color: white"> PAYMENT DATA SETTINGS</h3>
                                </div>



                                <div class="card-body">
                                    <form action="{{ route('user.setting.view', ['payment']) }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-12  form-row">
                                                @if (!empty($success))
                                                    <span class="info_box text-success">{{ $success }}</span>
                                                @endif
                                            </div>

                                            <div class="col-sm-12  form-row">
                                                @if (!empty($error))
                                                    <span class="info_box text-danger">{{ $error }}</span>
                                                @endif
                                            </div>

                                            <div class="col-sm-6 col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="bitcoin_address">Bitcoin
                                                        Address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control"
                                                            name="bitcoin_address"
                                                            value="{{ $account->bitcoin_address }}"
                                                            placeholder="Enter bitcoin address">
                                                    </div>
                                                    @error('bitcoin_address')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="ethereum_address">Ethereum
                                                        Address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control"
                                                            name="ethereum_address"
                                                            value="{{ $account->ethereum_address }}"
                                                            placeholder="Enter ethereum address">
                                                    </div>
                                                    @error('ethereum_address')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="litecoin_address">Litecoin
                                                        Address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control"
                                                            name="litecoin_address"
                                                            value="{{ $account->litecoin_address }}"
                                                            placeholder="Enter litecoin address">
                                                    </div>
                                                    @error('litecoin_address')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-sm-6 col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="usdt_address">USDT Address</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="usdt_address"
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
                                                    <label class="form-label" for="transaction_pin">Transaction
                                                        Pin</label>
                                                    <div class="form-control-wrap">
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





                                            <div class="col-sm-12 mt-3">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <button type="submit" style="text-align:center;"
                                                            class="d-block bg-gradient-primary form-control btn btn-primary "
                                                            id="edit-plan">Update Payment
                                                            Data</button>
                                                    </div>
                                                </div>
                                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>


        {{-- </div> --}}
        {{-- </div> --}}
    </main>
    @include('include.settings')



    @include('include.c_script')
</body>


</html>
