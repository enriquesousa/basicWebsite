@extends('admin.admin_master')
@section('admin')

    <div class="content">
        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">

                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">{{ __('All Team') }}</h4>
                </div>

                <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <a href="{{ route('add.team') }}" class="btn btn-secondary">
                            <span class="mdi mdi-plus-circle-outline"></span>
                            {{ __('Add') }}
                        </a>
                    </ol>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ __('Add data for the all team page') }} - <a href="{{ route('our.team') }}" class="btn btn-primary btn-sm" target="_blank">{{ __('See page here') }}</a></h5>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive table-responsive wrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('Photo') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Position') }}</th>
                                        <th style="width: 120px">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($team as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>

                                            <td>
                                                <img src="{{ !empty($item->image) ? asset($item->image) : asset('upload/no_image.jpg') }}" style="width:60px; height:60px;">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->position }}</td>

                                            <td>

                                                <!-- Edit Button -->
                                                <a href="{{ route('edit.team', $item->id) }}" class="btn btn-success btn-sm" title="{{ __('Edit') }}">
                                                    <span class="mdi mdi-pencil"></span>
                                                </a>

                                                <!-- Details Button -->
                                                <a href="{{ route('details.team', $item->id) }}" class="btn btn-info btn-sm" title="{{ __('Details') }}">
                                                    <span class="mdi mdi-eye"></span>
                                                </a>

                                                <!-- Delete Button -->
                                                <a href="{{ route('delete.team', $item->id) }}" class="btn btn-danger btn-sm" id="delete" title="{{ __('Delete') }}">
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
