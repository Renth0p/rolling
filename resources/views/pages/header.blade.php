<header>
        <a href="{{route("home")}}"><img src="/img/Rolling.svg" alt="Logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="{{route("service")}}">Services</a></li>
                <li><a href="{{route("projects")}}">Projects</a></li>
                <li><a href="{{route("about")}}">About</a></li>
            </ul>
        </nav>
        @auth("web")
            <a class="btn-login" href="{{route("logout")}}">Log out</a>
        @endauth
        @guest("web")
            <a class="btn-reg" href="{{route("register")}}">Create</a>
            <a class="btn-login" href="{{route("login")}}">Sign in</a>
        @endguest
</header>

