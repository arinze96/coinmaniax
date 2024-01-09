<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gloryinvestmentslimited</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/background/MT_Trans_Vector.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dashboard/theme.css?ver=1.4.0') }}">
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
                                            <h4 class="mb-1 mb-sm-0" style="color: white">Overview of all Plans</h4>
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


                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="color: white">Application Information</h4>
                                <div class="row g-gs">
                                    <div class="col-md-12 col-lg-12 col-xxl-12">
                                        <div class="card card-bordered h-100">
                                            <div class="card-inner">
                                                <div class="card-title-group align-start pb-3 g-2">
                                                    <div class="card-title card-title-sm">
                                                        <h6 class="title" style="color: white">Application Information
                                                        </h6>

                                                        <p style="color: white">Every single detail of our application
                                                            information.</p>
                                                    </div>
                                                    <div class="card-tools">
                                                        <em class="card-hint icon ni ni-help" data-toggle="tooltip"
                                                            data-placement="left" title=""
                                                            data-original-title="Every single detail of our application information"></em>
                                                    </div>
                                                </div>
                                                <div class="analytic-wp">
                                                    <div class="analytic-wp-group g-3">

                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">Application
                                                                    Name</div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm" style="color: white">
                                                                    {{ strtoupper(config('app.name')) }}</div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>

                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">Application
                                                                    Email</div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm" style="color: white">
                                                                    {{ config('app.email') }}
                                                                </div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>

                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">Bitcoin Address
                                                                </div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm"><input type="text"
                                                                        style="color: black"
                                                                        value="{{ $app->bitcoin_address }}"
                                                                        class="form-control" disabled=""></div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>

                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">Ethereum
                                                                    Address</div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm"><input type="text"
                                                                        style="color: black"
                                                                        value="{{ $app->ethereum_address }}"
                                                                        class="form-control" disabled=""></div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>

                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">Bitcoin Cash
                                                                    Address</div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm"><input type="text"
                                                                        style="color: black"
                                                                        value="{{ $app->btc_cash_address }}"
                                                                        class="form-control" disabled=""></div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>

                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">LiteCoin
                                                                    Address</div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm"><input type="text"
                                                                        style="color: black"
                                                                        value="{{ $app->litecoin_address }}"
                                                                        class="form-control" disabled=""></div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>

                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">BinanceCoin
                                                                    Address</div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm"><input type="text"
                                                                        style="color: black"
                                                                        value="{{ $app->binancecoin_address }}"
                                                                        class="form-control" disabled=""></div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>

                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">DodgeCoin
                                                                    Address</div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm"><input type="text"
                                                                        style="color: black"
                                                                        value="{{ $app->dodgecoin_address }}"
                                                                        class="form-control" disabled=""></div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>

                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">USDT Address
                                                                </div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm"><input type="text"
                                                                        style="color: black"
                                                                        value="{{ $app->usdt_address }}"
                                                                        class="form-control" disabled=""></div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>


                                                        <div class="analytic-data analytic-wp-data">
                                                            <div class="analytic-wp-graph">
                                                                <div class="title" style="color: white">Date Last
                                                                    Updated</div>

                                                            </div>
                                                            <div class="analytic-wp-text">
                                                                <div class="amount amount-sm">
                                                                    {{ date('d,M Y', strtotime($app->updated_at)) }}
                                                                </div>
                                                                <div class="change up"></div>
                                                                <div class="subtitle"></div>
                                                            </div>
                                                        </div>

                                                        <a href="{{ route("admin.application.view",["edit-application"]) }}">
                                                            <button type="submit" 
                                                            style="text-align:center; margin-top: 20px; background-color: green"
                                                            class="d-block gradient-corona-img form-control btn btn-primary ">Edit
                                                            Application info
                                                            Plan</button>
                                                        </a>

                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->

                                </div>
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