<!-- tres preguntas y respuestas Wrap -->
@php
    $item = App\Models\ThreeFeatures::find(1);
@endphp
<div class="lonyo-faq-wrap1 mt-50">

    <!-- Real-Time Expense Tracking -->
    <div class="lonyo-faq-item open" data-aos="fade-up" data-aos-duration="500">
        <div class="lonyo-faq-header">
            <h4>{{ $item->question_1 }}:</h4>
            <div class="lonyo-active-icon">
                <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
            </div>
        </div>
        <div class="lonyo-faq-body">
            <p>{{ $item->answer_1 }}</p>
        </div>
    </div>

    <!-- Comprehensive Financial Overview -->
    <div class="lonyo-faq-item" data-aos="fade-up" data-aos-duration="700">
        <div class="lonyo-faq-header">
            <h4>{{ $item->question_2 }}:</h4>
            <div class="lonyo-active-icon">
                <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
            </div>
        </div>
        <div class="lonyo-faq-body">
            <p>{{ $item->answer_2 }}</p>
        </div>
    </div>

    <!-- Stress-Reducing Automation -->
    <div class="lonyo-faq-item" data-aos="fade-up" data-aos-duration="900">
        <div class="lonyo-faq-header">
            <h4>{{ $item->question_3 }}:</h4>
            <div class="lonyo-active-icon">
                <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
            </div>
        </div>
        <div class="lonyo-faq-body">
            <p>{{ $item->answer_3 }}</p>
        </div>
    </div>

</div>
