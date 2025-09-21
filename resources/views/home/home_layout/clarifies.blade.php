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

                    <div class="lonyo-faq-wrap1 mt-50">

                        <!-- Real-Time Expense Tracking -->
                        <div class="lonyo-faq-item open" data-aos="fade-up" data-aos-duration="500">
                            <div class="lonyo-faq-header">
                                <h4>{{ $clarifie->question_1 }}:</h4>
                                <div class="lonyo-active-icon">
                                    <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                                    <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="lonyo-faq-body">
                                <p>{{ $clarifie->answer_1 }}</p>
                            </div>
                        </div>

                        <!-- Comprehensive Financial Overview -->
                        <div class="lonyo-faq-item" data-aos="fade-up" data-aos-duration="700">
                            <div class="lonyo-faq-header">
                                <h4>{{ $clarifie->question_2 }}:</h4>
                                <div class="lonyo-active-icon">
                                    <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                                    <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="lonyo-faq-body">
                                <p>{{ $clarifie->answer_2 }}</p>
                            </div>
                        </div>

                        <!-- Stress-Reducing Automation -->
                        <div class="lonyo-faq-item" data-aos="fade-up" data-aos-duration="900">
                            <div class="lonyo-faq-header">
                                <h4>{{ $clarifie->question_3 }}:</h4>
                                <div class="lonyo-active-icon">
                                    <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                                    <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
                                </div>
                            </div>
                            <div class="lonyo-faq-body">
                                <p>{{ $clarifie->answer_3 }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end content -->
