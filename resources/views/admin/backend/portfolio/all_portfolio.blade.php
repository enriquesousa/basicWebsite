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
                                    <h5 class="card-title mb-0">{{ __('All Portfolio') }}</h5>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('add.portfolio') }}" type="button" class="btn btn-secondary">
                                        <span class="mdi mdi-plus-circle-outline"></span>
                                        {{ __('Add Portfolio') }} 
                                    </a>
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive wrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Image') }}</th>
                                        <th>{{ __('Title') }}</th>
                                        <th>{{ __('Category') }}</th>
                                        <th>{{ __('Description') }}</th>
                                        <th>{{ __('Updated At') }}</th>
                                        <th style="width: 120px">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($portfolio as $key => $item)
                                        <tr>

                                            <!-- Counter -->
                                            <td>{{ $key + 1 }}</td>

                                            <!-- Image -->
                                            <td>
                                                <img src="{{ !empty($item->image) ? asset($item->image) : asset('upload/no_image.jpg') }}" style="width:60px; height:60px;">
                                            </td>

                                            <!-- Title -->
                                            <td>{{ $item->title }}</td>

                                            <!-- Category -->
                                            <td>{{ $item->category->name }}</td>

                                            <!-- Description es (Esto es solo en backend, en frontend voy a desplegar la description es o en dependencia del idioma ) -->
                                            <td>{!! Str::limit($item->description_es, 70)  !!}</td>

                                            <!-- Updated At -->
                                            <td>{{ $item->updated_at->diffForHumans() }}</td>

                                            <td>
                                                <!-- Edit Button -->
                                                <a href="{{ route('edit.portfolio', $item->id) }}" class="btn btn-success btn-sm" title="{{ __('Edit') }}">
                                                    <span class="mdi mdi-pencil"></span>
                                                </a>
                                                <!-- Delete Button -->
                                                <a href="{{ route('delete.review', $item->id) }}" class="btn btn-danger btn-sm" id="delete" title="{{ __('Delete') }}">
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
