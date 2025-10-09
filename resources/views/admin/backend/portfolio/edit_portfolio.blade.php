@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('Edit Portfolio') }}</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="tab-pane pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                                <div class="row">

                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="card border mb-0">

                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h4 class="card-title mb-0">{{ __('Edit Portfolio') }}</h4>
                                                        </div><!--end col-->
                                                    </div>
                                                </div>

                                                <form action="{{ route('update.portfolio') }}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $portfolio->id }}">

                                                    <div class="card-body">

                                                        <!-- Title -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Title') }}&nbsp;<span class="text-danger">*</span></label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ $portfolio->title }}">
                                                                @error('title')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!-- Seleccionar Categoría -->
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group w-100">
                                                                    <label class="form-label" for="formBasic">{{ __('Select Category') }}: &nbsp;<span class="text-danger">*</span></label>
                                                                    <select name="category_id" class="form-control form-select @error('category_id') is-invalid @enderror">
                                                                        <option value="">{{ __('Select Category') }}</option>
                                                                        @foreach ($categories as $item)
                                                                            <option @selected($item->id == $portfolio->category_id) value="{{ $item->id }}">{{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('category_id')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <!-- Client -->
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group w-100">
                                                                    <label class="form-label" for="formBasic">{{ __('Client') }}: &nbsp;<span class="text-danger">*</span></label>
                                                                    <input type="text" name="client" class="form-control @error('client') is-invalid @enderror" value="{{ $portfolio->client }}">
                                                                    @error('client')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                        <div class="row">
                                                            <!-- Services -->
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group w-100">
                                                                    <label class="form-label" for="formBasic">{{ __('Services') }}: &nbsp;<span class="text-danger">*</span></label>
                                                                    <input type="text" name="services" class="form-control @error('services') is-invalid @enderror" value="{{ $portfolio->services }}">
                                                                    @error('services')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
    
                                                            <!-- Website -->
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group w-100">
                                                                    <label class="form-label" for="formBasic">{{ __('Website') }}: &nbsp;<span class="text-danger">*</span></label>
                                                                    <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ $portfolio->website }}">
                                                                    @error('website')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card">

                                                            <div class="card-header">
                                                                <h5 class="card-title mb-0">{{ __('Description') }}</h5>
                                                            </div><!-- end card header -->

                                                            <div class="card-body">
                                                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                                {{ __('Description Spanish') }}
                                                                            </button>
                                                                        </h2>
                                                                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body">

                                                                                <!-- Description Spanish -->
                                                                                <div class="form-group mb-3 row">
                                                                                    <label class="form-label">{{ __('Description Spanish') }}</label>
                                                                                    <div class="col-lg-12 col-xl-12">
                                                                                        <textarea name="description_es" id="description_es" style="display: none;"></textarea>
                                                                                        <div name="description_es" id="quill-editor" style="height: 600px;">
                                                                                            <p>{!! $portfolio->description_es !!}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                                {{ __('Description English') }}
                                                                            </button>
                                                                        </h2>
                                                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body">

                                                                                <!-- Description English -->
                                                                                <div class="form-group mb-3 row">
                                                                                    <label class="form-label">{{ __('Description English') }}</label>
                                                                                    <div class="col-lg-12 col-xl-12">
                                                                                        <textarea name="description_en" id="description_en" style="display: none;"></textarea>
                                                                                        <div name="description_en" id="quill-editor2" style="height: 600px;">
                                                                                            <p>{!! $portfolio->description_en !!}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    {{-- <div class="accordion-item">
                                                                        <h2 class="accordion-header">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                                                Accordion Item #3
                                                                            </button>
                                                                        </h2>
                                                                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                                                        </div>
                                                                    </div> --}}

                                                                </div>

                                                            </div> <!-- end card body -->

                                                        </div><!-- end card -->

                                                        

                                                        

                                                        <!-- Image and show image -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Image') }}&nbsp;(746x550)</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" value="{{ $portfolio->image }}">
                                                                @error('image')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label"> </label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <img id="showImage" src="{{ asset($portfolio->image) }}" class="avatar-xxl img-thumbnail float-start" alt="image profile" style="height: 225px; width: 373px;">
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>

                                                    </div><!--end card-body-->
                                                </form>


                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div> <!-- end education -->


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- JS Script Editor Quill para manejar dos editores Quill de texto y mandar el campo description al request -->
    <script>
        document.querySelector('form').onsubmit = function() {

            var description_es = document.querySelector('#description_es');
            description_es.value = quill.root.innerHTML;  

            var description_en = document.querySelector('#description_en');
            description_en.value = quill2.root.innerHTML;  

        };
    </script>

    <!-- Scrip para manejar la imagen -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })
    </script>

@endsection
