<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Gloryinvestmentlimited</title>
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
                                    <h3>DEPOSIT ON YOUR RETIREMENT ACCOUNT</h3>
                                </div>



                                <div class="card-body">
                                  <form action="{{ route('user.retirement_account') }}"
                                  method="POST">
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

                                      <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                          <div class="form-group">
                                              <label class="form-label" style="color: black"
                                                  for="firstname">Firstname</label>
                                              <div class="form-control-wrap">
                                                  <input required="" type="text"
                                                      class="form-control" name="firstname"
                                                      value="{{ $userDetails->firstname }}"
                                                      placeholder="Enter firstname">
                                              </div>
                                              @error('firstname')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                          </div>
                                      </div>


                                      <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                          <div class="form-group">
                                              <label class="form-label" style="color: black"
                                                  for="lastname">Lastname</label>
                                              <div class="form-control-wrap">
                                                  <input required="" type="text"
                                                      class="form-control" name="lastname"
                                                      value="{{ $userDetails->lastname }}"
                                                      placeholder="Enter lastname">
                                              </div>
                                              @error('lastname')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                          </div>
                                      </div>



                                      <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                          <div class="form-group">
                                              <label class="form-label" style="color: black"
                                                  for="email">Email</label>
                                              <div class="form-control-wrap">
                                                  <input required="" type="email"
                                                      class="form-control" name="email"
                                                      value="{{ $userDetails->email }}"
                                                      placeholder="Enter email">
                                              </div>
                                              @error('email')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                          </div>
                                      </div>

                                      <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                          <div class="form-group">
                                              <label class="form-label" style="color: black"
                                                  for="phone">Phone</label>
                                              <div class="form-control-wrap">
                                                  <input required="" type="text"
                                                      class="form-control" name="phone"
                                                      value="{{ $userDetails->phone }}"
                                                      placeholder="Enter Phone Number">
                                              </div>
                                              @error('phone')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                          </div>
                                      </div>

                                      <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                          <div class="form-group">
                                              <label class="form-label" style="color: black"
                                                  for="phone">Next of Kin</label>
                                              <div class="form-control-wrap">
                                                  <input required="" type="text"
                                                      class="form-control"
                                                      name="next_of_kin"
                                                      value="{{ old('next_of_kin') }}"
                                                      placeholder="Enter The Name Of Your Next of Kin">
                                              </div>
                                              @error('next_of_kin')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                          </div>
                                      </div>

                                      <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                          <div class="form-group">
                                              <label class="form-label" style="color: black"
                                                  for="currency">Payment Method</label>
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

                                      <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                          <div class="form-group">
                                              <label class="form-label" style="color: black"
                                                  for="phone">Amount</label>
                                              <div class="form-control-wrap">
                                                  <select name="amount" id="strategySelect"
                                                      class="form-control">
                                                      <option value="" disabled
                                                          selected hidden>Amount</option>
                                                      <option value="5000">$5,000</option>
                                                      <option value="7000">$7,000</option>
                                                      <option value="10000">$10,000</option>
                                                      <option value="15000">$15,000</option>
                                                      <option value="25000">$25,000</option>
                                                      <option value="35000">$35,000</option>
                                                      <option value="50000">$50,000</option>
                                                      <option value="100000">$100,000
                                                      </option>
                                                      <option value="500000">$500,000
                                                      </option>
                                                      <option value="1000000">$1,000,000
                                                      </option>

                                                  </select>
                                              </div>
                                              @error('amount')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                          </div>
                                      </div>

                                      <div class="col-sm-6 col-md-6" style="margin-top: -10px">
                                          <div class="form-group">
                                              <label class="form-label" style="color: black"
                                                  for="phone">Duration</label>
                                              <div class="form-control-wrap">
                                                  <select name="duration"
                                                      id="strategySelect"
                                                      class="form-control">
                                                      <option value="" disabled
                                                          selected hidden>Duration </option>
                                                      <option value="3 years">3 years
                                                      </option>
                                                      <option value="6 years">6 years
                                                      </option>
                                                      <option value="10 year">10 year
                                                      </option>
                                                      <option value="15 years">15 years
                                                      </option>
                                                  </select>
                                              </div>
                                              @error('duration')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                          </div>
                                      </div>


                                      <div class="col-sm-12 mt-3">
                                          <div class="form-group">
                                              <div class="form-control-wrap">
                                                  <button type="submit"
                                                      style="text-align:center; background-color:rgb(48, 48, 102)"
                                                      class="d-block bg-gradient-primary form-control btn btn-primary ">
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
