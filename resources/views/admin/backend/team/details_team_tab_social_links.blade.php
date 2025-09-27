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
                                        <h5 class="card-title mb-0">{{ __('Edit Social Links') }}</h5>
                                    </div><!-- end card header -->

                                    <form action="{{ route('update.social.links.details.team') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ $teamDetails->id }}">

                                        <div class="card-body">

                                            <!-- Facebook -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Facebook URL -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="logos:facebook" width="25" height="25"></iconify-icon>
                                                            {{ __('Facebook URL') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="facebook_url" value="{{ $teamDetails->facebook_url }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Facebook Select Status -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="grommet-icons:status-good" width="25" height="25"  style="color: #000"></iconify-icon>
                                                            {{ __('Select Facebook Status') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <select class="form-control" name="facebook_status">
                                                                <option value="1" {{ $teamDetails->facebook_status == 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                                                                <option value="0" {{ $teamDetails->facebook_status == 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- X -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- X URL -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="prime:twitter" width="25" height="25"  style="color: #000"></iconify-icon>
                                                            {{ __('X URL') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="x_url" value="{{ $teamDetails->x_url }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Select Status -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="grommet-icons:status-good" width="25" height="25"  style="color: #000"></iconify-icon>
                                                            {{ __('Select X Status') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <select class="form-control" name="x_status">
                                                                <option value="1" {{ $teamDetails->x_status == 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                                                                <option value="0" {{ $teamDetails->x_status == 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Instagram -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Instagram URL -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="skill-icons:instagram" width="25" height="25"></iconify-icon>
                                                            {{ __('Instagram URL') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="instagram_url" value="{{ $teamDetails->instagram_url }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Select Status -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="grommet-icons:status-good" width="25" height="25"  style="color: #000"></iconify-icon>
                                                            {{ __('Select Instagram Status') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <select class="form-control" name="instagram_status">
                                                                <option value="1" {{ $teamDetails->instagram_status == 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                                                                <option value="0" {{ $teamDetails->instagram_status == 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Linkedin -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Linkedin URL -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="skill-icons:linkedin" width="25" height="25"></iconify-icon>
                                                            {{ __('Linkedin URL') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="linkedin_url" value="{{ $teamDetails->linkedin_url }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Select Status -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="grommet-icons:status-good" width="25" height="25"  style="color: #000"></iconify-icon>
                                                            {{ __('Select Linkedin Status') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <select class="form-control" name="linkedin_status">
                                                                <option value="1" {{ $teamDetails->linkedin_status == 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                                                                <option value="0" {{ $teamDetails->linkedin_status == 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Whatsapp -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Whatsapp URL -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="logos:whatsapp-icon" width="25" height="25"></iconify-icon>
                                                            {{ __('Whatsapp URL') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="whatsapp_url" value="{{ $teamDetails->whatsapp_url }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Select Status -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="grommet-icons:status-good" width="25" height="25"  style="color: #000"></iconify-icon>
                                                            {{ __('Select Whatsapp Status') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <select class="form-control" name="whatsapp_status">
                                                                <option value="1" {{ $teamDetails->whatsapp_status == 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                                                                <option value="0" {{ $teamDetails->whatsapp_status == 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Web -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Web URL -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="streamline-plump-color:web" width="25" height="25"></iconify-icon>
                                                            {{ __('Web URL') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="web_url" value="{{ $teamDetails->web_url }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- Select Status -->
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">
                                                            <iconify-icon icon="grommet-icons:status-good" width="25" height="25"  style="color: #000"></iconify-icon>
                                                            {{ __('Select Web Status') }}
                                                        </label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <select class="form-control" name="web_status">
                                                                <option value="1" {{ $teamDetails->web_status == 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                                                                <option value="0" {{ $teamDetails->web_status == 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
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
