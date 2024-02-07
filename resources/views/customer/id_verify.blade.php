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
                                <h4 class="page-title mb-0">COMPULSORY ID VERIFICATION</h4>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('user.id_auth') }}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Personal Information</h3>
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
                                                        <label class="form-label">City <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="text" class="form-control"
                                                            name="city" value="{{ old('city') }}"
                                                            placeholder="Enter Your City">
                                                    </div>
                                                    @error('city')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">State / Province <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="text" class="form-control"
                                                            name="state_or_province"
                                                            value="{{ old('state_or_province') }}"
                                                            placeholder="Enter Your State / Province">
                                                    </div>
                                                    @error('state_or_province')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Current Address1 <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="text" class="form-control"
                                                            name="address1" value="{{ old('address1') }}"
                                                            placeholder="Enter Your Current Address1">
                                                    </div>
                                                    @error('address1')
                                                        <span class="text-danger" id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Current Address2 <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="text" class="form-control"
                                                            name="address2" value="{{ old('address2') }}"
                                                            placeholder="Enter Your Current Address2">
                                                    </div>
                                                    @error('address2')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Occupation <span
                                                                class="text-red">*</span></label>
                                                        <input required="" type="phone" class="form-control"
                                                            name="occupation" value="{{ old('occupation') }}"
                                                            placeholder="Occupation">
                                                    </div>
                                                    @error('occupation')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label for="government_id" class="form-label">Select Government Issued ID to Upload
                                                            <span class="text-red">*</span></label>
                                                        <select name="government_id" id="government_id" name="government_id"
                                                            class="form-control">
                                                            <option value="" disabled selected hidden>Select Government Issued ID to Upload</option>
                                                            <option value="Drivers Liscence">Drivers Liscence</option>
                                                            <option value="International Passport">International
                                                                Passport</option>
                                                            <option value="Work IDs">Work IDs</option>
                                                            <option value="Voter card">Voter card</option>
                                                        </select>
                                                    </div>
                                                    @error('government_id')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Upload ID Photo <span
                                                                class="text-red">*</span></label>
                                                                <input type="file" id="id_photo" name="id_photo" required
                                                                >
                                                    </div>
                                                    @error('id_photo')
                                                        <span class="text-danger"
                                                            id="error_name">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Profile Photo <span
                                                                class="text-red">*</span></label>
                                                                <input type="file" id="profile_photo"
                                                                name="profile_photo" required>
                                                    </div>
                                                    @error('profile_photo')
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


                        {{-- @if (!$loans->isEmpty())
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
                                                                    if ($loan->status == 0) {
                                                                        echo 'unapproved';
                                                                    } elseif ($loan->status == 1) {
                                                                        echo 'Approved';
                                                                    } else {
                                                                        echo 'Canceled';
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
                        @endif --}}

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
