

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Gloryinvestmentslimited</title>
    @include('include.c_css')
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">


</head>

<body class="g-sidenav-show  bg-gray-100">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    @include('include.c_sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('include.c_header')

        <main class="main-content  mt-0">
            <section class="min-vh-100 mb-8">
                <div class="container" style="margin-top: 100px">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8 mx-auto">
                            <div class="card z-index-0">
                                <div class="card-header text-center pt-4">
                                    <h3>APPLY FOR PERSONAL LOAN</h3>
                                </div>



                                <div class="card-body">
                                  <form action="{{ route('user.loan') }}" method="POST">
                                    @csrf
                                    <div class="row">

                                        <div class="col-sm-12  form-row">
                                            @if (!empty($success))
                                                <span
                                                    class="info_box text-success">{{ $success }}</span>
                                            @endif
                                        </div>

                                        <div class="col-sm-12  form-row">
                                            @if (!empty($error))
                                                <span
                                                    class="info_box text-danger">{{ $error }}</span>
                                            @endif
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="firstname">Firstname</label>
                                                <div class="form-control-wrap">
                                                    <input required="" type="text"
                                                        class="form-control" name="firstname"
                                                        value="{{ old('firstname') }}"
                                                        placeholder="Enter firstname">
                                                </div>
                                                @error('firstname')
                                                    <span class="text-danger"
                                                        id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="lastname">Lastname</label>
                                                <div class="form-control-wrap">
                                                    <input required="" type="text"
                                                        class="form-control" name="lastname"
                                                        value="{{ old('lastname') }}"
                                                        placeholder="Enter lastname">
                                                </div>
                                                @error('lastname')
                                                    <span class="text-danger"
                                                        id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="email">Email</label>
                                                <div class="form-control-wrap">
                                                    <input required="" type="email"
                                                        class="form-control" name="email"
                                                        value="{{ old('email') }}"
                                                        placeholder="Enter email">
                                                </div>
                                                @error('email')
                                                    <span class="text-danger"
                                                        id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="username">Address</label>
                                                <div class="form-control-wrap">
                                                    <input required="" type="text"
                                                        class="form-control" name="address"
                                                        value="{{ old('address') }}"
                                                        placeholder="Enter address">
                                                </div>
                                                @error('address')
                                                    <span class="text-danger"
                                                        id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label" for="phone">Next of
                                                    Kin</label>
                                                <div class="form-control-wrap">
                                                    <input required="" type="phone"
                                                        class="form-control" name="next_of_kin"
                                                        value="{{ old('next_of_kin') }}"
                                                        placeholder="Enter The Name Of Your Next of Kin">
                                                </div>
                                                @error('next_of_kin')
                                                    <span class="text-danger"
                                                        id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="phone">Payment Method</label>
                                                <div class="form-control-wrap">
                                                    <select name="currency"
                                                        id="strategySelect"
                                                        class="form-control">
                                                        <option value="" disabled
                                                            selected hidden>Payment Method
                                                        </option>
                                                        <option value="BTC">BTC</option>
                                                        <option value="USD">USD</option>
                                                        <option value="ETH">ETH</option>
                                                    </select>
                                                </div>
                                                @error('currency')
                                                    <span class="text-danger"
                                                        id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="phone">Amount</label>
                                                <div class="form-control-wrap">
                                                    <select name="amount" id="strategySelect"
                                                        class="form-control">
                                                        <option value="" disabled
                                                            selected hidden>Amount</option>
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
                                                        <option value="100000">$100,000
                                                        </option>

                                                    </select>
                                                </div>
                                                @error('amount')
                                                    <span class="text-danger"
                                                        id="error_name">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-12 mb-2">
                                            <div class="form-group">
                                                <label class="form-label"
                                                    for="phone">Duration of Loan</label>
                                                <div class="form-control-wrap">
                                                    <select name="duration"
                                                        id="strategySelect"
                                                        class="form-control">
                                                        <option value="" disabled
                                                            selected hidden>Duration of Loan
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
                                        </div>


                                        <div class="col-sm-4 mt-3">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <button type="submit"
                                                        style="text-align:center;"
                                                        class="d-block form-control btn btn-primary ">
                                                        Submit Request</button>
                                                </div>
                                            </div>
                                        </div>

                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>


        {{-- </div> --}}
        {{-- </div> --}}
    </main>
    @include('include.settings')



    @include('include.c_script')
</body>


</html>
