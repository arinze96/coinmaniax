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
                    style="background-image: url('{{ asset('assets/home/assets/img/real_estate.gif') }}');">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h2 class="inner-title">REAL ESTATE</h2>
                        </div>
                    </div>
                </div>
            </section>
            <div class="product-outer-wrap product-wrap bg-gray single-product-wrapp">
                <div class="product-inner-wrap ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <div class="product-thumbnails-outer">
                                    <div class="product-thumbnails">
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate1.png') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate2.png') }}"
                                                    alt="">
                                            </figure>
                                            <div class="image-search-icon">
                                                <a href="{{ asset('assets/home/assets/img/real_estate2.png') }}"
                                                    data-fancybox="gallery">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate3.png') }}"
                                                    alt="">
                                            </figure>
                                            <div class="image-search-icon">
                                                <a href="{{ asset('assets/home/assets/img/real_estate3.png') }}"
                                                    data-fancybox="gallery">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate4.png') }}"
                                                    alt="">
                                            </figure>
                                            <div class="image-search-icon">
                                                <a href="{{ asset('assets/home/assets/img/real_estate4.png') }}"
                                                    data-fancybox="gallery">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate5.png') }}"
                                                    alt="">
                                            </figure>
                                            <div class="image-search-icon">
                                                <a href="{{ asset('assets/home/assets/img/real_estate5.png') }}"
                                                    data-fancybox="gallery">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb-nav">
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate1.png') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate2.png') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate3.png') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate4.png') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                        <div class="single-product-item">
                                            <figure class="feature-image">
                                                <img src="{{ asset('assets/home/assets/img/real_estate5.png') }}"
                                                    alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="product-summary">
                                    <h3 class="product-title-name">Luxury villa for sale, Bel Air</h3>
                                    <div class="product-price">
                                        <del>$225m</del>
                                        <ins>$139m</ins>
                                    </div>
                                    <div class="product-meta">
                                        <div class="cat-detail">
                                            <strong>Category:</strong>
                                            <span>
                                                <a href="product-archive.html">
                                                    Incredible Luxury villa
                                                </a>
                                            </span>
                                        </div>
                                        <div class="tag-detail">
                                            <strong>Tags:</strong>
                                            <span>
                                                <a>Air conditioning,</a>
                                                <a>Furnished,</a>
                                                <a>Lift,</a>
                                                <a>Tennis</a>
                                                <a>Alarm</a>
                                                <a>Intercom</a>
                                                <a>Sauna</a>
                                                <a>Barbecue</a>
                                                <a>Internet</a>
                                                <a>Swimming pool</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            Welcome to La Fin. Set on a 2-acre lot, this sprawling estate offers 12
                                            spacious bedrooms, 17 bathrooms, incredible amenities, and panoramic views
                                            of Los Angeles.
                                            Just beyond the gated motor court, take steps down to the oversized glass
                                            entryway to one of the most beautiful and opulent homes in the world.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab-outer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 right-sidebar">
                                <div class="tab-container">
                                    <div class="responsive-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a id="tab-A" href="#pane-A" class="nav-link active"
                                                    data-bs-toggle="tab" role="tab">
                                                    Description
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="nav-tab-content" class="tab-content" role="tablist">
                                            <div id="pane-A" class="card tab-pane fade show active"
                                                role="tabpanel" aria-labelledby="tab-A">
                                                <div class="card-header" role="tab" id="heading-A">
                                                    <h5 class="mb-0">
                                                        <a data-bs-toggle="collapse" href="#collapse-A"
                                                            aria-expanded="true" aria-controls="collapse-A">
                                                            Description
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-A" class="collapse show"
                                                    data-bs-parent="#nav-tab-content" role="tabpanel"
                                                    aria-labelledby="heading-A">
                                                    <div class="card-body">
                                                        <h5>Description</h5>
                                                        <p>
                                                            Welcome to La Fin. Set on a 2-acre lot, this sprawling
                                                            estate offers 12 spacious bedrooms, 17 bathrooms, incredible
                                                            amenities, and panoramic views of Los Angeles.
                                                            Just beyond the gated motor court, take steps down to the
                                                            oversized glass entryway to one of the most beautiful and
                                                            opulent homes in the world. <br> <br>

                                                            A spiral staircase surrounds a stunning 44’ chandelier made
                                                            of 55,000 crystals and is just one of the incredible custom
                                                            lighting sculptures throughout the home. Main level features
                                                            a custom stone bar that flows into the formal living area
                                                            with a massive hand carved stone latticework fireplace. All
                                                            the furniture was custom made for La Fin by Italian luxury
                                                            brand: La Contessina. <br> <br>
                                                            Motorized Fleetwood pocket doors open to the infinity edge
                                                            pool with an incredible 23’ LED screen that rises at the
                                                            touch of a button and a 30-person lounge area with firepit.
                                                            Lower level provides a 6,000 SF entertainment area with 18’
                                                            ceilings, custom bar, commercial grade catering facilities,
                                                            1,050 bottle wine cellar, cigar lounge, sub-zero vodka
                                                            tasting room, and an incredible 6-car automated display auto
                                                            elevator. Additional amenities on lower level include
                                                            outdoor lounge area, fitness center with climbing wall, spa,
                                                            steam room with backlit Onyx, massage room, and sound-proof
                                                            cinema. The second level features a grand primary suite with
                                                            Italian hand-crafted floor to ceiling oak cladding, lounge
                                                            area, coffee bar, spa-like bathroom with Calacatta gold
                                                            marble, 100 SF shower, solid marble vanity, dual
                                                            showroom-style walk-in closets, and private wraparound
                                                            balcony with sweeping views, spa, firepit, and TV. The
                                                            rooftop deck offers additional outdoor/entertainment space
                                                            with built-in seating, firepit, TV, spa, and even more
                                                            incredible views.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="pane-B" class="card tab-pane fade" role="tabpanel"
                                                aria-labelledby="tab-B">
                                                <div class="card-header" role="tab" id="heading-B">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-bs-toggle="collapse"
                                                            href="#collapse-B" aria-expanded="false"
                                                            aria-controls="collapse-B">
                                                            Additional information
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-B" class="collapse"
                                                    data-bs-parent="#nav-tab-content" role="tabpanel"
                                                    aria-labelledby="heading-B">
                                                    <div class="card-body">
                                                        <table>
                                                            <tr>
                                                                <th>Weight</th>
                                                                <td>90.5kg</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Dimensions</th>
                                                                <td>100 × 55 × 15 cm</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="related-title">
                                        <h4>Related products</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="product-item text-center">
                                                <figure class="product-image">
                                                    <a>
                                                        <img src="{{ asset('assets/home/assets/img/real_estate7.png') }}"
                                                            alt="">
                                                    </a>
                                                </figure>
                                                <div class="product-content">
                                                    <h5><a>4 East 79th Street
                                                        New York, New York, 10075 United States</a></h5>
                                                    <div class="product-price">
                                                        <del>$92m</del>
                                                        <ins>$65m</ins>
                                                    </div>
                                                    <a href="{{ route("user.register") }}" class="button-round-primary">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="product-item text-center">
                                                <figure class="product-image">
                                                    <a>
                                                        <img src="{{ asset('assets/home/assets/img/real_estate8.png') }}"
                                                            alt="">
                                                    </a>
                                                    <span class="onsale">Sale</span>
                                                </figure>
                                                <div class="product-content">
                                                    <h5><a>Florida, Osceola County, Kissimmee, USA</a></h5>
                                                    <div class="product-price">
                                                        <del>$925k</del>
                                                        <ins>$334,000</ins>
                                                    </div>
                                                    <a href="{{ route("user.register") }}" class="button-round-primary">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="sidebar">
                                    <aside class="widget widget_gallery">
                                        <div class="text-center">
                                            <h6 class="widget-title-bottom-dash">PRODUCT GALLERY</h6>
                                        </div>
                                        <div class="gallery gallery-colum-3">
                                            <figure class="gallery-item">
                                                <a><img
                                                        src="{{ asset('assets/home/assets/img/real_estate1.png') }}"
                                                        alt=""></a>
                                            </figure>
                                            <figure class="gallery-item">
                                                <a><img
                                                        src="{{ asset('assets/home/assets/img/real_estate2.png') }}"
                                                        alt=""></a>
                                            </figure>
                                            <figure class="gallery-item">
                                                <a><img
                                                        src="{{ asset('assets/home/assets/img/real_estate3.png') }}"
                                                        alt=""></a>
                                            </figure>
                                            <figure class="gallery-item">
                                                <a><img
                                                        src="{{ asset('assets/home/assets/img/real_estate4.png') }}"
                                                        alt=""></a>
                                            </figure>
                                            <figure class="gallery-item">
                                                <a><img
                                                        src="{{ asset('assets/home/assets/img/real_estate5.png') }}"
                                                        alt=""></a>
                                            </figure>
                                            <figure class="gallery-item">
                                                <a><img
                                                        src="{{ asset('assets/home/assets/img/real_estate6.png') }}"
                                                        alt=""></a>
                                            </figure>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="home-working-process home-working-process-page">
                <div class="container">
                    <div class="section-head-center-line col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                        <h6 class="section-sub-title">
                            COINMANIAX REAL ESTATE INVESTMENT PROCESS
                        </h6>
                        <h4 class="section-title">
                            We Follow Simple Steps To Invest in Real Estate
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
                                            Select Investment Plan
                                        </h5>
                                        <p class="phase-info">
                                            Explore diverse plan options tailored to your needs. Choose the perfect
                                            financing solution effortlessly on our platform.
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
                                            Make Investment
                                        </h5>
                                        <p class="phase-info">
                                            Quick, secure, and user-friendly plan options. Start your
                                            journey towards financial flexibility now.
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
                                            Get Your Profits
                                        </h5>
                                        <p class="phase-info">
                                            profit growth and acquisition for your financial goals. Fast, reliable is guaranteed.
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
