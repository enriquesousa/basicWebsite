@extends('admin.admin_master')
@section('admin')

    <div class="content">
        <!-- Start Content-->
        <div class="container-xxl">

            <!-- Encabezado y Breadcrumb -->
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('Profile') }}</h4>
                </div>

                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">{{ __('Components') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('Profile') }}</li>
                    </ol>
                </div>
            </div>

            <!-- Contenido -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <!-- Header - Imagen de Perfil y Nombre de Usuario -->
                            <div class="align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="{{ !empty($profileData->photo) ? url('upload/user_images/' . $profileData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">
                                    <div class="overflow-hidden ms-4">
                                        <h4 class="m-0 text-dark fs-20">{{ $profileData->name }}</h4>
                                        <p class="my-1 text-muted fs-16">{{ $profileData->email }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Parte Izquierda y Derecha - Información Personal y Cambiar Contraseña -->
                            <div class="tab-pane pt-4" id="profile_setting" role="tabpanel">
                                <div class="row">
                                    <div class="row">

                                        <!-- Parte Izquierda - Información Personal -->
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="card border mb-0">

                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h4 class="card-title mb-0">{{ __('Personal Information') }}</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    {{-- <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data"> --}}
                                                    <form action="" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                    
                                                        <!-- Nombre -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Name') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="text" name="name" value="{{ $profileData->name }}">
                                                            </div>
                                                        </div>

                                                        <!-- Email -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Email') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="email" name="email" value="{{ $profileData->email }}">
                                                            </div>
                                                        </div>

                                                        <!-- Teléfono -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Phone') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="text" name="phone" value="{{ $profileData->phone }}">
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Dirección -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Address') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <textarea name="address" class="form-control" placeholder="{{ __('Address') }}">{{ $profileData->address }}</textarea>
                                                            </div>
                                                        </div>

                                                        <!-- Seleccionar Imagen de Perfil -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Profile Image') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="file" name="photo" id="image">
                                                            </div>
                                                        </div> 
                                                        
                                                        <!-- Desplegar Imagen de Perfil -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label"> </label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <img id="showImage" src="{{ (!empty($profileData->photo)) ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-xl img-thumbnail float-start" alt="image profile">
                                                            </div>
                                                        </div> 


                                                        <!-- Guardar Cambios -->
                                                        <div class="col-lg-12 col-xl-12">
                                                            <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button> 
                                                        </div>

                                                    </form>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Parte Derecha - Cambiar Contraseña -->
                                        <div class="col-lg-6 col-xl-6">
                                            <div class="card border mb-0">

                                                <!-- Header Cambiar Contraseña -->
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <h4 class="card-title mb-0">{{ __('Change Password') }}</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Contenido Cambiar Contraseña -->
                                                <div class="card-body mb-0">

                                                    {{-- <form action="{{ route('admin.password.update') }}" method="post"> --}}
                                                    <form action="" method="post">    
                                                        @csrf

                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Old Password') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="password" name="old_password" placeholder="{{ __('Old Password') }}">
                                                                 @error('old_password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('New Password') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="new_password" type="password" placeholder="New Password">
                                                                @error('new_password')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Confirm Password') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="password" name="new_password_confirmation" placeholder="{{ __('Confirm Password') }}">
                                                                @error('new_password_confirmation')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-lg-12 col-xl-12">
                                                                <button type="submit" class="btn btn-primary">{{ __('Change Password') }}</button>
                                                            </div>
                                                        </div>

                                                    </form>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>

    <script type="text/javascript">

        // Mostrar imagen seleccionada
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            })
        })

    </script>

@endsection
