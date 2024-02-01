<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coinmaniax</title>
    @include('include.a_css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dashboard/theme.css?ver=1.4.0') }}">
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
                                                    class="btn btn-outline-light btn-rounded get-started-btn" style="color: white">Go to
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
                                <h4 class="card-title">View Wallet</h4>
                                <div class="nk-content nk-content-fluid">
                                    <div class="container-xl wide-lg" style="color: black">
                                        <div class="nk-content-body">
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-content">
                                                    <div class="nk-block-head-sub"><span>Wallet Info</span></div>
                                                    <h2 class="nk-block-title fw-normal">
                                                        {{ ucwords($account->username) }} Wallet</h2>
                                                    <div class="nk-block-des">

                                                    </div>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <ul class="nk-nav nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link" href=""></a>
                                                </li>

                                            </ul><!-- .nk-menu -->
                                            <!-- NK-Block @s -->
                                            <div class="nk-block">
                                                <div class="nk-data data-list">
                                                    <div class="data-head">
                                                        <h6 class="overline-title">Account Info</h6>
                                                    </div>
                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Full Name</span>
                                                            <span class="data-value">{{ $account->firstname }}
                                                                {{ $account->lastname }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div>
                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Username</span>
                                                            <span class="data-value">{{ $account->username }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div>
                                                    <div class="data-item">
                                                        <div class="data-col">
                                                            <span class="data-label">Email</span>
                                                            <span class="data-value">{{ $account->email }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"><span
                                                                class="data-more disable"><em
                                                                    class="icon ni ni-lock-alt"></em></span></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Dolla Balance</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->dolla_balance }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->

                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Ethereum Balance</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->ethereum_balance }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Bitcoin Balance</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->bitcoin_balance }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Referral Balance</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->referral_balance }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->

                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Dolla Withdrawn</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->dolla_withdrawals }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Bitcoin Withdrawn</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->bitcoin_withdrawals }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->

                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Ethereum Withdrawn</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->ethereum_withdrawals }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Dolla Invested</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->dolla_invested }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Bitcoin Invested</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->bitcoin_invested }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Ethereum Invested</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->ethereum_invested }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->

                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Dolla Earned</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->dolla_earned }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->



                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Ethereum Earned</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->ethereum_earned }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->

                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Bitcoin Earned</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->bitcoin_earned }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Total Deposits</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->bitcoin_earned }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Perfect Money Address</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->perfectmoney_address }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->

                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Bitcoin Address</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->bitcoin_address }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->


                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">USDT Address</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->usdt_address }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->

                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Ethereum Address</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->ethereum_address }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->

                                                    <div class="data-item" data-toggle="modal"
                                                        data-target="#profile-edit">
                                                        <div class="data-col">
                                                            <span class="data-label">Litcoin Address</span>
                                                            <span
                                                                class="data-value text-soft">{{ $account->litecoin_address }}</span>
                                                        </div>
                                                        <div class="data-col data-col-end"></div>
                                                    </div><!-- .data-item -->







                                                </div>
                                                <!-- NK-Block @e -->
                                                <!-- //  Content End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- content @e -->
                                    <!-- footer @s -->
                                    @include('include.a_footer')
                                    <!-- footer @e -->
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
