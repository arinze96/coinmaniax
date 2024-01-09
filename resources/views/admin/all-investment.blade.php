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
                                            <h4 class="mb-1 mb-sm-0">Overview of all systems transaction</h4>
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
                        @if (!$investments->isEmpty())
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">All Customer Investments</h4>
                                        <h6 class="card-title">This is the list of all investments of customers.
                                        </h6>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Fullname/Username/Email</th>
                                                        <th>Currency</th>
                                                        <th>Amount</th>
                                                        <th>Curreny Amount</th>
                                                        <th>Total</th>
                                                        <th>Daily</th>
                                                        <th>Start/End Date</th>
                                                        <th>Duration</th>
                                                        <th>Commission</th>
                                                        <th>Status</th>
                                                        <th>Last Update</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($investments as $key => $investment)
                                                        <tr>
                                                            <th scope="row">{{ ucwords($investment->firstname) }} {{ ucwords($investment->lastname) }} / {{ ucwords($investment->username) }} / {{ ucwords($investment->email) }}</th>
                                                            <td>{{ ucwords($investment->currency) }}</td>
                                                            <td>${{ ($investment->currency == "USD") ? number_format($investment->amount,0,".",",") : $investment->amount }}</td>
                                                            <td>${{ ($investment->currency == "USD") ? number_format($investment->growth_amount,0,".",",") : $investment->growth_amount }}</td>
                                                            <?php
                                                              $amount = $investment->amount;
                                                              $commission = ($amount * $investment->percent_commission)/100;
                                                              $total = $amount + $commission;
                                                              $daily = $commission/preg_replace('~\D~', '', $investment->duration);
                                                            ?>
                                                            <td>${{ ($investment->currency == "USD") ? number_format($total,0,".",",") : $total }}</td>
                                                            <td>${{ ($investment->currency == "USD") ? number_format($daily,0,".",",") : $daily }}</td>
                                                            <td>{{ date("d M,Y",strtotime($investment->created_at)) }} <b class="text-danger">=></b>  {{ date("d M,Y",strtotime($investment->close_date)) }}</td>
                                                            <td>{{ ucwords($investment->duration) }}</td>
                                                            <td>{{ ucwords($investment->percent_commission) }}%</td>

                                                            <td>{{ ucwords(config("app.tx_status")[$investment->status]) }}</td>
                                                            <td>{{ date("d M,Y",strtotime($investment->updated_at)) }}</td>
                                                            <td style="justify-content: space-between">
                                                                <a href="{{ route("admin.investment.view",["edit",$investment->id]) }}"><i
                                                                        class="icon-sm mdi mdi-pen text-warning ms-auto"
                                                                        style="margin-right: 5px"></i></a>

                                                                        <a class="delete_data text-danger" href="{{ route("admin.investment.view",["delete",$investment->id]) }}" data-type="investment" ><i
                                                                        class="icon-sm mdi mdi-popcorn text-warning ms-auto"
                                                                        style="margin-right: 5px"></i></a>


                                                            </td>
                                                            <td>
                                                                <li><a data-action="approve" data-type="investment"  class="decline_approve" href="{{ route("admin.investment.view",["complete",$investment->id]) }}">
                                                                    <div class="badge badge-outline-success">Complete
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a data-action="update today accural" data-type="investment"  class="decline_approve" href="{{ route("admin.investment.view",["today",$investment->id]) }}">
                                                                    <div class="badge badge-outline-primary">Update Today Accural
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
                            <h4 class="text-center">No Active Investments available</h4>
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
