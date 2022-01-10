<div class=" fav-wrapper ">
    <div class="spinner">
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
    </div>
    <div class="text-center">
        <img id="previewFavicon" src="{{ url('assets/img/profile.png') }}" alt = ""
        style="display:none;">
    </div>
    <div class="text-center">
        <div class="avatar-preview fav-preview">
            <img class="avatar  img-thumbnail img-responsive mt-5 mb-4"
                width="200px"
                src="{{ url(setting('favicon')) }}"
                alt="Select Favicon">
           
        </div>
        <div id="change-fav-picture"
             class="btn btn-outline-secondary btn-block mt-5"
             data-bs-toggle="modal"
             data-bs-target="#choose-fav-modal">
            <i class="fa fa-image"></i>
            @lang('Change Favicon')
        </div>
        <div class="row fav-controls d-none">
            <div class="col-md-6">
                <div id="cancel-fav-upload" class="btn btn-block btn-outline-secondary text-center">
                    <i class="fa fa-times"></i> @lang('Cancel')
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" id="save-fav" class="btn save-btn btn-success btn-block text-center">
                    <i class="fa fa-check"></i> @lang('Save')
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="choose-fav-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 avatar-source" id="no-fav"
                         data-url="{{ $updateUrl }}">
                        <img src="{{ url('assets/img/profile.png') }}" class="rounded-circle img-thumbnail img-responsive">
                        <p class="mt-3">@lang('No Favicon')</p>
                    </div>
                    <div class="col-md-6 avatar-source">
                        <div class="btn btn-light btn-upload">
                            <i class="fa fa-upload"></i>
                            <input type="file" name="favicon" id="fav-upload">
                        </div>
                        <p class="mt-3">@lang('Upload Favicon')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
