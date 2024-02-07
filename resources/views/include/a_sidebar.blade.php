<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ route('app.home') }}"><img
                src="{{ asset('assets/home/assets/img/logo-img.png') }}" alt="logo" style="width: 100px; height: 30px; margin-top: 20px" /></a>
    </div>
    <ul class="nav">
      
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.dashboard.view') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.deposit.view', ['all']) }}">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Deposits</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route("admin.loan.view",["all"]) }}">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Loans</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.withdraw.view', ['active']) }}">
                <span class="menu-icon">
                    <i class="mdi mdi-rotate-right-variant"></i>
                </span>
                <span class="menu-title">Withdrawals</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.investment.view', ['all']) }}"">
                <span class="menu-icon">
                    <i class="mdi mdi-camera-timer"></i>
                </span>
                <span class="menu-title">Investments</span>
            </a>
        </li> --}}
        
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic199" aria-expanded="false"
                aria-controls="ui-basic199">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Deposits</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic199">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.deposit.view', ['allDeposits']) }}">All Deposits</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic05" aria-expanded="false"
                aria-controls="ui-basic05">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Personal Loans</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic05">
                <ul class="nav flex-column sub-menu">
                    {{-- <li class="nav-item"> <a class="nav-link"
                        href="{{ route("admin.loan.view",["active"]) }}">Active Loans</a></li> --}}
                    <li class="nav-item"> <a class="nav-link"
                        href="{{ route("admin.loan.view",["myAll"]) }}">All Loans </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic6" aria-expanded="false"
                aria-controls="ui-basic6">
                <span class="menu-icon">
                    <i class="mdi mdi-rotate-right-variant"></i>
                </span>
                <span class="menu-title">Withdrawals</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.withdraw.view', ['active']) }}">Active Withdrawals</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic8" aria-expanded="false"
                aria-controls="ui-basic8">
                <span class="menu-icon">
                    <i class="mdi mdi-camera-timer"></i>
                </span>
                <span class="menu-title">Investments</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic8">
                <ul class="nav flex-column sub-menu">
                    {{-- <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.investment.view', ['active']) }}">Active Investments</a></li> --}}
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.investment.view', ['allMy']) }}">All Investments</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic0" aria-expanded="false"
                aria-controls="ui-basic0">
                <span class="menu-icon">
                    <i class="mdi mdi-briefcase"></i>
                </span>
                <span class="menu-title">Wallets</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic0">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.wallet.view') }}">Customers Wallet</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic10" aria-expanded="false"
                aria-controls="ui-basic10">
                <span class="menu-icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                <span class="menu-title">App Users</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic10">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.users.view', ['customer']) }}">Customers</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.users.view', ['allAdmin']) }}">Administrators</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic13" aria-expanded="false"
                aria-controls="ui-basic13">
                <span class="menu-icon">
                    <i class="mdi mdi-settings"></i>
                </span>
                <span class="menu-title">App Settings</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic13">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route('admin.plans.view') }}">Plans Settings</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{ route("admin.application.view") }}">Applications Settings</a></li>
                </ul>
            </div>
        </li>
      
        {{-- <li class="nav-item menu-items">
            <a class="nav-link"
                href="{{ route('admin.profile.view') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-account-circle"></i>
                </span>
                <span class="menu-title">Profile</span>
            </a>
        </li> --}}
        
        <li class="nav-item menu-items">
            <a class="nav-link"
                href="{{ route('admin.logout') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-logout"></i>
                </span>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>