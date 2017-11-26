<header>

    <div class="box">

        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/btech_logo.png') }}" alt="bTech logo">
            </a>
        </div>

        <div class="nav-wrapper">
            <nav class="header-main-nav">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Docs</a></li>
                </ul>
            </nav>

            <nav class="auth-nav">
                <ul>
                    <li><a class="sign-in-btn" href="#">Sign in</a></li>
                    <li><span>or</span></li>
                    <li><a class="blue-small-btn" href="#">Sign up</a></li>
                </ul>
            </nav>
        </div>

        <nav class="header-mob-nav">
            <div class="nav-icon">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div class="mob-nav">
                <ul class="main-mob-nav">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Docs</a></li>
                </ul>
                <ul class="auth-mob-nav">
                    <li><a class="sign-in-btn" href="#">Sign in</a></li>
                    <li><span>or</span></li>
                    <li><a class="blue-small-btn" href="#">Sign up</a></li>
                </ul>
            </div>
        </nav>

    </div>

</header>