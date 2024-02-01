<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coinmaniax</title>
  @include('include.a_css')
</head>

<body>
    <div class="container-scroller">
        @include('include.a_sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('include.a_topbar')
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
                                            <h4 class="mb-1 mb-sm-0">Overview of all systems transaction</h4>
                                        </div>
                                        <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                            <span>
                                                <a href="{{ route('app.home') }}"
                                                    target="_blank" style="padding-bottom: 20px; padding-top: 20px;"
                                                    class="btn btn-outline-light btn-rounded get-started-btn">Go to Home</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>App USD Balance</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">${{ number_format($account->total_dolla_balance, 0, '.', ',') }}</h3>
                                                <p class="text-success ms-2 mb-0 font-weight-medium">0.00%</p>
                                            </div>
                                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Current balance
                                                of all the customers USD account</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-chart-pie text-primary ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Total Deposits</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">${{ number_format($account->total_deposits, 0, '.', ',') }}</h3>
                                                <p class="text-success ms-2 mb-0 font-weight-medium">0.00%</p>
                                            </div>
                                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px"> Total Amount
                                                Deposited Into the App</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi  mdi-ornament text-warning ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>USD Paid Out</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">${{ number_format($account->total_dolla_withdrawals, 0, '.', ',') }}</h3>
                                                <p class="text-success ms-2 mb-0 font-weight-medium">0.00%</p>
                                            </div>
                                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Total money paid out to customer's in dolla</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-wallet-travel text-info ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Our Customer's</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">{{ $customer->total_customers }}</h3>
                                                {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p> --}}
                                            </div>
                                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px"> Number of
                                                Customers using our App</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-cube-unfolded text-light ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Administrators</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">{{ $admin->total_admins }}</h3>
                                                {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p> --}}
                                            </div>
                                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Total
                                                administrators in your
                                                application</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-vibrate text-warning ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Active
                                        Investments</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">{{ $investment->total_investment }}</h3>
                                                {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p> --}}
                                            </div>
                                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">
                                                All the
                                                investments that are currently
                                                active
                                            </h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-elevation-decline text-info ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Plans</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">{{ $plan->total_plans }}</h3>
                                                {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p> --}}
                                            </div>
                                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Number of
                                                active investment plans in your
                                                app</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Active Deposits</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">{{ $deposit->total_deposits }}</h3>
                                                {{-- <p class="text-success ms-2 mb-0 font-weight-medium">+8.3%</p> --}}
                                            </div>
                                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Deposits
                                                awaiting approval by admin</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Active
                                        Withdrawals</h5>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h3 class="mb-0">{{ $withdraw->total_withdrawal }}</h3>
                                                {{-- <p class="text-danger ms-2 mb-0 font-weight-medium">-2.1% </p> --}}
                                            </div>
                                            <h6 class="text-muted font-weight-normal" style="margin-top: 10px">Withdrawals
                                                awaiting approval by admin</h6>
                                        </div>
                                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Transaction History</h4>
                                    <canvas id="transaction-history" class="transaction-chart"></canvas>
                                    <div
                                        class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                        <div class="text-md-center text-xl-left">
                                            <h6 class="mb-1">Transfer to Paypal</h6>
                                            <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                                        </div>
                                        <div
                                            class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                            <h6 class="font-weight-bold mb-0">$236</h6>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                        <div class="text-md-center text-xl-left">
                                            <h6 class="mb-1">Tranfer to Stripe</h6>
                                            <p class="text-muted mb-0">07 Jan 2019, 09:12AM</p>
                                        </div>
                                        <div
                                            class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                            <h6 class="font-weight-bold mb-0">$593</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (!$newCustomers->isEmpty())
                        <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row justify-content-between">
                                        <h4 class="card-title">Messages</h4>
                                        <a href="{{ route('admin.users.view', ['customer']) }}" class="text-muted mb-1 small">View all</a>
                                    </div>
                                    <div class="preview-list">
                                        @foreach ($newCustomers as $key => $customer)
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <img src="{{ asset('assets/admin/images/faces/imog2.png') }}"
                                                    alt="image" class="rounded-circle" />
                                            </div>
                                            <div class="preview-item-content d-flex flex-grow">
                                                <div class="flex-grow">
                                                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                        <h6 class="preview-subject">{{ strtoupper(substr($customer->username, 0, 2)) }}</h6>
                                                        <p class="text-muted text-small">{{ ucwords($customer->username) }}</p>
                                                    </div>
                                                    <p class="text-muted">{{ ucwords($customer->email) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    
                    
                </div>
                @include('include.a_footer')
            </div>
        </div>
    </div>
    @include('include.a_scripts')
</body>

</html>
