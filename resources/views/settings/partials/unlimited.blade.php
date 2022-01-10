<div class=" unlimited-wrapper ">
    <div class="spinner">
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
    </div>
    <div class="row" style="justify-content:center">
        
        <div class="col-md-8">
            <div class="form-group">
                <label for="headline">@lang('Headline')</label>
                <input type="text"
                    class="form-control input-solid"
                    id="headline"
                    placeholder-="Input headline"
                    name="headline"
                    value="{{ setting('unlimit.headline')? setting('unlimit.headline') : __('Unlimited Access') }}">
            </div>
            <div class="form-group">
                <label for="content">@lang('Content')</label>
                <input type="text"
                    class="form-control input-solid"
                    id="content"
                    placeholder="Input Content"
                    name="content"
                    value="{{ setting('unlimit.content')? setting('unlimit.content') : __('Upgrade your plan from a Free trial, to select ‘Business Plan’.') }}">
            </div>
            <div class="form-group">
                <label for="buttontext">@lang('Button Text')</label>
                <input type="text"
                    class="form-control input-solid"
                    id="buttontext"
                    placeholder="Input the text of button."
                    name="buttontext"
                    value="{{ setting('unlimit.buttontext')? setting('unlimit.buttontext') : __('Upgrade') }}">
            </div>
            <div class="form-group">
                <label for="link">@lang('Link Address')</label>
                <input type="text"
                    class="form-control input-solid"
                    id="link"
                    placeholder="Input the url for support upgrade"
                    name="link"
                    value="{{ setting('unlimit.link')? setting('unlimit.link') : '' }}">
            </div>
        </div>
        
    </div>
    <div class="text-center">
        <img id="previewUnlimitedImage" src="{{ url('assets/img/profile.png') }}" alt = ""
        style="display:none;">
    </div>
 
    
    <div class="text-center">
        <div class="avatar-preview fav-preview">
            <img class="avatar  img-thumbnail img-responsive mt-5 mb-4"
                width="200px"
                src="{{ (setting('unlimited'))? (url(setting('unlimited'))): '' }}"
                alt="Select Unlimited Access Image">
           
        </div>
        <div id="change-unlimited-picture"
             class="btn btn-outline-secondary btn-block mt-5"
             data-bs-toggle="modal"
             data-bs-target="#choose-unlimited-modal">
            <i class="fa fa-image"></i>
            @lang('Change Unlimited Access Image')
        </div>
        <div class="row unlimited-controls d-none">
            <div class="col-md-6">
                <div id="cancel-unlimited-upload" class="btn btn-block btn-outline-secondary text-center">
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

<div class="modal fade" id="choose-unlimited-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 avatar-source" id="no-unlimited"
                         data-url="{{ $updateUrl }}">
                        <img src="{{ url('assets/img/profile.png') }}" class="rounded-circle img-thumbnail img-responsive">
                        <p class="mt-3">@lang('No Image')</p>
                    </div>
                    <div class="col-md-6 avatar-source">
                        <div class="btn btn-light btn-upload">
                            <i class="fa fa-upload"></i>
                            <input type="file" name="unlimitImage" id="unlimited-upload">
                        </div>
                        <p class="mt-3">@lang('Upload Image')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
