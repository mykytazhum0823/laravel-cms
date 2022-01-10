<div class="avatar-wrapper">
    <div class="spinner">
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
    </div>
    <div class="row" style="justify-content:center">
        <div class="col-md-8">
            <div class="form-group">
                <label for="logotext">@lang('Logo Text')</label>
                <input type="text"
                    class="form-control input-solid"
                    id="logotext"
                    placeholder-="Input headline"
                    name="logotext"
                    value="{{ setting('logotext')? setting('logotext') : '' }}">
            </div>
        </div>
    </div>
    <div class="text-center">
        <img id="previewImg" src="{{ url('assets/img/profile.png') }}" alt = ""
        style="display:none;">
    </div>
    <div class="text-center">
        <div class="avatar-preview">
            <img class="avatar  img-thumbnail img-responsive mt-5 mb-4"
                width="200px"
                src="{{ url(setting('logo')) }}"
                alt="Select Logo Image">
           
        </div>
        <div id="change-picture"
             class="btn btn-outline-secondary btn-block mt-5"
             data-bs-toggle="modal"
             data-bs-target="#choose-modal">
            <i class="fa fa-image"></i>
            @lang('Change Logo')
        </div>
        <div class="row avatar-controls d-none">
            <div class="col-md-6">
                <div id="cancel-upload" class="btn btn-block btn-outline-secondary text-center">
                    <i class="fa fa-times"></i> @lang('Cancel')
                </div>
            </div>
           
        </div>
    </div>
    <div class="row mt-4 ">
        <div class="col-md-12">
            <div class="float-right">
                <button type="submit" id="save-unlimited" class="btn update-btn btn-success btn-block text-center">
                    <i class="fa fa-check"></i> @lang('Save')
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="choose-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 avatar-source" id="no-photo"
                         data-url="{{ $updateUrl }}">
                        <img src="{{ url('assets/img/profile.png') }}" class="rounded-circle img-thumbnail img-responsive">
                        <p class="mt-3">@lang('No Logo')</p>
                    </div>
                    <div class="col-md-6 avatar-source">
                        <div class="btn btn-light btn-upload">
                            <i class="fa fa-upload"></i>
                            <input type="file" name="logo" id="avatar-upload">
                        </div>
                        <p class="mt-3">@lang('Upload Logo')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
