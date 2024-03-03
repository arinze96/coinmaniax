<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('include.c_css')
    <style>
        :root {
            --Cyan: hsl(179, 62%, 43%);
            --Light-Cyan: hsl(179, 47%, 52%);
            --Bright-Yellow: hsl(71, 73%, 54%);
            --Light-Bright-Yellow: hsl(71, 73%, 62%);
            --Light-Gray: hsl(204, 43%, 93%);
            --Grayish-Blue: hsl(218, 22%, 67%);
            --border-radius: 6px;
        }
        ul,
        ol {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .main {
            display: flex;
            align-items: center;
            justify-content: center;
            /* min-height: 100vh; */
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #fff;
        }

        .card-wrapper {
            max-width: 90%;
            margin: auto;
            text-align: start;
            overflow: hidden;
            border-radius: calc(var(--border-radius) + 2px);
            box-shadow: 4px 10px 15px hsla(217, 22%, 67%, 0.438);
        }

        @media (min-width: 767px) {
            .card-wrapper {
                max-width: 640px;
            }
        }

        .card-wrapper .card-summary {
            background-color: #fff;
            padding: 30px 25px;
        }

        @media (min-width: 767px) {
            .card-wrapper .card-summary {
                padding: 45px 40px;
            }
        }

        .card-summary h1 {
            color: var(--Cyan);
            margin-bottom: 20px;
        }

        .card-summary h2 {
            color: var(--Bright-Yellow);
            margin-bottom: 25px;
            font-size: 20px;
        }

        @media (min-width: 767px) {
            .card-summary h2 {
                margin-bottom: 10px;
            }
        }

        .card-summary p {
            color: var(--Grayish-Blue);
            line-height: 1.7;
        }

        @media (min-width: 767px) {
            .card-wrapper .card-features {
                display: flex;
            }
        }

        .card-wrapper .card-features>div {
            padding: 30px 24px;
            color: var(--Light-Gray);
        }

        @media (min-width: 767px) {
            .card-wrapper .card-features>div {
                padding: 40px;
                flex: 1;
            }
        }

        .card-features .feature-title {
            margin-bottom: 20px;
            font-size: 22px;
            color: #fff;
        }

        .card-features .subscribtion {
            background-color: var(--Cyan);
        }

        .card-features .why-us {
            background-color: var(--Light-Cyan);
        }

        .subscribtion .pricing-plan p:first-child {
            font-size: 18px;
            margin-bottom: 12px;
        }

        .subscribtion .pricing-plan p:first-child span {
            font-weight: 700;
            font-size: 35px;
            color: #fff;
            margin-right: 15px;
        }

        .subscribtion .btn {
            display: block;
            width: 100%;
            margin-top: 30px;
            padding: 15px;
            text-align: center;
            font-weight: 700;
            font-size: 18px;
            color: #fff;
            background-color: var(--Bright-Yellow);
            border-radius: var(--border-radius);
            transition: 200ms linear;
        }

        .subscribtion .btn:hover {
            background-color: var(--Light-Bright-Yellow);
        }

        .why-us ul li:not(:last-child) {
            margin-bottom: 5px;
        }

       
    </style>
</head>

<body class="app sidebar-mini">
    <div class="switcher-wrapper">
        {{-- @include('include.switcher') --}}
        <div id="global-loader">
            <img src="{{ asset('assets/customer/assets/images/svgs/loader.svg') }}" alt="loader">
        </div>
        <div class="page">
            <div class="page-main">
                @include('include.c_sidebar')
                <div class="app-content main-content">
                    <div class="side-app">
                        @include('include.c_header')
                        <div class="page-header">
                            <div class="page-leftheader">
                                <h4 class="page-title mb-0"></h4>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12" >
                                    <main class="main" style="background-color: #ebeef1">
                                        <div class="card-wrapper">
                                            <div class="card-summary">
                                                <h1>Account Blocked</h1>
                                                <h2>Below is the reason for blocking your account</h2>
                                                {{-- <h2>Below is the reason for disabling your account 30-day, to appeal this decision</h2> --}}
                                                <p>
                                                    {{ $user->block_account_message }}
                                                </p>
                                            </div>
                                            <div class="card-features">
                                                <div class="subscribtion">
                                                    {{-- <h3 class="feature-title">Reinstatement Fee</h3> --}}
                                                    <div class="pricing-plan">
                                                        {{-- <p><span>&dollar;299</span> <br> One-time Payment</p> --}}
                                                        <p>Contact support for more enquires</p>
                                                    </div>
                                                    <a href="mailto:support@coinmaniax.com" class="btn">Email Us</a>
                                                </div>
                                                <div class="why-us">
                                                    <h3 class="feature-title">Why Work With Us at Coinmaniax</h3>
                                                    <ul>
                                                        <li>Financial Solutions</li>
                                                        <li>Accelerated Growth</li>
                                                        <li>Sustainable Investment</li>
                                                        <li>Modern Solutions</li>
                                                        <li>Expert Strategies</li>
                                                        <li>top-tier asset</li>
                                                        <li>certified team</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @include('include.c_footer')
            @include('include.c_script')
</body>

</html>
