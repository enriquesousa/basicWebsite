@php
    $capabilities = App\Models\Capability::where('team_id', $team->id)->latest()->get();
@endphp

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="card-title mb-0">{{ __('All Capabilities') }}</h5>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4 text-end">
                        {{-- <a href="{{ route('add.team') }}" class="btn btn-secondary">
                            <span class="mdi mdi-plus-circle-outline"></span>
                            {{ __('Add') }}
                        </a> --}}
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#standard-modal">
                            <span class="mdi mdi-plus-circle-outline"></span>
                            {{ __('Add') }} 
                        </button>
                    </div>
                </div>
            </div><!-- end card header -->

            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive table-responsive wrap">
                    <thead>
                        <tr>
                            <th style="width: 5%">#</th>
                            <th>{{ __('Description') }}</th>
                            <th style="width: 10%">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($capabilities as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ Str::limit(@$item->description, 70) }}</td>

                                <!-- Action Buttons -->
                                <td>
                                    <!-- Edit Button -->
                                    <a href="{{ route('edit.team', $item->id) }}" class="btn btn-success btn-sm" title="{{ __('Edit') }}">
                                        <span class="mdi mdi-pencil"></span>
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

<!-- Ventana Modal Agregar Capability -->
<div class="modal fade" id="standard-modal" tabindex="-1" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="standard-modalLabel">{{ __('Add Capability') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('store.capability') }}" method="post">
                @csrf

                <input type="hidden" name="id" value="{{ $team->id }}">

                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="input1" class="form-label">{{ __('Capability Description') }}</label>
                        <input type="text" name="description" class="form-control" id="input1">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                </div>

            </form>

        </div>
    </div>
</div>