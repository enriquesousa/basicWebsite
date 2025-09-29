<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-pane pt-0" id="profile_setting" role="tabpanel" aria-labelledby="setting_tab">
                    <div class="row">

                        <div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="card border mb-0">

                                    <div class="card-header">
                                        <h5 class="card-title mb-0">{{ __('Edit Description and Image') }}</h5>
                                    </div><!-- end card header -->

                                    <form action="{{ route('update.details.team') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $teamDetails->id }}">

                                        <div class="card-body">

                                            <!-- Description -->
                                            <div class="form-group mb-3 row">
                                                <label
                                                    class="form-label"><strong>{{ __('Description') }}</strong></label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <textarea name="description" id="description" style="display: none;"></textarea>
                                                    <div name="description" id="quill-editor" style="height: 200px;">
                                                        <p>{!! @$teamDetails->description !!}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Image and show image -->
                                            <div class="form-group mb-3 row">
                                                <label class="form-label">{{ __('About Image') }}
                                                    <small>(526x550)</small></label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <input class="form-control" type="file" name="image"
                                                        id="image">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="form-label"> </label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <img id="showImage"
                                                        src="{{ !empty($teamDetails->image) ? asset($teamDetails->image) : asset('upload/no_image.jpg') }}"
                                                        class="rounded-circle avatar-xxl img-thumbnail float-start"
                                                        alt="image profile">
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>

                                        </div><!--end card-body-->
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
