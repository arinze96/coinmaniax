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
                    style="background-image: url('{{ asset('assets/home/assets/img/hud.gif') }}');">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h2 class="inner-title">CRYPTOCURRENCY</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section class="feature-detail-section">
                <div class="container">
                    <div class="feature-inner-detail">
                        <div class="row">
                            <div class="col-lg-7 col-xl-8">
                                <div class="right-sidebar">
                                    <h4 class="feature-title">
                                        Our Crypto Investment Strategies
                                    </h4>
                                    <figure class="feature-img figure-round-border">
                                        <img src="{{ asset('assets/home/assets/img/pho4.jpeg') }}" alt="">
                                    </figure>
                                    <p class="feature-paragraph">
                                        At Coinmaniax, our mission is to empower clients through strategic
                                        cryptocurrency investments. With 'Our Crypto Investment Strategies,' we leverage
                                        cutting-edge technology and market insights to navigate the dynamic crypto
                                        landscape, ensuring optimal returns. Trust us to unlock the full potential of
                                        digital assets and drive financial prosperity.
                                    </p>
                                    <article class="feature-summary">
                                        <h5 class="feature-summary-title">Evaluate & Improvement :</h5>
                                        <p>
                                            We specialize in crafting bespoke cryptocurrency investment solutions. Our
                                            experienced team navigates the volatile crypto markets to maximize returns
                                            and minimize risks.
                                        </p>
                                        <div class="practical-summary-wrapper">
                                            <figure class="practical-summary-img figure-round-border">
                                                <img src="{{ asset('assets/home/assets/img/image021.jpg') }}"
                                                    alt="">
                                            </figure>
                                            <div class="practical-summary-info">
                                                <p>
                                                    Dedicated to transparency and innovation, we aim to be your trusted
                                                    partner in the journey towards financial growth through intelligent,
                                                    strategic crypto asset management.
                                                </p>
                                                <ul>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        We Diversify across multiple cryptocurrencies.
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        Prioritize long-term holding strategies.
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        Leverage technical and fundamental analysis.
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fas fa-dot-circle"></i>
                                                        Implement strict risk management protocols.
                                                    </li>
                                                </ul>
                                                <a href="{{ route('user.register') }}">
                                                    <button type="button" style="margin-top: 20px" class="btn btn-outline-primary" >Get Started Today</button>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-5 col-xl-4">
                                <div class=" left-sidebar">
                                    <div class="widget-bg faq-widget">
                                        <h5 class="bg-title">Our Process</h5>
                                        <div id="sidebar-tab-content" class="accordion-content" role="tablist">
                                            <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel"
                                                aria-labelledby="accordion-A">
                                                <div class="card-header" role="tab" id="qus-A">
                                                    <h6 class="mb-0">
                                                        <a data-bs-toggle="collapse" href="#collapse-one"
                                                            aria-expanded="true" aria-controls="collapse-one">
                                                            Client Onboarding
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-one" class="collapse show"
                                                    data-bs-parent="#sidebar-tab-content" role="tabpanel"
                                                    aria-labelledby="qus-A">
                                                    <div class="card-body">
                                                        Understand client's investment goals, risk tolerance, and
                                                        familiarity with cryptocurrencies.
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="accordion-B" class="card tab-pane" role="tabpanel"
                                                aria-labelledby="accordion-B">
                                                <div class="card-header" role="tab" id="qus-B">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed" data-bs-toggle="collapse"
                                                            href="#collapse-two" aria-expanded="false"
                                                            aria-controls="collapse-two">
                                                            Plan Selection
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-two" class="collapse"
                                                    data-bs-parent="#sidebar-tab-content" role="tabpanel"
                                                    aria-labelledby="qus-B">
                                                    <div class="card-body">
                                                        Selecting cryptocurrency investment strategy that aligns with
                                                        the client's objectives and risk profile.
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="accordion-C" class="card tab-pane" role="tabpanel"
                                                aria-labelledby="accordion-C">
                                                <div class="card-header" role="tab" id="qus-C">
                                                    <h6 class="mb-0">
                                                        <a class="collapsed" data-bs-toggle="collapse"
                                                            href="#collapse-three" aria-expanded="true"
                                                            aria-controls="collapse-three">
                                                            Investment Proper
                                                        </a>
                                                    </h6>
                                                </div>
                                                <div id="collapse-three" class="collapse"
                                                    data-bs-parent="#sidebar-tab-content" role="tabpanel"
                                                    aria-labelledby="qus-C">
                                                    <div class="card-body">
                                                        Begin investing based on the agreed strategy, including buying
                                                        digital assets and setting up any automated trading protocols.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget-bg icon-list-content">
                                        <h5 class="bg-title">Other Features</h5>
                                        <ul>
                                            <li>
                                                <a style="color: #fff" href="#"><i aria-hidden="true"
                                                        class="fas fa-arrow-circle-right"></i>Secured Policy</a>
                                            </li>
                                            <li>
                                                <a style="color: #fff" href="#"><i aria-hidden="true"
                                                        class="fas fa-arrow-circle-right"></i>Undertaking Risks</a>
                                            </li>
                                            <li>
                                                <a style="color: #fff" href="#"><i aria-hidden="true"
                                                        class="fas fa-arrow-circle-right"></i>Insurable Interest</a>
                                            </li>
                                            <li>
                                                <a style="color: #fff" href="#"><i aria-hidden="true"
                                                        class="fas fa-arrow-circle-right"></i>Financially Help</a>
                                            </li>
                                            <li>
                                                <a style="color: #fff" href="#"><i aria-hidden="true"
                                                        class="fas fa-arrow-circle-right"></i>Full Coverage</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget-bg sidebar-contact">
                                        <div class="overlay"></div>
                                        <h5>Let Us Help You !</h5>
                                        <p>
                                            Provide regular updates on portfolio performance, market changes, and adjust
                                            strategies as needed.
                                        </p>
                                        <a href="tel:12345678952">
                                            <h6> Call Us :
                                                <span>(1)2345-2345</span>
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="about-page-section">
                <div class="container">
                    <div class="about-inner-wrapper">
                        <div class="about-inner-content">
                            <div class="section-head-info">
                                <h6 class="section-sub-title">
                                    INTRODUCTION COINMANIAX
                                </h6>
                                <h4 class="section-title">
                                    We Have The Best Asset Management Policy For Your Financing
                                </h4>
                                <p class="section-paragraph">
                                    At Coinmaniax, we understand that effective asset management is integral to the
                                    success and growth of any business or individual, and that's why we have
                                    meticulously crafted a strategy that stands out in the financial industry.
                                </p>
                            </div>
                            <div class="counter-item-wrap">
                                <div class="counter-item">
                                    <h3 class="counter-no">
                                        <span class="counter">4</span>k+
                                    </h3>
                                    <h6 class="Completed">
                                        Our Happy Clients
                                    </h6>
                                </div>
                                <div class="counter-item">
                                    <h3 class="counter-no">
                                        <span class="counter">25</span>+
                                    </h3>
                                    <h6 class="Completed">
                                        Office Branches
                                    </h6>
                                </div>
                                <div class="counter-item">
                                    <h3 class="counter-no">
                                        <span class="counter">9</span>k+
                                    </h3>
                                    <h6 class="Completed">
                                        Our Active Members
                                    </h6>
                                </div>
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
                        <figure class="about-fig figure-round-border">
                            <img src="{{ asset('assets/home/assets/img/btc.gif') }}" alt="">
                            <div class="experience-wrapper">
                                <h2 class="experience-no" style="color: #fff">25</h2>
                                <h5 style="color: #fff">YEARS OF</h5>
                                <p style="color: #fff">EXPERIENCE</p>
                            </div>
                        </figure>
                    </div>
                    <div class="search-section">
                        <div class="container">
                            <div class="search-outer-wrap">
                                <div class="row grid" style="position: relative; height: 1362.95px;">
                                    <div class="col-lg-4 col-md-6 grid-item" style="margin-bottom: 10px">
                                        <div class="search-content-wrap">
                                            <article class="post">
                                                <div class="entry-content">
                                                    <h5><a href="single-blog.html">BCH/USD</a></h5>
                                                    <div class="entry-meta">
                                                        <span class="byline">
                                                            <a href="blog-archive.html">Demoteam</a>
                                                        </span>
                                                        <span class="posted-on">
                                                            <a href="#">Jan 2024</a>
                                                        </span>
                                                        <span class="comment-info">
                                                            <a href="#">Price</a>
                                                        </span>
                                                    </div>
                                                    <div class="btcwdgt-chart" bw-cash="true" bw-noshadow="true">
                                                    </div>

                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-6 grid-item" style="margin-bottom: 10px">
                                        <div class="search-content-wrap">
                                            <article class="post">
                                                <div class="entry-content">
                                                    <h5><a href="single-blog.html">BCH/USD</a></h5>
                                                    <div class="entry-meta">
                                                        <span class="byline"><a href="#">Demoteam</a>
                                                        </span>
                                                        <span class="posted-on">
                                                            <a href="#">Jan 2024</a>
                                                        </span>
                                                        <span class="comment-info">
                                                            <a href="#">Price</a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <p style="padding-left: 10px; padding-right: 10px">In today's ever-evolving financial landscape, choosing the right
                                                    investment partner is crucial. Coinmaniax stands out as your premier
                                                    choice for cryptocurrency investment. Our approach is tailored to
                                                    blend innovative strategies with a deep understanding of the crypto
                                                    market's nuances. We prioritize not just profitability, but also
                                                    security and sustainability.

                                                    Our team, comprised of seasoned financial experts and crypto
                                                    enthusiasts, is dedicated to meticulously analyzing market trends
                                                    and leveraging this insight to optimize your investments. We believe
                                                    in a balanced portfolio, diversifying across various
                                                    cryptocurrencies to mitigate risks and enhance potential gains.

                                                    At Coinmaniax, we don't just invest your funds; we believe in
                                                    empowering you with knowledge. Our educational resources keep you
                                                    informed and engaged in your investment journey. With stringent risk
                                                    management protocols and a commitment to transparency, we ensure
                                                    that your investment is handled with the utmost care and
                                                    professionalism.

                                                    Choose Coinmaniax, where your financial growth is our mission. Let's
                                                    navigate the dynamic world of cryptocurrency together, maximizing
                                                    your returns and securing your financial future.

                                                </p>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                                    <a href="{{ route('user.register') }}" class="button-round-primary">GET STARTED</a>
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
                                                    <a href="{{ route('user.register') }}" class="button-round-primary">GET STARTED</a>
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
                                                    <a href="{{ route('user.register') }}" class="button-round-primary">GET STARTED</a>
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
                                                    <a href="{{ route('user.register') }}" class="button-round-primary">GET STARTED</a>
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
