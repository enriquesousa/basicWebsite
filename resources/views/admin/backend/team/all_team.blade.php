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
                            <h5 class="card-title mb-0">{{ __('All Team') }}</h5>
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
                                                <a href="{{ route('edit.review', $item->id) }}" class="btn btn-success btn-sm" title="{{ __('Edit') }}">{{ __('Edit') }}</a>
                                                <a href="{{ route('delete.review', $item->id) }}" class="btn btn-danger btn-sm" id="delete" title="{{ __('Delete') }}">{{ __('Delete') }}</a>
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
