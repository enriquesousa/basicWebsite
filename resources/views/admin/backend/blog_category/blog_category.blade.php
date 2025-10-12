@extends('admin.admin_master')
@section('admin')

    <div class="content">
        <!-- Start Content-->
        <div class="container-xxl">
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column"></div>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="card-title mb-0">{{ __('All Blog Categories') }}</h5>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4 text-end">
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#standard-modal">
                                        <span class="mdi mdi-plus-circle-outline"></span>
                                        {{ __('Add Blog Category') }} 
                                    </button>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive wrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="text-align: center; vertical-align: middle;">{{ __('Category Name') }}</th>
                                        <th style="text-align: center; vertical-align: middle;">{{ __('Category Slug') }}</th>
                                        <th style="width: 120px; text-align: center; vertical-align: middle;">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $key => $item)
                                        <tr>

                                            <!-- Counter -->
                                            <td>{{ $key + 1 }}</td>

                                            <!-- Category Name -->
                                            <td style="text-align: center; vertical-align: middle;">{{ $item->category_name }}</td>

                                            <!-- Category Slug -->
                                            <td style="text-align: center; vertical-align: middle;">{{ $item->category_slug }}</td>

                                            <td style="text-align: center; vertical-align: middle;">
                                                <!-- Edit Button -->
                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modal_category_edit" title="{{ __('Edit') }}" id="{{ $item->id }}" onclick="categoryEdit(this.id)">
                                                    <span class="mdi mdi-pencil"></span>
                                                </button>
                                                <!-- Delete Button -->
                                                <a href="{{ route('delete.blog.category', $item->id) }}" class="btn btn-danger btn-sm" id="delete" title="{{ __('Delete') }}">
                                                    <span class="mdi mdi-delete-empty"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ventana Modal Agregar Blog Category -->
    <div class="modal fade" id="standard-modal" tabindex="-1" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="standard-modalLabel">{{ __('Add Blog Category') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('store.blog.category') }}" method="post">
                    @csrf

                    {{-- <input type="hidden" name="id" value="{{ $team->id }}"> --}}

                    <div class="modal-body">
                        <div class="form-group col-md-12">
                            <label for="input1" class="form-label">{{ __('Blog Category Name') }}</label>
                            <input type="text" name="category_name" class="form-control" id="input1">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- Ventana Modal Editar Blog Category -->
    <div class="modal fade" id="modal_category_edit" tabindex="-1" aria-labelledby="standard-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="standard-modalLabel">{{ __('Edit Blog Category') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('update.blog.category') }}" method="post">
                    @csrf

                    <input type="hidden" name="cat_id" id="cat_id">

                    <div class="modal-body">
                        <div class="form-group col-md-12">
                            <label for="input1" class="form-label">{{ __('Blog Category Name') }}</label>
                            <input type="text" name="category_name" class="form-control" id="cat">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- Script to call edit capability route trough ajax -->
    <script>
        function categoryEdit(id){
            $.ajax({
                type: 'GET',
                url: '/edit/blog/category/'+id,
                dataType: 'json',

                success:function(data){
                //  console.log(data);
                $('#cat').val(data.category_name);
                $('#cat_id').val(data.id);
                }
            })
        }
    </script>

@endsection
