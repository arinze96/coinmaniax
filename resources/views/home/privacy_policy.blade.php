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
                            <h2 class="inner-title">TERMS & CONDITIONS</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-working-process home-working-process-page">
                <div class="container">
                    <div class="section-head-center-line col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                        <h6 class="section-sub-title">
                            TERMS & CONDITIONS
                        </h6>
                        <h4 class="section-title">
                            Coinmaniax Investment Terms & Conditions
                        </h4>
                    </div>
                    <div class="process-step">
                        <div class="row align-items-center justify-content-center">
                            <p style="text-align: left; padding-left: 100px; padding-right: 100px;">
                                <span style="font-weight: bold">Last Updated: [16-01-2024]</span> <br> <br>

                                Welcome to Coinmaniax Investment Company's Terms & Conditions. This document outlines our
                                commitment to protecting the privacy of our clients, investors, and visitors while
                                providing comprehensive investment services in agriculture, loans, stocks,
                                cryptocurrency, retirement funds, project funding, and real estate. By accessing our
                                services, you agree to the terms outlined in this Terms & Conditions. <br> <br>

                                <span style="font-weight: bold">1. Information Collection </span><br>
                                <span style="font-weight: bold">1.1 Personal Information </span><br>
                                We collect personal information, including but not limited to, your name, contact
                                details, financial information, and identification documents. This information is
                                necessary for onboarding, compliance, and providing our investment services. <br> <br>
                                
                                <span style="font-weight: bold">1.2 Usage Information  </span><br>
                                We may collect information about your interactions with our website, applications, and
                                services. This includes log data, device information, and cookies to improve user
                                experience and customize our services. <br> <br>
                                
                                <span style="font-weight: bold">2. Information Use</span><br>
                                <span style="font-weight: bold">2.1 Service Provision</span><br>
                                We use your personal information to facilitate and improve our investment services,
                                ensuring efficient and secure transactions in agriculture, loans, stocks,
                                cryptocurrency, retirement funds, project funding, and real estate.<br> <br>
                                
                                <span style="font-weight: bold"> 2.2 Communication</span><br>
                                We may use your contact information to provide important updates, notifications, and
                                marketing communications related to our services. You can opt-out of non-essential
                                communications. <br> <br>
                                
                                <span style="font-weight: bold">2.3 Compliance and Legal Obligations</span><br>
                                We process personal information to comply with legal requirements, prevent fraud, and
                                ensure the security of our operations. <br> <br>
                                
                                <span style="font-weight: bold"> 3. Information Sharing</span><br>
                                <span style="font-weight: bold"> 3.1 Third-Party Service Providers</span><br>
                                We may share your information with trusted third-party service providers for functions
                                such as payment processing, identity verification, and analytics. These providers are
                                obligated to protect your information in accordance with this Terms & Conditions. <br> <br>
                                
                                <span style="font-weight: bold">3.2 Legal Compliance</span><br>
                                We may disclose personal information when required by law or in response to legal
                                requests and enforce our Terms of Service. <br> <br>
                                
                                <span style="font-weight: bold">3.3 Business Transactions</span><br>
                                In the event of a merger, acquisition, or sale of assets, your personal information may
                                be transferred. We will notify you of any such change and ensure the protection of your
                                data. <br> <br>
                                
                                <span style="font-weight: bold">4. Data Security</span><br>
                                <span style="font-weight: bold">4.1 Security Measures</span><br>
                                We implement industry-standard security measures to protect your personal information
                                from unauthorized access, disclosure, alteration, and destruction. <br> <br>
                                
                                <span style="font-weight: bold">4.2 Data Access Controls</span><br>
                                Access to your personal information is restricted to authorized personnel and
                                third-party service providers who require the information for business purposes. <br>
                                <br>
                                
                                <span style="font-weight: bold">5. Your Rights</span><br>
                                <span style="font-weight: bold">5.1 Access and Correction</span><br>
                                You have the right to access, correct, or delete your personal information. Contact us
                                to exercise these rights.<br> <br>
                                
                                <span style="font-weight: bold">5.2 Opt-Out</span><br>
                                You can opt-out of receiving non-essential communications. However, certain
                                communications are essential for the provision of our services. <br> <br>
                                
                                <span style="font-weight: bold">6. Updates to Terms & Conditions</span><br>
                                We may update this Terms & Conditions periodically to reflect changes in our practices.
                                Please review the policy regularly for the latest information. <br> <br>
                                
                                <span style="font-weight: bold">7. Contact Us</span><br>
                                If you have any questions or concerns about this Terms & Conditions or our data practices,
                                please contact us at <a href="mailto:support@coinmaniax.com">support@coinmaniax.com.</a> <br> <br>

                                Thank you for choosing Coinmaniax Investment Company for your investment needs.
                            </p>
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
