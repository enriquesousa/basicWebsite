@extends('home.home_master')
@section('home_content')

    <!-- breadcrumb -->
    <div class="breadcrumb-wrapper light-bg mb-5">
        <div class="container">

            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title pb-0">{{ __('About Us') }}</h1>
                <div class="breadcrumb-menu-wrapper">
                    <div class="breadcrumb-menu-wrap">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">{{ __('Home') }}</a></li>
                                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                                <li aria-current="page">{{ __('About Us') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="lonyo-section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="lonyo-about-us-thumb2 pr-51" data-aos="fade-up" data-aos-duration="700">
                        <img src="{{ asset('frontend/assets/images/about-us/img7.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="lonyo-default-content pl-32" data-aos="fade-up" data-aos-duration="900">
                        <h2>Our mission is to bring financial wellness</h2>
                        <p>We believe financial wellness is key to a better life. Our mission is to empower individuals and
                            businesses with the tools they need to understand, manage, and grow their financial health.</p>
                        <p>With our app, you can easily track spending, set budgets, automate savings, and get real-time
                            insights into your financial world. </p>
                        <p>For businesses, our software offers seamless integration with your existing tools to ensure that
                            your accounting, invoicing, and financial reporting are effortless and organized.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

    <section class="lonyo-section-padding3 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="lonyo-default-content pr-50 feature-wrap">
                        <h2>Our core values ​​serve as our driving force</h2>
                        <p class="max-w616">Our core values ​​are at the core of everything we do. Ensuring the integrity,
                            security and privacy of your data. Innovation, providing cutting-edge tools to simplify
                            financial management. </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="lonyo-about-us-feature-wrap one" data-aos="fade-up" data-aos-duration="500">
                        <div class="lonyo-about-us-feature-icon">
                            <img src="assets/images/about-us/icon1.svg" alt="">
                        </div>
                        <div class="lonyo-about-us-feature-content">
                            <h4>User-Centric Innovation</h4>
                            <p>We design our apps and software with our users in mind, constantly evolving to meet their
                                financial needs and solutions.</p>
                        </div>
                    </div>
                    <div class="lonyo-about-us-feature-wrap two" data-aos="fade-up" data-aos-duration="700">
                        <div class="lonyo-about-us-feature-icon">
                            <img src="assets/images/about-us/icon2.svg" alt="">
                        </div>
                        <div class="lonyo-about-us-feature-content">
                            <h4>Transparency</h4>
                            <p>We believe in clear communication and full transparency in all our practices, providing users
                                with accurate financial insights.</p>
                        </div>
                    </div>
                    <div class="lonyo-about-us-feature-wrap three" data-aos="fade-up" data-aos-duration="900">
                        <div class="lonyo-about-us-feature-icon">
                            <img src="assets/images/about-us/icon3.svg" alt="">
                        </div>
                        <div class="lonyo-about-us-feature-content">
                            <h4>Integrity & Trust</h4>
                            <p>We build lasting relationships with our users by consistently delivering reliable, ethical,
                                and also trustworthy services.</p>
                        </div>
                    </div>
                    <div class="lonyo-about-us-feature-wrap mb-0 four" data-aos="fade-up" data-aos-duration="1100">
                        <div class="lonyo-about-us-feature-icon">
                            <img src="assets/images/about-us/icon4.svg" alt="">
                        </div>
                        <div class="lonyo-about-us-feature-content">
                            <h4>Security You Can Trust</h4>
                            <p>Your financial data is protected with top-level encryption and security protocols to ensure
                                your information is always secure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lonyo-feature-shape shape2"></div>
    </section>
    <!-- end feature -->

    <!-- Section team -->
    <div class="lonyo-section-padding10 team-section mb-5">
        <div class="shape">
            <img src="{{ asset('frontend/assets/images/about-us/shape1.svg') }}" alt="">
        </div>
        <div class="container">
            <div class="lonyo-section-title center max-width-750">
                <h2>{{ __('We always believe in the strength of our team') }}</h2>
            </div>

            @php
                $team = App\Models\Team::latest()->get();
            @endphp
            <div class="row">
                @foreach ($team as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="lonyo-team-wrap" data-aos="fade-up" data-aos-duration="500">
                            <div class="lonyo-team-thumb">
                                <a href="single-team.html"><img src="{{ asset($item->image) }}" alt=""></a>
                            </div>
                            <div class="lonyo-team-content">
                                <a href="single-team.html">
                                    <h6>{{ $item->name }}</h6>
                                </a>
                                <p>{{ $item->position }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- end team -->

    <!-- Section faq -->
    @include('home.home_layout.faq')

    <!-- Section mobile app -->
    @include('home.home_layout.mobile')

    <section class="lonyo-cta-section bg-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="lonyo-cta-thumb" data-aos="fade-up" data-aos-duration="500">
                        <img src="assets/images/v1/cta-thumb.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lonyo-default-content lonyo-cta-wrap" data-aos="fade-up" data-aos-duration="700">
                        <h2>Start a new level of money management</h2>
                        <p>Our finance apps and software are powerful tools for managing personal or business finances,
                            helping users stay organized, track financial health, and make informed decisions.</p>
                        <div class="lonyo-cta-info mt-50" data-aos="fade-up" data-aos-duration="900">
                            <ul>
                                <li>
                                    <a href="https://www.apple.com/app-store/"><img src="assets/images/v1/app-store.svg"
                                            alt=""></a>
                                </li>
                                <li>
                                    <a href="https://playstore.com/"><img src="assets/images/v1/play-store.svg"
                                            alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cta -->

@endsection
