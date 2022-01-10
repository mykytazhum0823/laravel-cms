@extends('layouts.app')

@section('page-title', __('Activity Log'))
@section('page-heading', isset($user) ? $user->present()->nameOrEmail : __('Activity Log'))

@section('breadcrumbs')
    @if (isset($user) && isset($adminView))
        <li class="breadcrumb-item">
            <a href="{{ route('activity.index') }}">@lang('Activity Log')</a>
        </li>
        <li class="breadcrumb-item active">
            {{ $user->present()->nameOrEmail }}
        </li>
    @else
        <li class="breadcrumb-item active">
            @lang('Activity Log')
        </li>
    @endif
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <form action="" method="GET" id="users-form" class="border-bottom-light mb-3">
            <div class="row justify-content-between mt-3 mb-4">
                <div class="app-search col-md-3">
                    <div class="position-relative">
                        <input type="text" class="form-control input-solid input-search"
                            id="user_search" 
                            name="search"
                            value="{{ Request::get('search') }}"
                            placeholder="@lang('Search for Action')">
                            <span class="input-group-append">
                                @if (Request::has('search') && Request::get('search') != '')
                                    <a href="{{ route('users.index') }}"
                                           class="btn btn-light d-flex align-items-center text-muted"
                                           role="button">
                                        <i class="fas fa-times text-muted"></i>
                                    </a>
                                @endif
                                <button class="btn btn-light" type="submit" id="search-users-btn">
                                    <i class="fas fa-search text-muted"></i>
                                </button>
                            </span>
                    </div>
                </div>
                
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-borderless table-striped">
                <thead>
                    @if (isset($adminView))
                        <th class="min-width-150">@lang('User')</th>
                    @endif
                    <th>@lang('IP Address')</th>
                    <th class="min-width-200">@lang('Message')</th>
                    <th class="min-width-200">@lang('Log Time')</th>
                    <th class="text-center">@lang('More Info')</th>
                </thead>
                <tbody id='item-container'>
                    @include('user-activity.data')
                </tbody>
            </table>            
        </div>
    </div>
</div>

@stop

@section('scripts')
    <script>
        $("#user_search").on('input', function(){
            var search = $('#user_search').val();
            var ajaxurl = '{{route('activity.index')}}';
            let _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: ajaxurl,
                type: "GET",
                data:{search:search},
                success: function(data){
                    $data= $(data); // the HTML content that controller has produced
                    $('#item-container').html($data);
                    $('[data-toggle="popover"]').popover();
                    console.log(data);
                }
            });

        });
        // function searchActivity(){
        //     $("#users-form").submit();
        // }
        // function focusInput()
        // {
        //     var search = $("#user_search");
        //     search.focus();
        //     search[0].setSelectionRange(search.val().length, search.val().length);
        // }
        // focusInput();
    </script>
@stop
