
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coinmaniax</title>
    @include('include.a_css')
</head>

<body>
    <div class="container-scroller">
         
        <!-- partial:partials/_sidebar.html -->
        @include('include.a_sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('include.a_topbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card corona-gradient-card">
                                <div class="card-body py-0 px-0 px-sm-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-sm-3 col-xl-2">
                                            <img src="assets/admin/images/dashboard/Group126@2x.png"
                                                class="gradient-corona-img img-fluid" alt="">
                                        </div>
                                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                                            <h4 class="mb-1 mb-sm-0">Overview of all Plans</h4>
                                        </div>
                                        <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                            <span>
                                                <a href="{{ route('app.home') }}" target="_blank"
                                                    class="btn btn-outline-light btn-rounded get-started-btn">Go to
                                                    Home</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div style="width: 100%; height: 50px; display: flex; justify-content: space-between">
                                    <h4 class="card-title">Edit Application Data</h4>
                                    <a href="{{ route("admin.application.view") }}">
                                        <button type="button" class="btn btn-primary">Back to App Settings</button>
                                    </a>
                                </div>
                                <form class="" method="POST" data-post-type="edit-plan"
                                    action="{{ route('admin.application.view', ['edit-application', $app->id]) }}">

                                    @csrf
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
                                            <label class="form-label" for="bitcoin_address">App
                                                Bitcoin Address</label>
                                            <div class="form-control-wrap">
                                                <input style="color: #fff" required="" type="text" name="bitcoin_address"
                                                    class="form-control" id="bitcoin_address"
                                                    placeholder="Enter bitcoin_address"
                                                    value="{{ !empty(old('bitcoin_address')) ? old('bitcoin_address') : $app->bitcoin_address }}">
                                            </div>
                                            @error('bitcoin_address')
                                                <span class="text-danger"
                                                    id="error_bitcoin_address">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label" for="ethereum_address">App
                                                Ethereum Address</label>
                                            <div class="form-control-wrap">
                                                <input style="color: #fff" required="" type="text" name="ethereum_address"
                                                    class="form-control" id="ethereum_address"
                                                    placeholder="Enter ethereum_address"
                                                    value="{{ !empty(old('ethereum_address')) ? old('ethereum_address') : $app->ethereum_address }}">
                                            </div>
                                            @error('ethereum_address')
                                                <span class="text-danger"
                                                    id="error_ethereum_address">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label" for="btc_cash_address">App
                                                Bitcoin Cash Address</label>
                                            <div class="form-control-wrap">
                                                <input style="color: #fff" required="" type="text" name="btc_cash_address"
                                                    class="form-control" id="btc_cash_address"
                                                    placeholder="Enter btc_cash_address"
                                                    value="{{ !empty(old('btc_cash_address')) ? old('btc_cash_address') : $app->btc_cash_address }}">
                                            </div>
                                            @error('btc_cash_address')
                                                <span class="text-danger"
                                                    id="error_btc_cash_address">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label" for="litecoin_address">App
                                                Litcoin Address</label>
                                            <div class="form-control-wrap">
                                                <input style="color: #fff" required="" type="text" name="litecoin_address"
                                                    class="form-control" id="litecoin_address"
                                                    placeholder="Enter litecoin_address"
                                                    value="{{ !empty(old('litecoin_address')) ? old('litecoin_address') : $app->litecoin_address }}">
                                            </div>
                                            @error('litecoin_address')
                                                <span class="text-danger"
                                                    id="error_litecoin_address">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-sm-6 col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label" for="binancecoin_address">App binancecoin
                                                Address</label>
                                            <div class="form-control-wrap">
                                                <input style="color: #fff" required="" type="text" name="binancecoin_address"
                                                    class="form-control" id="binancecoin_address"
                                                    placeholder="Enter binancecoin_address"
                                                    value="{{ !empty(old('binancecoin_address')) ? old('binance_address') : $app->binancecoin_address }}">
                                            </div>
                                            @error('binancecoin_address')
                                                <span class="text-danger"
                                                    id="error_binancecoin_address">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label" for="dodgecoin_address">App dodgecoin
                                                Address</label>
                                            <div class="form-control-wrap">
                                                <input style="color: #fff" required="" type="text" name="dodgecoin_address"
                                                    class="form-control" id="dodgecoin_address"
                                                    placeholder="Enter dodgecoin_address"
                                                    value="{{ !empty(old('dodgecoin_address')) ? old('dodge_address') : $app->dodgecoin_address }}">
                                            </div>
                                            @error('dodgecoin_address')
                                                <span class="text-danger"
                                                    id="error_dodgecoin_address">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label" for="usdt_address">App
                                                usdt Address</label>
                                            <div class="form-control-wrap">
                                                <input style="color: #fff" required="" type="text" name="usdt_address"
                                                    class="form-control" id="usdt_address"
                                                    placeholder="Enter usdt_address"
                                                    value="{{ !empty(old('usdt_address')) ? old('usdt_address') : $app->usdt_address }}">
                                            </div>
                                            @error('usdt_address')
                                                <span class="text-danger"
                                                    id="error_usdt_address">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-3">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <button type="submit" name="edit-plan" style="text-align:center;"
                                                    class="d-block form-control btn btn-primary corona-gradient-card ">Edit
                                                    App Record</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>



                </div>
                @include('include.a_footer')
            </div>
        </div>
    </div>
    @include('include.a_scripts')
</body>

</html>
