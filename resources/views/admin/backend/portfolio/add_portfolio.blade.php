@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('Add Portfolio') }}</h4>
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
                                                            <h4 class="card-title mb-0">{{ __('Add Portfolio') }}</h4>
                                                        </div><!--end col-->
                                                    </div>
                                                </div>

                                                <form action="{{ route('store.portfolio') }}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="card-body">

                                                        <!-- Title -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Title') }}&nbsp;<span class="text-danger">*</span></label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}">
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
                                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
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
                                                                    <input type="text" name="client" class="form-control @error('client') is-invalid @enderror" value="{{ old('client') }}">
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
                                                                    <input type="text" name="services" class="form-control @error('services') is-invalid @enderror" value="{{ old('services') }}">
                                                                    @error('services')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
    
                                                            <!-- Website -->
                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group w-100">
                                                                    <label class="form-label" for="formBasic">{{ __('Website') }}: &nbsp;<span class="text-danger">*</span></label>
                                                                    <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website') }}">
                                                                    @error('website')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Description Spanish -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Description Spanish') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <textarea name="description_es" id="description_es" style="display: none;"></textarea>
                                                                <div name="description_es" id="quill-editor" style="height: 200px;">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Description English -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Description English') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <textarea name="description_en" id="description_en" style="display: none;">{{ old('description_en') }}</textarea>
                                                                <div name="description_en" id="quill-editor2" style="height: 200px;">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Image and show image -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Image') }}&nbsp;(746x550)</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" value="{{ old('image') }}">
                                                                @error('image')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label"> </label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" class="avatar-xxl img-thumbnail float-start" alt="image profile" style="height: 225px; width: 373px;">
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>

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
