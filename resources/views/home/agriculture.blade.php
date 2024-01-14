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
                    style="background-image: url('{{ asset('assets/home/assets/img/agric.gif') }}');">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h2 class="inner-title">AGRICULTURE</h2>
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
                            We Invest in Modernized Sustainable Agriculture
                        </h4>
                    </div>
                    <div class="process-step">
                        <div class="row align-items-center justify-content-center">
                            <p style="text-align: left">
                                In an era where the balance between agricultural productivity and environmental
                                preservation is crucial, we proudly invest in modernized sustainable agriculture,
                                focusing on innovative techniques like <b>precision farming</b> and <b>vertical
                                    agriculture</b>. These
                                methods not only enhance crop yields but also minimize our ecological footprint,
                                ensuring a healthier planet for future generations. <br>

                                <b>Precision farming</b> represents a technological revolution in agriculture. By
                                utilizing
                                GPS, IoT sensors, and big data analytics, we can now monitor and manage field variations
                                with unprecedented accuracy. This means applying the right amount of water, fertilizers,
                                and pesticides exactly where and when they are needed, reducing waste and environmental
                                impact. Our investment in this smart farming approach leads to higher efficiency, lower
                                costs, and a significant reduction in the use of chemical inputs, thereby protecting
                                soil health and biodiversity. <br>

                                <b>Vertical agriculture</b>, another pillar of our investment, transforms the concept of
                                farming in urban environments. By growing crops in vertically stacked layers, often in
                                controlled environments, we maximize space efficiency and significantly cut down on
                                transportation emissions. This method uses up to 70% less water than traditional
                                agriculture and eliminates the need for pesticides, offering a sustainable solution for
                                feeding the growing urban populations. <br>

                                Through these innovative agricultural practices, we are committed to nurturing a
                                sustainable future, where technology and ecology harmoniously coexist, fostering a world
                                where both humanity and nature thrive.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="career-detail-section" style="margin-top: -100px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="career-detail-container">
                                <div class="job-description">
                                    <figure class="job-imgage">
                                        <img src="{{ asset('assets/home/assets/img/verticalFarm.png') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="tab-container">
                                    <div class="responsive-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a id="tab-A" href="#pane-A" class="nav-link active"
                                                    data-bs-toggle="tab" role="tab">
                                                    Precision farming
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab"
                                                    role="tab">
                                                    Vertical Agriculture/Farming
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="nav-tab-content" class="tab-content" role="tablist">
                                            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel"
                                                aria-labelledby="tab-A">
                                                <div class="card-header" role="tab" id="heading-A">
                                                    <h5 class="mb-0">
                                                        <a data-bs-toggle="collapse" href="#collapse-A"
                                                            aria-expanded="true" aria-controls="collapse-A">
                                                            Precision Farming
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-A" class="collapse show"
                                                    data-bs-parent="#nav-tab-content" role="tabpanel"
                                                    aria-labelledby="heading-A">
                                                    <div class="card-body">
                                                        <p>Precision farming, a modern agricultural practice, harnesses
                                                            technology to enhance efficiency and productivity while
                                                            minimizing environmental impact. This approach is
                                                            transformative, leveraging advanced technologies like GPS,
                                                            satellite imagery, IoT sensors, and big data analytics to
                                                            optimize farming operations.
                                                        </p>
                                                        <p>At its core, precision farming involves the precise
                                                            management of agricultural practices tailored to specific
                                                            conditions of each part of the field. It contrasts
                                                            traditional farming, where practices are applied uniformly
                                                            across an entire field. By acknowledging the variability in
                                                            soil types, moisture levels, pest pressures, and
                                                            microclimates, precision farming allows for the application
                                                            of water, fertilizers, and pesticides in exact amounts only
                                                            where needed.
                                                        </p>
                                                        <ul>
                                                            <li><b>GPS Technology:</b> Used for accurate field mapping,
                                                                tractor guidance systems, and precise application of
                                                                inputs. This reduces overlap during planting,
                                                                fertilizing, and pesticide application, thereby saving
                                                                time and resources.
                                                            </li>
                                                            <li><b>Remote Sensing:</b> Utilizing satellite or drone
                                                                imagery, farmers can observe plant health across their
                                                                fields. This information helps in identifying problem
                                                                areas, understanding crop progression, and making
                                                                informed decisions.</li>
                                                            <li><b>Soil and Field Analysis:</b> By analyzing soil
                                                                properties and field conditions, farmers can apply the
                                                                correct amount of inputs at the right place. Sensors can
                                                                measure soil moisture and nutrient levels, informing
                                                                irrigation and fertilization strategies.</li>
                                                        </ul>
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
                                                            vertical Agriculture
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content"
                                                    role="tabpanel" aria-labelledby="heading-B">
                                                    <div class="card-body">
                                                        <p>Vertical agriculture, also known as vertical farming, is an
                                                            innovative approach to food production that maximizes space
                                                            efficiency and minimizes environmental impact. This method
                                                            involves growing crops in vertically stacked layers, often
                                                            within controlled environments such as buildings, repurposed
                                                            warehouses, or specially designed structures. Here's a
                                                            closer look at its </p>
                                                        <br>
                                                        <strong>KEY ASPECTS:</strong>
                                                        <ul>
                                                            <li> <b>Stacked Layers:</b> Plants are grown in layers, one above
                                                                the other, often using shelving, towers, or other
                                                                structures. This multi-level system significantly
                                                                increases the yield per square meter compared to
                                                                traditional farming.
                                                            </li>
                                                            <li>
                                                                <b>Controlled Environment Agriculture (CEA):</b> Vertical farms
                                                                typically operate in controlled environments, where
                                                                temperature, humidity, light, and CO2 levels are
                                                                precisely managed. This control allows for optimal plant
                                                                growth conditions and year-round production, independent
                                                                of external weather conditions.
                                                            </li>
                                                            <li>
                                                                <b>Hydroponics, Aeroponics, or Aquaponics:</b> These soilless
                                                                cultivation methods are commonly used in vertical
                                                                farming. Hydroponics involves growing plants in
                                                                nutrient-rich water, aeroponics uses misted nutrients,
                                                                and aquaponics combines fish farming with plant
                                                                cultivation, creating a symbiotic ecosystem.
                                                            <li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 order-lg-first">
                            <div class="sidebar">
                                <div class="widget-bg upload-widget text-center">
                                    <div class="widget-icon">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                    <h5>Send Us a Message</h5>
                                    <p>Do you want to work with us? Please, send a message <a
                                            href="#"><span>support@coinmaniax.com</span></a>
                                    </p>
                                    <span class="or-style">OR</span>
                                    <a href="{{ route('user.contact') }}" class="button-round-primary">CONTACT US</a>
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
