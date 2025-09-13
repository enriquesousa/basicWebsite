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
                            <h4 class="editable-title" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $connect->id }}">{{ $connect->title }}</h4>
                        </div>
                        <div class="lonyo-process-data">
                            <p class="editable-description" contenteditable="{{ auth()->check() ? 'true' : 'false' }}" data-id="{{ $connect->id }}">{{ $connect->description }}</p>
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

{{-- CSRF Token  --}}
<meta name="csrf-token" content="{{ csrf_token() }}" >

<script>

    document.addEventListener("DOMContentLoaded", function(){

        //  Ahora hacemos a identificación por clase porque estamos en una lista.

        // Función para guardar los cambios en la base de datos
        function saveChanges(element) {

            let connectId = element.dataset.id;
            // title y description son los nombres con los cuales pasamos los datos al controlador (El controller los recoge con el request)
            let field = element.classList.contains("editable-title") ? "title" : "description";
            let newValue = element.innerText.trim();

            // llamar nuestro controlador
            fetch(`/update-editable-connect/${connectId}`,{
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