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
                    style="background-image: url('{{ asset('assets/home/assets/img/Rt.png') }}');">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h2 class="inner-title">RETIREMENT PLAN</h2>
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
                            We Help You Navigate the Path to Financial Security After Post-Work Life
                        </h4>
                    </div>
                    <div class="process-step">
                        <div class="row align-items-center justify-content-center">
                            <p style="text-align: left">
                                <b>Retirement</b> is a significant life milestone, and careful planning is crucial to ensure financial security during this phase. Retirement plans serve as a roadmap, guiding individuals through the <b>complexities of post-work life</b>. One of the most common options is the <b>401(k)</b>, allowing employees to contribute a portion of their salary to a tax-advantaged account, often with employer matching. This provides a disciplined approach to saving, fostering a sense of financial responsibility. <br> <br>

                                <b>Individual Retirement Accounts (IRAs)</b> offer another avenue, granting flexibility in investment choices and potential tax advantages. Roth IRAs, in particular, provide tax-free withdrawals in retirement, offering a strategic option for those anticipating higher future tax rates. Diversifying investments within a retirement portfolio helps mitigate risks, balancing stocks, bonds, and other assets to achieve long-term growth. <br> <br>

                                Government-sponsored plans, such as Social Security, also play a pivotal role. Understanding eligibility, benefit calculations, and the impact of early or delayed withdrawals empowers individuals to make informed decisions. Additionally, embracing supplementary savings and investment strategies enhances financial resilience.
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
                                        <img src="{{ asset('assets/home/assets/img/retirement.png') }}"
                                            alt="">
                                    </figure>
                                </div>
                                <div class="tab-container">
                                    <div class="responsive-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a id="tab-A" href="#pane-A" class="nav-link active"
                                                    data-bs-toggle="tab" role="tab">
                                                    Coinmaniax 401(k)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab"
                                                    role="tab">
                                                    Coinmaniax Individual Retirement Accounts (IRAs)
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
                                                            Coinmaniax 401(k)
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-A" class="collapse show"
                                                    data-bs-parent="#nav-tab-content" role="tabpanel"
                                                    aria-labelledby="heading-A">
                                                    <div class="card-body">
                                                        <p>A 401(k) plan is a widely-utilized retirement savings tool offered by many employers in the United States. It is named after the section of the U.S. Internal Revenue Code that governs it. This type of plan allows employees to save and invest a portion of their paycheck before taxes are taken out. Here are key aspects of 401(k) plans:
                                                        </p>
                                                        <ul>
                                                            <li><b>Tax Advantages:</b> Contributions to a 401(k) are made with pre-tax dollars, reducing the employee's taxable income for the year. Taxes are not paid on the money until it is withdrawn from the account, typically in retirement.


                                                            </li>
                                                            <li><b>Employer Match:</b> Many employers offer a matching contribution to their employee's 401(k) plan. For example, an employer might match 50% of the employee’s contributions up to 6% of their salary. This feature essentially provides free money and encourages employees to contribute more to their plan.

                                                            </li>
                                                            <li><b>Contribution Limits:</b> The IRS sets annual limits on how much individuals can contribute to their 401(k). As of my last update in April 2023, the contribution limit was $20,500 for those under 50, with an additional "catch-up" contribution of $6,500 allowed for those aged 50 and over.

                                                            </li>
                                                            <li>
                                                                <b>Investment Options:</b> 401(k) plans typically offer a range of investment options, including stocks, bonds, and mutual funds. Employees choose how to allocate their contributions among these options.
                                                            </li>
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
                                                            Coinmaniax Individual Retirement Accounts (IRAs)
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content"
                                                    role="tabpanel" aria-labelledby="heading-B">
                                                    <div class="card-body">
                                                        <p>Individual Retirement Accounts (IRAs) are tax-advantaged accounts that allow individuals in the United States to save for retirement. They are a critical component of many people's retirement plans, offering various tax benefits and investment opportunities. Here are the key features of IRAs:
                                                        </p>
                                                        <br>
                                                        <strong>KEY ASPECTS:</strong>
                                                        <ul>
                                                            <li> <b>Traditional IRA:</b> Contributions to a traditional IRA may be tax-deductible, depending on the individual's income, tax-filing status, and other factors. The money in the account grows tax-deferred, meaning you don't pay taxes on the earnings until you withdraw the funds, typically during retirement when you might be in a lower tax bracket.
                                                            </li>
                                                            <li>
                                                                <b>Roth IRA:</b> Contributions to a Roth IRA are made with after-tax dollars, meaning there's no tax deduction for contributions. However, qualified withdrawals in retirement are tax-free, including the earnings. This can be advantageous for those who expect to be in a higher tax bracket in retirement or who prefer tax-free income in their retirement years.
                                                            </li>
                                                            <li>
                                                                <b>Contribution Limits:</b> The IRS sets annual contribution limits for IRAs. As of 2023, the limit was $6,000 per year, with an additional $1,000 catch-up contribution allowed for individuals aged 50 and over. These limits can change periodically.


                                                            <li>
                                                                <li><b>Income Limits:</b> For Roth IRAs, there are income limits that determine eligibility for contributions. Traditional IRAs do not have income limits for contributions, but there are limits for tax-deductibility if the individual or their spouse is covered by a retirement plan at work.

                                                                </li>
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
