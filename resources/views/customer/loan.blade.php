<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('include.c_css')
</head>

<body class="app sidebar-mini">
    <div class="switcher-wrapper">
        {{-- @include('include.switcher') --}}
        <div id="global-loader">
            <img src="{{ asset('assets/customer/assets/images/svgs/loader.svg') }}" alt="loader">
        </div>
        <div class="page">
            <div class="page-main">
                @include('include.c_sidebar')
                <div class="app-content main-content">
                    <div class="side-app">
                        @include('include.c_header')
                        <div class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0">Apply For Soft Loans</h4>
                            </div>
                            <div class="page-rightheader">
                                <div class="btn btn-list">
                                    <a href="index-2.html#" class="btn btn-info"><i class="fe fe-settings mr-1"></i>
                                        Settings </a>
                                    <a href="index-2.html#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i>
                                        Deposit </a>
                                    <a href="index-2.html#" class="btn btn-warning"><i
                                            class="fe fe-shopping-cart mr-1"></i> Withdraw </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Billing Information</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="First name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="Last name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Company Name <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="Company name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Email address <span class="text-red">*</span></label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Country <span class="text-red">*</span></label>
													<select class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Germany</option>
														<option value="2">Canada</option>
														<option value="3">Usa</option>
														<option value="4">Aus</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="Home Address">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">City <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="City">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Postal Code <span class="text-red">*</span></label>
													<input type="number" class="form-control" placeholder="ZIP Code">
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Amount <span class="text-red">*</span></label>
													<select class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">$5,000</option>
														<option value="2">$15,000</option>
														<option value="3">$39,000</option>
														<option value="4">$100,000</option>
													</select>
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Duration <span class="text-red">*</span></label>
													<select class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">1 month</option>
														<option value="2">3 months</option>
														<option value="3">6 months</option>
														<option value="4">1 year</option>
													</select>
												</div>
											</div>
                                            <button type="submit" class="btn btn-primary mt-4 mb-0">Submit</button>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-xl-4  col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                                <p class=" mb-1 fs-14">Total Users</p>
                                                <h2 class="mb-0"><span class="number-font1">112,769</span><span
                                                        class="ml-2 text-muted fs-11"><span class="text-danger"><i
                                                                class="fa fa-caret-down"></i> 43.2</span> this
                                                        month</span></h2>

                                            </div>
                                            <span
                                                class="text-primary fs-35 dash1-iocns bg-primary-transparent border-primary"><i
                                                    class="las la-users"></i></span>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div>
                                                <span class="text-muted fs-12 mr-1">Last Month</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-up mr-1 text-success"></i>90,876</span>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-muted fs-12 mr-1">Last Year</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-down mr-1 text-danger"></i>88,345</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                                <p class=" mb-1 fs-14">Daily Investment</p>
                                                <h2 class="mb-0"><span class="number-font1">$344,789</span><span
                                                        class="ml-2 text-muted fs-11"><span class="text-success"><i
                                                                class="fa fa-caret-up"></i> 19.8</span> this
                                                        month</span>
                                                </h2>
                                            </div>
                                            <span
                                                class="text-secondary fs-35 dash1-iocns bg-secondary-transparent border-secondary"><i
                                                    class="las la-hand-holding-usd"></i></span>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div>
                                                <span class="text-muted fs-12 mr-1">Last Month</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-up mr-1 text-success"></i>$1,112,786</span>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-muted fs-12 mr-1">Last Year</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-down mr-1 text-danger"></i>$899,987</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                                <p class=" mb-1 fs-14">Loan Applications</p>
                                                <h2 class="mb-0"><span class="number-font1">4,876</span><span
                                                        class="ml-2 text-muted fs-11"><span class="text-success"><i
                                                                class="fa fa-caret-up"></i> 0.8%</span> this
                                                        month</span>
                                                </h2>
                                            </div>
                                            <span
                                                class="text-info fs-35 bg-info-transparent border-info dash1-iocns"><i
                                                    class="las la-thumbs-up"></i></span>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div>
                                                <span class="text-muted fs-12 mr-1">Last Month</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-up mr-1 text-success"></i>1,034</span>
                                            </div>
                                            <div class="ml-auto">
                                                <span class="text-muted fs-12 mr-1">Last Year</span>
                                                <span class="number-font fs-12"><i
                                                        class="fa fa-caret-down mr-1 text-danger"></i>8,610</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- /////////////////// LOAN TRANSACTIONS////////////////////////// --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">MY LOAN TRANSACTIONS</div>
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
            </div>
            @include('include.c_footer')
            @include('include.c_script')
</body>

</html>
