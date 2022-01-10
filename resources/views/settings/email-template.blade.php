@extends('layouts.app')

@section('page-title', __('Users'))
@section('page-heading', __('Users'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        @lang('Users')
    </li>
@stop

@section('content')

@include('partials.messages')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 >@lang('Email Templates')</h3>
                <p class="card-title-desc">@lang('Change email templates.')</p>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @if(isset($email_tab))
                            
                            <a class="nav-link mb-2 {{($email_tab == 'v-pills-home')? 'active': ''}}" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> @lang('Verification Email')</a>
                            <a class="nav-link mb-2 {{($email_tab == 'v-pills-profile')? 'active' : ''}}" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">@lang('New User Registration Email')</a>
                            <a class="nav-link mb-2 {{($email_tab == 'v-pills-messages')? 'active' : ''}}" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">@lang('Forget Password Email')</a>
                            <a class="nav-link {{($email_tab == 'v-pills-settings')? 'active' : ''}}" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">@lang('2FA Email')</a>
                            @else
                            <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"> @lang('Verification Email')</a>
                            <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">@lang('New User Registration Email')</a>
                            <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">@lang('Forget Password Email')</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">@lang('2FA Email')</a>
                            @endif
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                            @if(isset($email_tab))
                            <div class="tab-pane fade {{($email_tab == 'v-pills-home')? 'show active': ''}}" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @else
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @endif
                                {!! Form::open(['route' => 'settings.email.newaccount', 'id' => 'email-settings-new-account-form']) !!}
                                    <h4> @lang('Verification Email') </h4>
                                    <!-- <div id="new_account_email_editor">
                                    </div> -->
                                    <input type="hidden" name="email_tab" class="email-tab" value="v-pills-home">
                                    <div class="form-group">
                                        <label for="new_acc_greeting">@lang('Greetings')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_greeting"
                                                name="greeting" rows="3">{{ setting('email-template.newaccount.greeting') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_acc_header">@lang('Header')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_header"
                                                name="header" rows="3">{{ setting('email-template.newaccount.header') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_acc_footer">@lang('Footer')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_footer"
                                                name="footer"  rows="3">{{ setting('email-template.newaccount.footer') }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary  update-btn">
                                        @lang('Update')
                                    </button>
                                {{ Form::close() }}
                            </div>
                            @if(isset($email_tab))
                            <div class="tab-pane fade {{($email_tab == 'v-pills-profile')? 'show active' : ''}}" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            @else
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            @endif
                                {!! Form::open(['route' => 'settings.email.login', 'id' => 'email-settings-login-form']) !!}
                                    <h4> @lang('New User Registration Email') </h4>
                                    <!-- <div id="new_account_email_editor">
                                    </div> -->
                                    <input type="hidden" name="email_tab" class="email-tab" >
                                    <div class="form-group">
                                        <label for="new_acc_greeting">@lang('Greetings')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_greeting"
                                                name="greeting"  rows="3">{{ setting('email-template.login.greeting') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_acc_header">@lang('Header')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_header"
                                                name="header"  rows="3">{{ setting('email-template.login.header') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_acc_footer">@lang('Footer')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_footer"
                                                name="footer" rows="3">{{ setting('email-template.login.footer') }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary update-btn">
                                        @lang('Update')
                                    </button>
                                {{ Form::close() }}
                            </div>
                            @if(isset($email_tab))
                            <div class="tab-pane fade {{($email_tab == 'v-pills-messages')? 'show active' : ''}}" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            @else
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            @endif
                                {!! Form::open(['route' => 'settings.email.password', 'id' => 'email-settings-password-form']) !!}
                                    <h4> @lang('Forget Password Email') </h4>
                                    <!-- <div id="new_account_email_editor">
                                    </div> -->
                                    <input type="hidden" name="email_tab" class="email-tab" >
                                    <div class="form-group">
                                        <label for="new_acc_greeting">@lang('Greetings')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_greeting"
                                                name="greeting" rows="3">{{ setting('email-template.password.greeting') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_acc_header">@lang('Header')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_header"
                                                name="header" rows="3">{{ setting('email-template.password.header') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_acc_footer">@lang('Footer')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_footer"
                                                name="footer" rows="3">{{ setting('email-template.password.footer')}}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary update-btn">
                                        @lang('Update')
                                    </button>
                                {{ Form::close() }}
                            </div>
                            @if(isset($email_tab))
                            <div class="tab-pane fade {{($email_tab == 'v-pills-settings')? 'show active' : ''}}" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            @else
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            @endif
                                {!! Form::open(['route' => 'settings.email.twofa', 'id' => 'email-settings-twofa-form']) !!}
                                    <h4> @lang('2FA Email') </h4>
                                    <!-- <div id="new_account_email_editor">
                                    </div> -->
                                    <input type="hidden" name="email_tab" class="email-tab" >
                                    <div class="form-group">
                                        <label for="new_acc_greeting">@lang('Greetings')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_greeting"
                                                name="greeting" rows="3">{{ setting('email-template.twofa.greeting') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_acc_header">@lang('Header')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_header"
                                                name="header" rows="3">{{ setting('email-template.twofa.header') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_acc_footer">@lang('Footer')</label>
                                        <textarea type="text" class="form-control input-solid" id="new_acc_footer"
                                                name="footer" rows="3">{{ setting('email-template.twofa.footer')}}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary update-btn">
                                        @lang('Update')
                                    </button>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')
    <script>
        $(document).ready(function(){
            $('a[data-bs-toggle="pill"]').on('show.bs.tab', function(e) {
                var val_href = $(e.target).attr('href').substr(1);
                $('.email-tab').val(val_href);
            });

        });
    </script>
@stop
