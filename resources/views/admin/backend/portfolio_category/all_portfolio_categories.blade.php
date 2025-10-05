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
                                    <h5 class="card-title mb-0">{{ __('All Portfolio Categories') }}</h5>
                                </div>
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="{{ route('add.portfolio.category') }}" type="button" class="btn btn-secondary">
                                        <span class="mdi mdi-plus-circle-outline"></span>
                                        {{ __('Add Portfolio Category') }} 
                                    </a>
                                </div>
                            </div>

                        </div><!-- end card header -->

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive wrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Category Name') }}</th>
                                        <th>{{ __('Slug') }}</th>
                                        <th style="width: 120px">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->slug }}</td>                                            

                                            <td>
                                                <!-- Edit Button -->
                                                <a href="{{ route('edit.portfolio.category', $item->id) }}" class="btn btn-success btn-sm" title="{{ __('Edit') }}">
                                                    <span class="mdi mdi-pencil"></span>
                                                </a>

                                                <!-- Delete Button -->
                                                <a href="{{ route('delete.portfolio.category', $item->id) }}" class="btn btn-danger btn-sm" id="delete" title="{{ __('Delete') }}">
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
