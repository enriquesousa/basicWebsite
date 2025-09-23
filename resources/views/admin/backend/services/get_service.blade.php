@extends('admin.admin_master')
@section('admin')

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    {{-- Ya lo puse en el master --}}

    <div class="content">

        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('Edit Services') }}</h4>
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
                                                            <h4 class="card-title mb-0">{{ __('Edit Services') }}</h4>
                                                        </div><!--end col-->
                                                    </div>
                                                </div>

                                                <form action="{{ route('update.page.services') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $service->id }}">

                                                    <div class="card-body">

                                                        <!-- Title -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Title') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="text" name="title" value="{{ $service->title }}">
                                                            </div>
                                                        </div>

                                                        <!-- Description -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Description') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <textarea name="description" class="form-control">{{ $service->description }}</textarea>
                                                            </div>
                                                        </div>

                                                        <!-- Image and show image -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Service Image') }} <small>(526x550)</small></label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="file" name="image" id="image">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label"> </label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <img id="showImage" src="{{ !empty($service->image) ? asset($service->image) : asset('upload/no_image.jpg') }}" class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">
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
