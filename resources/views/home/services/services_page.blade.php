@extends('home.home_master')
@section('home_content')

    <!-- breadcrumb -->
    <div class="breadcrumb-wrapper light-bg">
        <div class="container">

            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title pb-0">{{ __('Services') }}</h1>
                <div class="breadcrumb-menu-wrapper">
                    <div class="breadcrumb-menu-wrap">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">{{ __('Home') }}</a></li>
                                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                                <li aria-current="page">{{ __('Services') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End breadcrumb -->

    <!-- Sección Principal de Servicios -->
    <section class="lonyo-section-padding7">
        <div class="container">
            @php
                $service = App\Models\Service::find(1);
            @endphp
            <div class="row">
                <div class="col-lg-5">
                    <div class="lonyo-content-thumb2" data-aos="fade-right" data-aos-duration="700">
                        <img src="{{ asset($service->image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="lonyo-default-content pl-50" data-aos="fade-up" data-aos-duration="700">

                        <h2>{{ __($service->title) }}</h2>
                        <p class="data">{{ __($service->description) }}</p>

                        @include('home.home_layout.three_features')
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Características que hacen que gastos sean inteligentes -->
    @include('home.home_layout.features')
    

    <!-- Obtenga todas sus actualizaciones financieras en un solo lugar -->
    @include('home.home_layout.financial')
    

    <!-- Encuentra respuestas a todas las preguntas a continuación -->
    @include('home.home_layout.faq')

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
