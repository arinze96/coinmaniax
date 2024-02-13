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
                                            <h4 class="mb-1 mb-sm-0">Overview of all customers wallet</h4>
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


                    <div class="row ">
                        @if (!empty($usersWithCity))
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Our Customers</h4>
                                        <h6 class="card-title">This is the list of all users of our app.
                                        </h6>
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
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Fullname</th>
                                                        <th scope="col">City</th>
                                                        <th scope="col">Occupation</th>
                                                        <th scope="col">Address1</th>
                                                        <th scope="col">Address2</th>
                                                        <th scope="col">State/Province</th>
                                                        <th scope="col">government ID</th>
                                                        <th scope="col">ID Photo</th>
                                                        <th scope="col">Profile Photo</th>
                                                        <th scope="col">Verification Status</th>
                                                        <th scope="col">Approve</th>
                                                        <th scope="col">Decline</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($usersWithCity as $key => $user)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td scope="row">{{ ucwords($user->firstname) }}
                                                                {{ ucwords($user->lastname) }} </td>
                                                            <td>{{ ucwords($user->city) }}</td>
                                                            <td>{{ ucwords($user->occupation) }}</td>
                                                            <td>{{ ucwords($user->address1) }}</td>
                                                            <td>{{ ucwords($user->address2) }}</td>
                                                            <td>{{ ucwords($user->state_or_province) }}</td>
                                                            <td>{{ ucwords($user->government_id) }}</td>
                                                            {{-- <td> --}}
                                                            {{-- {{ ucwords($user->id_photo) }} --}}
                                                            {{-- <img src="{{ asset("assets/home/assets/img/agric.jpeg") }}" alt="Girl in a jacket" style="width:30px;height:30px;"> --}}
                                                            {{-- </td> --}}
                                                            {{-- <td> --}}
                                                            {{-- {{ ucwords($user->profile_photo) }} --}}
                                                            {{-- <img src="{{ asset("assets/home/assets/img/agric.jpeg") }}" alt="Girl in a jacket" style="width:30px;height:30px;"> --}}
                                                            {{-- </td> --}}
                                                            <td style="justify-content: space-between">
                                                                <a
                                                                    href="{{ route('showImage', ['image' => $user->id_photo]) }}">
                                                                    <i class="icon-sm mdi mdi-eye text-warning ms-auto"
                                                                        style="margin-right: 5px"></i>
                                                                </a>
                                                            </td>
                                                            <td style="justify-content: space-between">
                                                                <a
                                                                    href="{{ route('showImage', ['image' => $user->profile_photo]) }}">
                                                                    <i class="icon-sm mdi mdi-eye text-warning ms-auto"
                                                                        style="margin-right: 5px"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                @if($user->user_id_verification == 1)
                                                                    <button type="button" class="btn btn-warning">Pending Approval</button>
                                                                @elseif($user->user_id_verification == 2)
                                                                    <button type="button" class="btn btn-success">Verified</button>
                                                                @else
                                                                    <button type="button" class="btn btn-danger">Declined</button>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <form method="POST"
                                                                    action="{{ route('user.approve', $user->id) }}">
                                                                    @csrf
                                                                    <button class="badge badge-outline-success"
                                                                        style="background-color: #191c24">
                                                                        <div>
                                                                            Approved</div>
                                                                    </button>
                                                                </form>

                                                            </td>
                                                            <td>
                                                                <form method="POST"
                                                                    action="{{ route('user.decline', $user->id) }}">
                                                                    @csrf
                                                                    <button class="badge badge-outline-danger"
                                                                        style="background-color: #191c24">
                                                                        <div>Decline
                                                                        </div>
                                                                    </button>
                                                                </form>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <h4 class="text-center">No Customer Wallet at the moment</h4>
                        @endif
                    </div>



                </div>
                @include('include.a_footer')
            </div>
        </div>
    </div>
    @include('include.a_scripts')
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "You successfuly Approved it!",
                icon: "success"
            });
        </script>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</body>

</html>
