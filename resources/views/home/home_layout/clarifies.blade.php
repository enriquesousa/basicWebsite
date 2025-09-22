<!-- clarifies Section -->
<section class="lonyo-section-padding6">
    <div class="container">
        <div class="row">

            @php
                $clarifie = App\Models\Clarifie::find(1);
            @endphp

            <!-- Image (302x618) -->
            <div class="col-lg-5">
                <div class="lonyo-content-thumb" data-aos="fade-up" data-aos-duration="700">
                    <img src="{{ asset($clarifie->image) }}" alt="">
                </div>
            </div>

            <div class="col-lg-7 d-flex align-items-center">
                <div class="lonyo-default-content pl-50" data-aos="fade-up" data-aos-duration="700">

                    <h2>{{ __($clarifie->title) }}</h2>
                    <p class="data">{{ __($clarifie->description) }}</p>

                    @include('home.home_layout.three_features')

                </div>
            </div>

        </div>
    </div>
</section>
<!-- end content -->
