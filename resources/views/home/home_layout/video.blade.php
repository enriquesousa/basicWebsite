<!-- usability video Section -->
@php
    $video = App\Models\Video::find(1);
@endphp
<div class="lonyo-section-padding bg-heading position-relative sectionn">
    <div class="container">
        <div class="row">

            <!-- Video Image and Play Button -->
            <div class="col-lg-5">
                <div class="lonyo-video-thumb">
                    <img src="{{ asset($video->image) }}" alt="">
                    <a class="play-btn video-init" href="{{ asset($video->youtube) }}">
                        <img src="{{ asset('frontend/assets/images/v1/play-icon.svg') }}" alt="">
                        <div class="waves wave-1"></div>
                        <div class="waves wave-2"></div>
                        <div class="waves wave-3"></div>
                    </a>
                </div>
            </div>

            <!-- Title, Description and Download Button -->
            <div class="col-lg-7 d-flex align-items-center">
                <div class="lonyo-default-content lonyo-video-section pl-50" data-aos="fade-up" data-aos-duration="500">
                    <h2>{{ $video->title }}</h2>
                    <p>{{ $video->description }}</p>
                    <div class="mt-50" data-aos="fade-up" data-aos-duration="700">
                        <a class="lonyo-default-btn video-btn" href="{{ $video->link }}" target="_blank">{{ __('Download the app') }}</a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Sección de las 3 características -->
        <div class="row">

            @php
                $connects = App\Models\Connect::whereIn('id',[1,2,3])->get()->keyBy('id');
            @endphp

            @foreach ($connects as $connect) 
                <div class="col-xl-4 col-md-6">
                    <div class="lonyo-process-wrap" data-aos="fade-up" data-aos-duration="500">
                        <div class="lonyo-process-number">
                            {{-- <img src="{{ asset('frontend/assets/images/v1/n1.svg') }}" alt=""> --}}
                            <img src="{{ asset('frontend/assets/images/v1/n'.$connect->id. '.svg') }}" alt="">
                        </div>
                        <div class="lonyo-process-title">
                            <h4>{{ $connect->title }}</h4>
                        </div>
                        <div class="lonyo-process-data">
                            <p>{{ $connect->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach


            <div class="border-bottom" data-aos="fade-up" data-aos-duration="500"></div>

        </div>

    </div>
</div>
<div class="lonyo-content-shape1">
    <img src="{{ asset('frontend/assets/images/shape/shape3.svg') }}" alt="">
</div>
<!-- end video -->
