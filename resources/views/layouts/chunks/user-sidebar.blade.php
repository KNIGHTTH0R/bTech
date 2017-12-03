<aside class="sidebar">

    <div class="logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/btech_white_logo.png') }}" alt="bTech logo">
        </a>
        <div class="user-nav-icon">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>

    <nav class="user-menu">
        <ul>
            <li>
                <a href="{{ route('home') }}" class="active">
                    <i class="fi flaticon-people"></i>
                    My Profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fi flaticon-tool"></i>
                    Courses
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fi flaticon-book"></i>
                    Library
                </a>
            </li>
        </ul>
    </nav>

    <footer>
        <p>bTech is maintained by bStream | 2017</p>
    </footer>

</aside>