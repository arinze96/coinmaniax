<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.home_css')
    <title>Coinmaniax</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content" style="width: 200px; height: 300px; padding-top: 100px">
            <img src="{{ asset('assets/home/assets/img/loader1.gif') }}" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        @include('include.home_header')
        <main id="content" class="site-main">
            <section class="inner-banner-wrap">
                <div class="inner-baner-container"
                    style="background-image: url('{{ asset('assets/home/assets/img/loan.jpeg') }}');">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h2 class="inner-title">GET YOUR LOAN</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-service-section home-service-page-section">
                <div class="container">
                    <div class="service-content-wrapper">
                        <div class="service-type">
                            <figure class="service-figure round-border">
                                <img src="{{ asset("assets/home/assets/img/MORTGAGELOAN.png") }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-invest"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a href="{{ route("user.register") }}">
                                        Mortgage Loans
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    This loan type is used for purchasing a home. Mortgages are typically long-term loans, with terms often spanning 15 to 30 years.
                                </p>
                                <a href="{{ route("user.register") }}" class="service-btn">
                                    <span>GET STARTED</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-type">
                            <figure class="service-figure round-border">
                                <img src="{{ asset("assets/home/assets/img/CARLOAN.png") }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-business"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a href="{{ route("user.register") }}">
                                        Auto Loans
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    Used for purchasing vehicles, auto loans are very common. These are typically shorter-term loans, often ranging from 2 to 7 years.
                                </p>
                                <a href="{{ route("user.register") }}" class="service-btn">
                                    <span>GET STARTED</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-type">
                            <figure class="service-figure round-border">
                                <img src="{{ asset("assets/home/assets/img/STUDENTLOAN.png") }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-deal"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a href="{{ route("user.register") }}">
                                        Student Loans
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    Students rely on these loans to pay for college or graduate school. These loans can have various terms and may offer different repayment options
                                </p>
                                <a href="{{ route("user.register") }}" class="service-btn">
                                    <span>GET STARTED</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-type">
                            <figure class="service-figure round-border">
                                <img src="{{ asset("assets/home/assets/img/PERSONALLOAN.png") }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-invest"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a href="{{ route("user.register") }}">
                                        Personal Loans
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    These are general-purpose loans that can be used for various reasons, such as consolidating debt, financing a wedding, or covering unexpected expenses.
                                </p>
                                <a href="{{ route("user.register") }}" class="service-btn">
                                    <span>GET STARTED</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-type">
                            <figure class="service-figure round-border">
                                <img src="{{ asset("assets/home/assets/img/MEDICALLOAN.png") }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-business"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a href="{{ route("user.register") }}">
                                        Medical Loans
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    These are often personal loans specifically marketed for medical expenses, including elective procedures not covered by insurance.
                                </p>
                                <a href="{{ route("user.register") }}" class="service-btn">
                                    <span>GET STARTED</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-type">
                            <figure class="service-figure round-border" style="background-color: #473BF0">
                                <img src="{{ asset("assets/home/assets/img/CREDITCARD.png") }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-deal"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a href="{{ route("user.register") }}">
                                        Credit Cards
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    Credit cards essentially allow for a revolving line of credit, which is a form of borrowing. Balances carried from month to month incur interest.
                                </p>
                                <a href="{{ route("user.register") }}" class="service-btn">
                                    <span>GET STARTED</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home service section html end -->
            <!-- home working process section html start -->
            <section class="home-working-process home-working-process-page">
                <div class="container">
                    <div class="section-head-center-line col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                        <h6 class="section-sub-title">
                            WORK PROCESS
                        </h6>
                        <h4 class="section-title">
                            We Follow Simple Steps To Disburst Loans
                        </h4>
                    </div>
                    <div class="process-step">
                        <div class="pattern-overlay bottom-arrow"></div>
                        <div class="pattern-overlay top-arrow"></div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-sm-4 work-process-item">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="elementkit-infobox-icon icon icon-customer-support-2"></i>
                                        <h5 class="phase-no">01.</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                            Select Loan Type
                                        </h5>
                                        <p class="phase-info">
                                            Explore diverse loan options tailored to your needs. Choose the perfect financing solution effortlessly on our platform.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 work-process-item">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="elementkit-infobox-icon icon icon-Profile"></i>
                                        <h5 class="phase-no">02.</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                            Apply For Loan
                                        </h5>
                                        <p class="phase-info">
                                            Quick, secure, and user-friendly loan application process. Start your journey towards financial flexibility now.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 work-process-item">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true" class="elementkit-infobox-icon icon icon-hand_shake"></i>
                                        <h5 class="phase-no">03.</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                            Get Your Loan
                                        </h5>
                                        <p class="phase-info">
                                            Effortless loan acquisition for your financial goals. Fast, reliable, and tailored to your needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        @include('include.home_footer')
    </div>
    <!-- JavaScript -->
    @include('include.home_js')
</body>

</html>
