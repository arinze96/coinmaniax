<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/home/assets/img/fabicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Coinmaniax</title>
    <style>
        body {
            background: #473BF0;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #473BF0;
        }

        .profile-button {
            background: #473BF0;
            box-shadow: none;
            border: none;
        }

        .profile-button:hover {
            background: #473BF0;
        }

        .profile-button:focus {
            background: #473BF0;
            box-shadow: none;
        }

        .profile-button:active {
            background: #473BF0;
            box-shadow: none;
        }

        .back:hover {
            color: #473BF0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container rounded bg-white" style="margin-top: 150px">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <div style="width: 100%; height: 50px;">
                    <img src="{{ asset("assets/home/assets/img/logo_black.png") }}" alt="">
                    </div>
                    <img class="rounded-circle mt-5"
                        src="{{ asset("assets/home/assets/img/me.png") }}" width="90"><span
                        class="font-weight-bold">John
                        Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span></div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back">
                            {{-- <i
                                class="fa fa-long-arrow-left mr-1 mb-1"></i> --}}
                            <h6></h6>
                        </div>
                        <h6 class="text-right">USER ID AUTHENTICATION</h6>
                    </div>
                    <form class="login100-form validate-form" method="POST" action="{{ route('user.id_auth') }}">
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">City <span style="color: red">*</span> </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="City">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">State / Province <span style="color: red">*</span> </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="State / Province">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">Current Address1 <span style="color: red">*</span> </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Current Address1">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">Current Address2</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Current Address2">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">Occupation <span style="color: red">*</span> </label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Doctor">
                            </div>
                            <div class="col-md-6">

                                <label for="exampleFormControlSelect1">Select Government Issued ID to Upload <span style="color: red">*</span> </label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value="Drivers Liscence">Drivers Liscence</option>
                                    <option value="International Passport">International Passport</option>
                                    <option value="Work IDs">Work IDs</option>
                                    <option value="Voter card">Voter card</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlFile1">Upload ID Photo <span style="color: red">*</span> </label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlFile1">Upload Profile Photo <span style="color: red">*</span> </label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                    </form>
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save
                            Profile</button></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
