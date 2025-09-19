<!-- Header -->
<header class="site-header lonyo-header-section light-bg" id="sticky-menu">
    <div class="container">
        <div class="row gx-3 align-items-center justify-content-between">

            <!-- Logo -->
            <div class="col-8 col-sm-auto ">
                <div class="header-logo1 ">
                    <a href="{{ route('home') }}">
                        {{-- <img src="{{ asset('frontend/assets/images/logo/logo-dark.svg') }}" alt="logo"> --}}
                        <img src="{{ asset('backend/assets/images/logoTJweb.png') }}" alt="logo-dark" height="40">
                    </a>
                </div>
            </div>

            <!-- Menu -->
            <div class="col">
                <div class="lonyo-main-menu-item">
                    <nav class="main-menu menu-style1 d-none d-lg-block menu-left">
                        <ul>

                            <!-- Home -->
                            <li>
                                <a href="{{ route('home') }}">{{ __('Home') }}</a>
                            </li>

                            <!-- About -->
                            <li class="menu-item-has-children">
                                <a href="{{ route('about.us') }}">{{ __('About Us') }}</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('our.team') }}">{{ __('Team') }}</a>
                                    </li>
                                    <li>
                                        <a href="">{{ __('Details') }}</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Service -->
                            <li>
                                <a href="contact-us.html">{{ __('Services') }}</a>
                            </li>

                            <!-- Portfolio -->
                            <li>
                                <a href="contact-us.html">{{ __('Portfolio') }}</a>
                            </li>

                            <!-- Blog -->
                            <li>
                                <a href="contact-us.html">{{ __('Blog') }}</a>
                            </li>

                            <!-- Contact -->
                            <li>
                                <a href="contact-us.html">{{ __('Contact') }}</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Button -->
            <div class="col-auto d-flex align-items-center">
                <div class="lonyo-header-info-wraper2">
                    <div class="lonyo-header-info-content">

                        @auth
                            <ul>
                                <li><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
                            </ul>
                        @else
                            <ul>
                                <li><a href="{{ route('login') }}">{{ __('Log in') }}</a></li>
                            </ul>
                        @endauth

                    </div>
                    <a class="lonyo-default-btn lonyo-header-btn" href="conact-us.html">{{ __('Book a demo') }}</a>
                </div>
                <div class="lonyo-header-menu">
                    <nav class="navbar site-navbar justify-content-between">
                        <!-- Brand Logo-->
                        <!-- mobile menu trigger -->
                        <button class="lonyo-menu-toggle d-inline-block d-lg-none">
                            <span></span>
                        </button>
                        <!--/.Mobile Menu Hamburger Ends-->
                    </nav>
                </div>
            </div>

        </div>
    </div>
</header>
