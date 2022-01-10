<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="<?= url("/") ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ url(setting('logo')) }}" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url(setting('logo')) }}" alt="" height="24"> <span class="logo-txt">{{setting('logotext')? setting('logotext'):'Minia'}}</span>
                    </span>
                </a>

                <a href="<?= url("/") ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ url(setting('logo')) }}" alt="" height="24">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ url(setting('logo')) }}" alt="" height="24"> <span class="logo-txt">{{setting('logotext')? setting('logotext'):'Minia'}}</span>
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            
            <ol class="breadcrumb mb-0 font-weight-light">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="text-muted">
                        <i class="fa fa-home"></i>
                    </a>
                </li>

                @yield('breadcrumbs')
            </ol>
            
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
        
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="@lang('Search')" aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn">
                    <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                    <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                </button>
            </div>

            @hook('navbar:items')

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ auth()->user()->present()->avatar }}"
                        alt="">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ auth()->user()->present()->nameOrEmail }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('profile') }}"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> @lang('Profile')</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= url("/logout") ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> @lang('Logout')</a>
                </div>
            </div>

        </div>
    </div>
</header>