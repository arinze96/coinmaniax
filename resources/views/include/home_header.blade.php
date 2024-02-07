<header class="site-header site-header-transparent" id="masthead">
    <div class="top-header">
        <div class="container">
            <div class="top-header-wrapper">
                <div class="row align-items-center">
                    <div
                        class="col-sm-3 d-flex align-items-center justify-content-center justify-content-sm-start">
                        <div class="header-social social-links">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-youtube" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 flex-grow-1">
                        <div
                            class="schedule-wrapper d-flex justify-content-sm-end justify-content-center flex-wrap flex-sm-nowrap">
                            <div class="header-schedule-info">
                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                <span class="schedule-info">
                                    Level 7 Northpoint Tower, 100 Miller St North Sydney
                                </span>
                            </div>
                            <div class="header-schedule-info">
                                <i aria-hidden="true" style="color: white" class="fas fa-envelope"></i>
                                <span class="schedule-info">
                                    <a
                                    href="mailto:support@coinmaniax.com">support@coinmaniax.com</span></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="hb-group d-flex align-items-center justify-content-between">
                <div class="site-identity col-lg-3">
                    <a href="{{ route('app.home') }}">
                        <img src="{{ asset('assets/home/assets/img/logo-img.png') }}" alt="logo">
                    </a>
                </div>
                <div class="main-navigation col-lg-9">
                    <nav id="navigation" class="navigation d-none d-lg-inline-block">
                        <ul>
                            <li class="current-menu-item">
                                <a href="{{ route("app.home") }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route("about") }}">About us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a>Services</a>
                                <ul>
                                    <li>
                                        <a href="{{ route("cryptocurrency") }}">Crypto Investment</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("loans") }}">Loans</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("stocks") }}">Stock Trades</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("project_funding") }}">Project Funding</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("real_estate") }}">Real Estate</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("agriculture") }}">Agriculture</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('retirement') }}">Retirment Plans</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route("faq") }}">FAQ's</a>
                            </li>
                            <li>
                                <a href="{{ route("user.contact") }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ route("user.login") }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route("user.register") }}">Register</a>
                            </li>
                        </ul>
                    </nav>
                    {{-- <div class="appoinment-btn">
                        <a href="{{ route("user.register") }}" class="button-round-primary">Register</a>
                    </div> --}}
                </div>
                <div class="mobile-menu-container"></div>
            </div>
        </div>
    </div>
</header>