@if (! Authy::isEnabled($user))
    
    <button type="submit"
            class="btn btn-primary enable-btn"
            data-toggle="loader"
            data-loading-text="@lang('Enabling...')">
        @lang('Enable')
    </button>
@else
    <button type="submit"
            class="btn btn-danger mt-2 disable-btn"
            data-toggle="loader"
            data-loading-text="@lang('Disabling...')">
        <i class="fa fa-close"></i>
        @lang('Disable')
    </button>
@endif
