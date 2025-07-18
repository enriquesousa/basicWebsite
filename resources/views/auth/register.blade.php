<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Regístrate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-white">
    <!-- Begin page -->
    <div class="account-page">
        <div class="container-fluid p-0">
            <div class="row align-items-center g-0">

                {{-- Izquierda --}}
                <div class="col-xl-5">
                    <div class="row">
                        <div class="col-md-7 mx-auto">
                            <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">

                                {{-- Logo --}}
                                <div class="mb-4 p-0">
                                    <a href="index.html" class="auth-logo">
                                        <img src="{{ asset('backend/assets/images/logoTJweb.png') }}" alt="logo-dark" class="mx-auto"
                                            height="28" />
                                    </a>
                                </div>

                                <div class="pt-0">

                                    <form method="POST" action="{{ route('register') }}" class="my-4">
                                        @csrf

                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        {{-- Name --}}
                                        <div class="form-group mb-3">
                                            <label for="name" class="form-label">Nombre</label>
                                            <input class="form-control" type="text" id="name" name="name" :value="old('name')" autofocus autocomplete="name" required placeholder="Entre su nombre">
                                        </div>

                                        {{-- Email --}}
                                        <div class="form-group mb-3">
                                            <label for="emailaddress" class="form-label">Correo Electrónico</label>
                                            <input class="form-control" type="email" id="email" name="email" required :value="old('email')" placeholder="Entra tu correo electrónico">
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        {{-- Password --}}
                                        <div class="form-group mb-3">
                                            <label for="password" class="form-label">Contraseña</label>
                                            <input class="form-control" type="password" required="" id="password" name="password" placeholder="Entra tu contraseña">
                                        </div>

                                        {{-- Confirm Password --}}
                                        <div class="form-group mb-3">
                                            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                            <input class="form-control" type="password" required="" id="password_confirmation" name="password_confirmation" placeholder="Confirma tu contraseña">
                                        </div>

                                        

                                        {{-- Register Button --}}
                                        <div class="form-group mb-0 row">
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary" type="submit"> Regístrate </button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                    {{-- Ya estas registrado, inicia sesión --}}
                                    <div class="text-center text-muted mb-4">
                                        <p class="mb-0">
                                            ¿Ya tienes cuenta? 
                                            <a class='text-primary ms-2 fw-medium' href='{{ route('login') }}'>
                                                Iniciar sesión
                                            </a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Derecha --}}
                <div class="col-xl-7">
                    <div class="account-page-bg p-md-5 p-4">
                        <div class="text-center">
                            <h3 class="text-dark mb-3 pera-title">Iniciar sesión como administrador</h3>
                            <div class="auth-image">
                                <img src="{{ asset('backend/assets/images/authentication.svg') }}" class="mx-auto img-fluid" alt="images">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- END wrapper -->

    <!-- Vendor -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>

    <!-- App js-->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>

</html>
