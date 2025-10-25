@extends('admin.admin_master')
@section('admin')
    
    <div class="content">

        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('User Message Details') }}</h4>
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
                                                            <h4 class="card-title mb-0">{{ __('User Message Details') }}</h4>
                                                        </div><!--end col-->
                                                    </div>
                                                </div>

                                                <form action="">

                                                    <div class="card-body">

                                                        <!-- User Name -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Name') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="text" value="{{ $message->name }}">
                                                            </div>
                                                        </div>

                                                        <!-- User Email -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Email') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="email" value="{{ $message->email }}">
                                                            </div>
                                                        </div>

                                                        <!-- User Message -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('User Message') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <textarea name="description" id="description" style="display: none;"></textarea>
                                                                <div name="description" id="quill-editor" style="height: 200px;">
                                                                    <p>{{ $message->message }}</p>
                                                                </div>
                                                            </div>
                                                        </div>

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


    <!-- JS Script Quill para manejar el editor de texto y mandar el campo description al request -->
    <script>  
        document.querySelector('form').onsubmit = function() {
            var description = document.querySelector('#description');
            description.value = quill.root.innerHTML;  
        };
    </script>

    

@endsection
