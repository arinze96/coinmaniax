<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/home/assets/img/mug.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Coinmaniax</title>
    <style>
        body {
            /* background-image: url("../home/assets/img/bgg.jpg"); */
            /* background-image: url('../../../public/assets/img/bgg.jpg'); */
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
                        <img src="{{ asset('assets/home/assets/img/logo_black.png') }}" alt="">
                    </div>
                    <img class="rounded-circle mt-5" src="{{ asset('assets/home/assets/img/me.png') }}"
                        width="90"><span class="font-weight-bold">John
                        Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span>
                </div>
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
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">City <span style="color: red">*</span> </label>
                                <input type="text" class="form-control input100" value="{{ old('city') }}"
                                    name="city" id="exampleFormControlInput1" placeholder="City">
                            </div>
                            @error('city')
                                <p class="text-danger reduced-font">{{ $message }} </p>
                            @enderror
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">State / Province <span style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control input100"
                                    value="{{ old('state_or_province') }}" name="state_or_province"
                                    id="exampleFormControlInput1" placeholder="State / Province">
                            </div>
                            @error('state_or_province')
                                <p class="text-danger reduced-font">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">Current Address1 <span style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control input100" value="{{ old('address1') }}"
                                    name="address1" id="exampleFormControlInput1" placeholder="Current Address1">
                            </div>
                            @error('address1')
                                <p class="text-danger reduced-font">{{ $message }} </p>
                            @enderror
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">Current Address2</label>
                                <input type="text" class="form-control input100" value="{{ old('address2') }}"
                                    name="address2" id="exampleFormControlInput1" placeholder="Current Address2">
                            </div>
                            @error('address2')
                                <p class="text-danger reduced-font">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlInput1">Occupation <span style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control input100" value="{{ old('occupation') }}"
                                    name="occupation" id="exampleFormControlInput1" placeholder="Doctor">
                            </div>
                            @error('occupation')
                                <p class="text-danger reduced-font">{{ $message }} </p>
                            @enderror
                            <div class="col-md-6">

                                <label for="government_id">Select Government Issued ID to Upload <span
                                        style="color: red">*</span> </label>
                                <select class="form-control" id="government_id" name="government_id" required>>
                                    <option value="Drivers Liscence">Drivers Liscence</option>
                                    <option value="International Passport">International Passport</option>
                                    <option value="Work IDs">Work IDs</option>
                                    <option value="Voter card">Voter card</option>
                                </select>
                            </div>
                            @error('government_id')
                                <p class="text-danger reduced-font">{{ $message }} </p>
                            @enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="id_photo">Upload ID Photo <span style="color: red">*</span>
                                </label>
                                <input type="file" id="id_photo" name="id_photo" required
                                    class="form-control-file">
                            </div>
                            @error('id_photo')
                                <p class="text-danger reduced-font">{{ $message }} </p>
                            @enderror
                            <div class="col-md-6">
                                <label for="profile_photo">Upload Profile Photo <span style="color: red">*</span>
                                </label>
                                <input type="file" class="form-control-file" id="profile_photo"
                                    name="profile_photo" required>
                            </div>
                            @error('profile_photo')
                                <p class="text-danger reduced-font">{{ $message }} </p>
                            @enderror
                        </div>
                    </form>
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Save
                            Profile</button></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
