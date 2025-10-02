@extends('home.home_master')
@section('home_content')

    <!-- breadcrumb -->
    <div class="breadcrumb-wrapper light-bg">
        <div class="container">

            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title pb-0">{{ __('Team Details') }}</h1>
                <div class="breadcrumb-menu-wrapper">
                    <div class="breadcrumb-menu-wrap">
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                                <li aria-current="page">{{ __('Team Details') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Main Content -->
    <section class="lonyo-section-padding9">
        <div class="container">

            <!-- Image, Name, Description, and Social Links -->
            <div class="row">

                <!-- Image (526x550) -->
                <div class="col-lg-5">
                    <div class="lonyo-team-d-thumb" data-aos="fade-up" data-aos-duration="700">
                        <img src="{{ asset($details->image) }}" style="width: 526px; height: 550px;" alt="">
                    </div>
                </div>

                <!-- Name, Description, and Social Links -->
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="lonyo-default-content pl-50" data-aos="fade-up" data-aos-duration="900">

                        <h2>{{ $teamMember->name }}</h2>
                        <p>{!! $details->description !!} </p>

                        <!-- Social Links -->
                        <div class="tag-share-social social2 mt-50">
                            <ul>

                                <!-- Facebook -->
                                @if ($details->facebook_status == 1)
                                    <li>
                                        <a href="{{ $details->facebook_url }}" target="_blank">
                                            <iconify-icon icon="logos:facebook" width="25" height="25"></iconify-icon>
                                        </a>
                                    </li>
                                @endif

                                <!-- X -->
                                @if ($details->x_status == 1)
                                    <li>
                                        <a href="{{ $details->x_url }}" target="_blank">
                                            <iconify-icon icon="prime:twitter" width="25" height="25"  style="color: #000"></iconify-icon>
                                        </a>
                                    </li>
                                @endif

                                <!-- Instagram -->
                                @if ($details->instagram_status == 1)
                                    <li>
                                        <a href="{{ $details->instagram_url }}" target="_blank">
                                            <iconify-icon icon="skill-icons:instagram" width="25" height="25"></iconify-icon>
                                        </a>
                                    </li>
                                @endif

                                <!-- Linkedin -->
                                @if ($details->linkedin_status == 1)
                                    <li>
                                        <a href="{{ $details->linkedin_url }}" target="_blank">
                                            <iconify-icon icon="skill-icons:linkedin" width="25" height="25"></iconify-icon>
                                        </a>
                                    </li>
                                @endif

                                <!-- Whatsapp -->
                                @if ($details->whatsapp_status == 1)
                                    <li>
                                        <a href="{{ $details->whatsapp_url }}" target="_blank">
                                            <iconify-icon icon="logos:whatsapp-icon" width="25" height="25"></iconify-icon>
                                        </a>
                                    </li>
                                @endif

                                <!-- Web -->
                                @if ($details->web_status == 1)
                                    <li>
                                        <a href="{{ $details->web_url }}" target="_blank">
                                            <iconify-icon icon="streamline-plump-color:web" width="25" height="25"></iconify-icon>
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">

                <!-- Qualifications -->
                <div class="col-xl-4 col-lg-6">
                    <div class="lonyo-team-d-content" data-aos="fade-up" data-aos-duration="500">
                        <h4>{{ __('Capabilities') }}:</h4>
                        <ul>
                            @foreach ($capabilities as $capability)
                                <li>{{ $capability->description }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Attributes -->
                <div class="col-xl-4 col-lg-6">
                    <div class="lonyo-team-d-content" data-aos="fade-up" data-aos-duration="700">
                        <h4>{{ __('Attributes') }}:</h4>
                        <ul>
                            @foreach ($attributes as $attribute)
                                <li>{{ $attribute->description }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Professional Skills -->
                <div class="col-xl-4 col-lg-6">
                    <div class="lonyo-team-d-content pl-30" data-aos="fade-up" data-aos-duration="900">
                        <h4>Professional Skills:</h4>
                        <div class="lonyo-skill-item">
                            <div class="lonyo-skill-title">
                                <h6>Problem solving</h6>
                            </div>
                            <div class="lonyo-skill-line">
                                <div class="lonyo-skill-bar bar-one"></div>
                            </div>
                        </div>
                        <div class="lonyo-skill-item">
                            <div class="lonyo-skill-title">
                                <h6>Networking Skills:</h6>
                            </div>
                            <div class="lonyo-skill-line2">
                                <div class="lonyo-skill-bar2 bar-two"></div>
                            </div>
                        </div>
                        <div class="lonyo-skill-item">
                            <div class="lonyo-skill-title">
                                <h6>Leadership Skills:</h6>
                            </div>
                            <div class="lonyo-skill-line2">
                                <div class="lonyo-skill-bar2 bar-three"></div>
                            </div>
                        </div>
                        <div class="lonyo-skill-item">
                            <div class="lonyo-skill-title">
                                <h6>Leadership Skills:</h6>
                            </div>
                            <div class="lonyo-skill-line2">
                                <div class="lonyo-skill-bar2 bar-four"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </section>

    <!-- Section Divider -->
    <div class="lonyo-content-shape">
        <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
    </div>

    <!-- App Mobile, con title y description diferentes -->
    @include('home.home_layout.mobile')
    
@endsection
