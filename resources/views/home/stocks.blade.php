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
                    style="background-image: url('{{ asset('assets/home/assets/img/stocks.gif') }}');">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h2 class="inner-title">STOCKS TRADES</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-working-process home-working-process-page">
                <div class="container">
                    <div class="section-head-center-line col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                        <h6 class="section-sub-title">
                            WORK PROCESS
                        </h6>
                        <h4 class="section-title">
                            We Help You Trade Stocks with Our Financial Enhancement Services
                        </h4>
                    </div>
                    <div class="process-step">
                        <div class="row align-items-center justify-content-center">
                            <p style="text-align: left">
                                Coinmaniax Elevate Your Portfolio with Our Premier Financial Enhancement Services

                                At Coinmaniax, we're dedicated to revolutionizing your investment journey. Our
                                cutting-edge financial enhancement services empower you to trade stocks seamlessly,
                                ensuring optimal growth for your portfolio. With a commitment to innovation and
                                excellence, we provide a platform where your assets thrive. <br> <br>

                                Experience the next level of trading sophistication with Coinmaniax. Our experts
                                leverage market insights and advanced strategies to enhance your financial standing.
                                Whether you're a seasoned investor or just starting, our user-friendly interface caters
                                to all, making stock trading accessible and rewarding.

                                <h4>Why choose Coinmaniax?</h4> <br>

                                <b>Innovative Solutions:</b> Stay ahead with our state-of-the-art trading technologies. <br>
                               <b> Expert Guidance:</b> Benefit from the wisdom of seasoned financial professionals. <br>
                                <b>Diverse Asset Options:</b> Explore a wide range of stocks to diversify your portfolio. <br>
                                <b>Seamless User Experience:</b> Trade effortlessly with our intuitive and user-friendly
                                platform. <br>
                                Join Coinmaniax today and unlock the full potential of your investments. Trade stocks
                                with confidence, backed by our commitment to financial excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="carrer-page-section" style="margin-top: -50px">
                <div class="container">
                    <div class="vacancy-section">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="section-head-center-line mb-lg-0">
                                <h6 class="section-sub-title">WORK WITH US</h6>
                                <h4 class="section-title">
                                    We are the best in our craft
                                </h4>
                            </div>
                        </div>
                        <div class="vacancy-container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="vacancy-content-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="vacancy-content">
                                                    <span>Full Time / Part Time</span>
                                                    <a href="career-detail.html">
                                                        <h5 class="vacancy-title">
                                                            Accredited Professionals</h5>
                                                    </a>
                                                    <p>Reliable Ally for Financial Prosperity, Our Accredited Team
                                                        Guarantees Expertise, Safety, and Constant Innovation</p>
                                                    <a href="{{ route('user.register') }}"
                                                        class="button-round-primary">GET STARTED</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="vacancy-content">
                                                    <span>Full Time</span>
                                                    <a href="career-detail.html">
                                                        <h5 class="vacancy-title">Dependable Firm</h5>
                                                    </a>
                                                    <p>
                                                        A Reliable Brand, Providing Excellence, Integrity, and
                                                        Innovative Financial Solutions to Inspire Your Trust.</p>
                                                    <a href="{{ route('user.register') }}"
                                                        class="button-round-primary">GET STARTED</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="vacancy-content">
                                                    <span>Full Time / Part Time</span>
                                                    <a href="career-detail.html">
                                                        <h5 class="vacancy-title">Dedicated Asset Manager</h5>
                                                    </a>
                                                    <p>Expert in Evaluating and Ensuring Integrity of Financial and
                                                        Physical Assets</p>
                                                    <a href="{{ route('user.register') }}"
                                                        class="button-round-primary">GET STARTED</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="vacancy-content">
                                                    <span>Full Time / Part Time</span>
                                                    <a href="career-detail.html">
                                                        <h5 class="vacancy-title">Insurance Agent</h5>
                                                    </a>
                                                    <p>Professional Insurance Agent Skilled in Tailoring Policies for
                                                        Optimal Coverage and Client Peace of Mind.</p>
                                                    <a href="{{ route('user.register') }}"
                                                        class="button-round-primary">GET STARTED</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="vacancy-form">
                                        <h5 class="form-title">Work With Us</h5>
                                        <form>
                                            <p>
                                                <input type="text" name="name" placeholder="Your Name*">
                                            </p>
                                            <p>
                                                <input type="text" name="name" placeholder="Your Email*">
                                            </p>
                                            <p>
                                                <input type="text" name="name" placeholder="Your Position*">
                                            </p>
                                            <p>
                                                <textarea rows="7" placeholder="Enter your message"></textarea>
                                            </p>
                                            <p>
                                                <input type="submit" name="submit" value="SEND APPLICATION"
                                                    style="color: #fff">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-service-wrap">
                    <div class="container">
                        <div class="row no-gutters align-items-end">
                            <div class="col-lg-7">
                                <div class="section-head-info mb-0">
                                    <h6 class="section-sub-title">
                                        25 YEARS OF SUCCESS
                                    </h6>
                                    <h4 class="section-title">Our Company Has Been Present For Over 25 Years</h4>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <p class="mb-0">
                                    For over 25 years, our company has been a steadfast presence, navigating the
                                    ever-evolving landscape of finance. With a rich history of expertise, innovation,
                                    and client success, we continue to stand as a reliable and trusted force in the
                                    financial industry.
                                </p>
                            </div>
                        </div>
                        <div class="iconbox-container d-flex flex-wrap justify-content-center">
                            <div class="iconbox-item-3 d-flex flex-wrap">
                                <div class="iconbox-border d-flex align-items-center">
                                    <div class="iconbox-icon">
                                        <i aria-hidden="true" class="fas fa-award"></i>
                                    </div>
                                    <div class="iconbox-content">
                                        <h5>Award winning</h5>
                                        <p>Multiple award-winning ventures at Coinmaniax </p>
                                    </div>
                                </div>
                            </div>
                            <div class="iconbox-item-3 d-flex flex-wrap">
                                <div class="iconbox-border d-flex align-items-center">
                                    <div class="iconbox-icon">
                                        <i aria-hidden="true" class="fas fa-hand-holding-usd"></i>
                                    </div>
                                    <div class="iconbox-content">
                                        <h5>Customer Satisfaction</h5>
                                        <p>Unparalleled commitment to customer satisfaction.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="iconbox-item-3 d-flex flex-wrap">
                                <div class="iconbox-border d-flex align-items-center">
                                    <div class="iconbox-icon">
                                        <i aria-hidden="true" class="fas fa-heartbeat"></i>
                                    </div>
                                    <div class="iconbox-content">
                                        <h5>Full Guarantee</h5>
                                        <p>Complete peace of mind with our full guarantee.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        @include('include.home_footer')
        <a id="backTotop" href="#" class="to-top-icon">
            <i class="fas fa-chevron-up"></i>
        </a>
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
