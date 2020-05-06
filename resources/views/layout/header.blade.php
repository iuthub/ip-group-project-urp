<div class="topnav">
    <div class="search-container">
        <div class="search_box">
            <input type="text" class="search_txt" name="" placeholder="Search...">
            <a href="#" class="search_btn">
                <i class="fas fa-search"></i>
            </a>
        </div>
        </div>
    <div class="menu">
        <a id="main" href={{ route('mainPage') }}>Main</a>
        <a id="events" href={{ route('eventPage') }}>Events</a>
        @guest
                <a class="login_btn" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
                <a class="reg_btn" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        @else
            <a id="eregister" href={{ route('registerEvent') }}>Register Event</a>
                <a class="logout_btn" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </div>
</div>
