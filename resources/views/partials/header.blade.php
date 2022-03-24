<header>
    <h1>{{ $page_title }}</h1>

    <nav>
        <a href="#">about the author</a>
        @guest
            <a href="{{ route('login') }}">login</a>
            <a href="{{ route('register') }}">register</a>    
        @endguest        
        @auth
            {{ __('hello') }} {{auth()->user()->name}}
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a  href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        @endauth
    </nav>
</header>
