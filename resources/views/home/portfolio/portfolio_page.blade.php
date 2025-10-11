@extends('home.home_master')
@section('home_content')

    <!-- breadcrumb -->
    <div class="breadcrumb-wrapper light-bg">
        <div class="container">

            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title pb-0">{{ __('Portfolio') }}</h1>
                <div class="breadcrumb-menu-wrapper">
                    <div class="breadcrumb-menu-wrap">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">{{ __('Home') }}</a></li>
                                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow">
                                </li>
                                <li aria-current="page">{{ __('Portfolio') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End breadcrumb -->

    <!-- Portfolio Main Content -->
    <div class="lonyo-section-padding9">
        <div class="container">

            <!-- Portfolio Categories -->
            @php
                $categories = App\Models\PortfolioCategory::all();
            @endphp
            <div class="lonyo-portfolio-menu lonyo-section-title" data-aos="fade-up" data-aos-duration="500">
                <ul id="watch-filter-gallery" class="option-set clear-both" data-option-key="filter">
                    <li class="wow fadeInUpX active" data-wow-delay="0.1s" data-option-value="*">{{ __('All projects') }}</li>
                    @foreach ($categories as $category)
                        <li class="wow fadeInUpX" data-wow-delay="0.3s" data-option-value=".{{ $category->slug }}">{{ __($category->name) }}</li>
                    @endforeach
                </ul>
            </div>

            <!-- Portfolio Projects -->
            @php
                $portfolios = App\Models\Portfolio::all();
            @endphp
            <div class="lonyo-portfolio-column" id="lonyo-portfolio-grid">
                @foreach ($portfolios as $portfolio)
                    <div class="collection-grid-item {{ $portfolio->category->slug }}">
                        <div class="lonyo-p-thumb" data-aos="fade-up" data-aos-duration="700">
                            <img class="w100" src="{{ asset($portfolio->image) }}" alt="">
                            <div class="lonyo-p-data-wrap">
                                <div class="lonyo-p-content">
                                    <!-- Portfolio Title -->
                                    <h4>
                                        <form action="{{ route('show.portfolio') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="item_id" value="{{ $portfolio->id }}">
                                            <button type="submit" class="title-btn" style="font-style: bold">{{ Str::limit($portfolio->title, 25) }} </button>
                                        </form>
                                    </h4>
                                    <ul>
                                        <li>{{ __($portfolio->category->name) }}</li>
                                    </ul>
                                </div>
                                <div class="lonyo-p-title-btn">
                                    <form action="{{ route('show.portfolio') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="item_id" value="{{ $portfolio->id }}">
                                        <button type="submit" class="title-btn">{{ __('Learn more') }}</button>
                                        <!-- flecha -->
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.7796 8.53108L11.03 15.2807C10.8893 15.4214 10.6984 15.5005 10.4994 15.5005C10.3004 15.5005 10.1095 15.4214 9.96882 15.2807C9.8281 15.14 9.74904 14.9491 9.74904 14.7501C9.74904 14.5511 9.8281 14.3602 9.96882 14.2195L15.4388 8.75045H0.749958C0.551057 8.75045 0.360302 8.67143 0.219658 8.53079C0.0790134 8.39014 0 8.19939 0 8.00049C0 7.80159 0.0790134 7.61083 0.219658 7.47019C0.360302 7.32954 0.551057 7.25053 0.749958 7.25053H15.4388L9.96882 1.78146C9.8281 1.64074 9.74904 1.44988 9.74904 1.25086C9.74904 1.05185 9.8281 0.860991 9.96882 0.720268C10.1095 0.579545 10.3004 0.500488 10.4994 0.500488C10.6984 0.500488 10.8893 0.579545 11.03 0.720268L17.7796 7.46989C17.8494 7.53954 17.9047 7.62225 17.9424 7.7133C17.9802 7.80434 17.9996 7.90193 17.9996 8.00049C17.9996 8.09904 17.9802 8.19663 17.9424 8.28768C17.9047 8.37872 17.8494 8.46143 17.7796 8.53108Z"
                                                fill="#142D6F" />
                                            <path
                                                d="M17.7796 8.53108L11.03 15.2807C10.8893 15.4214 10.6984 15.5005 10.4994 15.5005C10.3004 15.5005 10.1095 15.4214 9.96882 15.2807C9.8281 15.14 9.74904 14.9491 9.74904 14.7501C9.74904 14.5511 9.8281 14.3602 9.96882 14.2195L15.4388 8.75045H0.749958C0.551057 8.75045 0.360302 8.67143 0.219658 8.53079C0.0790134 8.39014 0 8.19939 0 8.00049C0 7.80159 0.0790134 7.61083 0.219658 7.47019C0.360302 7.32954 0.551057 7.25053 0.749958 7.25053H15.4388L9.96882 1.78146C9.8281 1.64074 9.74904 1.44988 9.74904 1.25086C9.74904 1.05185 9.8281 0.860991 9.96882 0.720268C10.1095 0.579545 10.3004 0.500488 10.4994 0.500488C10.6984 0.500488 10.8893 0.579545 11.03 0.720268L17.7796 7.46989C17.8494 7.53954 17.9047 7.62225 17.9424 7.7133C17.9802 7.80434 17.9996 7.90193 17.9996 8.00049C17.9996 8.09904 17.9802 8.19663 17.9424 8.28768C17.9047 8.37872 17.8494 8.46143 17.7796 8.53108Z"
                                                fill="#142D6F" />
                                        </svg>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- end content -->

    <!-- Separador de contenido -->
    <div class="lonyo-content-shape">
        <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
    </div>

    <!-- App Mobile, con title y description diferentes -->
    <section class="lonyo-cta-section bg-heading">
        <div class="container">
            @php
                $mobile = App\Models\MobileService::find(1);
            @endphp
            <div class="row">
                <div class="col-lg-6">
                    <div class="lonyo-cta-thumb" data-aos="fade-up" data-aos-duration="500">
                        <img src="{{ asset($mobile->image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="lonyo-default-content lonyo-cta-wrap" data-aos="fade-up" data-aos-duration="700">

                        <h2>{{ __($mobile->title) }}</h2>
                        <p>{{ __($mobile->description) }}</p>

                        <!-- App Store y Play Store links -->
                        <div class="lonyo-cta-info mt-50" data-aos="fade-up" data-aos-duration="900">
                            <ul>
                                <li>
                                    <a href="https://www.apple.com/app-store/">
                                        <img src="{{ asset('frontend/assets/images/v1/app-store.svg') }}" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://playstore.com/">
                                        <img src="{{ asset('frontend/assets/images/v1/play-store.svg') }}" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
