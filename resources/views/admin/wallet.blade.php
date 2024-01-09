<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gloryinvestmentslimited</title>
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
                                            <h4 class="mb-1 mb-sm-0">Overview of all customers wallet</h4>
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


                    <div class="row ">
                        @if (!$accounts->isEmpty())
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">All Customer Wallet</h4>
                                        <h6 class="card-title">This is the list of all customer wallet of customers.
                                        </h6>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Fullaname</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Dollar Balance</th>
                                                        <th>Ethereum Balance</th>
                                                        <th>Bitcoin Balance</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($accounts as $key => $account)
                                                        <tr>
                                                            <td>{{ ucwords($account->firstname) }}
                                                                {{ ucwords($account->lastname) }}</td>
                                                            <td>{{ ucwords($account->username) }}</td>
                                                            <td>{{ ucwords($account->email) }}</td>
                                                            <td>{{ number_format($account->dolla_balance, 0, '.', ',') }}
                                                            </td>
                                                            <td>{{ $account->ethereum_balance }}</td>
                                                            <td>{{ $account->bitcoin_balance }}</td>
                                                            <td>{{ date('d M,Y', strtotime($account->created_at)) }}</td>
                                                            <td style="justify-content: space-between">
                                                                <a
                                                                    href="{{ route('admin.wallet.view', ['edit', $account->user_id]) }}"><i
                                                                        class="icon-sm mdi mdi-pen text-warning ms-auto"
                                                                        style="margin-right: 5px"></i></a>

                                                                <a
                                                                    href="{{ route('admin.wallet.view', ['view', $account->user_id]) }}"><i
                                                                        class="icon-sm mdi mdi-eye text-warning ms-auto"
                                                                        style="margin-right: 5px"></i></a>


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
                            <h4 class="text-center">No Customer Wallet at the moment</h4>
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
