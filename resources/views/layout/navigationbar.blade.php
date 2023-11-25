<nav class="navbar navbar-expand-lg fixed-top px-5">
    <div class="container-fluid">
        <a class="navbar-brand me-auto " href="{{ route('index') }}">Developer Asif</a>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 active" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 " href="{{ route('about') }}">About Me</a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 " href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-lg-2 " href="{{ route('contact') }}">Contract</a>
                    </li>

                </ul>

            </div>
        </div>
        <a href="#" class="login-button">login</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
