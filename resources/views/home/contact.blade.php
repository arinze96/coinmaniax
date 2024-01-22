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
                    style="background-image: url({{ asset('assets/home/assets/img/image018.jpg') }});">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h2 class="inner-title">Contact Us</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact form html start -->
            
            <section class="contact-page-section">
                <div class="background-world-map-img"></div>
                <div class="container">
                    <div class="contact-form-inner">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-from-wrap">
                                    <form class="contact-from" action="https://formsubmit.co/c4895b4d94b32c951b395c694bcf9228" method="POST">
                                        <p>
                                            <input required type="text" id="name" name="name"
                                                placeholder="Your Name..">
                                        </p>
                                        <p>
                                            <input required type="email" id="email" name="email"
                                                placeholder="Your Email..">
                                        </p>
                                        <p class="half-width">
                                            <input required type="text" id="phone" name="phone"
                                                placeholder="Phone No..">
                                        </p>
                                        <p class="half-width">
                                            <input required type="text" id="subject" name="subject"
                                                placeholder="Your Subject..">
                                        </p>
                                        <p>
                                            <textarea required type="text" name="message" id="message" rows="8" placeholder="Enter Your Message.."></textarea>
                                        </p>
                                        <input type="hidden" name="_captcha" value="false">
                                        <input type="hidden" name="_next" value="{{ route('success_page') }}">
                                        <p>
                                            <input style="color: #fff" type="submit"
                                                id="contact_form_submit" name="submit" value="SEND MESSAGE">
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-last order-first">
                                <div class="contact-detail-container">
                                    <div class="section-head-info">
                                        <h6 class="section-sub-title">CONTACT US</h6>
                                        <h4 class="section-title">Feel Free To Contact And Reach Us For More Info !!
                                        </h4>
                                        <p class="section-paragraph">
                                            If you have any questions, require more detailed information, or seek
                                            guidance on our services and investment opportunities, please feel free to
                                            contact us. Our dedicated team is readily available to provide you with
                                            comprehensive responses and personalized assistance.
                                        </p>
                                    </div>
                                    <div class="contact-details-list">
                                        <ul>
                                            <li>
                                                <span class="icons">
                                                    <i aria-hidden="true" class="icon icon-map-marker1"
                                                        style="color: #fff"></i>
                                                </span>
                                                <div class="details-content">
                                                    <h5>Location Address :</h5>
                                                    <span>Jl. Raya Puputan No 142, NY - 80234</span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icons">
                                                    <i aria-hidden="true" class="icon icon-phone1"
                                                        style="color: #fff"></i>
                                                </span>
                                                <div class="details-content">
                                                    <h5>Phone Number :</h5>
                                                    <span><a href="tel:+98156259365">Telephone : +1 (156) 259
                                                            365</a></span>
                                                </div>
                                            </li>
                                            <li>
                                                <span class="icons">
                                                    <i aria-hidden="true" class="icon icon-envelope3"
                                                        style="color: #fff"></i>
                                                </span>
                                                <div class="details-content">
                                                    <h5>Email address :</h5>
                                                    <span><a href="#"><span
                                                                class="__cf_email__">support@coinmaniax.com</span></a></span>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="map-section">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317838.95217734354!2d-0.27362819527326965!3d51.51107287614788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c7c7eb9be3%3A0x3918653583725b56!2sRiverside%20Building%2C%20County%20Hall%2C%20Westminster%20Bridge%20Rd%2C%20London%20SE1%207JA%2C%20UK!5e0!3m2!1sen!2snp!4v1632135241093!5m2!1sen!2snp"
                    height="300" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </main>
        <!-- footer part -->
        @include('include.home_footer')
    </div>
    <!-- JavaScript -->
    @include('include.home_js')
</body>

</html>
