<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h3 class="m-2"> @lang('SMTP') </h3>
                
                <div class="form-group">
                    <label for="mail_fromname">@lang('Mail From Name')</label>
                    <input type="text" class="form-control input-solid" id="mail_fromname"
                           name="mail_fromname" 
                           value="{{ env('MAIL_FROM_NAME') }}">
                </div>
                <div class="form-group">
                    <label for="mail_fromaddress">@lang('Mail From Addres')</label>
                    <input type="text" class="form-control input-solid" id="mail_fromaddress"
                           name="mail_fromaddress" value="{{env('MAIL_FROM_ADDRESS') }}">
                </div>
                <div class="form-group">
                    <label for="mail_host">@lang('Mail Host')</label>
                    <input type="text" class="form-control input-solid" id="mail_host"
                           name="mail_host" value="{{ env('MAIL_HOST') }}">
                </div>
                <div class="form-group">
                    <label for="mail_port">@lang('Mail Port')</label>
                    <input type="text" class="form-control input-solid" id="mail_port"
                           name="mail_port" value="{{env('MAIL_PORT') }}">
                </div>
                <div class="form-group">
                    <label for="mail_username">@lang('Mail Username')</label>
                    <input type="text" class="form-control input-solid" id="mail_username"
                           name="mail_username" value="{{env('MAIL_USERNAME') }}">
                </div>
                <div class="form-group">
                    <label for="mail_password">@lang('Mail Password')</label>
                    <input type="password" class="form-control input-solid" id="mail_password"
                           name="mail_password" value="{{ env('MAIL_PASSWORD') }}">
                </div>
                <div class="form-group">
                    <label for="mail_encryption">@lang('Mail Encryption')</label>
                    <input type="text" class="form-control input-solid" id="mail_encryption"
                           name="mail_encryption" value="{{ env('MAIL_ENCRYPTION') }}">
                </div>
                <button type="submit" class="btn btn-primary save-btn">
                    @lang('Change')
                </button>
            </div>
        </div>
        
    </div>
</div>