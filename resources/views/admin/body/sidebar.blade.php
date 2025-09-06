<!-- Left Sidebar Start -->
<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            {{-- Logo --}}
            <div class="logo-box">
                <a href="{{ route('home') }}" class="logo logo-light">
                    <span class="logo-sm">
                        {{-- <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-sm" height="22"> --}}
                        <img src="" alt="logo-sm" height="22">
                    </span>
                    <span class="logo-lg">
                        {{-- <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="logo-light" height="24"> --}}
                        <img src="" alt="logo-light" height="24">
                    </span>
                </a>
                <a href="{{ route('home') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        {{-- <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-smdark" height="22"> --}}
                        <img src="" alt="logo-smdark" height="22">
                    </span>
                    <span class="logo-lg">
                        {{-- <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark" height="24"> --}}
                        <img src="{{ asset('backend/assets/images/logoTJweb.png') }}" alt="logo-dark" height="24">
                    </span>
                </a>
            </div>

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <!-- Panel -->
                <li>
                    <a href="{{ route('dashboard') }}" class="tp-link">
                        <i data-feather="home"></i>
                        <span> Panel </span>
                    </a>
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Authentication </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="auth-login.html" class="tp-link">Log In</a>
                            </li>
                            <li>
                                <a href="auth-register.html" class="tp-link">Register</a>
                            </li>
                            <li>
                                <a href="auth-recoverpw.html" class="tp-link">Recover Password</a>
                            </li>
                            <li>
                                <a href="auth-lock-screen.html" class="tp-link">Lock Screen</a>
                            </li>
                            <li>
                                <a href="auth-confirm-mail.html" class="tp-link">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="email-verification.html" class="tp-link">Email Verification</a>
                            </li>
                            <li>
                                <a href="auth-logout.html" class="tp-link">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarError" data-bs-toggle="collapse">
                        <i data-feather="alert-octagon"></i>
                        <span> Error Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarError">
                        <ul class="nav-second-level">
                            <li>
                                <a href="error-404.html" class="tp-link">Error 404</a>
                            </li>
                            <li>
                                <a href="error-500.html" class="tp-link">Error 500</a>
                            </li>
                            <li>
                                <a href="error-503.html" class="tp-link">Error 503</a>
                            </li>
                            <li>
                                <a href="error-429.html" class="tp-link">Error 429</a>
                            </li>
                            <li>
                                <a href="offline-page.html" class="tp-link">Offline Page</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Calendar -->
                <li>
                    <a href="calendar.html" class="tp-link">
                        <i data-feather="calendar"></i>
                        <span> Calendar </span>
                    </a>
                </li>

                <li class="menu-title">General</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i data-feather="users"></i>
                        <span> Authentication </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="auth-login.html" class="tp-link">Log In</a>
                            </li>
                            <li>
                                <a href="auth-register.html" class="tp-link">Register</a>
                            </li>
                            <li>
                                <a href="auth-recoverpw.html" class="tp-link">Recover Password</a>
                            </li>
                            <li>
                                <a href="auth-lock-screen.html" class="tp-link">Lock Screen</a>
                            </li>
                            <li>
                                <a href="auth-confirm-mail.html" class="tp-link">Confirm Mail</a>
                            </li>
                            <li>
                                <a href="email-verification.html" class="tp-link">Email Verification</a>
                            </li>
                            <li>
                                <a href="auth-logout.html" class="tp-link">Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarError" data-bs-toggle="collapse">
                        <i data-feather="alert-octagon"></i>
                        <span> Error Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarError">
                        <ul class="nav-second-level">
                            <li>
                                <a href="error-404.html" class="tp-link">Error 404</a>
                            </li>
                            <li>
                                <a href="error-500.html" class="tp-link">Error 500</a>
                            </li>
                            <li>
                                <a href="error-503.html" class="tp-link">Error 503</a>
                            </li>
                            <li>
                                <a href="error-429.html" class="tp-link">Error 429</a>
                            </li>
                            <li>
                                <a href="offline-page.html" class="tp-link">Offline Page</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>
<!-- Left Sidebar End -->
