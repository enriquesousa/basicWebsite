@php
    $capabilities = App\Models\Capability::where('team_id', $team->id)->latest()->get();
@endphp

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">{{ __('All Capabilities') }}</h5>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive table-responsive wrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('Description') }}</th>
                            <th style="width: 120px">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($capabilities as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ Str::limit(@$item->description, 70) }}</td>

                                <td>
                                    <a href="{{ route('edit.connect', $item->id) }}" class="btn btn-success btn-sm"
                                        title="{{ __('Edit') }}">{{ __('Edit') }}</a>
                                    <a href="{{ route('delete.connect', $item->id) }}" class="btn btn-danger btn-sm"
                                        id="delete" title="{{ __('Delete') }}">{{ __('Delete') }}</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
