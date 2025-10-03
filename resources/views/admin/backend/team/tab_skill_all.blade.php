@php
    $skills = App\Models\Skill::where('team_id', $team->id)->latest()->get();
@endphp

<div class="row">
    <div class="col-12">
        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="card-title mb-0">{{ __('All Skills') }}</h5>
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modal-skill">
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
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Percentage') }}</th>
                            <th style="width: 10%">{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->percentage }}%</td>

                                <!-- Action Buttons -->
                                <td>
                                    <!-- Edit Button -->
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#editModalSkill" id="{{ $item->id }}" onclick="skillEdit(this.id)">
                                        <span class="mdi mdi-pencil"></span>
                                    </button>

                                    <!-- Delete Button -->
                                    <a href="{{ route('delete.skill', $item->id) }}" class="btn btn-danger btn-sm" id="delete" title="{{ __('Delete') }}">
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
<div class="modal fade" id="modal-skill" tabindex="-1" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="standard-modalLabel">{{ __('Add Skill') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('store.skill') }}" method="post">
                @csrf

                <input type="hidden" name="id" value="{{ $team->id }}">

                <div class="modal-body">
                    <!-- name -->
                    <div class="form-group col-md-12">
                        <label for="input1" class="form-label">{{ __('Name') }}</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <!-- percentage -->
                    <div class="form-group col-md-12 mt-2">
                        <label for="input3" class="form-label">{{ __('Percentage') }} (%)</label>
                        <input type="number" name="percentage" class="form-control" id="input3">
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
<div class="modal fade" id="editModalSkill" tabindex="-1" aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="standard-modalLabel">{{ __('Edit Skill') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('update.skill') }}" method="post">
                @csrf

                <input type="hidden" name="skill_id" id="skill_id">

                <div class="modal-body">
                    <div class="form-group col-md-12">
                        <label for="skill_name" class="form-label">{{ __('Name') }}</label>
                        <input type="text" name="name" class="form-control" id="skill_name"> 
                    </div>

                    <div class="form-group col-md-12">
                        <label for="skill_percentage" class="form-label">{{ __('Percentage') }} (%)</label>
                        <input type="number" name="percentage" class="form-control" id="skill_percentage"> 
                    </div>
                </div>

                <div class="modal-footer"> 
                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                </div>
            </form>

        </div>
    </div>
</div>