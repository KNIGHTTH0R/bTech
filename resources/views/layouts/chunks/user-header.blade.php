<header>

    <div class="header-search">

        <i class="fi flaticon-search"></i>
        <input type="text" placeholder="Search something...">

    </div>

    <div class="header-profile">
        <span>{{ $authUser->name }}</span>
        <i class="fi flaticon-arrows"></i>
        <div class="profile-nav">
            <ul>
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>

</header>