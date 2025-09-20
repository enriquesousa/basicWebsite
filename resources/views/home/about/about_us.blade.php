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

    <!-- About Us Sección Principal. Title, Description and Image -->
    @php
        $about = App\Models\About::find(1);
    @endphp
    <div class="lonyo-section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="lonyo-about-us-thumb2 pr-51" data-aos="fade-up" data-aos-duration="700">
                        <img src="{{ asset($about->image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 d-flex align-items-center">
                    <div class="lonyo-default-content pl-32" data-aos="fade-up" data-aos-duration="900">
                        <h2>{{ __($about->title) }}</h2>
                        <p>{{ __($about->description) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->

    <!-- Section Core Values y User Centric Innovation -->
    <section class="lonyo-section-padding3 position-relative">
        <div class="container">
            <div class="row">

                @php
                    $core = App\Models\Core::find(1);
                @endphp     
                <div class="col-lg-7">
                    <div class="lonyo-default-content pr-50 feature-wrap">
                        <h2>{{ __($core->title) }}</h2>
                        <p class="max-w616">{{ __($core->description) }}</p>
                    </div>
                </div>

                <div class="col-lg-5">

                    @php
                        $centrics = App\Models\Centric::whereIn('id',[1,2,3,4])->get()->keyBy('id');
                    @endphp

                    @foreach ($centrics as $centric) 
                        <div class="lonyo-about-us-feature-wrap one" data-aos="fade-up" data-aos-duration="500">
                            <div class="lonyo-about-us-feature-icon">
                                {{-- <img src="{{ asset('frontend/assets/images/about-us/icon1.svg') }}" alt=""> --}}
                                <img src="{{ asset('frontend/assets/images/about-us/icon'.$centric->id. '.svg') }}" alt="">
                            </div>
                            <div class="lonyo-about-us-feature-content">
                                <h4 class="editable-title" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $centric->id }}">{{ __($centric->title) }}</h4>
                                <p class="editable-description" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $centric->id }}">{{ __($centric->description) }}</p>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="lonyo-about-us-feature-wrap two" data-aos="fade-up" data-aos-duration="700">
                        <div class="lonyo-about-us-feature-icon">
                            <img src="{{ asset('frontend/assets/images/about-us/icon2.svg') }}" alt="">
                        </div>
                        <div class="lonyo-about-us-feature-content">
                            <h4>Transparency</h4>
                            <p>We believe in clear communication and full transparency in all our practices, providing users
                                with accurate financial insights.</p>
                        </div>
                    </div>

                    <div class="lonyo-about-us-feature-wrap three" data-aos="fade-up" data-aos-duration="900">
                        <div class="lonyo-about-us-feature-icon">
                            <img src="{{ asset('frontend/assets/images/about-us/icon3.svg') }}" alt="">
                        </div>
                        <div class="lonyo-about-us-feature-content">
                            <h4>Integrity & Trust</h4>
                            <p>We build lasting relationships with our users by consistently delivering reliable, ethical,
                                and also trustworthy services.</p>
                        </div>
                    </div>
                    
                    <div class="lonyo-about-us-feature-wrap mb-0 four" data-aos="fade-up" data-aos-duration="1100">
                        <div class="lonyo-about-us-feature-icon">
                            <img src="{{ asset('frontend/assets/images/about-us/icon4.svg') }}" alt="">
                        </div>
                        <div class="lonyo-about-us-feature-content">
                            <h4>Security You Can Trust</h4>
                            <p>Your financial data is protected with top-level encryption and security protocols to ensure
                                your information is always secure.</p>
                        </div>
                    </div> --}}

                </div>

            </div>
        </div>
        <div class="lonyo-feature-shape shape2"></div>
    </section>
    <!-- end feature -->

    <!-- Section Team -->
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

{{-- CSRF Token  --}}
<meta name="csrf-token" content="{{ csrf_token() }}" >
{{-- JavaScript para hacer editable la sección de centric --}}
<script>

    document.addEventListener("DOMContentLoaded", function(){

        //  Ahora hacemos a identificación por clase porque estamos en una lista.

        // Función para guardar los cambios en la base de datos
        function saveChanges(element) {

            let centricId = element.dataset.id;
            // title y description son los nombres con los cuales pasamos los datos al controlador (El controller los recoge con el request)
            let field = element.classList.contains("editable-title") ? "title" : "description";
            let newValue = element.innerText.trim();

            // llamar nuestro controlador
            fetch(`/update-editable-centric/${centricId}`,{
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ [field]:newValue })
            })
            .then(response => response.json())
            .then(data => {
                if(data.success) {
                    console.log(`${field} updated successfully`);
                }
            })
            .catch(error => console.error("Error:", error)); 
        }

        // Auto save on Enter Key
        document.addEventListener("keydown", function(e){
            if (e.key === "Enter") {
                e.preventDefault(); // para que no refresque la página
                saveChanges(e.target);
            }
        });

        // Auto save on losing foucs
        document.querySelectorAll(".editable-title, .editable-description").forEach(el => {
            el.addEventListener("blur", function() {
                saveChanges(el);
            });
        });

    });

</script>