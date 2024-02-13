<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('include.c_css')
    <style>
        :root {
            --Cyan: hsl(179, 62%, 43%);
            --Light-Cyan: hsl(179, 47%, 52%);
            --Bright-Yellow: hsl(71, 73%, 54%);
            --Light-Bright-Yellow: hsl(71, 73%, 62%);
            --Light-Gray: hsl(204, 43%, 93%);
            --Grayish-Blue: hsl(218, 22%, 67%);
            --border-radius: 6px;
        }

        ul,
        ol {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .main {
            display: flex;
            align-items: center;
            justify-content: center;
            /* min-height: 100vh; */
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #fff;
        }

        .card-wrapper {
            max-width: 90%;
            margin: auto;
            text-align: start;
            overflow: hidden;
            border-radius: calc(var(--border-radius) + 2px);
            box-shadow: 4px 10px 15px hsla(217, 22%, 67%, 0.438);
        }

        @media (min-width: 767px) {
            .card-wrapper {
                max-width: 640px;
            }
        }

        .card-wrapper .card-summary {
            background-color: #fff;
            padding: 30px 25px;
        }

        @media (min-width: 767px) {
            .card-wrapper .card-summary {
                padding: 45px 40px;
            }
        }

        .card-summary h1 {
            color: var(--Cyan);
            margin-bottom: 20px;
        }

        .card-summary h2 {
            color: var(--Bright-Yellow);
            margin-bottom: 25px;
            font-size: 20px;
        }

        @media (min-width: 767px) {
            .card-summary h2 {
                margin-bottom: 10px;
            }
        }

        .card-summary p {
            color: var(--Grayish-Blue);
            line-height: 1.7;
        }

        @media (min-width: 767px) {
            .card-wrapper .card-features {
                display: flex;
            }
        }

        .card-wrapper .card-features>div {
            padding: 30px 24px;
            color: var(--Light-Gray);
        }

        @media (min-width: 767px) {
            .card-wrapper .card-features>div {
                padding: 40px;
                flex: 1;
            }
        }

        .card-features .feature-title {
            margin-bottom: 20px;
            font-size: 22px;
            color: #fff;
        }

        .card-features .subscribtion {
            background-color: var(--Cyan);
        }

        .card-features .why-us {
            background-color: var(--Light-Cyan);
        }

        .subscribtion .pricing-plan p:first-child {
            font-size: 18px;
            margin-bottom: 12px;
        }

        .subscribtion .pricing-plan p:first-child span {
            font-weight: 700;
            font-size: 35px;
            color: #fff;
            margin-right: 15px;
        }

        .subscribtion .btn {
            display: block;
            width: 100%;
            margin-top: 30px;
            padding: 15px;
            text-align: center;
            font-weight: 700;
            font-size: 18px;
            color: #fff;
            background-color: var(--Bright-Yellow);
            border-radius: var(--border-radius);
            transition: 200ms linear;
        }

        .subscribtion .btn:hover {
            background-color: var(--Light-Bright-Yellow);
        }

        .why-us ul li:not(:last-child) {
            margin-bottom: 5px;
        }
    </style>
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
                        @if ($user->user_id_verification == 0)
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0">COMPULSORY ID VERIFICATION</h4>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('user.id_auth') }}" enctype="multipart/form-data">
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
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
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
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
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
                                                            <span class="text-danger"
                                                                id="error_name">{{ $message }}</span>
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
                                                            <label for="government_id" class="form-label">Select
                                                                Government Issued ID to Upload
                                                                <span class="text-red">*</span></label>
                                                            <select name="government_id" id="government_id"
                                                                name="government_id" class="form-control">
                                                                <option value="" disabled selected hidden>Select
                                                                    Government Issued ID to Upload</option>
                                                                <option value="Drivers license">Drivers license
                                                                </option>
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
                                                            <input type="file" id="id_photo" name="id_photo"
                                                                required>
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
                        @else
                            <div class="page-header">
                                <div class="page-leftheader">
                                    <h4 class="page-title mb-0">ID VERIFICATION BEING PROCESSED</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <main class="main" style="background-color: #ebeef1">
                                        <div class="card-wrapper">
                                            <div class="card-summary">
                                                <h1>Your ID Verification Request Has Been Submitted</h1>
                                                <h2>Request Under Review</h2>
                                                {{-- <h2>Below is the reason for disabling your account 30-day, to appeal this
                                            decision</h2> --}}
                                                <p>
                                                    Please note that processing times may vary depending on the volume
                                                    of requests we receive. We appreciate your patience and cooperation
                                                    throughout this process.

                                                    Once your verification has been completed, you will receive further
                                                    communication regarding the status of your account or application.
                                                </p>
                                            </div>
                                            <div class="card-features">
                                                <div class="subscribtion">
                                                    <h3 class="feature-title">Our Availability Status</h3>
                                                    <div class="pricing-plan">
                                                        <p><span>24/7</span> <br> Agent Available</p>
                                                        <p>Contact support for more enquires</p>
                                                    </div>
                                                    <a href="mailto:support@coinmaniax.com" class="btn">Email
                                                        Us</a>
                                                </div>
                                                <div class="why-us">
                                                    <h3 class="feature-title">Why Work With Us at Coinmaniax</h3>
                                                    <ul>
                                                        <li>Financial Solutions</li>
                                                        <li>Accelerated Growth</li>
                                                        <li>Sustainable Investment</li>
                                                        <li>Modern Solutions</li>
                                                        <li>Expert Strategies</li>
                                                        <li>top-tier asset</li>
                                                        <li>certified team</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </div>
                            </div>
                        @endif

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
