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
                                <div class="nk-content ">
                                    <div class="container-fluid">
                                        <div class="nk-content-inner">
                                            <div class="nk-content-body">
                                                <div class="nk-block-head nk-block-head-sm">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h3 class="nk-block-title page-title">View Deposit Proof
                                                            </h3>
                                                            <div class="nk-block-des text-soft">
                                                                <p>{{ ucwords($deposit->username) }} Deposit Detail.</p>
                                                            </div>
                                                        </div><!-- .nk-block-head-content -->
                                                        <div class="nk-block-head-content">
                                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                                <a href="#"
                                                                    class="btn btn-icon btn-trigger toggle-expand mr-n1"
                                                                    data-target="pageMenu"><em
                                                                        class="icon ni ni-more-v"></em></a>
                                                                <div class="toggle-expand-content"
                                                                    data-content="pageMenu">
                                                                    <ul class="nk-block-tools g-3">

                                                                        <li class="nk-block-tools-opt"><a href=""
                                                                                class="btn btn-primary go_back"><em
                                                                                    class="icon ni ni-back-ios"></em><span>Back</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-block-head-content -->
                                                    </div><!-- .nk-block-between -->
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="row g-gs">
                                                        <div class="col-md-12 col-lg-12 col-xxl-3">
                                                            <div class="card card-bordered h-100">
                                                                <div class="card-inner">
                                                                    <div class="card-title-group align-start pb-3 g-2">
                                                                        <div class="card-tools text-center">

                                                                            @foreach (json_decode($deposit->proof) as $key => $image)
                                                                                {{-- <caption class="text-center">Image {{ $key + 1 }}</caption> --}}
                                                                                <img style="margin:3px;" height="300px"
                                                                                    src="{{ asset(str_replace('public', 'storage', $image)) }}"
                                                                                    alt="">
                                                                            @endforeach

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div><!-- .card -->
                                                        </div><!-- .col -->

                                                    </div><!-- .row -->
                                                </div><!-- .nk-block -->
                                            </div>
                                        </div>
                                    </div>
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
