@extends('admin.admin_master')
@section('admin')

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    {{-- Ya lo puse en el master --}}

    <div class="content">

        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('Edit Titles') }}</h4>
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
                                                            <h4 class="card-title mb-0">{{ __('Edit Titles of the Sections') }}</h4>
                                                        </div><!--end col-->
                                                    </div>
                                                </div>

                                                <form action="{{ route('update.section.titles') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $titles->id }}">

                                                    <div class="card-body">

                                                        <!-- Title Features -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Title Features') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="text" name="features" value="{{ $titles->features }}">
                                                            </div>
                                                        </div>

                                                        <!-- Title Reviews -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Title Reviews') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="text" name="reviews" value="{{ $titles->reviews }}">
                                                            </div>
                                                        </div>

                                                        <!-- Title Questions and Answers -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Title Questions and Answers') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="text" name="answers" value="{{ $titles->answers }}">
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
