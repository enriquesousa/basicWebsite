<!-- Hero Section -->
@php
  $slider = App\Models\Slider::find(1);
@endphp
<div class="lonyo-hero-section light-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 d-flex align-items-center">
                <div class="lonyo-hero-content" data-aos="fade-up" data-aos-duration="700">
                    <h1 class="hero-title" id="slider-title" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $slider->id }}">{{ __($slider->title) }}</h1>
                    <p class="text" id="slider-description" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $slider->id }}">{{ __($slider->description) }}</p>
                    <div class="mt-50" data-aos="fade-up" data-aos-duration="900">
                        <a href="{{ $slider->link }}" class="lonyo-default-btn hero-btn" target="_blank">{{ __('Create a free account') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="lonyo-hero-thumb" data-aos="fade-left" data-aos-duration="700">
                    <img src="{{ asset($slider->image ) }}" alt="">
                    <div class="lonyo-hero-shape">
                        <img src="{{ asset('frontend/assets/images/shape/hero-shape1.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero -->

{{-- CSRF Token  --}}
<meta name="csrf-token" content="{{ csrf_token() }}" >

<script>

    document.addEventListener("DOMContentLoaded", function(){

        const titleElement = document.getElementById("slider-title");
        const descElement = document.getElementById("slider-description");

        function saveChanges(element) {

            let sliderId = element.dataset.id;
            let field = element.id === "slider-title" ? "title" : "description";
            let newValue = element.innerText.trim();

            // llamar nuestro controlador
            fetch(`/edit-slider/${sliderId}`,{
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

    });

</script>
