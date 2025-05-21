<header class="navbar navbar-expand-lg bg-body navbar-sticky sticky-top z-fixed px-0" data-sticky-element="">
    <div class="container">

        <button type="button" class="navbar-toggler me-3 me-lg-0" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <a class="navbar-brand py-1 py-md-2 py-xl-1 me-2 me-sm-n4 me-md-n5 me-lg-0" href="{{ route('home') }}">
            <span class="d-none d-sm-flex flex-shrink-0 text-primary rtl-flip me-2">
            <img src="" alt="">
            </span>
            Travel Tech
        </a>


        <nav class="offcanvas offcanvas-start" id="navbarNav" tabindex="-1" aria-labelledby="navbarNavLabel">
            <div class="offcanvas-header py-3">
                <h5 class="offcanvas-title" id="navbarNavLabel">Browse Travel Tech</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pt-2 pb-4 py-lg-0 mx-lg-auto">
                <ul class="navbar-nav position-relative">
                    <li class="nav-item py-lg-2 me-lg-n1 me-xl-0">
                        <a class="nav-link rounded-pill" aria-current="page" href="/" role="button"
                            {{--
                            data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false" --}}>Home</a>
                    </li>
                    <li class="nav-item position-static py-lg-2 me-lg-n1 me-xl-0">
                        <a class="nav-link roundee-pill" href="{{ route('destination') }}" role="button"
                            data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Destination</a>
                    </li>
                    <li class="nav-item position-static py-lg-2 me-lg-n1 me-xl-0">
                        <a class="nav-link rounded-pill" href="{{ route('accomodation') }}" role="button"
                            data-bs-toggle="dropdown" data-bs-trigger="hover" aria-expanded="false">Accommodations</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Button group -->
        <div class="d-flex gap-sm-1">

            <!-- Theme switcher (light/dark/auto) -->
            <div class="dropdown">
                <button type="button"
                    class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 animate-scale"
                    data-bs-toggle="dropdown" data-bs-display="dynamic" aria-expanded="false"
                    aria-label="Toggle theme (light)">
                    <span class="theme-icon-active d-flex animate-target">
                        <i class="fi-sun"></i>
                    </span>
                </button>
                <ul class="dropdown-menu start-50 translate-middle-x"
                    style="--fn-dropdown-min-width: 9rem; --fn-dropdown-spacer: .5rem">
                    <li>
                        <button type="button" class="dropdown-item active" data-bs-theme-value="light"
                            aria-pressed="true">
                            <span class="theme-icon d-flex fs-base me-2">
                                <i class="fi-sun"></i>
                            </span>
                            <span class="theme-label">Light</span>
                            <i class="item-active-indicator fi-check ms-auto"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                            <span class="theme-icon d-flex fs-base me-2">
                                <i class="fi-moon"></i>
                            </span>
                            <span class="theme-label">Dark</span>
                            <i class="item-active-indicator fi-check ms-auto"></i>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                            <span class="theme-icon d-flex fs-base me-2">
                                <i class="fi-auto"></i>
                            </span>
                            <span class="theme-label">Auto</span>
                            <i class="item-active-indicator fi-check ms-auto"></i>
                        </button>
                    </li>
                </ul>
            </div>

            @auth
            <!-- Account button -->
            <a class="btn btn-icon btn-outline-secondary fs-lg border-0 animate-shake me-2" href="{{ route('dashboard') }}"
                aria-label="Dashboard">
                <i class="fi-user animate-target"></i>
            </a>
            @endauth
            @guest
                <!-- Add business button  -->
                <a class="btn btn-primary animate-scale rounded-pill" href="{{ route('register') }}">
                    {{-- <i class="fi-arrow fs-lg animate-target ms-n2 me-1 me-sm-2"></i> --}}
                    Sign Up
                </a>
            @endguest
        </div>
    </div>
</header>
