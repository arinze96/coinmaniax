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
                                            <h4 class="mb-1 mb-sm-0">Overview of all Charity Donations</h4>
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
                        @if (!$child->isEmpty())
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">All Children Account funds Deposit Request</h4>
                                        <h6 class="card-title">This is the list of all Children Account funds Deposit
                                            Request.
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Fullname</th>
                                                            <th>Childs age</th>
                                                            <th>Currency</th>
                                                            <th>Amount</th>
                                                            <th>Duration</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                            <th>Approve</th>
                                                            <th>Decline</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($child as $key => $children)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>{{ ucwords($children->childs_fullname) }}</td>
                                                                <td>{{ ucwords($children->childs_age) }}</td>

                                                                <td>{{ ucwords($children->currency) }}</td>
                                                                <td>${{ ucwords($children->amount) }}</td>
                                                                <td>{{ ucwords($children->duration) }}</td>
                                                                <td>{{ $children->status == 0 ? 'unapproved' : 'Approved' }}
                                                                </td>

                                                                <td style="justify-content: space-between">
                                                                    <a
                                                                        href="{{ route('admin.child.view', ['edit', $children->id]) }}"><i
                                                                            class="icon-sm mdi mdi-pen text-warning ms-auto"
                                                                            style="margin-right: 5px"></i></a>
                                                                    <a class="delete_data"
                                                                        href="{{ route('admin.child.view', ['delete', $children->id]) }}"
                                                                        data-type="Request"><i
                                                                            class="icon-sm mdi mdi-popcorn text-warning ms-auto"
                                                                            style="margin-right: 5px"></i></a>
                                                                </td>
                                                                <td>
                                                                    <a data-action="approve" data-type="Request"
                                                                        class="decline_approve"
                                                                        href="{{ route('admin.child.view', ['approve', $children->id]) }}">
                                                                        <div class="badge badge-outline-success">Approve
                                                                        </div>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a data-action="decline" data-type="Request"
                                                                        class="decline_approve"
                                                                        href="{{ route('admin.child.view', ['decline', $children->id]) }}">
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
                            <h4 class="text-center">No Active CHildren Investments at the moment</h4>
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
