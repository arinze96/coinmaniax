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


                    <div class="row ">
                        @if (!empty($plans))
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Plans</h4>
                                        <h6 class="card-title">This is the list of all your plans.
                                        </h6>
                                        <a href="{{ route('admin.add.plan.view') }}">
                                            <button style="margin-top: 20px; margin-bottom: 20px" type="button"
                                                class="btn btn-primary">Add Plan</button>
                                        </a>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Maximum Amount</th>
                                                        <th>Minimum Amount</th>
                                                        <th>Type</th>
                                                        <th>ROI</th>
                                                        <th>Duration</th>
                                                        <th>Commission</th>
                                                        <th>Action</th>
                                                        {{-- <th>Plan Image</th> --}}
                                                        <th>Plan Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($plans as $key => $plan)
                                                        <tr>
                                                            <th scope="row">{{ $key + 1 }}</th>
                                                            <td>{{ ucwords($plan->name) }}</td>
                                                            <td>${{ $plan->currency == 'USD' ? number_format($plan->max, 0, '.', ',') : $plan->max }}
                                                            <td>${{ $plan->currency == 'USD' ? number_format($plan->min, 0, '.', ',') : $plan->min }}
                                                                {{ strtoupper($plan->currency) }}</td>
                                                            <td>{{ str_replace('-', ' ', $plan->type) }}</td>
                                                            <td>{{ str_replace('-', ' ', $plan->roi) }}</td>

                                                            <td>{{ ucwords($plan->duration) }}</td>
                                                            <td>{{ $plan->commission }}%</td>
                                                            <td>
                                                                <a data-type="plan"
                                                                    href="{{ route('admin.edit.plan.view', ['id' => $plan->id]) }}">
                                                                    <i class="icon-sm mdi mdi-pen text-warning ms-auto"
                                                                        style="margin-right: 5px"></i>
                                                                </a>

                                                                <a class="delete_data"
                                                                    href="{{ route('admin.delete.plan.post', ['id' => $plan->id]) }}">
                                                                    <i class="icon-sm mdi mdi-popcorn text-warning ms-auto"
                                                                        style="margin-right: 5px"></i>
                                                                </a>
                                                            </td>
                                                            {{-- <td>{{ ucwords($plan->plan_image) }}</td> --}}
                                                            <td>{{ ucwords($plan->plan_description) }}</td>

                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <h4 class="text-center">You currently dont have any plans</h4>
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
