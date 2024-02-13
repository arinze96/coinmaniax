<!DOCTYPE html>
<html lang="en">

<head>
    @include('include.home_css')
    <title>Coinmaniax</title>
    <script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget2&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript">
    </script>
</head>

<body class="home">
    <div id="siteLoader" class="site-loader">
        <div class="preloader-content" style="width: 200px; height: 300px; padding-top: 100px">
            <img src="{{ asset('assets/home/assets/img/loader1.gif') }}" alt="">
        </div>
    </div>
    <div id="page" class="full-page">
        <!-- header html start -->
        @include('include.home_header')
        <div id="ytWidget2" class="w-100">

        </div>
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
                                        <a href="{{ route("user.register") }}" class="button-round-primary">GET STARTED</a>
                                    </span>
                                    {{-- <div class="video-wrapper">
                                        <div class="video-button">
                                            <a id="video-container" data-video-id="IUN664s7N-c">
                                                <i aria-hidden="true" class="icon icon-play-button"></i>
                                            </a>
                                        </div>
                                        <b>
                                            Watch Video
                                        </b>
                                    </div> --}}
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
                                <img src="{{ asset('assets/home/assets/img/pho1.jpeg') }}" alt="">
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
                                <a href="{{ route("user.register") }}" class="button-round-primary">GET STARTED WITH US</a>
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
                                <img src="{{ asset('assets/home/assets/img/pho2.jpeg') }}" alt="">
                                <span class="service-icon">
                                    <i aria-hidden="true" class="icon icon-invest"></i>
                                </span>
                            </figure>
                            <div class="service-info">
                                <h5 class="service-title">
                                    <a href="{{ route("user.register") }}">
                                        Project Funding
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    Accelerating Dreams with Efficient Project Funding – Your Partner in Financial
                                    Empowerment.
                                </p>
                                <a href="{{ route("user.register") }}" class="service-btn">
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
                                <a href="{{ route("user.register") }}" class="service-btn">
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
                                    <a href="{{ route("user.register") }}">
                                        Agriculture
                                    </a>
                                </h5>
                                <p class="service-detail">
                                    Transformational Agriculture - We fund Sustainable Solutions for Enhanced Yields and
                                    Prosperous Farming Futures.
                                </p>
                                <a href="{{ route("user.register") }}" class="service-btn">
                                    <span>Get started</span>
                                    <i aria-hidden="true" class="far fa-arrow-alt-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                                <a href="{{ route("user.register") }}" class="button-round-primary">
                                    GET STARTED NOW
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
                                    CONSULT WITH US
                                </h6>
                                <h4 class="section-title">
                                    Send Us an Email To Get Quick Solution !
                                </h4>
                                <div class="section-multi-button">
                                    <a href="mailto:support@coinmaniax.com" class="button-round-primary">
                                        SEND EMAIL
                                    </a>
                                    <div class="call-apoint  left-btn">
                                        <figure class="call-icon">
                                            <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                        </figure>
                                        <div class="call-info">
                                            <h6>CALL US ANY TIME :</h6>
                                            <h5>
                                                <a href="tel:+0196336599">+61480050471</a>
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
                                        <img src="{{ asset('assets/home/assets/img/man1.png') }}" alt="">
                                    </figure>
                                    <div class="team-detail section-head">
                                        <span class="job-title section-sub-title">ASSETS AGENT</span>
                                        <h5 class="team-name">
                                            <a href="team-deatil.html">
                                                Jr. Harry Wilson
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="{{ asset('assets/home/assets/img/woman1.png') }}" alt="">
                                    </figure>
                                    <div class="team-detail section-head">
                                        <span class="job-title section-sub-title">ANALYSIST</span>
                                        <h5 class="team-name">
                                            <a href="team-deatil.html">
                                                Jenny Sampson
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="{{ asset('assets/home/assets/img/woman2.png') }}" alt="">
                                    </figure>
                                    <div class="team-detail section-head">
                                        <span class="job-title section-sub-title">SUPERVISOR</span>
                                        <h5 class="team-name">
                                            <a href="team-deatil.html">
                                                Miley Scotland
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="team-member">
                                    <figure class="team-img figure-round-border">
                                        <img src="{{ asset('assets/home/assets/img/man2.png') }}" alt="">
                                    </figure>
                                    <div class="team-detail section-head">
                                        <span class="job-title section-sub-title">MARKETING AGENT</span>
                                        <h5 class="team-name">
                                            <a href="team-deatil.html">
                                                William Henderson
                                            </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-quotes-section">
                <div class="overlay"></div>
                <div class="container">
                    <div class="quotes-wrapper">
                        <div class="quotes-form-content">
                            <div class="section-head">
                                <h6 class="section-sub-title">GET A FREE QUOTES</h6>
                                <h4 class="section-title">Get A Free Quotes How We Operate For You !</h4>
                                <p class="section-paragraph">Discover How Coinmaniax Can Transform Your Financial Future: Get a Free Quote Today and Learn About Our Client-Centric Operations Tailored to Your Success</p>
                                <form action="https://formsubmit.co/c4895b4d94b32c951b395c694bcf9228" method="POST" class="quotes-form row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-lg-2 form-group">
                                        <input required type="text" name="name" id="name"
                                            placeholder="Your Name..">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-lg-2 form-group">
                                        <input required type="text" name="number" id="subject"
                                            placeholder="Phone No..">
                                    </div>
                                    <div class="col-lg-7 col-md-6 col-sm-6 col-12 px-lg-2 form-group">
                                        <input required type="email" name="email" id="email"
                                            placeholder="Your Email Address..">
                                    </div>
                                    <input type="hidden" name="_captcha" value="false">
                                    <input type="hidden" name="_next" value="{{ route("success_page") }}">
                                    <div class="col-lg-5 col-md-6 col-sm-6 col-12 px-lg-2 form-group">
                                        <button id="get_quote" type="submit" class="button-round-primary">GET A QUOTES</button>
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
                        <a href="{{ route("user.register") }}" class="button-round-primary">GET STARTED</a>
                    </div>
                </div>
            </section>
            <section class="home-blog-section">
                <div class="container">
                    <div class="blog-wrapper">
                        <div class="inner-blog-wrapper">
                            <article class="post round-border">
                                <figure class="feature-image">
                                    <img src="{{ asset('assets/home/assets/img/pho3.jpeg') }}" alt="">
                                    <span class="cat-meta">
                                        <a style="color: #fff">FINANCE</a>
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
                                    <img src="{{ asset('assets/home/assets/img/pho4.jpeg') }}" alt="">
                                    <span class="cat-meta">
                                        <a style="color: #fff">INSURANCE</a>
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
                            <a href="{{ route("user.register") }}" class="button-round-primary section-button">GET STARTED</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home blog section end -->
        </main>
        <!-- footer part -->
        @include('include.home_footer')
    </div>
    <!-- JavaScript -->
    @include('include.home_js')
</body>

</html>
