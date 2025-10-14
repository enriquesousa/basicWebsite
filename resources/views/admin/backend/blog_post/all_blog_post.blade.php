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
                                    <h5 class="card-title mb-0">{{ __('All Blog Posts') }}</h5>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('add.blog.post') }}" type="button" class="btn btn-secondary">
                                        <span class="mdi mdi-plus-circle-outline"></span>
                                        {{ __('Add Blog Post') }} 
                                    </a>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive wrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="text-align: center; vertical-align: middle;">{{ __('Image') }}</th>
                                        <th style="text-align: center; vertical-align: middle;">{{ __('Title') }}</th>
                                        <th style="text-align: center; vertical-align: middle;">{{ __('Category') }}</th>
                                        <th style="text-align: center; vertical-align: middle;">{{ __('Description') }}</th>
                                        <th style="text-align: center; vertical-align: middle;">{{ __('Updated At') }}</th>
                                        <th style="width: 120px; text-align: center; vertical-align: middle;">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogPosts as $key => $item)
                                        <tr>

                                            <!-- Counter -->
                                            <td>{{ $key + 1 }}</td>

                                            <!-- Image -->
                                            <td>
                                                <img src="{{ !empty($item->image) ? asset($item->image) : asset('upload/no_image.jpg') }}" style="width:60px; height:60px;">
                                            </td>

                                            <!-- Title -->
                                            <td style="text-align: center; vertical-align: middle;">{{ $item->post_title }}</td>

                                            <!-- Category -->
                                            <td style="text-align: center; vertical-align: middle;">{{ $item->category->category_name }}</td>

                                            <!-- Description -->
                                            <td style="text-align: center; vertical-align: middle;">
                                                {{ Str::limit(strip_tags($item->long_description), 35, '...') }}
                                            </td>

                                            <!-- Updated At -->
                                            <td style="text-align: center; vertical-align: middle;">{{ $item->updated_at->diffForHumans() }}</td>

                                            <td style="text-align: center; vertical-align: middle;">
                                                <!-- Edit Button -->
                                                <a href="{{ route('edit.portfolio', $item->id) }}" class="btn btn-success btn-sm" title="{{ __('Edit') }}">
                                                    <span class="mdi mdi-pencil"></span>
                                                </a>
                                                <!-- Delete Button -->
                                                <a href="{{ route('delete.portfolio', $item->id) }}" class="btn btn-danger btn-sm" id="delete" title="{{ __('Delete') }}">
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

@endsection
