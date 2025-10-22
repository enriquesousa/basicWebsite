@extends('admin.admin_master')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content">
        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('Add Blog Post') }}</h4>
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
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h5 class="card-title mb-0">{{ __('Add Blog Post') }}</h5>
                                                        </div>
                                                        <div class="col-md-4">

                                                        </div>
                                                        <div class="col-md-4 text-end">
                                                            <a href="{{ route('all.blog.posts') }}" type="button" class="btn btn-secondary">
                                                                <span class="mdi mdi-arrow-left"></span>
                                                                {{ __('Back') }} 
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <form action="{{ route('store.blog.post') }}" method="post" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="card-body">

                                                        <!-- Post Category and Post Title -->
                                                        <div class="row mb-3">
                                                            <div class="col-md-4">
                                                                <!-- Post Category -->
                                                                <div class="form-group">
                                                                    <label class="form-label">{{ __('Blog Categories') }}</label>
                                                                    <select name="blog_category_id" class="form-control form-select @error('blog_category_id') is-invalid @enderror" id="example-select">
                                                                        <option value="{{ old('category_id') }}">{{ __('Select Category') }}</option>
                                                                        @foreach ($blog_categories as $cat) 
                                                                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('blog_category_id')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div> 
                                                            </div>
                                                            <div class="col-md-8">
                                                                <!-- Post Title -->
                                                                <div class="form-group">
                                                                    <label class="form-label">{{ __('Title') }}&nbsp;<span class="text-danger">*</span></label>
                                                                    <input class="form-control @error('post_title') is-invalid @enderror" type="text" name="post_title" value="{{ old('post_title') }}">
                                                                    @error('post_title')
                                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Post Long Description -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('Post Description') }}</label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <textarea name="long_description" id="description" style="display: none;">
                                                                    {{ old('long_description') }}
                                                                </textarea>
                                                                <div id="quill-editor" style="height: 600px;">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Image and show image -->
                                                        <div class="row mb-3">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label class="form-label">{{ __('Image') }}&nbsp;(746x500)</label>
                                                                    <p>{{ __('For the Blog Post') }}</p>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" value="{{ old('image') }}">
                                                                        @error('image')
                                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label class="form-label"> </label>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <img id="showImage" src="{{ old('image') ? asset(old('image')) : url('upload/no_image.jpg') }}" class="avatar-xxl img-thumbnail float-start" alt="image profile" style="width: 50%; height: 50%;">
                                                                    </div>
                                                                </div>
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
            var description = document.querySelector('#description');
            description.value = quill.root.innerHTML;  
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
