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
                                <div class="card-header bg-gradient-primary text-center pt-4">
                                    <h3 style="color: white">General Profile Settings</h3>
                                </div>



                                <div class="card-body">
                                  <form action="{{ route('user.setting.view', ['general']) }}"
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

                                      <div class="col-sm-6 col-md-12 mb-2">
                                          <div class="form-group">
                                              <label class="form-label"
                                                  for="firstname">Firstname</label>
                                              <div class="form-control-wrap">
                                                  <input required="" type="text"
                                                      class="form-control" name="firstname"
                                                      value="{{ !empty(old('firstname')) ? old('firstname') : $user->firstname }}"
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
                                                      value="{{ !empty(old('lastname')) ? old('lastname') : $user->lastname }}"
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
                                                  for="username">Username</label>
                                              <div class="form-control-wrap">
                                                  <input required="" type="text"
                                                      class="form-control" name="username"
                                                      value="{{ !empty(old('username')) ? old('username') : $user->username }}"
                                                      placeholder="Enter username">
                                              </div>
                                              @error('username')
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
                                                      value="{{ !empty(old('email')) ? old('email') : $user->email }}"
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
                                                  for="phone">Phone</label>
                                              <div class="form-control-wrap">
                                                  <input required="" type="phone"
                                                      class="form-control" name="phone"
                                                      value="{{ !empty(old('phone')) ? old('phone') : $user->phone }}"
                                                      placeholder="Enter phone">
                                              </div>
                                              @error('phone')
                                                  <span class="text-danger"
                                                      id="error_name">{{ $message }}</span>
                                              @enderror
                                          </div>
                                      </div>


                                      <div class="col-sm-12 mt-3">
                                          <div class="form-group">
                                              <div class="form-control-wrap">
                                                  <button type="submit"
                                                      style="text-align:center;"
                                                      class="d-block bg-gradient-primary form-control btn btn-primary "
                                                      id="edit-plan">Update General
                                                      Data</button>
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
