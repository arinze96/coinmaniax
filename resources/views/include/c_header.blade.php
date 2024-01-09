{{-- <div class="nk-header nk-header-fluid nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" style="background-color: white" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu" style="background-color"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ route('user.pages.view', ['index']) }}" style="font-size: 18px" class="logo-link h3">
                     {{ config("app.name") }}Glory
                        Limited Company LTD
                </a>
            </div>

            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-md-block">
                                    <div class="user-status user-status-unverified">Customer</div>
                                    <div class="user-name dropdown-indicator">
                                        {{ auth()->user()->username }}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>
                                            {{ strtoupper(substr(auth()->user()->username,0,2)) }}
                                        </span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">
                                            {{ auth()->user()->username }}
                                        </span>
                                        <span class="sub-text">
                                            {{ auth()->user()->email }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route("user.setting.view",["general"]) }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="{{ route("user.history.view",["deposit"]) }}"><em class="icon ni ni-activity-alt"></em><span>Your Activity</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route("user.logout.view") }}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div> --}}

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
navbar-scroll="true">
<div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
        {{-- <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                    href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
        </ol> --}}
        <h6 class="font-weight-bolder mb-0" style="color: white; margin-top: 30px; font-size: 30px">Gloryinvestmentlimited</h6>
       
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search"
                        aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Type here...">
            </div>
        </div>
        <ul class="navbar-nav  justify-content-end">
            {{-- <li class="nav-item d-flex align-items-center">
                <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank"
                    href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard">Online
                    Builder</a>
            </li> --}}
            <li class="nav-item d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1" style="color: white"></i>
                    <span class="d-sm-inline d-none" style="color: white">{{ auth()->user()->username }}</span>
                </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center" >
                <a href="javascript:;" class="nav-link text-body p-0" style="background-color: black" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line" style="background-color: white"></i>
                        <i class="sidenav-toggler-line" style="background-color: white"></i>
                        <i class="sidenav-toggler-line" style="background-color: white"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" style="color: white"></i>
                </a>
            </li>
           
        </ul>
    </div>
</div>
</nav>