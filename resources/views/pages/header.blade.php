<header>
        <a href="../"><img src="/img/Rolling.svg" alt="Logo"></a>
        <nav>
            <ul class="nav__links">
                <li><a href="pages/services.php">Services</a></li>
                <li><a href="pages/projects.php">Projects</a></li>
                <li><a href="pages/about.php">About</a></li>
            </ul>
        </nav>
        @auth("web")
            <a class="btn-login" href="{{route("logout")}}">Sign in</a>
        @endauth
        @guest("web")
            <a class="btn-reg" href="{{route("register")}}">Create</a>
            <a class="btn-login" href="{{route("login")}}">Sign in</a>
        @endguest
</header>
