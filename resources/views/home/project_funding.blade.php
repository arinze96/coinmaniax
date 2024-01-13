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
            <!-- Inner Banner html start-->
            <section class="inner-banner-wrap">
                <div class="inner-baner-container" style="background-image: url({{ asset("assets/home/assets/img/build.jpeg") }});">
                    <div class="container">
                        <div class="inner-banner-content">
                            <h2 class="inner-title">PROJECT FUNDING</h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog archive page html -->
            <div class="blog-archive-section home-blog-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="primary">
                                <div class="inner-blog-wrapper">
                                    <article class="post round-border">
                                        <figure class="feature-image">
                                            <img src="{{ asset("assets/home/assets/img/construction.png") }}" alt="">
                                            <span class="cat-meta">
                                                <a href="#">CONSTRUCTION</a>
                                            </span>
                                        </figure>
                                        <div class="entry-content">
                                            <h5 class="blog-title">
                                                <a href="#">Community Resilience Infrastructure, Project Resilient Roots</a>
                                            </h5>
                                            <p class="blog-preview">
                                                Strengthen communities against disasters by funding projects that build resilient infrastructure, early warning systems, and community preparedness programs.
                                            </p>
                                        </div>
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <a href="#">Jan, 2024</a>
                                            </span>
                                            <span class="comments">
                                                <a href="{{ route("user.register") }}">Construction Sector || <span style="color: blue; text-decoration: underline">apply now</span></a>
                                            </span>
                                        </div>
                                    </article>
                                    <article class="post round-border">
                                        <figure class="feature-image">
                                            <img src="{{ asset("assets/home/assets/img/renewables.png") }}" alt="">
                                            <span class="cat-meta">
                                                <a href="#">ENERGY</a>
                                            </span>
                                        </figure>
                                        <div class="entry-content">
                                            <h5 class="blog-title">
                                                <a href="#">Renewable Energy Revolution, Powering Tomorrow</a>
                                            </h5>
                                            <p class="blog-preview">
                                                We fund startups that harness clean energy sources for a sustainable future, investing in solar, wind, and innovative green technologies.
                                            </p>
                                        </div>
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <a href="#">Jan, 2024</a>
                                            </span>
                                            <span class="comments">
                                                <a href="{{ route("user.register") }}">Energy Sector || <span style="color: blue; text-decoration: underline">apply now</span></a>
                                            </span>
                                        </div>
                                    </article>
                                    <article class="post round-border">
                                        <figure class="feature-image">
                                            <img src="{{ asset("assets/home/assets/img/health.png") }}" alt="">
                                            <span class="cat-meta">
                                                <a href="#">HEALTH</a>
                                            </span>
                                        </figure>
                                        <div class="entry-content">
                                            <h5 class="blog-title">
                                                <a href="#">Healthcare Innovations Fund, Heal Beyond Boundaries</a>
                                            </h5>
                                            <p class="blog-preview">
                                                We Support breakthrough medical solutions, advancing healthcare accessibility, and technology-driven innovations for a healthier and more connected world.
                                            </p>
                                        </div>
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <a href="#">Jan, 2024</a>
                                            </span>
                                            <span class="comments">
                                                <a href="{{ route("user.register") }}">Health Sector || <span style="color: blue; text-decoration: underline">apply now</span></a>
                                            </span>
                                        </div>
                                    </article>
                                    <article class="post round-border">
                                        <figure class="feature-image">
                                            <img src="{{ asset("assets/home/assets/img/agriculture.png") }}" alt="">
                                            <span class="cat-meta">
                                                <a href="#">AGRICULTURE</a>
                                            </span>
                                        </figure>
                                        <div class="entry-content">
                                            <h5 class="blog-title">
                                                <a href="#">Agricultural Sustainability Hub, Green Harvest Initiative</a>
                                            </h5>
                                            <p class="blog-preview">
                                                Foster sustainable agriculture through funding projects that promote precision farming, agrotech solutions, and eco-friendly practices for a resilient and bountiful future.
                                            </p>
                                        </div>
                                        <div class="entry-meta">
                                            <span class="posted-on">
                                                <a href="#">Jan, 2024</a>
                                            </span>
                                            <span class="comments">
                                                <a href="{{ route("user.register") }}">Agricultural Sector || <span style="color: blue; text-decoration: underline">apply now</span></a>
                                            </span>
                                        </div>
                                    </article>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-lg-4 secondary">
                            <div class="sidebar">
                                <aside class="widget author_widget">
                                    <h6 class="widget-title-bottom-dash">SPECIAL AGENT</h6>
                                    <div class="widget-content text-center">
                                        <div class="profile">
                                            <figure class="avatar">
                                                <img src="{{ asset("assets/home/assets/img/image07.jpg") }}" alt="">
                                            </figure>
                                            <div class="text-content">
                                                <h5 class="name-title">
                                                    <a href="team-deatil.html">
                                                        Willaim Wright
                                                    </a>
                                                </h5>
                                                <p class="author-info">
                                                    Our special agent can help you navigate this space so as to get the funding 
                                                    you need for you venture
                                                </p>
                                            </div>
                                            <div class="social-icon">
                                                <ul>
                                                    <li>
                                                        <a target="_blank" href="https://www.facebook.com/">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="https://www.twitter.com/">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="https://www.google.com/">
                                                            <i class="fab fa-google"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="https://www.instagram.com/">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="https://www.pinterest.com/">
                                                            <i class="fab fa-pinterest"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <aside class="widget widget_social">
                                    <div class="text-center">
                                        <h6 class="widget-title-bottom-dash">SECTORS WE FUND</h6>
                                    </div>
                                    <div class="social-icon-wrap">
                                        <div class="social-icon social-facebook">
                                            <a href="https://www.facebook.com/">
                                                <span>Construction</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-google-plus">
                                            <a href="https://www.googleplus.com/">
                                                <span>Energy</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-pinterest">
                                            <a href="https://www.pinterest.com/">
                                                <span>Health</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-whatsapp">
                                            <a href="https://www.whatsapp.com/">
                                                <span>Agriculture</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-linkedin">
                                            <a href="https://www.linkedin.com/">
                                                <span>Charity</span>
                                            </a>
                                        </div>
                                        <div class="social-icon social-twitter">
                                            <a href="https://www.twitter.com/">
                                                <span>Non-profit</span>
                                            </a>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('include.home_footer')
    </div>
    <!-- JavaScript -->
    @include('include.home_js')
</body>

</html>
