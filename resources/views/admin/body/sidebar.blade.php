<!-- Left Sidebar Start -->
<div class="app-sidebar-menu">
    <div class="h-100" data-simplebar>

        <!--- Side Menu -->
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
                <a href="{{ route('home') }}" class="logo logo-dark" target="_blank" rel="noopener noreferrer">
                    <span class="logo-sm">
                        {{-- <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-smdark" height="22"> --}}
                        <img src="" alt="logo-smdark" height="22">
                    </span>
                    <span class="logo-lg">
                        {{-- <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark" height="24"> --}}
                        <img src="{{ asset('backend/assets/images/logoTJweb.png') }}" alt="logo-dark" height="34">
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

                <li class="menu-title">{{ __('Sections') }}</li>

                <!-- Slider (Hero Section tiene una sola imagen) es un solo record -->
                <li>
                    <a href="#slider" data-bs-toggle="collapse">
                        <span class="mdi mdi-presentation"></span>
                        <span> {{ __('Hero') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="slider">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('get.slider') }}" class="tp-link">{{ __('Hero') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Features -->
                <li>
                    <a href="#features" data-bs-toggle="collapse">
                        <span class="mdi mdi-apache-kafka"></span>
                        <span> {{ __('Features') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="features">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.features') }}" class="tp-link">{{ __('All Features') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('add.feature') }}" class="tp-link">{{ __('Add Feature') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Clarifies Section -->
                <li>
                    <a href="#clarifies" data-bs-toggle="collapse">
                        <span class="mdi mdi-view-compact-outline"></span>
                        <span> {{ __('Clarifies') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="clarifies">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('get.clarifies') }}" class="tp-link">{{ __('Clarifies') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Financial Section -->
                <li>
                    <a href="#financial" data-bs-toggle="collapse">
                        <span class="mdi mdi-view-compact-outline"></span>
                        <span> {{ __('Financial') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="financial">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('get.financial') }}" class="tp-link">{{ __('Financial') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Video Section -->
                <li>
                    <a href="#video" data-bs-toggle="collapse">
                        <span class="mdi mdi-youtube"></span>
                        <span> {{ __('Video Section') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="video">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('get.video') }}" class="tp-link">{{ __('Video') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('all.connect') }}" class="tp-link">{{ __('All Connect') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('add.connect') }}" class="tp-link">{{ __('Add Connect') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Reviews -->
                <li>
                    <a href="#reviews" data-bs-toggle="collapse">
                        <span class="mdi mdi-comment-arrow-left-outline"></span>
                        <span> {{ __('Reviews') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="reviews">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.review') }}" class="tp-link">{{ __('All Reviews') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('add.review') }}" class="tp-link">{{ __('Add Review') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Títulos de las secciones features, reviews and answers -->
                <li>
                    <a href="#titles" data-bs-toggle="collapse">
                        <span class="mdi mdi-format-title"></span>
                        <span> {{ __('Titles') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="titles">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('get.section.titles') }}" class="tp-link">{{ __('Titles') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- FAQ Section -->
                <li>
                    <a href="#faq" data-bs-toggle="collapse">
                        <span class="mdi mdi-chat-question-outline"></span>
                        <span> {{ __('FAQ') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="faq">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.faqs') }}" class="tp-link">{{ __('All FAQs') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('add.faqs') }}" class="tp-link">{{ __('Add FAQ') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('get.three.features') }}" class="tp-link">{{ __('Three Features') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Mobile Section -->
                <li>
                    <a href="#mobile" data-bs-toggle="collapse">
                        <span class="mdi mdi-cellphone"></span>
                        <span> {{ __('Mobile App') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="mobile">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('get.mobile') }}" class="tp-link">{{ __('Mobile App') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title">{{ __('Pages') }}</li>

                <!-- Our Team (Nuestro Equipo) -->
                <li>
                    <a href="#our_team" data-bs-toggle="collapse">
                        <span class="mdi mdi-account-group-outline"></span>
                        <span> {{ __('Our Team') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="our_team">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.team') }}" class="tp-link">{{ __('List All') }}</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('all.capabilities') }}" class="tp-link">{{ __('Capabilities') }}</a>
                            </li> --}}
                        </ul>
                    </div>
                </li>

                <!-- About Page -->
                <li>
                    <a href="#about" data-bs-toggle="collapse">
                        <span class="mdi mdi-information-outline"></span>
                        <span> {{ __('About Us') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="about">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('get.about') }}" class="tp-link">{{ __('About Us') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('get.core') }}" class="tp-link">{{ __('Core Values') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('all.centric') }}" class="tp-link">{{ __('All Centrics') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('add.centric') }}" class="tp-link">{{ __('Add Centric') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Pagina de Servicios -->
                <li>
                    <a href="#services" data-bs-toggle="collapse">
                        <span class="mdi mdi-view-compact-outline"></span>
                        <span> {{ __('Services') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="services">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('get.page.services') }}" class="tp-link">{{ __('Services') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('get.page.services.mobile') }}" class="tp-link">{{ __('Service Mobile Banner') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Portfolio -->
                <li>
                    <a href="#portfolio" data-bs-toggle="collapse">
                        <iconify-icon icon="bytesize:portfolio" width="15" height="15"  style="color: #000"></iconify-icon>
                        <span> {{ __('Portfolio') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="portfolio">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.portfolio.categories') }}" class="tp-link">{{ __('Categories') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('all.portfolio') }}" class="tp-link">{{ __('Portfolio') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Blog Categories -->
                <li>
                    <a href="#blog_categories" data-bs-toggle="collapse">
                        <iconify-icon icon="mdi:list-box-outline" width="15" height="15"  style="color: #000"></iconify-icon>
                        <span> {{ __('Blog') }} </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="blog_categories">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.blog.categories') }}" class="tp-link">{{ __('Blog Categories') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('all.blog.posts') }}" class="tp-link">{{ __('Blog Posts') }}</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Blog Categories -->
                <li>
                    <a class="tp-link" href="{{ route('contact.all.message') }}">
                        <iconify-icon icon="streamline-stickies-color:mail" width="15" height="15" style="color: yellow"></iconify-icon>
                        <span> {{ __('User Messages') }} </span>
                    </a>
                </li>



                {{-- <li class="menu-title">General</li> --}}

                {{-- <li>
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
                </li> --}}
                

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
</div>
<!-- Left Sidebar End -->
