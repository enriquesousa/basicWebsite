<!-- faq Section -->
<div class="lonyo-section-padding4">
    <div class="container">
        @php
            $title = App\Models\Title::find(1);
        @endphp
        <div class="lonyo-section-title center">
            {{-- <h2>Find answers to all questions below</h2> --}}
            <h2 id="answers-title" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $title->id }}">{{ __($title->answers) }}</h2>
        </div>
        <div class="lonyo-faq-shape"></div>
        <div class="lonyo-faq-wrap1">
            <div class="lonyo-faq-item item2 open" data-aos="fade-up" data-aos-duration="500">
                <div class="lonyo-faq-header">
                    <h4>Is my financial data safe and secure?</h4>
                    <div class="lonyo-active-icon">
                        <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                        <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
                    </div>
                </div>
                <div class="lonyo-faq-body body2">
                    <p>Yes, this finance apps use bank-level encryption, multi-factor authentication, and other
                        security measures to protect your sensitive information.</p>
                </div>
            </div>
            <div class="lonyo-faq-item item2" data-aos="fade-up" data-aos-duration="700">
                <div class="lonyo-faq-header">
                    <h4>Can I link multiple bank accounts and credit cards?</h4>
                    <div class="lonyo-active-icon">
                        <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                        <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
                    </div>
                </div>
                <div class="lonyo-faq-body body2">
                    <p>Yes, this finance apps use bank-level encryption, multi-factor authentication, and other
                        security measures to protect your sensitive information.</p>
                </div>
            </div>
            <div class="lonyo-faq-item item2" data-aos="fade-up" data-aos-duration="900">
                <div class="lonyo-faq-header">
                    <h4>How does the app help me stick to my budget?</h4>
                    <div class="lonyo-active-icon">
                        <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                        <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
                    </div>
                </div>
                <div class="lonyo-faq-body body2">
                    <p>Yes, this finance apps use bank-level encryption, multi-factor authentication, and other
                        security measures to protect your sensitive information.</p>
                </div>
            </div>
            <div class="lonyo-faq-item item2" data-aos="fade-up" data-aos-duration="1100">
                <div class="lonyo-faq-header">
                    <h4>Can I track my investments with the app?</h4>
                    <div class="lonyo-active-icon">
                        <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                        <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
                    </div>
                </div>
                <div class="lonyo-faq-body body2">
                    <p>Yes, this finance apps use bank-level encryption, multi-factor authentication, and other
                        security measures to protect your sensitive information.</p>
                </div>
            </div>
            <div class="lonyo-faq-item item2" data-aos="fade-up" data-aos-duration="1300">
                <div class="lonyo-faq-header">
                    <h4>Is the app free, or are there subscription fees?</h4>
                    <div class="lonyo-active-icon">
                        <img class="plasicon" src="{{ asset('frontend/assets/images/v1/mynus.svg') }}" alt="">
                        <img class="mynusicon" src="{{ asset('frontend/assets/images/v1/plas.svg') }}" alt="">
                    </div>
                </div>
                <div class="lonyo-faq-body body2">
                    <p>Yes, this finance apps use bank-level encryption, multi-factor authentication, and other
                        security measures to protect your sensitive information.</p>
                </div>
            </div>
        </div>
        <div class="faq-btn" data-aos="fade-up" data-aos-duration="700">
            <a class="lonyo-default-btn faq-btn2" href="faq.html">Can't find your answer</a>
        </div>
    </div>
</div>
<div class="lonyo-content-shape3">
    <img src="{{ asset('frontend/assets/images/shape/shape2.svg') }}" alt="">
</div>
<!-- end faq -->

{{-- CSRF Token  --}}
<meta name="csrf-token" content="{{ csrf_token() }}" >

<script>

    document.addEventListener("DOMContentLoaded", function(){

        const titleElement = document.getElementById("answers-title");

        // Función para guardar los cambios en la base de datos
        function saveChanges(element) {

            let elementsId = element.dataset.id;
            let field = element.id === "answers-title" ? "answers" : "";
            let newValue = element.innerText.trim();

            // llamar nuestro controlador
            fetch(`/edit-answers/${elementsId}`,{
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

        // Auto save on losing focus on title
        titleElement.addEventListener("blur", function () {
            saveChanges(titleElement);
        });
        

    });

</script>