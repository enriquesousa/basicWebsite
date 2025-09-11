<!-- financial Section -->
<div class="lonyo-section-padding4 position-relative">
    <div class="container">
        <div class="row">

            @php
                $financial = App\Models\Financial::find(1);
            @endphp

            <!-- Image (307x619) -->
            <div class="col-lg-5 order-lg-2">
                <div class="lonyo-content-thumb" data-aos="fade-up" data-aos-duration="700">
                    <img src="{{ asset($financial->image) }}" alt="">
                </div>
            </div>

            <div class="col-lg-7 d-flex align-items-center">
                <div class="lonyo-default-content pr-50" data-aos="fade-right" data-aos-duration="700">
                    <h2>{{ __($financial->title) }}</h2>
                    <p class="data">{{ __($financial->description) }}</p>

                    <div class="mt-50">
                        <ul class="tabs">
                            <li class="">
                            <img src="assets/images/v1/tv.svg" alt="">
                            <h4>{{ __($financial->title_tab1) }}</h4>
                            </li>
                            <li class="active-tab">
                            <img src="assets/images/v1/alerm.svg" alt="">
                            <h4>{{ __($financial->title_tab2) }}</h4>
                            </li>
                        </ul>
                        <ul class="tabs-content">
                            <li style="display: none;">
                                {{ __($financial->description_tab1) }}
                            </li>
                            <li style="display: list-item;">
                                {{ __($financial->description_tab2) }}
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="lonyo-content-shape2"></div>
</div>
<div class="lonyo-content-shape3">
    <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
</div>
<!-- end content -->
