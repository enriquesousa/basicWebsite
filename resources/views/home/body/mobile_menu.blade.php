<!-- Mobile Menu -->
<div class="lonyo-menu-wrapper">
    <div class="lonyo-menu-area text-center">
        <div class="lonyo-menu-mobile-top">
            <div class="mobile-logo">
                <a href="{{ route('home') }}">
                    {{-- <img src="{{ asset('frontend/assets/images/logo/logo-dark.svg') }}" alt="logo"> --}}
                    <img src="{{ asset('backend/assets/images/logoTJweb.png') }}" alt="logo-dark" height="30" width="140">
                </a>
            </div>
            <button class="lonyo-menu-toggle mobile">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="lonyo-mobile-menu">
            <ul>

                <!-- Home -->
                <li>
                    <a href="contact-us.html">{{ __('Home') }}</a>
                </li>

                <!-- About -->
                <li class="menu-item-has-children">
                    <a href="#">{{ __('About Us') }}</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="about-us.html">{{ __('Company Profile') }}</a>
                        </li>
                        <li>
                            <a href="pricing.html">{{ __('Team') }}</a>
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
        </div>
        <div class="lonyo-mobile-menu-btn">
            <a class="lonyo-default-btn sm-size" href="contact-us.html" data-text="Get in Touch"><span
                    class="btn-wraper">{{ __('Get in Touch') }}</span></a>
            {{-- <a class="lonyo-default-btn sm-size" href="contact-us.html" data-text="Get in Touch"><span
                    class="btn-wraper">{{ __('Get in Touch') }}</span></a> --}}
        </div>
    </div>
</div>
<!-- End mobile menu -->
