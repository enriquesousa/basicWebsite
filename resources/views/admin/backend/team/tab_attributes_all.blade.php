@php
    $attributes = App\Models\Attribute::where('team_id', $team->id)->latest()->get();
@endphp

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="card-title mb-0">{{ __('All Attributes') }}</h5>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4 text-end">
                        {{-- <a href="{{ route('add.team') }}" class="btn btn-secondary">
                            <span class="mdi mdi-plus-circle-outline"></span>
                            {{ __('Add') }}
                        </a> --}}
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-attribute">
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
                        @foreach ($attributes as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ Str::limit(@$item->description, 70) }}</td>

                                <!-- Action Buttons -->
                                <td>
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModalAttribute" id="{{ $item->id }}" onclick="attributeEdit(this.id)">
                                        <span class="mdi mdi-pencil"></span>
                                    </button>

                                    <!-- Delete Button -->
                                    <a href="{{ route('delete.attribute', $item->id) }}" class="btn btn-danger btn-sm" id="delete" title="{{ __('Delete') }}">
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
<div class="modal fade" id="modal-attribute" tabindex="-1" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="standard-modalLabel">{{ __('Add Attribute') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('store.attribute') }}" method="post">
                @csrf

                <input type="hidden" name="id" value="{{ $team->id }}">

                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="input1" class="form-label">{{ __('Attribute Description') }}</label>
                        <input type="text" name="description" class="form-control" id="input2">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- Ventana Modal Editar Capability -->
<div class="modal fade" id="editModalAttribute" tabindex="-1" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="standard-modalLabel">{{ __('Edit Attribute') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('update.attribute') }}" method="post">
                @csrf

                <input type="hidden" name="attribute_id" id="attribute_id">

                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="input1" class="form-label">{{ __('Description') }}</label>
                        <input type="text" name="description" class="form-control" id="attribute_description"> 
                    </div> 
                </div>

                <div class="modal-footer"> 
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </div>
            </form>

        </div>
    </div>
</div>