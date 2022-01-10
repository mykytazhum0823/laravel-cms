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

<div class="card">
    <div class="card-body">

        <form action="" method="GET" id="users-form" class="pb-2 mb-3 border-bottom-light">
            <div class="row my-3 flex-md-row flex-column-reverse">
                
                <div class="app-search col-md-3 ">
                    <div class="position-relative">
                        <input type="text" class="form-control input-solid input-search"
                            id="user_search"
                            name="search"
                            value="{{ Request::get('search') }}"
                            placeholder="@lang('Search for users...')">
                            <span class="input-group-append">
                                @if (Request::has('search') && Request::get('search') != '')
                                    <a href="{{ route('users.index') }}"
                                           class="btn btn-light d-flex align-items-center text-muted"
                                           role="button">
                                        <i class="fas fa-times"></i>
                                    </a>
                                @endif
                                <button class="btn btn-light" type="submit" id="search-users-btn">
                                    <i class="fas fa-search text-muted"></i>
                                </button>
                            </span>
                    </div>
                </div>

                <div class="btn-group col-md-3 mt-2 mt-md-0 text-center align-middle">
                    <input type="hidden" name="status" id="status">
                    <div class="dropdown dropstart show d-inline-block">
                        <a class="btn" id="status_select"
                            href="#" role="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ (request()->has('status') && strlen(request()->get('status')) > 2) ? request()->get('status') : 'All' }}  <i class="mdi mdi-chevron-down"></i>
                        </a>
                       
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach($statuses as $status)
                                <li>
                                    <a class="dropdown-item" href="#" data-status="{{$status}}">
                                        {{$status}} </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="float-right add-btn">
                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-rounded float-right">
                            <i class="fas fa-plus mr-2"></i>
                            @lang('Add User')
                        </a>
                    </div>
                </div>
            </div>
        </form>

        <div class="table-responsive" id="users-table-wrapper">
            <table class="table table-borderless table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th class="min-width-80">@lang('Username')</th>
                    <th class="min-width-150">@lang('Full Name')</th>
                    <th class="min-width-100">@lang('Email')</th>
                    <th class="min-width-80">@lang('Registration Date')</th>
                    <th class="min-width-80">@lang('Status')</th>
                    <th class="text-center min-width-150">@lang('Action')</th>
                </tr>
                </thead>
                <tbody id="item-container">
                    @include('user.partials.usertable')
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop

@section('scripts')
    <script>
        $('.dropdown-item').on('click', function(){
            if($(this).data('status') == 'All')
                $('#status').val('');
            else
                $('#status').val($(this).data('status'));

            $('#status_select').html($(this).data('status') + '<i class="mdi mdi-chevron-down"></i>' );
            $("#users-form").submit();
        })
        // $("#status").change(function () {
           
        // });
        $("#user_search").on('input', function(){
            var search = $('#user_search').val();
            var status = $('#status').val();
            var ajaxurl = '{{route('users.index')}}';
            //ajaxurl = ajaxurl.replace(':search', search);
            let _token   = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: ajaxurl,
                type: "GET",
                data:{_token:_token, search:search, status:status},
                success: function(data){
                    $data= $(data); // the HTML content that controller has produced
                    $('#item-container').html($data);
                }
            });

        });
    </script>
@stop
