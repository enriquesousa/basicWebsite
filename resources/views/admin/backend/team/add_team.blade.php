@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content">

        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('Add Team') }}</h4>
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
                                                            <h4 class="card-title mb-0">{{ __('Add Team') }}</h4>
                                                        </div><!--end col-->
                                                    </div>
                                                </div>

                                                <form id="myForm" action="{{ route('store.team') }}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="card-body">

                                                        <!-- Name -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Name') }}</label>
                                                            <div class="form-group col-lg-12 col-xl-12">
                                                                <input class="form-control" type="text" name="name">
                                                            </div>
                                                        </div>

                                                        <!-- Position -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Position') }}</label>
                                                            <div class="form-group col-lg-12 col-xl-12">
                                                                <input class="form-control" type="text" name="position">
                                                            </div>
                                                        </div>

                                                        <!-- User Photo -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('User Photo') }} <small>(306x400)</small></label>
                                                            <div class="form-group col-lg-12 col-xl-12">
                                                                <input class="form-control" type="file" name="image" id="image">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label"> </label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">
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

    <!-- Scrip JS para validar el formulario -->
    <script type="text/javascript">
        $(document).ready(function (){

            // Mensajes de Validation traducir dependiendo del idioma
            const currentLocale = "{{ app()->getLocale() }}";
            if(currentLocale == 'es') {
                var name_str = "Por favor ingrese el nombre, el campo es obligatorio";
                var position_str = "Por favor ingrese el cargo, el campo es obligatorio";
                var image_str = "Por favor ingrese una foto, el campo es obligatorio";
            }
            if(currentLocale == 'en') {
                var name_str = "Please enter team member name, this field is required";
                var position_str = "Please enter position, this field is required";
                var image_str = "Please enter photo, this field is required";
            }

            $('#myForm').validate({

                rules: {

                    name: {
                        required : true,
                    },
                    position: {
                        required : true,
                    },
                    image: {
                        required : true,
                    },
                    
                },

                messages :{

                    name: {
                        required : name_str,
                    },
                    position: {
                        required : position_str,
                    }, 
                    image: {
                        required : image_str,
                    }, 

                },

                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },

            });

        });
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
