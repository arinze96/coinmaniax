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
                                            <h4 class="mb-1 mb-sm-0">Overview of all Active Personal Loans</h4>
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
                        @if (!$loans->isEmpty())
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">All Active Personal Loans Deposit Request</h4>
                                        <h6 class="card-title">This is the list of all Personal Loans Deposit
                                            Request.
                                            <div class="table-responsive">
                                                @if (!$loans->isEmpty())
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Fullname</th>
                                                                <th scope="col">Currency</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Action</th>
                                                                <th scope="col">Approve</th>
                                                                <th scope="col">Decline</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($loans as $key => $loan)
                                                                <tr>
                                                                    <th scope="row">{{ $key + 1 }}</th>
                                                                    <td>{{ ucwords($loan->firstname) }}
                                                                        {{ ucwords($loan->lastname) }}</td>
                                                                    <td>{{ ucwords($loan->currency) }}</td>
                                                                    <td>{{ $loan->amount }}</td>
                                                                    <td>{{ $loan->status == 0 ? 'unapproved' : 'Approved' }}
                                                                    </td>
                                                                    <td>{{ date('d M,Y', strtotime($loan->created_at)) }}
                                                                    </td>
                                                                    <td>
                                                                        <a
                                                                            href="{{ route('admin.loan.view', ['edit', $loan->id]) }}"><i
                                                                                class="icon-sm mdi mdi-pen text-warning ms-auto"
                                                                                style="margin-right: 5px"></i></a></a>
                                                                        <a class="delete_data"
                                                                            href="{{ route('admin.loan.view', ['delete', $loan->id]) }}"
                                                                            data-type="loan"><i
                                                                                class="icon-sm mdi mdi-popcorn text-warning ms-auto"
                                                                                style="margin-right: 5px"></i></a>
                                                                    </td>

                                                                    <td>
                                                                        <a data-action="approve" data-type="loan"
                                                                            class="decline_approve"
                                                                            href="{{ route('admin.loan.view', ['approve', $loan->id]) }}">
                                                                            <div class="badge badge-outline-success">
                                                                                Approve
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a data-action="decline" data-type="loan"
                                                                            class="decline_approve"
                                                                            href="{{ route('admin.loan.view', ['decline', $loan->id]) }}">
                                                                            <div class="badge badge-outline-danger">
                                                                                Decline
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <h4 class="text-center">No Active loan at the moment</h4>
                                                @endif
                                            </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <h4 class="text-center">No Active Personal Loans at the moment</h4>
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
