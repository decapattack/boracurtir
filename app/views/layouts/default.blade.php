<!doctype html>
<html>
    <header>
        {{ HTML::style('css/materialize.min.css') }}
        {{ HTML::style('css/main.css') }}
        <script src="js/jquery.js"></script>
        <script src="js/materialize.min.js"></script>
    </header>
    <body id="body-default">
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Logo</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown - </a></li>
                </ul>
            </div>
        </nav>
        <div align="center">
            @yield('content')
        </div>

    </body>
</html>
