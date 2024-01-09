<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.home_css')
    <title>Coinmaniax</title>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader ">
        <div class="preloader-content">
            <img src="{{ asset('assets/home/assets/img/loader1.gif') }}" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <!-- header html start -->
        @include('include.home_header')
        <main id="content" class="site-main">
            <!-- home banner section html start -->
            <section class="home-banner">
                <div class="overlay"></div>
                <div class="container">
                    <div class="banner-wrapper">
                        <div class="col-lg-4 col-md-4">
                            <img src="{{ asset('assets/home/assets/img/award.png') }}" alt="">
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="banner-section-info">
                                <h6 class="section-sub-title"
                                    style="text-decoration: underline; text-decoration-color: white; color: white">
                                    WE'RE BEST FINANCE INSURANCE
                                </h6>
                                <h2 class="section-title">
                                    ASSET MANAGEMENT FOR BETTER FINANCE
                                </h2>
                                <p class="section-paragraph">
                                    Coinmaniax revolutionizes finance with cutting-edge asset management solutions,
                                    seamlessly blending technology and expertise. Elevate your financial journey with
                                    our innovative approach, ensuring prosperity and security for every investor.
                                </p>
                                <div class="section-button">
                                    <span class="banner-btn">
                                        <a href="contact.html" class="button-round-primary">GET STARTED</a>
                                    </span>
                                    <div class="video-wrapper">
                                        <div class="video-button">
                                            <a id="video-container" data-video-id="IUN664s7N-c">
                                                <i aria-hidden="true" class="icon icon-play-button"></i>
                                            </a>
                                        </div>
                                        <b>
                                            Watch Video
                                        </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttom-curve-shape">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                        <path class="elementor-shape-fill"
                            d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
                    </svg>
                </div>
            </section>
            <section class="home-feature-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 feature-item">
                            <div class="feature-type">
                                <figure class="servie-icon">
                                    <i aria-hidden="true" class="icon icon-Profile"></i>
                                </figure>
                                <h5 class="feature-header">
                                    <a>
                                        Project Funding
                                    </a>
                                </h5>
                                <p class="feature-desc">
                                    Streamlining Transparent Financial Solutions to Power
                                    Your Ventures and Accelerate Growth
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-item">
                            <div class="feature-type">
                                <figure class="servie-icon">
                                    <i aria-hidden="true" class="icon icon-hand_shake"></i>
                                </figure>
                                <h5 class="feature-header">
                                    <a>
                                        Retirement Plan
                                    </a>
                                </h5>
                                <p class="feature-desc">
                                    Securing Your Future with Smart, Sustainable Investment
                                    Strategies for a Comfortable and Prosperous Retirement
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-item">
                            <div class="feature-type">
                                <figure class="servie-icon">
                                    <i aria-hidden="true" class="icon icon-Money-2"></i>
                                </figure>
                                <h5 class="feature-header">
                                    <a>
                                        Agriculture
                                    </a>
                                </h5>
                                <p class="feature-desc">
                                    Modern Solutions for Sustainable Farming, Boosting Yields and Ensuring a Bountiful
                                    Future
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 feature-item">
                            <div class="feature-type">
                                <figure class="servie-icon">
                                    <i aria-hidden="true" class="icon icon-money-bag2"></i>
                                </figure>
                                <h5 class="feature-header">
                                    <a href="feature-detail.html">
                                        Crypto Investment
                                    </a>
                                </h5>
                                <p class="feature-desc">
                                    Expert Strategies for Maximizing Returns in the
                                    Dynamic World of Cryptocurrency.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hone feature section html end -->
            <!-- home about section html start -->
            <section class="home-about-section">
                <div class="container">
                    <div class="about-wrapper">
                        <div class="about-left-side">
                            <div class="section-head-info">
                                <h6 class="section-sub-title">
                                    INTRODUCTION ABOUT US
                                </h6>
                                <h4 class="section-title">
                                    We provides top-tier asset management and growth tools to effectively scale your
                                    portfolio
                                </h4>
                                <p class="section-paragraph">
                                    At Coinmaniax, we offer the finest asset management and growth instruments, expertly
                                    designed to scale your portfolio with precision, ensuring optimal performance and
                                    unparalleled financial success in a dynamic market.
                                </p>
                            </div>
                            <figure class="about-left-img figure-round-border">
                                <img src="{{ asset('assets/home/assets/img/image019.jpg') }}" alt="">
                                <div class="experience-wrapper">
                                    <h2 class="experience-no" style="color: white">25</h2>
                                    <h5 style="color: white">YEARS OF</h5>
                                    <p style="color: white">EXPERIENCE</p>
                                </div>
                            </figure>
                        </div>
                        <div class="about-right-side">
                            <figure class="about-right-img figure-round-border">
                                <img src="{{ asset('assets/home/assets/img/image020.jpg') }}" alt="">
                            </figure>
                            <div class="regarding-us">
                                <div class="qulifaction-content left-content">
                                    <div class="qualification-tag">
                                        <figure class="qualifaction-icon">
                                            <i aria-hidden="true" class="icon icon-deal"></i>
                                        </figure>
                                        <h5 class="qualifaction-title">
                                            Certified Team
                                        </h5>
                                    </div>
                                    <p class="qulifaction-detail">
                                        A certified team ensuring excellence in every aspect of your financial journey.
                                    </p>
                                </div>
                                <div class="qulifaction-content right-content">
                                    <div class="qualification-tag">
                                        <figure class="qualifaction-icon">
                                            <i aria-hidden="true" class="icon icon-team-1"></i>
                                        </figure>
                                        <h5 class="qualifaction-title">
                                            Trusted Company
                                        </h5>
                                    </div>
                                    <p class="qulifaction-detail">
                                        A trusted company, synonymous with reliability and success in financial
                                        management
                                    </p>
                                </div>
                            </div>
                            <div class="about-btn">
                                <a href="#" class="button-round-primary">MORE ABOUT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home about section html end -->
            <!-- home service section html start -->
            <section class="home-service-section">
                <div class="container">
                    <div class="section-head-center-line col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                        <h6 class="section-sub-title">
                            WHAT WE OFFER
                        </h6>
                        <h4 class="section-title">
                            Serving And Providing Best Services For Clients
                        </h4>
                    </div>
                    <div class="service-content-wrapper">
                        <div class="service-type">
                            <figure class="service-figure round-border">
                                <img src="{{ asset('assets/home/assets/img/image018.jpg') }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-invest"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a href="service-detail.html">
                                        Project Funding
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    Accelerating Dreams with Efficient Project Funding – Your Partner in Financial
                                    Empowerment.
                                </p>
                                <a href="service-detail.html" class="service-btn">
                                    <span>Get started</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-type">
                            <figure class="service-figure round-border">
                                <img src="{{ asset('assets/home/assets/img/retirement.png') }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-business"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a>
                                        Retirement Plan
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    Secure Your Future with Smart and Customized Retirement Plans for a Comfortable and
                                    Prosperous Life Beyond Work.
                                </p>
                                <a href="service-detail.html" class="service-btn">
                                    <span>Get started</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="service-type">
                            <figure class="service-figure round-border">
                                <img src="{{ asset('assets/home/assets/img/agric.png') }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-deal"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a href="service-detail.html">
                                        Agriculture
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    Transformational Agriculture - We fund Sustainable Solutions for Enhanced Yields and
                                    Prosperous Farming Futures.
                                </p>
                                <a href="service-detail.html" class="service-btn">
                                    <span>Get started</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="all-service-btn text-center">
                        <a href="#" class="button-round-primary">
                            VIEW ALL SERVICES
                        </a>
                    </div>
                </div>
            </section>
            <!-- home service section html end -->
            <!-- home call section html start -->
            <section class="home-call-section">
                <div class="overlay"></div>
                <div class="container">
                    <div class="call-wrapper">
                        <figure class="call-figure">
                            <img src="{{ asset('assets/home/assets/img/image014.png') }}" alt="">
                        </figure>
                        <div class="section-head">
                            <h6 class="section-sub-title">
                                CALL TO ACTION
                            </h6>
                            <h4 class="section-title">
                                We Are Most Experience & Offer Best Services.
                            </h4>
                            <p class="section-paragraph">
                                Coinmaniax stands as a pinnacle of experience, delivering unparalleled services. With a
                                rich history of expertise, we strive to provide the absolute best financial solutions,
                                ensuring your utmost satisfaction.
                            </p>
                            <div class="section-button">
                                <a href="#" class="button-round-primary">
                                    HIRE US NOW
                                </a>
                                <div class="happy-customer-wrapper">
                                    <div class="happy-customer-img">
                                        <figure class="customer-img">
                                            <img src="{{ asset('assets/home/assets/img/image015.jpg') }}"
                                                alt="">
                                        </figure>
                                        <figure class="customer-img">
                                            <img src="{{ asset('assets/home/assets/img/image07.jpg') }}"
                                                alt="">
                                        </figure>
                                        <figure class="customer-img">
                                            <img src="{{ asset('assets/home/assets/img/image06.jpg') }}"
                                                alt="">
                                        </figure>
                                        <figure class="customer-img">
                                            <img src="{{ asset('assets/home/assets/img/image05.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <div class="happy-customer-info">
                                        <h6 class="customer-sub-title">
                                            Our Happy Customers
                                        </h6>
                                        <div class="reviw-info">
                                            <h6 class="review-title">
                                                (4.5 reviews)
                                            </h6>
                                            <div class="rating-start-wrap">
                                                <div class="rating-start">
                                                    <span style="width: 90%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home call section html end -->
            <!-- home-appointment section html start -->
            <section class="home-appointment-section">
                <div class="container">
                    <div class="overlay-wrapper figure-round-border">
                        <div class="background-world-map-img"></div>
                        <div class="appointment-wrapper">
                            <div class="section-head-black">
                                <h6 class="section-sub-title">
                                    BOOK APPOINTMENT
                                </h6>
                                <h4 class="section-title">
                                    Book Appointment To Get Quick Solution !
                                </h4>
                                <div class="section-multi-button">
                                    <a class="button-round-primary">
                                        BOOK APPOINTMENT
                                    </a>
                                    <div class="call-apoint  left-btn">
                                        <figure class="call-icon">
                                            <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                        </figure>
                                        <div class="call-info">
                                            <h6>CALL US ANY TIME :</h6>
                                            <h5>
                                                <a href="tel:+0196336599">+01(963)-365-99</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <figure class="appoint-img figure-round-border">
                                <img src="{{ asset('assets/home/assets/img/image04.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home-appointment section html end -->
            <!-- home working process section html start -->
            <section class="home-working-process">
                <div class="container">
                    <div class="section-head-center-line col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                        <h6 class="section-sub-title">
                            WORK PROCESS
                        </h6>
                        <h4 class="section-title">
                            We Follow Simple Steps To start investing
                        </h4>
                    </div>
                    <div class="process-step">
                        <div class="pattern-overlay bottom-arrow"></div>
                        <div class="pattern-overlay top-arrow"></div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-sm-4 work-process-item">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true"
                                            class="elementkit-infobox-icon icon icon-customer-support-2"></i>
                                        <h5 class="phase-no">01.</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                            Register
                                        </h5>
                                        <p class="phase-info">
                                            Seamlessly register on our platform to unlock a world of financial opportunities.
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
                                            Select Best Asset
                                        </h5>
                                        <p class="phase-info">
                                            Choose the Best Assets with Coinmaniax for Maximum Growth and Stability."
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 work-process-item">
                                <div class="phase">
                                    <figure class="phase-icon">
                                        <i aria-hidden="true"
                                            class="elementkit-infobox-icon icon icon-hand_shake"></i>
                                        <h5 class="phase-no">03.</h5>
                                    </figure>
                                    <div class="phase-content">
                                        <h5 class="phase-title">
                                            Make Investments
                                        </h5>
                                        <p class="phase-info">
                                            Make Smart Investments with Our Expert Guidance for Long-Term Prosperity and Financial Security.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home working progress section html end -->
            <!-- home team section html start -->
            <section class="home-team-section">
                <div class="container">
                    <div class="section-head-center-line col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                        <h6 class="section-sub-title">
                            TEAM MEMBERS
                        </h6>
                        <h4 class="section-title">
                            Meet Our Optimistic Team
                        </h4>
                    </div>
                    <div class="team-inner-group">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="{{ asset('assets/home/assets/img/image029.png') }}" alt="">
                                    </figure>
                                    <div class="team-detail section-head">
                                        <span class="job-title section-sub-title">ASSETS AGENT</span>
                                        <h5 class="team-name">
                                            <a href="team-deatil.html">
                                                Jr. Harry Wilson
                                            </a>
                                        </h5>
                                        {{-- <p class="team-quote section-paragraph">
                                            Wisi incidunt pariatur, vel ipsa urna hac excepturi.
                                        </p> --}}
                                        <div class="socal-btn">
                                            <div class="social-group">
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/" target="_blank">
                                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.twitter.com/" target="_blank">
                                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.youtube.com/" target="_blank">
                                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="team-type-btn">
                                                <i aria-hidden="true" class="icon icon-right-arrow1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="{{ asset('assets/home/assets/img/image030.png') }}" alt="">
                                    </figure>
                                    <div class="team-detail section-head">
                                        <span class="job-title section-sub-title">ANALYSIST</span>
                                        <h5 class="team-name">
                                            <a href="team-deatil.html">
                                                Jenny Sampson
                                            </a>
                                        </h5>
                                        {{-- <p class="team-quote section-paragraph">
                                            Wisi incidunt pariatur, vel ipsa urna hac excepturi.
                                        </p> --}}
                                        <div class="socal-btn">
                                            <div class="social-group">
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/" target="_blank">
                                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.twitter.com/" target="_blank">
                                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.youtube.com/" target="_blank">
                                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="team-type-btn">
                                                <i aria-hidden="true" class="icon icon-right-arrow1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="{{ asset('assets/home/assets/img/image031.png') }}" alt="">
                                    </figure>
                                    <div class="team-detail section-head">
                                        <span class="job-title section-sub-title">SUPERVISOR</span>
                                        <h5 class="team-name">
                                            <a href="team-deatil.html">
                                                Miley Scotland
                                            </a>
                                        </h5>
                                        {{-- <p class="team-quote section-paragraph">
                                            Wisi incidunt pariatur, vel ipsa urna hac excepturi.
                                        </p> --}}
                                        <div class="socal-btn">
                                            <div class="social-group">
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/" target="_blank">
                                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.twitter.com/" target="_blank">
                                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.youtube.com/" target="_blank">
                                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="team-type-btn">
                                                <i aria-hidden="true" class="icon icon-right-arrow1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="{{ asset('assets/home/assets/img/image032.png') }}" alt="">
                                    </figure>
                                    <div class="team-detail section-head">
                                        <span class="job-title section-sub-title">MARKETING AGENT</span>
                                        <h5 class="team-name">
                                            <a href="team-deatil.html">
                                                William Henderson
                                            </a>
                                        </h5>
                                        {{-- <p class="team-quote section-paragraph">
                                            Wisi incidunt pariatur, vel ipsa urna hac excepturi.
                                        </p> --}}
                                        <div class="socal-btn">
                                            <div class="social-group">
                                                <ul>
                                                    <li>
                                                        <a href="https://www.facebook.com/" target="_blank">
                                                            <i class="fab fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.twitter.com/" target="_blank">
                                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.youtube.com/" target="_blank">
                                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="team-deatil.html" class="team-type-btn">
                                                <i aria-hidden="true" class="icon icon-right-arrow1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home team section html end -->
            <!-- home quotes section html start -->
            <section class="home-quotes-section">
                <div class="overlay"></div>
                <div class="container">
                    <div class="quotes-wrapper">
                        <div class="quotes-form-content">
                            <div class="section-head">
                                <h6 class="section-sub-title">GET A FREE QUOTES</h6>
                                <h4 class="section-title">Get A Free Quotes How We Operate For You !</h4>
                                <p class="section-paragraph">Discover How Coinmaniax Can Transform Your Financial Future: Get a Free Quote Today and Learn About Our Client-Centric Operations Tailored to Your Success</p>
                                <form class="quotes-form row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-lg-2 form-group">
                                        <input type="text" name="name" id="name"
                                            placeholder="Your Name..">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-lg-2 form-group">
                                        <input type="text" name="number" id="subject"
                                            placeholder="Phone No..">
                                    </div>
                                    <div class="col-lg-7 col-md-6 col-sm-6 col-12 px-lg-2 form-group">
                                        <input type="email" name="email" id="email"
                                            placeholder="Your Email Address..">
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-6 col-12 px-lg-2 form-group">
                                        <button type="submit" class="button-round-primary">GET A QUOTES</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <figure class="quotes-img">
                            <img src="{{ asset('assets/home/assets/img/image021.jpg') }}" alt="">
                        </figure>
                    </div>
                </div>
            </section>
            <!-- home quotes section html end -->
            <!-- home counter section html start-->
            <section class="home-counter-section">
                <div class="container">
                    <div class="counter-inner">
                        <div class="background-world-map-img"></div>
                        <div class="counter-item-wrap row">
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="counter-item">
                                    <h3 class="counter-no">
                                        <span class="counter">4</span>k+
                                    </h3>
                                    <h6 class="Completed">
                                        Our Happy Clients
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="counter-item">
                                    <h3 class="counter-no">
                                        <span class="counter">25</span>+
                                    </h3>
                                    <h6 class="Completed">
                                        Office Branches
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="counter-item">
                                    <h3 class="counter-no">
                                        <span class="counter">9</span>k+
                                    </h3>
                                    <h6 class="Completed">
                                        Our Active Members
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 p-0">
                                <div class="counter-item">
                                    <h3 class="counter-no">
                                        <span class="counter">15</span>+
                                    </h3>
                                    <h6 class="Completed">
                                        Award Achievement
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home testomional section html start -->
            <section class="home-testominal-section">
                <div class="container">
                    <div class="section-head-center-line col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                        <h6 class="section-sub-title">
                            CLIENT'S TESTIMONIAL
                        </h6>
                        <h4 class="section-title">
                            What Our Clients Says About Our Company
                        </h4>
                    </div>
                    <div class="testimonial-wrapper-outer">
                        <div class="testimonial-item">
                            <div class="testimonial-detail">
                                <div class="rating-start-wrap">
                                    <div class="rating-start">
                                        <span style="width: 90%"></span>
                                    </div>
                                </div>
                                <p class="testimonial-quote">
                                    Since joining Coinmaniax, my investment experience has been transformed. Their personalized approach and expert advice have significantly grown my portfolio. It's reassuring to know I'm in such capable hands.
                                </p>
                                <div class="author-info">
                                    <h5 class="author-name">Alexender Hobbs</h5>
                                    <span class="author-desc">Tampa, Florida</span>
                                </div>
                            </div>
                            <figure class="testimonial-img">
                                <img src="{{ asset('assets/home/assets/img/image05.jpg') }}" alt="">
                            </figure>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-detail">
                                <div class="rating-start-wrap">
                                    <div class="rating-start">
                                        <span style="width: 100%"></span>
                                    </div>
                                </div>
                                <p class="testimonial-quote">
                                    I was new to investing when I discovered Coinmaniax, but their team made it so easy and understandable. Their transparency and dedication have exceeded my expectations, and I've seen great returns. Highly recommend!
                                </p>
                                <div class="author-info">
                                    <h5 class="author-name">Sally Watson</h5>
                                    <span class="author-desc">Frankfurt, Germany</span>
                                </div>
                            </div>
                            <figure class="testimonial-img">
                                <img src="{{ asset('assets/home/assets/img/image06.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="testimonial-btn text-center">
                        <a href="#" class="button-round-primary">VIEW ALL REVIEWS</a>
                    </div>
                </div>
            </section>
            <!-- home testomional section end -->
            <!-- home blog section start -->
            <section class="home-blog-section">
                <div class="container">
                    <div class="blog-wrapper">
                        <div class="inner-blog-wrapper">
                            <article class="post round-border">
                                <figure class="feature-image">
                                    <img src="{{ asset('assets/home/assets/img/image01.jpg') }}" alt="">
                                    <span class="cat-meta">
                                        <a href="#" style="color: #fff">FINANCE</a>
                                    </span>
                                </figure>
                                <div class="entry-content">
                                    <h5 class="blog-title">
                                        <a href="single-blog.html">Successful Growth In Financial Investment Plan</a>
                                    </h5>
                                    <p class="blog-preview">
                                        Tailored Strategies, Proven Results, and Expert Guidance for Building and Sustaining a Flourishing Investment Portfolio
                                    </p>
                                </div>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <a href="blog-archive.html">September 12, 2023</a>
                                    </span>
                                    <span class="comments">
                                        <a href="blog-archive.html">No Comments</a>
                                    </span>
                                </div>
                            </article>
                            <article class="post round-border">
                                <figure class="feature-image">
                                    <img src="{{ asset('assets/home/assets/img/image02.jpg') }}" alt="">
                                    <span class="cat-meta">
                                        <a href="#" style="color: #fff">INSURANCE</a>
                                    </span>
                                </figure>
                                <div class="entry-content">
                                    <h5 class="blog-title">
                                        <a href="single-blog.html">Secrets Your Business Mentor Won’t Tell You</a>
                                    </h5>
                                    <p class="blog-preview">
                                        Discover Secrets Your Mentor Won't Share Openly. Gain Exclusive Insights with Coinmaniax, Empowering You with the Knowledge to Propel Your Entrepreneurial Journey
                                </div>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <a href="blog-archive.html">December 12, 2023</a>
                                    </span>
                                    <span class="comments">
                                        <a href="blog-archive.html">No Comments</a>
                                    </span>
                                </div>
                            </article>
                        </div>
                        <div class="section-head-black">
                            <h6 class="section-sub-title">
                                OUR LATEST BLOG
                            </h6>
                            <h4 class="section-title">
                                Our Latest News And Insights
                            </h4>
                            <p class="section-paragraph">
                                Explore Coinmaniax's Latest News and Insights: Stay Informed with Cutting-Edge Market Trends, Investment Strategies, and Financial Updates for Informed Decision-Making and Financial Success
                            </p>
                            <a href="blog-archive.html" class="button-round-primary section-button">VIEW ALL BLOG</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home blog section end -->
        </main>
        <!-- footer part -->
        @include('include.home_footer')
        <!-- back to top -->
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
        <!-- custom search field html -->
        <div class="header-search-form">
            <div class="container">
                <div class="header-search-container">
                    <form class="search-form" role="search" method="get">
                        <input type="text" name="s" placeholder="Enter your text...">
                    </form>
                    <a href="#" class="search-close">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    @include('include.home_js')
</body>

</html>
