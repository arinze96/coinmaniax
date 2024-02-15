<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
        {{-- <div class="nav-title">
            <img src="{{ asset('assets/home/assets/img/fabicon.png') }}" style="width: 35px; height: 35px" alt="">
        </div> --}}
        <div id="ytWidget2" class="w-60" style="margin-top: 10px">

        </div>
        <script
            src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget2&pageLang=en&widgetTheme=light&autoMode=false"
            type="text/javascript"></script>
    </div>

    <div class="nav-btn">
        <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>

    <div class="nav-links">
        <a href="{{ route('app.home') }}">Home</a>
        <a href="{{ route('about') }}">About us</a>
        <label class="dropdown">
            <div class="dd-button">
                Services
            </div>
            <input type="checkbox" class="dd-input" id="test" style="color: #fff">
            <ul class="dd-menu">
                <li>
                    <a style="text-decoration: none; color: #000" href="{{ route('cryptocurrency') }}">Crypto
                        Investment</a>
                </li>
                <li>
                    <a style="text-decoration: none; color: #000" href="{{ route('loans') }}">Loans</a>
                </li>
                <li>
                    <a style="text-decoration: none; color: #000" href="{{ route('stocks') }}">Stock Trades</a>
                </li>
                <li>
                    <a style="text-decoration: none; color: #000" href="{{ route('project_funding') }}">Project
                        Funding</a>
                </li>
                <li>
                    <a style="text-decoration: none; color: #000" href="{{ route('real_estate') }}">Real Estate</a>
                </li>
                <li>
                    <a style="text-decoration: none; color: #000" href="{{ route('agriculture') }}">Agriculture</a>
                </li>
                <li>
                    <a style="text-decoration: none; color: #000" href="{{ route('retirement') }}">Retirment Plans</a>
                </li>
            </ul>

        </label>
        <a href="{{ route('faq') }}">FAQ's</a>
        <a href="{{ route('user.contact') }}">Contact Us</a>
        <a href="{{ route('user.register') }}">Register</a>
    </div>
</div>
