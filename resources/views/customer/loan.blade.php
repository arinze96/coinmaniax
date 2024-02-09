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
                        <form action="{{ route('customer.loan') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-8 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Account Information</h3>
                                        </div>
                                        <div class="col-sm-12 col-md-12 form-row"
                                            style="width: 100%; justify-content: center">
                                            @if (!empty($success))
                                                <span style="margin-top: 10px"
                                                    class="info_box text-success">{{ $success }}</span>
                                            @endif
                                        </div>
                                        <div class="col-sm-12 col-md-12 form-row"
                                            style="width: 100%; justify-content: center">
                                            @if (!empty($error))
                                                <span style="margin-top: 10px"
                                                    class="info_box text-danger">{{ $error }}</span>
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">First Name <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="text" class="form-control"
                                                            name="firstname" value="{{ old('firstname') }}"
                                                            placeholder="Enter firstname">
                                                    </div>
                                                    @error('firstname')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Last Name <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="text" class="form-control"
                                                            name="lastname" value="{{ old('lastname') }}"
                                                            placeholder="Enter lastname">
                                                    </div>
                                                    @error('lastname')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Email address <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="email" class="form-control"
                                                            name="email" value="{{ old('email') }}"
                                                            placeholder="Enter email">
                                                    </div>
                                                    @error('email')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Address <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="text" class="form-control"
                                                            name="address" value="{{ old('address') }}"
                                                            placeholder="Enter address">
                                                    </div>
                                                    @error('address')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Next of Kin <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="phone" class="form-control"
                                                            name="next_of_kin" value="{{ old('next_of_kin') }}"
                                                            placeholder="Enter The Name Of Your Next of Kin">
                                                    </div>
                                                    @error('next_of_kin')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Prefered Payment Method <span
                                                                class="text-red">*</span></label>
                                                        <select name="currency" id="strategySelect"
                                                            class="form-control">
                                                            <option value="" disabled selected hidden>Payment
                                                                Method
                                                            </option>
                                                            <option value="BTC">BTC</option>
                                                            <option value="USD">USD</option>
                                                            <option value="ETH">ETH</option>
                                                            <option value="USDT">USDT</option>
                                                        </select>
                                                    </div>
                                                    @error('currency')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Amount <span
                                                                class="text-red">*</span></label>
                                                        <select name="amount" id="strategySelect"
                                                            class="form-control">
                                                            <option value="" disabled selected hidden>Amount
                                                            </option>
                                                            <option value="1000">$1,000</option>
                                                            <option value="3000">$3,000</option>
                                                            <option value="5000">$5,000</option>
                                                            <option value="7000">$7,000</option>
                                                            <option value="10000">$10,000
                                                            </option>
                                                            <option value="15000">$15,000
                                                            </option>
                                                            <option value="25000">$25,000
                                                            </option>
                                                            <option value="35000">$35,000
                                                            </option>
                                                            <option value="50000">$50,000
                                                            </option>
                                                            <option value="100000">$100,000</option>
                                                            <option value="100000">$500,000</option>
                                                            <option value="100000">$1,000,000</option>
                                                            <option value="100000">$3,500,000</option>
                                                            <option value="100000">$5,000,000</option>
                                                        </select>
                                                    </div>
                                                    @error('amount')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Duration of Loan <span
                                                                class="text-red">*</span></label>
                                                        <select name="duration" id="strategySelect"
                                                            class="form-control">
                                                            <option value="" disabled selected hidden>Duration of
                                                                Loan
                                                            </option>
                                                            <option value="3 months">3 months
                                                            </option>
                                                            <option value="6 months">6 months
                                                            </option>
                                                            <option value="1 year">1 year</option>
                                                            <option value="2 years">2 years
                                                            </option>
                                                        </select>
                                                    </div>
                                                    @error('duration')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Select Type of Loan <span
                                                                class="text-red">*</span></label>
                                                        <select name="type" id="strategySelect"
                                                            class="form-control">
                                                            <option value="" disabled selected hidden>Select Type
                                                                of Loan
                                                            </option>
                                                            <option value="Mortgage Loan">Mortgage Loan
                                                            </option>
                                                            <option value="Auto Loan">Auto Loan
                                                            </option>
                                                            <option value="Student Loan">Student Loan</option>
                                                            <option value="Personal Loan">Personal Loan</option>
                                                            <option value="Medical Loan">Medical Loan</option>
                                                            <option value="Credit Card Loan">Credit Card Loan</option>
                                                        </select>
                                                    </div>
                                                    @error('type')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <button type="submit"
                                                    class="btn btn-primary mt-4 mb-0">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- /////////////////// LOAN TRANSACTIONS////////////////////////// --}}


                        @if (!$loans->isEmpty())
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
                                                            <th class="wd-15p border-bottom-0">FULLNAME</th>
                                                            <th class="wd-15p border-bottom-0">NEXT OF KIN</th>
                                                            <th class="wd-10p border-bottom-0">AMOUNT</th>
                                                            <th class="wd-25p border-bottom-0">DURATION</th>
                                                            <th class="wd-25p border-bottom-0">STATUS</th>
                                                            <th class="wd-25p border-bottom-0">LOAN TYPE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($loans as $key => $loan)
                                                            <tr>
                                                                <td>{{ $key + 1 }}</td>
                                                                <td>{{ ucwords($loan->firstname) }}
                                                                    {{ ucwords($loan->lastname) }}</td>
                                                                <td>{{ ucwords($loan->next_of_kin) }}</td>
                                                                <td>${{ number_format($loan->amount, 0, '.', ',') }}
                                                                </td>
                                                                <td>{{ ucwords($loan->duration) }}</td>
                                                                <td>
                                                                    <?php
                                                                    if($loan->status == 0) {
                                                                        echo "unapproved";
                                                                    } elseif ($loan->status == 1) {
                                                                        echo "Approved";
                                                                    } else {
                                                                        echo "Canceled";
                                                                    }
                                                                    ?>
                                                                    </td>
                                                                <td>{{ ucwords($loan->type) }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            @include('include.c_footer')
            @include('include.c_script')

            @if (session('success'))
                <script>
                    Swal.fire({
                        title: "Good job!",
                        text: "You successfuly Applied!",
                        icon: "success"
                    });
                </script>
            @endif

</body>

</html>
