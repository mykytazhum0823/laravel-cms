<div class=" logimage-wrapper ">
    <div class="spinner">
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
    </div>
    <div class="text-center">
        <img id="previewLoginImage" src="{{ url('assets/img/profile.png') }}" alt = ""
        style="display:none;">
    </div>
    <div class="text-center">
        <div class="avatar-preview fav-preview">
            <img class="avatar  img-thumbnail img-responsive mt-5 mb-4"
                width="200px"
                src="{{ (setting('logImage'))? (url(setting('logImage'))): '' }}"
                alt="Change Login/Registration Image">
           
        </div>
        <div id="change-logimage-picture"
             class="btn btn-outline-secondary btn-block mt-5"
             data-bs-toggle="modal"
             data-bs-target="#choose-logimage-modal">
            <i class="fa fa-image"></i>
            @lang('Change Login/Registration Image')
        </div>
        <div class="row logimage-controls d-none">
            <div class="col-md-6">
                <div id="cancel-logimage-upload" class="btn btn-block btn-outline-secondary text-center">
                    <i class="fa fa-times"></i> @lang('Cancel')
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" id="save-logimage" class="btn save-btn  btn-success btn-block text-center">
                    <i class="fa fa-check"></i> @lang('Save')
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="choose-logimage-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 avatar-source" id="no-logimage"
                         data-url="{{ $updateUrl }}">
                        <img src="{{ url('assets/img/profile.png') }}" class="rounded-circle img-thumbnail img-responsive">
                        <p class="mt-3">@lang('No Image')</p>
                    </div>
                    <div class="col-md-6 avatar-source">
                        <div class="btn btn-light btn-upload">
                            <i class="fa fa-upload"></i>
                            <input type="file" name="logImage" id="logimage-upload">
                        </div>
                        <p class="mt-3">@lang('Upload Image')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
