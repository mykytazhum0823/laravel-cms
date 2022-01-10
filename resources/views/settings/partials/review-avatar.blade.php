<div class="avatar-wrapper">
    <div class="spinner">
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
        <div class="spinner-dot"></div>
    </div>
    <div id="avatar"></div>
    <div class="text-center">
        <div class="avatar-preview">
            @if(isset($data))
                <img class="avatar rounded-circle img-thumbnail img-responsive mt-5 mb-4"
                    width="150"
                    src="{{ ($data['avatar'] == '')?url('assets/img/profile.png'):$data['avatar'] }}">
            @else
                <img class="avatar rounded-circle img-thumbnail img-responsive mt-5 mb-4"
                    width="150"
                    src="{{ url('assets/img/profile.png') }}">
            @endif  
            </div>

        <div id="change-picture"
             class="btn btn-outline-secondary btn-block mt-5  btn-upload"
             style="border-radius:0.3rem !important; font-size:.9rem !important;height: 2.3rem !important">
            <i class="fa fa-camera"></i>
            <input type="file" name="review_avatar" id="avatar-upload">
            @lang('Change Photo')
        </div>

        <div class="row avatar-controls d-none">
            <div class="col-md-6">
                <div id="cancel-upload" class="btn btn-block btn-outline-secondary text-center">
                    <i class="fa fa-times"></i> @lang('Cancel')
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="choose-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 avatar-source">
                        <div class="btn btn-light btn-upload">
                            <i class="fa fa-upload"></i>
                            <!-- <input type="file" name="review_avatar" id="avatar-upload"> -->
                        </div>
                        <p class="mt-3">@lang('Upload Photo')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-none">
    <input type="hidden" name="points[x1]" id="points_x1">
    <input type="hidden" name="points[y1]" id="points_y1">
    <input type="hidden" name="points[x2]" id="points_x2">
    <input type="hidden" name="points[y2]" id="points_y2">
</div>
