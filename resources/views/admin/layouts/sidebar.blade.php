<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Interface</div>
                <!-- Starter starts -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#starter"
                    aria-expanded="false" aria-controls="starter">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Starter
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="starter" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/starter/page1') }}">Page 1</a>
                        <a class="nav-link" href="{{ url('/admin/starter/page2') }}">Page 2</a>
                        <a class="nav-link" href="{{ url('/admin/starter/page3') }}">Page 3</a>
                    </nav>
                </div>
                <!-- Starter ends -->

                <!-- Routing -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#routing"
                    aria-expanded="false" aria-controls="routing">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Routing
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="routing" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/routing/view-only') }}">View Only</a>
                        <a class="nav-link" href="{{ url('/admin/routing/pass-data-view') }}">Pass Data View</a>
                        <a class="nav-link" href="{{ url('/admin/routing/route-para/tomato/green') }}">Route Para</a>
                        <a class="nav-link" href="{{ url('/admin/routing/dynamic-route-para') }}">Dynamic Route Para</a>
                        <a class="nav-link" href="{{ url('/admin/routing/name-route') }}">Name Route</a>
                        <a class="nav-link" href="{{ url('/admin/routing/test-middleware') }}">Test Middleware</a>
                        <a class="nav-link" href="{{ url('/admin/routing/check-with-regx/kpn/13') }}">Check With Regx</a>
                    </nav>
                </div>
                <!-- Routing ends-->

                <!-- CSRF -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#csrf"
                    aria-expanded="false" aria-controls="csrf">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    CSRF
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="csrf" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/csrf/lecture1') }}">CSRF lecture1</a>
                        <a class="nav-link" href="{{ url('/admin/csrf/lecture2') }}">CSRF lecture2</a>
                        <a class="nav-link" href="{{ url('/admin/csrf/lecture3') }}">CSRF lecture3</a>
                    </nav>
                </div>
                <!-- CSRF ends-->

                <!-- Session -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#session"
                    aria-expanded="false" aria-controls="session">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Session
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="session" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/session/get') }}">Get</a>
                        <a class="nav-link" href="{{ url('/admin/session/put') }}">Put</a>
                        <a class="nav-link" href="{{ url('/admin/session/flash') }}">Flash</a>
                        <a class="nav-link" href="{{ url('/admin/session/delete') }}">Delete</a>
                        <a class="nav-link" href="{{ url('/admin/session/ajax') }}">Ajax</a>
                    </nav>
                </div>
                <!-- Session ends-->

                <!-- Blade Template -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#blade-template"
                    aria-expanded="false" aria-controls="blade-template">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Blade Template
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="blade-template" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/blade-template/component') }}">Component</a>
                        <a class="nav-link" href="{{ url('/admin/blade-template/localization') }}">Localization</a>
                    </nav>
                </div>
                <!-- Blade Template ends-->

                <!-- Project -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#users"
                    aria-expanded="false" aria-controls="users">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Project
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="users" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/users') }}">Users</a>
                        <a class="nav-link" href="{{ url('/admin/portfolios') }}">Portfolios</a>
                    </nav>
                </div>
                <!-- Project ends-->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>