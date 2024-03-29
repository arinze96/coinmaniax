<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ route('app.home') }}">
            <img src="{{ asset('assets/home/assets/img/logo-img.png') }}" class="header-brand-img desktop-lgo"
                alt="Coinmaniax logo">
            <img src="{{ asset('assets/home/assets/img/logo-img.png') }}" class="header-brand-img dark-logo"
                alt="Coinmaniax logo">
            <img src="{{ asset('assets/home/assets/img/logo-img.png') }}" class="header-brand-img mobile-logo"
                alt="Coinmaniax logo">
            <img src="{{ asset('assets/home/assets/img/logo-img.png') }}" class="header-brand-img darkmobile-logo"
                alt="Coinmaniax logo">
        </a>
    </div>

    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="{{ asset('assets/home/assets/img/me.png') }}" alt="user-img"
                    class="avatar-xl rounded-circle mb-1">
            </div>
            <div class="user-info">
                <h5 class=" mb-1">{{ ucfirst(auth()->user()->firstname) }} {{ ucfirst(auth()->user()->lastname) }} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
                <span class="text-muted app-sidebar__user-name text-sm"></span>
            </div>
        </div>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category mt-4">Main</li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route("user.dashboard.view") }}">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
                </svg>
                <span class="side-menu__label">Dashboard</span></a>
        </li>

        {{-- FINANCIAL OPERATIONS --}}
        <li class="side-item side-item-category">Financial Operations </li>

        <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z" />
                </svg>
                <span class="side-menu__label">Deposit Funds</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('user.deposit.view', ['usd']) }}" class="slide-item">DEPOSIT</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                </svg>
                <span class="side-menu__label">Withdraw Funds</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('user.withdraw.view') }}" class="slide-item">WITHDRAW</a></li>
            </ul>
        </li>


        <li class="side-item side-item-category">Investment Assets</li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M12 22C6.49 22 2 17.51 2 12S6.49 2 12 2s10 4.04 10 9c0 3.31-2.69 6-6 6h-1.77c-.28 0-.5.22-.5.5 0 .12.05.23.13.33.41.47.64 1.06.64 1.67 0 1.38-1.12 2.5-2.5 2.5zm0-18c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7z" />
                    <circle cx="6.5" cy="11.5" r="1.5" />
                    <circle cx="9.5" cy="7.5" r="1.5" />
                    <circle cx="14.5" cy="7.5" r="1.5" />
                    <circle cx="17.5" cy="11.5" r="1.5" />
                </svg>
                <span class="side-menu__label">Agriculture</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('customer.agriculture') }}" class="slide-item">Agriculture</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index.html">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" />
                    <circle cx="12" cy="9" r="2.5" />
                </svg>
                <span class="side-menu__label">Real Estate</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('customer.real_estate') }}" class="slide-item">REAL ESTATE</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z" />
                </svg>
                <span class="side-menu__label">Loans</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('customer.loan') }}" class="slide-item">SOFT LOANS</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z" />
                </svg>
                <span class="side-menu__label">Project Funding</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('customer.project_funding') }}" class="slide-item"> PROJECT FUNDING</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M17.73 12.02l3.98-3.98c.39-.39.39-1.02 0-1.41l-4.34-4.34c-.39-.39-1.02-.39-1.41 0l-3.98 3.98L8 2.29C7.8 2.1 7.55 2 7.29 2c-.25 0-.51.1-.7.29L2.25 6.63c-.39.39-.39 1.02 0 1.41l3.98 3.98L2.25 16c-.39.39-.39 1.02 0 1.41l4.34 4.34c.39.39 1.02.39 1.41 0l3.98-3.98 3.98 3.98c.2.2.45.29.71.29.26 0 .51-.1.71-.29l4.34-4.34c.39-.39.39-1.02 0-1.41l-3.99-3.98zM12 9c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-4.71 1.96L3.66 7.34l3.63-3.63 3.62 3.62-3.62 3.63zM10 13c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2 2c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm2-4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2.66 9.34l-3.63-3.62 3.63-3.63 3.62 3.62-3.62 3.63z" />
                </svg>
                <span class="side-menu__label">Stocks</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('customer.stocks') }}" class="slide-item"> Stocks Trade</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H5V5h15zm-5 14h-5v-9h5v9zM5 10h3v9H5v-9zm12 9v-9h3v9h-3z" />
                </svg>
                <span class="side-menu__label">Retirment Plans</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('user.retirement_account') }}" class="slide-item">Retirement Plans</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z" />
                </svg>
                <span class="side-menu__label">Crypto Investment</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="sub-slide-item" href="{{ route('customer.crypto_invest') }}">CRYPTO INVESTMENT</a></li>
            </ul>
        </li>


        <li class="side-item side-item-category">Personal & Sytstem Settings</li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M14.25 2.26l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10c0-4.75-3.31-8.72-7.75-9.74zM19.41 9h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM13.1 4.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4c.37 0 .74.03 1.1.08zM5.7 7.09L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12c0-1.85.64-3.55 1.7-4.91zM4.59 15h7.98l-2.71 4.7c-2.4-.67-4.34-2.42-5.27-4.7zm6.31 4.91L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20c-.38 0-.74-.04-1.1-.09zm7.4-3l-4-6.91h5.43c.17.64.27 1.31.27 2 0 1.85-.64 3.55-1.7 4.91z" />
                </svg>
                <span class="side-menu__label">Settings</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="sub-slide-item" href="{{ route('user.setting.view', ['general']) }}">PROFILE SETTINGS
                    </a></li>
            </ul>
            <ul class="slide-menu">
                <li><a class="sub-slide-item" href="{{ route('user.setting.view', ['payment']) }}">PAYMENT DATA
                        SETTINGS</a></li>
            </ul>
            <ul class="slide-menu">
                <li><a class="sub-slide-item" href="{{ route('user.setting.view', ['security']) }}">ACCOUNT SECURITY
                    </a></li>
            </ul>
        </li>

        <li class="side-item side-item-category">Logout</li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                    width="24">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path
                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z" />
                </svg>
                <span class="side-menu__label">Logout</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="sub-slide-item"  href="{{ route("user.logout.view") }}">LOGOUT
                    </a></li>
            </ul>
        </li>
    </ul>
</aside>
