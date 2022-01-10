<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">@lang('Menu')</li>
                @foreach (\Vanguard\Plugins\Vanguard::availablePlugins() as $plugin)
                    @include('partials.sidebar.items', ['item' => $plugin->sidebar()])
                @endforeach
            </ul>

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body upgrade-box">
                    <img src="{{ (setting('unlimited'))? (url(setting('unlimited'))): url('assets/img/giftbox.png') }}" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">
                           {{setting('unlimit.headline')? setting('unlimit.headline'):__('Unlimited Access')}} 
                        </h5>
                        <p class="font-size-13">
                            {{setting('unlimit.content')? setting('unlimit.content'): __('Upgrade your plan from a Free trial, to select ‘Business Plan’.') }}
                            
                        </p>
                        <a href="{{(setting('unlimit.link')&& setting('unlimit.link') != '')? setting('unlimit.link'):'#'}}"
                         class="btn btn-primary mt-2 btn-upgrade">
                         {{setting('unlimit.buttontext')? setting('unlimit.buttontext'): __('Upgrade Now')}}
                        
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>