<!-- Features Section -->
<div class="lonyo-content-shape1">
    <img src="{{ asset('frontend/assets/images/shape/shape1.svg') }}" alt="">
</div>
<div class="lonyo-section-padding2 position-relative">
    <div class="container">
        @php
            $title = App\Models\Title::find(1);
        @endphp
        <div class="lonyo-section-title center">
            {{-- <h2>Features that make spending smarter</h2> --}}
            <h2 id="features-title" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $title->id }}">{{ __($title->features) }}</h2>
        </div>

        <div class="row">

            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="500">
                    <div class="lonyo-service-title">
                        <h4>Expense Tracking</h4>
                        <img src="{{ asset('frontend/assets/images/v1/feature1.svg') }}" alt="">
                    </div>
                    <div class="lonyo-service-data">
                        <p>Allows users to record and categorize daily transactions such as income, expenses, bills,
                            and savings.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="lonyo-feature-shape"></div>
</div>
<!-- end content -->

{{-- CSRF Token  --}}
<meta name="csrf-token" content="{{ csrf_token() }}" >

<script>

    document.addEventListener("DOMContentLoaded", function(){

        const titleElement = document.getElementById("features-title");

        // Función para guardar los cambios en la base de datos
        function saveChanges(element) {

            let featureId = element.dataset.id;
            let field = element.id === "features-title" ? "features" : "";
            let newValue = element.innerText.trim();

            // llamar nuestro controlador
            fetch(`/edit-features/${featureId}`,{
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