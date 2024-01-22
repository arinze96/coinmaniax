<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('include.c_css')
</head>

<body class="app sidebar-mini">
    <div class="switcher-wrapper">
        @include('include.switcher')
        <div id="global-loader">
            <img src="{{ asset('assets/customer/assets/images/svgs/loader.svg') }}" alt="loader">
        </div>
        <!--- End Global-loader-->
        <!-- Page -->
        <div class="page">
            <div class="page-main">
                @include('include.c_sidebar')
                <!--aside closed--> <!-- App-Content -->
                <div class="app-content main-content">
                    <div class="side-app">
                        <!--app header-->
                        @include('include.c_header')
                        <!--/app header--> <!--Page header-->
                        <div class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0">DEPOSIT FUNDS</h4>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="index-2.html#" class="btn btn-info"><i class="fe fe-settings mr-1"></i>
                                        General Settings </a>
                                    <a href="index-2.html#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i>
                                        Deposit </a>
                                    <a href="index-2.html#" class="btn btn-warning"><i
                                            class="fe fe-shopping-cart mr-1"></i> Withdraw </a>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Payment Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-pay">
                                            <ul class="tabs-menu nav">
                                                <li class=""><a href="#tab20" class="active" data-toggle="tab"><i
                                                            class="fa fa-credit-card"></i> Credit Card</a></li>
                                                <li><a href="#tab21" data-toggle="tab" class=""><i
                                                            class="fa fa-paypal"></i> Paypal</a></li>
                                                <li><a href="#tab22" data-toggle="tab" class=""><i
                                                            class="fa fa-university"></i> Bank Transfer</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active show" id="tab20">
                                                    <div class="bg-danger-transparent-2 text-danger px-4 py-2 br-3 mb-4"
                                                        role="alert">Please Enter Valid Details</div>
                                                    <div class="form-group">
                                                        <label class="form-label">CardHolder Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Card number</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Search for...">
                                                            <span class="input-group-append">
                                                                <button class="btn btn-secondary box-shadow-0"
                                                                    type="button"><i class="fa fa-cc-visa"></i>
                                                                    &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
                                                                    <i class="fa fa-cc-mastercard"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label class="form-label">Expiration</label>
                                                                <div class="input-group">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="MM" name="Month">
                                                                    <input type="number" class="form-control"
                                                                        placeholder="YY" name="Year">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label class="form-label">CVV <i
                                                                        class="fa fa-question-circle"></i></label>
                                                                <input type="number" class="form-control"
                                                                    required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="btn  btn-lg btn-primary">Confirm</a>
                                                </div>
                                                <div class="tab-pane" id="tab21">
                                                    <p>Paypal is easiest way to pay online</p>
                                                    <p><a href="#" class="btn btn-primary"><i
                                                                class="fa fa-paypal"></i> Log in my Paypal</a></p>
                                                    <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem
                                                        quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                                        consequuntur magni dolores eos qui ratione voluptatem sequi
                                                        nesciunt. </p>
                                                </div>
                                                <div class="tab-pane" id="tab22">
                                                    <p>Bank account details</p>
                                                    <dl class="card-text">
                                                        <dt>BANK: </dt>
                                                        <dd> THE UNION BANK 0456</dd>
                                                    </dl>
                                                    <dl class="card-text">
                                                        <dt>Accaunt number: </dt>
                                                        <dd> 67542897653214</dd>
                                                    </dl>
                                                    <dl class="card-text">
                                                        <dt>IBAN: </dt>
                                                        <dd>543218769</dd>
                                                    </dl>
                                                    <p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem
                                                        quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                                        consequuntur magni dolores eos qui ratione voluptatem sequi
                                                        nesciunt. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Recent Customers</h3>
                                        <div class="card-options">
                                            <a href="index-2.html#" class="option-dots" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"><i
                                                    class="fe fe-more-horizontal fs-20"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="index-2.html#">Today</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Week</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Month</a>
                                                <a class="dropdown-item" href="index-2.html#">Last Year</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="list-card">
                                            <span class="bg-warning list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1">@Marshall</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 2342<span
                                                                    class="ml-2 text-success fs-13 font-weight-semibold">Paid</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$558</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-card">
                                            <span class="bg-info list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1">@Chapman</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 6720<span
                                                                    class="ml-2 text-danger fs-13 font-weight-semibold">Pending</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$458</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-card">
                                            <span class="bg-danger list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1">@Sonia</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 8763<span
                                                                    class="ml-2 text-success fs-13 font-weight-semibold">Paid</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$358</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-card">
                                            <span class="bg-success list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1">@Joseph</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 1076<span
                                                                    class="ml-2 text-danger fs-13 font-weight-semibold">Pending</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$796</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-card">
                                            <span class="bg-primary list-bar"></span>
                                            <div class="row align-items-center">
                                                <div class="col-9 col-sm-9">
                                                    <div class="media mt-0">
                                                        <div class="media-body">
                                                            <div class="d-md-flex align-items-center mt-1">
                                                                <h6 class="mb-1"> @Abraham</h6>
                                                            </div>
                                                            <span class="mb-0 fs-13 text-muted">User 986<span
                                                                    class="ml-2 text-success fs-13 font-weight-semibold">Paid</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-sm-3">
                                                    <div class="text-right">
                                                        <span
                                                            class="font-weight-semibold fs-16 number-font">$867</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- /////////////////// DEPOSIT TRANSACTIONS////////////////////////// --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">MY DEPOSIT TRANSACTIONS</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap" id="example1">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">S/N</th>
                                                        <th class="wd-15p border-bottom-0">MESSAGE</th>
                                                        <th class="wd-20p border-bottom-0">CURRENCY</th>
                                                        <th class="wd-15p border-bottom-0">AMOUNT</th>
                                                        <th class="wd-10p border-bottom-0">TYPE</th>
                                                        <th class="wd-25p border-bottom-0">STATUS</th>
                                                        <th class="wd-25p border-bottom-0">DATE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Bella</td>
                                                        <td>Chloe</td>
                                                        <td>System Developer</td>
                                                        <td>2018/03/12</td>
                                                        <td>$654,765</td>
                                                        <td>b.Chloe@datatables.net</td>
                                                        <td>$654,765</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Donna</td>
                                                        <td>Bond</td>
                                                        <td>Account Manager</td>
                                                        <td>2012/02/21</td>
                                                        <td>$543,654</td>
                                                        <td>d.bond@datatables.net</td>
                                                        <td>$543,654</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harry</td>
                                                        <td>Carr</td>
                                                        <td>Technical Manager</td>
                                                        <td>20011/02/87</td>
                                                        <td>$86,000</td>
                                                        <td>h.carr@datatables.net</td>
                                                        <td>$86,000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--/div-->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End app-content-->
            </div>
            <!--Footer-->
            @include('include.c_footer')
            @include('include.c_script')
</body>

</html>
