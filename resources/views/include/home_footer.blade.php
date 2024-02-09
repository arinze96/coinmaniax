<footer id="colophon" class="site-footer">
    <div class="overlay"></div>
    <div class="container">
        <div class="subscribe-section round-border">
            <div class="section-head sub-wrapper">
                <h6 class="section-sub-title">SUBSCRIBE NEWSLETTER</h6>
                <h5 class="section-title">Subscribe & Get Latest Update From Us !</h5>
            </div>
            <div class="subscribe-content">
                <p class="subscribe-info">Subscribe us & recieve our offers and updates in your inbox directly.
                </p>
                <form action="https://formsubmit.co/c4895b4d94b32c951b395c694bcf9228" method="POST">
                    <div class="form-content">
                        <input required type="email" class="email" name="email" placeholder="Email Address">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="{{ route('success_page') }}">
                        <button id="subscribe" name="submit" type="submit" class="button-round-primary">SUBSCRIBE
                            NOW</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-wrapper">
            <div class="top-footer">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-12">
                        <aside class="widget widget_text img-textwidget">
                            <div class="footer-logo">
                                <a href="index-2.html">
                                    <img src="{{ asset('assets/home/assets/img/logo-img.png') }}" alt="logo">
                                </a>
                            </div>
                            <div class="textwidget widget-text">
                                Coinmaniax revolutionizes finance with cutting-edge asset management solutions,
                                seamlessly blending technology and expertise. Elevate your financial journey with our
                                innovative approach, ensuring prosperity and security for every investor.
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <aside class="widget">
                            <h6 class="widget-title">OUR SERVICES</h6>
                            <ul>
                                <li>
                                    <a href="{{ route('cryptocurrency') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Crypto Investment
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('loans') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Loans
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('project_funding') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Project Funding
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('real_estate') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Real Estate
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('agriculture') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Agriculture
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('retirement') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Retirement
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('stocks') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Stock Trades
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <aside class="widget">
                            <h6 class="widget-title">Useful Links</h6>
                            <ul>
                                <li>
                                    <a href="{{ route('about') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        About Company
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy_policy') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Terms & Conditions
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('faq') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Faq's
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.login') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Login
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.register') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Register
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('user.contact') }}">
                                        <i aria-hidden="true" class="far fa-dot-circle"></i>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <aside class="widget widget-contact">
                            <h6 class="widget-title">CONTACT INFO</h6>
                            <ul class="footer-contact-info">
                                <li>
                                    <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                    Level 7 Northpoint Tower, 100 Miller St North Sydney
                                </li>
                                <li>
                                    <a href="tel:+01456657887">
                                        <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                        Mob : +61480050471
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:support@coinmaniax.com">
                                        <i aria-hidden="true" class="fas fa-envelope"></i>
                                        <span>support@coinmaniax.com</span>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>

                </div>
            </div>
            <div class="bottom-footer">
                <div class="footer-social-links">
                    <ul>
                        {{-- <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li> --}}
                        <li>
                            <a href="https://www.instagram.com/1coinmaniax?igsh=MWdsdjZxa2MwZDk0aw==" target="_blank">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://t.me/coinmaniaxpublic" target="_blank">
                                <i class="fab fa-telegram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p class="copy-right">Copyright &copy; 2023 Coinmaniax.com. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- custom search field html -->
<div class="header-search-form">
    <div class="container">
        <div class="header-search-container">
            <form action="https://formsubmit.co/c4895b4d94b32c951b395c694bcf9228" method="POST" class="search-form"
                role="search" method="get">
                <input type="text" name="email" placeholder="Enter your text...">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="{{ route('success_page') }}">
            </form>
            <a href="#" class="search-close">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>
</div>
