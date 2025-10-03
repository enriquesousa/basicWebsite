@extends('admin.admin_master')
@section('admin')

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    {{-- Ya lo puse en el master --}}

    <div class="content">
        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('Edit Details') }}</h4>
                </div>
                
                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <a href="{{ route('all.team') }}" class="btn btn-secondary">
                            <span class="mdi mdi-list-box-outline"></span>
                            {{ __('All Team') }}
                        </a>
                    </ol>
                </div>
            </div>

            <!-- Tabs Menu -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="row">

                                <div class="col-md-4">
                                    <h5 class="card-title mb-0">{{ __('Edit Details Page') }}, <a href="{{ route('team.details', $team->id) }}" target="_blank">{{ __('See page here') }}</a> <small>({{ __('To change the Name, please go click in the edit button of list page') }})</small></h5>
                                </div>

                                <div class="col-md-4 text-center">
                                    <p class="mt-2">
                                        <strong>{{ __('Name') }}:&nbsp;</strong>{{ $team->name }}<br>
                                        <strong>{{ __('Position') }}:&nbsp;</strong>{{ $team->position }}
                                    </p>
                                </div>

                                {{-- <div class="col-md-4 text-center">
                                    <a href="{{ route('add.team') }}" class="btn btn-secondary" id="add-capability-button" style="display: none">
                                        <span class="mdi mdi-plus-circle-outline"></span>
                                        {{ __('Add') }}
                                    </a>
                                </div> --}}

                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                                        <span class="d-block d-sm-none"><i class="mdi mdi-home-account"></i></span>
                                        <span class="d-none d-sm-block">{{ __('Description') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#social_links" role="tab">
                                        <span class="d-block d-sm-none"><i class="mdi mdi-account-outline"></i></span>
                                        <span class="d-none d-sm-block">{{ __('Social Links') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#capabilities" role="tab">
                                        <span class="d-block d-sm-none"><i class="mdi mdi-email-outline"></i></span>
                                        <span class="d-none d-sm-block">{{ __('Capabilities') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#attributes" role="tab">
                                        <span class="d-block d-sm-none"><i class="mdi mdi-email-outline"></i></span>
                                        <span class="d-none d-sm-block">{{ __('Attributes') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#professional_skills" role="tab">
                                        <span class="d-block d-sm-none"><i class="mdi mdi-email-outline"></i></span>
                                        <span class="d-none d-sm-block">{{ __('Professional Skills') }}</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">

                                <!-- Home Tab (Description and Image) -->
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    @include('admin.backend.team.tab_home')
                                </div>

                                <!-- Social Links Tab -->
                                <div class="tab-pane" id="social_links" role="tabpanel">
                                    @include('admin.backend.team.tab_social_links')
                                </div>

                                <!-- Capabilities Tab -->
                                <div class="tab-pane" id="capabilities" role="tabpanel">
                                    @include('admin.backend.team.tab_capabilities_all')
                                </div>

                                <!-- Attributes Tab -->
                                <div class="tab-pane" id="attributes" role="tabpanel">
                                    @include('admin.backend.team.tab_attributes_all')
                                </div>

                                <!-- Professional Skills Tab -->
                                <div class="tab-pane" id="professional_skills" role="tabpanel">
                                    @include('admin.backend.team.tab_skill_all')
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-pane pt-4" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                                <div class="row">

                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="card border mb-0">

                                                <div class="card-header">
                                                    <h5 class="card-title mb-0">{{ __('Edit Description and Image') }}</h5>
                                                </div><!-- end card header -->

                                                <form action="{{ route('update.details.team') }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $teamDetails->id }}">

                                                    <div class="card-body">

                                                        <!-- Name & Position Read Only -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <!-- Name -->
                                                                <div class="form-group mb-3 row">
                                                                    <label class="form-label"><strong>{{ __('Name') }}</strong></label>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <input class="form-control" type="text" name="title" value="{{ $team->name }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <!-- Position -->
                                                                <div class="form-group mb-3 row">
                                                                    <label class="form-label"><strong>{{ __('Position') }}</strong></label>
                                                                    <div class="col-lg-12 col-xl-12">
                                                                        <input class="form-control" type="text" name="position" value="{{ $team->position }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Description -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label"><strong>{{ __('Description') }}</strong></label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <textarea name="description" id="description" style="display: none;"></textarea>
                                                                <div name="description" id="quill-editor" style="height: 200px;">
                                                                    <p>{!! @$teamDetails->description !!}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Image and show image -->
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label">{{ __('About Image') }} <small>(526x550)</small></label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <input class="form-control" type="file" name="image" id="image">
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3 row">
                                                            <label class="form-label"> </label>
                                                            <div class="col-lg-12 col-xl-12">
                                                                <img id="showImage" src="{{ !empty($teamDetails->image) ? asset($teamDetails->image) : asset('upload/no_image.jpg') }}" class="rounded-circle avatar-xxl img-thumbnail float-start" alt="image profile">
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>

                                                    </div><!--end card-body-->
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>


    <!-- JS Script Quill para manejar el editor de texto y mandar el campo description al request -->
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

    {{-- script to call edit capability route trough ajax  --}}
    <script>
        function capabilityEdit(id){
            $.ajax({
                type: 'GET',
                url: '/edit/capability/'+id,
                dataType: 'json',

                success:function(data){
                    //console.log(data);
                    $('#cap').val(data.description);
                    $('#cap_id').val(data.id); 
                    
                }
            })
        }
    </script>

    {{-- script to call edit attribute route trough ajax  --}}
    <script>
        function attributeEdit(id){
            $.ajax({
                type: 'GET',
                url: '/edit/attribute/'+id,
                dataType: 'json',

                success:function(data){
                    //console.log(data);
                    $('#attribute_description').val(data.description);
                    $('#attribute_id').val(data.id); 
                    
                }
            })
        }
    </script>

    {{-- script to call edit skill route trough ajax  --}}
    <script>
        function skillEdit(id){
            $.ajax({
                type: 'GET',
                url: '/edit/skill/'+id,
                dataType: 'json',

                success:function(data){
                    //console.log(data);
                    $('#skill_name').val(data.name);
                    $('#skill_percentage').val(data.percentage);
                    $('#skill_id').val(data.id); 
                    
                }
            })
        }
    </script>
    

@endsection
