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
                                to all, making stock trading accessible and rewarding.<br>
                                <h5>Why choose Coinmaniax?</h5>

                                Innovative Solutions: Stay ahead with our state-of-the-art trading technologies.
                                Expert Guidance:Benefit from the wisdom of seasoned financial professionals.
                                Diverse Asset Options: Explore a wide range of stocks to diversify your portfolio.
                                Seamless User Experience: Trade effortlessly with our intuitive and user-friendly
                                platform. Join Coinmaniax today and unlock the full potential of your investments. Trade stocks with confidence, backed by our commitment to financial excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="home-testominal-section">
                <div class="container">
                    <div class="vacancy-section">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="section-head-center-line mb-lg-0">
                                <h6 class="section-sub-title">STOCKS WE TRADE</h6>
                                <h4 class="section-title">
                                    We Are The Best In Our Craft
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-wrapper-outer">
                        <div class="testimonial-item">
                            <div class="testimonial-detail">
                                <p class="testimonial-quote">
                                    Advanced Micro Devices, Inc. is an American multinational semiconductor company based in Santa Clara, California, that develops computer processors and related technologies for business and consumer markets. The company was founded in 1969 by Jerry Sanders and a group of other technology professionals
                                </p>
                                <div class="author-info">
                                    <h5 class="author-name">Advanced Micro Devices, Inc.</h5>
                                    <span class="author-desc">NYSE: AMD</span>
                                </div>
                                <a style="margin-top: 20px" href="{{ route("user.register") }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET STARTED</a>
                            </div>
                            <figure class="testimonial-img1" style="margin-bottom: 20px">
                                <img src="{{ asset('assets/home/assets/img/amd_logo.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-detail">
                                <p class="testimonial-quote">
                                    Microsoft Corporation is an American multinational technology corporation headquartered in Redmond, Washington. Microsoft's best-known software products are the Windows line of operating systems, the Microsoft 365 suite of productivity applications, and the Edge web browser.
                                </p>
                                <div class="author-info">
                                    <h5 class="author-name">Microsoft Corp</h5>
                                    <span class="author-desc">NYSE: MSFT</span>
                                </div>
                                <a style="margin-top: 20px" href="{{ route("user.register") }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET STARTED</a>
                            </div>
                            <figure class="testimonial-img1" style="margin-bottom: 20px">
                                <img src="{{ asset('assets/home/assets/img/msft_logo.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-detail">
                                <p class="testimonial-quote">
                                    Snowflake Inc. is a cloud computing–based data cloud company based in Bozeman, Montana. It was founded in July 2012 and was publicly launched in October 2014 after two years in stealth mode. The firm offers a cloud-based data storage and analytics service, generally termed "data-as-a-service
                                </p>
                                <div class="author-info">
                                    <h5 class="author-name">Snowflake Inc</h5>
                                    <span class="author-desc"> NYSE: SNOW</span>
                                </div>
                                <a style="margin-top: 20px" href="{{ route("user.register") }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET STARTED</a>
                            </div>
                            <figure class="testimonial-img1" style="margin-bottom: 20px">
                                <img src="{{ asset('assets/home/assets/img/snow_logo.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-detail">
                                <p class="testimonial-quote">
                                    Spotify Technology SA a Luxembourg-based company, which offers digital music-streaming services. The Company enables users to discover new releases, which includes the latest singles and albums; playlists, which includes ready-made playlists put together by music fans and experts, and over millions of songs so that users can play their favorites, discover new tracks and build a personalized collection.
                                </p>
                                <div class="author-info">
                                    <h5 class="author-name">Spotify Technology SA</h5>
                                    <span class="author-desc"> NYSE: SPOT</span>
                                </div>
                                <a style="margin-top: 20px" href="{{ route("user.register") }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET STARTED</a>
                            </div>
                            <figure class="testimonial-img1" style="margin-bottom: 20px">
                                <img src="{{ asset('assets/home/assets/img/sportify_logo.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-detail">
                                <p class="testimonial-quote">
                                    Novo Nordisk A/S is a Danish multinational pharmaceutical company headquartered in Bagsværd, Denmark, with production facilities in nine countries and affiliates or offices in five countries.
                                </p>
                                <div class="author-info">
                                    <h5 class="author-name">Novo Nordisk A/S</h5>
                                    <span class="author-desc"> NYSE: NVO</span>
                                </div>
                                <a style="margin-top: 20px" href="{{ route("user.register") }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET STARTED</a>
                            </div>
                            <figure class="testimonial-img1" style="margin-bottom: 20px">
                                <img src="{{ asset('assets/home/assets/img/nvo_logo.png') }}" alt="">
                            </figure>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-detail">
                                <p class="testimonial-quote">
                                    MercadoLibre, Inc. is an Argentine company headquartered in Montevideo, Uruguay, incorporated in the United States that operates online marketplaces dedicated to e-commerce and online auctions.
                                </p>
                                <div class="author-info">
                                    <h5 class="author-name">MercadoLibre Inc</h5>
                                    <span class="author-desc">NASDAQ: MELI</span>
                                </div>
                                <a style="margin-top: 20px" href="{{ route("user.register") }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">GET STARTED</a>
                            </div>
                            <figure class="testimonial-img1" style="margin-bottom: 20px">
                                <img src="{{ asset('assets/home/assets/img/meli_logo.png') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

           @include('include.craft')

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
