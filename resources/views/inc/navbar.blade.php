<nav>
    <div class='navigation-container'>
        <div id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class='left_side_navbar'>   
                @if (Auth::check())
                    <li>
                        <a href="{{ url('/home') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </li>
                @else
                <li >
                    <a href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </li>
                @endif
                <li >
                    <a href="/OryxNaloga/public/about">About</a>
                </li>
                <li>
                    <a href="/OryxNaloga/public/FAQ">FAQ</a>
                </li>      
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class='right_side_navbar'>
                <!-- Authentication Links -->
                @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class='nav-item dropdown'>
                        <a  href="/OryxNaloga/public/settings">
                            {{ __('Settings') }}
                        </a>
                        <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
