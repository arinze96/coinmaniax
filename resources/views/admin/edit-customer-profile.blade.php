<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coinmaniax</title>
    @include('include.a_css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('include.a_sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('include.a_topbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card corona-gradient-card">
                                <div class="card-body py-0 px-0 px-sm-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-sm-3 col-xl-2">
                                            <img src="assets/admin/images/dashboard/Group126@2x.png"
                                                class="gradient-corona-img img-fluid" alt="">
                                        </div>
                                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                                            <h4 class="mb-1 mb-sm-0">Overview of all Plans</h4>
                                        </div>
                                        <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                            <span>
                                                <a href="{{ route('app.home') }}" target="_blank"
                                                    class="btn btn-outline-light btn-rounded get-started-btn">Go to
                                                    Home</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <form class="" method="POST" data-post-type="edit-plan"
                                action="{{ route('admin.users.view', ['edit-customer-profile', $user->id]) }}">

                                @csrf
                                <div class="col-sm-12  form-row">
                                    @if (!empty($success))
                                        <span class="info_box text-success">{{ $success }}</span>
                                    @endif
                                </div>

                                <div class="col-sm-12  form-row">
                                    @if (!empty($error))
                                        <span class="info_box text-danger">{{ $error }}</span>
                                    @endif
                                </div>


                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="firstname">Firstname</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" name="firstname"
                                                class="form-control" id="firstname" placeholder="Enter firstname"
                                                value="{{ !empty(old('firstname')) ? old('firstname') : $user->firstname }}">
                                        </div>
                                        @error('firstname')
                                            <span class="text-danger" id="error_firstname">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="lastname">Lastname</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" name="lastname"
                                                class="form-control" id="lastname" placeholder="Enter lastname"
                                                value="{{ !empty(old('lastname')) ? old('lastname') : $user->lastname }}">
                                        </div>
                                        @error('lastname')
                                            <span class="text-danger" id="error_lastname">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="username">Username</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" name="username"
                                                class="form-control" id="username" placeholder="Enter username"
                                                value="{{ !empty(old('username')) ? old('username') : $user->username }}">
                                        </div>
                                        @error('username')
                                            <span class="text-danger" id="error_username">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" name="email"
                                                class="form-control" id="email" placeholder="Enter email"
                                                value="{{ !empty(old('email')) ? old('email') : $user->email }}">
                                        </div>
                                        @error('email')
                                            <span class="text-danger" id="error_email">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="country">Country</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" name="country"
                                                class="form-control" id="country" placeholder="Enter country"
                                                value="{{ !empty(old('country')) ? old('country') : $user->country }}">
                                        </div>
                                        @error('country')
                                            <span class="text-danger" id="error_country">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="pin">pin</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" name="pin"
                                                class="form-control" id="pin" placeholder="Enter pin"
                                                value="{{ !empty(old('pin')) ? old('pin') : $user->pin }}">
                                        </div>
                                        @error('pin')
                                            <span class="text-danger" id="error_pin">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="phone">phone</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text" name="phone"
                                                class="form-control" id="phone" placeholder="Enter phone"
                                                value="{{ !empty(old('phone')) ? old('phone') : $user->phone }}">
                                        </div>
                                        @error('phone')
                                            <span class="text-danger" id="error_phone">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="min">Enable/Disable Withdrawals</label>
                                        <div class="form-control-wrap">
                                            <select name="enable_or_disable_withdrawals" class="form-control"
                                                style="background-color: rgb(144, 140, 140)">
                                                <option
                                                    selected = "{{ $user->enable_or_disable_withdrawals == 1 ? 'selected':''  }}"
                                                value="{{ !empty(old('enable_or_disable_withdrawals')) ? old('enable_or_disable_withdrawals') : '1' }}">
                                                Enable withdrawals</option>

                                                <option

                                                selected = "{{ $user->enable_or_disable_withdrawals == 2 ? '':'selected'  }}"


                                                value="{{ !empty(old('enable_or_disable_withdrawals')) ? old('enable_or_disable_withdrawals') : '2' }}">
                                                Disable Withdrawals</option>
                                                    
                                      
                                    
                                            </select>
                                        </div>
                                        @error('enable_or_disable_withdrawals')
                                            <span class="text-danger"
                                                id="enable_or_disable_withdrawals">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="phone">Disable Withdrawals Message</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text"
                                                name="withdrawal_message" class="form-control"
                                                id="withdrawal_message" placeholder="Enter Withdrawals Message"
                                                value="{{ !empty(old('withdrawal_message')) ? old('withdrawal_message') : $user->withdrawal_message }}">
                                        </div>
                                        @error('withdrawal_message')
                                            <span class="text-danger"
                                                id="error_withdrawal_message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="min">Block/Unblock Account</label>
                                        <div class="form-control-wrap">
                                            <select name="block_or_unblock_account" class="form-control"
                                                style="background-color: rgb(144, 140, 140)">

                                                <option selected = "{{ $user->block_or_unblock_account == 1 ? 'selected':''  }}"
                                                    value="{{ !empty(old('block_or_unblock_account')) ? old('block_or_unblock_account') : '1' }}">
                                                    Unblock Account</option>
                                                <option selected = "{{ $user->block_or_unblock_account == 2 ? 'selected':''  }}"
                                                    value="{{ !empty(old('block_or_unblock_account')) ? old('block_or_unblock_account') : '2' }}">
                                                    Block Account</option>
                                            </select>
                                        </div>
                                        @error('block_or_unblock_account')
                                            <span class="text-danger"
                                                id="block_or_unblock_account">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="phone">Block Account Message</label>
                                        <div class="form-control-wrap">
                                            <input style="color: #fff" required="" type="text"
                                                name="block_account_message" class="form-control"
                                                id="block_account_message" placeholder="Enter Block Account Message"
                                                value="{{ !empty(old('block_account_message')) ? old('block_account_message') : $user->block_account_message }}">
                                        </div>
                                        @error('block_account_message')
                                            <span class="text-danger"
                                                id="error_block_account_message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="col-sm-6 col-md-12 mb-2">
                                    <div class="form-group">
                                        <label class="form-label" for="min">Approve/Decline ID Verification</label>
                                        <div class="form-control-wrap">
                                            <select name="verification_status" class="form-control"
                                                style="background-color: rgb(144, 140, 140)">

                                                <option selected = "{{ $user->user_id_verification == 2 ? 'selected':''  }}"
                                                    value="{{ !empty(old('verification_status')) ? old('verification_status') : '0' }}">
                                                    Re-verify The User</option>

                                                <option selected = "{{ $user->user_id_verification == 1 ? 'selected':''  }}"
                                                    value="{{ !empty(old('verification_status')) ? old('verification_status') : '2' }}">
                                                    Approve ID Verification</option>
                                                <option selected = "{{ $user->user_id_verification == 1 ? 'selected':''  }}"
                                                    value="{{ !empty(old('verification_status')) ? old('verification_status') : '0' }}">
                                                    Decline ID Verification</option>
                                            </select>
                                        </div>
                                        @error('verification_status')
                                            <span class="text-danger"
                                                id="verification_status">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}




                                <div class="col-sm-4 mt-3">
                                    <div class="form-group">
                                        <div class="form-control-wrap">
                                            <button type="submit" name="edit-plan" style="text-align:center;"
                                                class="d-block form-control btn btn-primary ">Edit Profile
                                                Record</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>



                </div>
                @include('include.a_footer')
            </div>
        </div>
    </div>
    @include('include.a_scripts')
</body>

</html>
