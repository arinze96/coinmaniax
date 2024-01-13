<!DOCTYPE html>
<html lang="zxx">

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
        <!-- header html start -->
        @include('include.home_header')
        <main id="content" class="site-main">
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                {{-- <div class="inner-baner-container"
                    style="background-image: url({{ asset('assets/home/assets/img/image018.jpg') }});"> --}}
                    <div class="inner-baner-container"
                    style="background-image: url({{ asset('assets/home/assets/img/transform.gif') }});">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h2 class="inner-title">FAQ's</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- faq page html start -->
            <div class="faq-page-section">
                <div class="container">
                    <div class="faq-page-container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="faq-right-info">
                                    <div class="section-head-info">
                                        <h6 class="section-sub-title">
                                            QUESTIONS & ANSWERS
                                        </h6>
                                        <h4 class="section-title">
                                            Frequently Asked Questions
                                        </h4>
                                        <p class="section-paragraph">This section is designed to give you a clearer understanding of what Coinmaniax offers, how our services can benefit you, and the steps we take to ensure a secure, profitable, and satisfying investment experience. Explore the answers to better understand our commitment to your financial success and how we can help you achieve your investment goals.
                                        </p>
                                    </div>
                                    <div id="accordion-tab-one" class="accordion-content" role="tablist">
                                        <div id="accordion-A" class="card tab-pane fade show active" role="tabpanel"
                                            aria-labelledby="accordion-A">
                                            <div class="card-header" role="tab" id="qus-A">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-one"
                                                        aria-expanded="true" aria-controls="collapse-one">
                                                        What services does Coinmaniax offer?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-one" class="collapse show"
                                                data-bs-parent="#accordion-tab-one" role="tabpanel"
                                                aria-labelledby="qus-A">
                                                <div class="card-body">
                                                    Coinmaniax specializes in diverse financial services including stock
                                                    trading, real estate investments, retirement planning, and asset
                                                    management, tailored to meet the unique needs of each client.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-B" class="card tab-pane" role="tabpanel"
                                            aria-labelledby="accordion-B">
                                            <div class="card-header" role="tab" id="qus-B">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-two"
                                                        aria-expanded="false" aria-controls="collapse-two">
                                                        How does Coinmaniax ensure the security of my investments?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-two" class="collapse" data-bs-parent="#accordion-tab-one"
                                                role="tabpanel" aria-labelledby="qus-B">
                                                <div class="card-body">
                                                    We employ robust security measures, including advanced encryption
                                                    and compliance with global financial regulations. Our experienced
                                                    team continuously monitors and adjusts strategies to safeguard your
                                                    investments.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-C" class="card tab-pane" role="tabpanel"
                                            aria-labelledby="accordion-C">
                                            <div class="card-header" role="tab" id="qus-C">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        href="#collapse-three" aria-expanded="true"
                                                        aria-controls="collapse-three">
                                                        Can Coinmaniax help me with retirement planning?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-three" class="collapse"
                                                data-bs-parent="#accordion-tab-one" role="tabpanel"
                                                aria-labelledby="qus-C">
                                                <div class="card-body">
                                                    Absolutely! Our experts are adept at creating comprehensive
                                                    retirement plans, focusing on long-term growth and stability to
                                                    ensure a comfortable retirement.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-D" class="card tab-pane" role="tabpanel"
                                            aria-labelledby="accordion-D">
                                            <div class="card-header" role="tab" id="qus-D">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-four"
                                                        aria-expanded="true" aria-controls="collapse-four">
                                                        Coinmaniax suitable for first-time investors?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-four" class="collapse"
                                                data-bs-parent="#accordion-tab-one" role="tabpanel"
                                                aria-labelledby="qus-D">
                                                <div class="card-body">
                                                    Coinmaniax caters to both novice and experienced investors. We
                                                    provide educational resources and personalized advice to help
                                                    first-time investors make informed decisions.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-E" class="card tab-pane" role="tabpanel"
                                            aria-labelledby="accordion-E">
                                            <div class="card-header" role="tab" id="qus-E">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        href="#collapse-five" aria-expanded="true"
                                                        aria-controls="collapse-five">
                                                        What sets Coinmaniax apart from other financial service
                                                        providers?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-five" class="collapse"
                                                data-bs-parent="#accordion-tab-one" role="tabpanel"
                                                aria-labelledby="qus-E">
                                                <div class="card-body">
                                                    Our 25 years of experience, award-winning services, and a
                                                    client-centric approach, combined with a commitment to innovation
                                                    and continuous improvement, set us apart in the financial industry.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="qsn-form-container">
                                    <h5 class="round-border">Any Questions? Ask Us!!</h5>
                                    <form>
                                        <p>
                                            <input type="text" name="name" placeholder="Your Name*">
                                        </p>
                                        <p>
                                            <input type="email" name="email" placeholder="Your Email*">
                                        </p>
                                        <p>
                                            <input type="number" name="number" placeholder="Mobile Number*">
                                        </p>
                                        <p>
                                            <textarea rows="8" placeholder="Enter your message*"></textarea>
                                        </p>
                                        <p>
                                            <input type="submit" class="button-white-border" name="submit"
                                                value="SUBMIT MESSAGE" style="color: white">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-page-container">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="faq-testimonial">
                                    <figure class="faq-image">
                                        <img src="{{ asset('assets/home/assets/img/image021.jpg') }}" alt="">
                                    </figure>
                                    <div class="testimonial-content round-border">
                                        <span class="quote-icon">
                                            <i class="fas fa-quote-left"></i>
                                        </span>
                                        <h5>Give Us A Chance To Prove It!</h5>
                                        <p>
                                            Learn how our commitment to innovation, security, and transparency ensures that you have a trusted partner in every step of your financial journey.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-content-wrap">
                                    <div class="section-head-info">
                                        <h6 class="section-sub-title">BENEFITS & MISSION</h6>
                                        <h4 class="section-title">Benefits & What we do?</h4>
                                        <p class="section-paragraph">
                                            Join us in exploring the distinctive benefits that come with choosing Coinmaniax as your financial ally. We are dedicated to empowering you with the knowledge and tools needed for a successful and secure financial future.
                                        </p>
                                    </div>
                                    <div id="accordion-tab-two" class="accordion-content" role="tablist">
                                        <div id="accordion-F" class="card tab-pane fade show active" role="tabpanel"
                                            aria-labelledby="accordion-F">
                                            <div class="card-header" role="tab" id="qus-F">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-six"
                                                        aria-expanded="true" aria-controls="collapse-six">
                                                        Diversified Investment Opportunities
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-six" class="collapse show"
                                                data-bs-parent="#accordion-tab-two" role="tabpanel"
                                                aria-labelledby="qus-F">
                                                <div class="card-body">
                                                    Coinmaniax offers a wide range of investment options, from stocks to
                                                    real estate, enabling clients to build diversified portfolios that
                                                    align with their financial goals and risk tolerance.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-G" class="card tab-pane" role="tabpanel"
                                            aria-labelledby="accordion-G">
                                            <div class="card-header" role="tab" id="qus-G">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        href="#collapse-seven" aria-expanded="false"
                                                        aria-controls="collapse-seven">
                                                        Expert Asset Management
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-seven" class="collapse"
                                                data-bs-parent="#accordion-tab-two" role="tabpanel"
                                                aria-labelledby="qus-G">
                                                <div class="card-body">
                                                    With 25 years of expertise, Coinmaniax provides top-notch asset
                                                    management services, leveraging advanced technology and a
                                                    client-centric philosophy to optimize and safeguard financial
                                                    resources.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-H" class="card tab-pane" role="tabpanel"
                                            aria-labelledby="accordion-H">
                                            <div class="card-header" role="tab" id="qus-H">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        href="#collapse-eight" aria-expanded="true"
                                                        aria-controls="collapse-eight">
                                                        Comprehensive Retirement Planning
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-eight" class="collapse"
                                                data-bs-parent="#accordion-tab-two" role="tabpanel"
                                                aria-labelledby="qus-H">
                                                <div class="card-body">
                                                    Coinmaniax specializes in creating personalized retirement plans,
                                                    ensuring clients achieve their long-term financial objectives by
                                                    focusing on growth, stability, and security for a comfortable
                                                    retirement.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-I" class="card tab-pane" role="tabpanel"
                                            aria-labelledby="accordion-I">
                                            <div class="card-header" role="tab" id="qus-I">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        href="#collapse-nine" aria-expanded="true"
                                                        aria-controls="collapse-nine">
                                                        Award-Winning Services
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-nine" class="collapse"
                                                data-bs-parent="#accordion-tab-two" role="tabpanel"
                                                aria-labelledby="qus-I">
                                                <div class="card-body">
                                                    Our commitment to excellence has earned us industry recognition and
                                                    awards. Clients benefit from our proven track record, receiving
                                                    financial solutions that have been consistently acknowledged for
                                                    their innovation and effectiveness.
                                                </div>
                                            </div>
                                        </div>
                                        <div id="accordion-J" class="card tab-pane" role="tabpanel"
                                            aria-labelledby="accordion-J">
                                            <div class="card-header" role="tab" id="qus-J">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse"
                                                        href="#collapse-Ten" aria-expanded="true"
                                                        aria-controls="collapse-Ten">
                                                        Client-Centric Approach
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-Ten" class="collapse"
                                                data-bs-parent="#accordion-tab-two" role="tabpanel"
                                                aria-labelledby="qus-J">
                                                <div class="card-body">
                                                    At Coinmaniax, our clients are at the heart of everything we do. We
                                                    prioritize transparency, communication, and continuous improvement
                                                    to ensure a collaborative relationship that fosters financial
                                                    success and client satisfaction.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- footer part -->
        @include('include.home_footer')
    </div>
    <!-- JavaScript -->
    @include('include.home_js')
</body>

</html>
