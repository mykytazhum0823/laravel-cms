<div class="row">
    @csrf
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('Change Colors')</h4>
                <!-- <p class="card-title-desc"></p> -->
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills"  role="tablist" aria-orientation="vertical">
                            @if(isset($hash))
                                <a class="nav-link mb-2 {{($hash == 'v-pills-header' )? 'active': ''}}"  data-bs-toggle="pill" href="#v-pills-header" role="tab" aria-controls="v-pills-header" aria-selected="true">@lang('Header')</a>
                                <a class="nav-link mb-2 {{($hash == 'v-pills-sidebar' )? 'active': ''}}"  data-bs-toggle="pill" href="#v-pills-sidebar" role="tab" aria-controls="v-pills-sidebar" aria-selected="false">@lang('Sidebar')</a>
                                <a class="nav-link mb-2 {{($hash == 'v-pills-elements' )? 'active': ''}}"  data-bs-toggle="pill" href="#v-pills-elements" role="tab" aria-controls="v-pills-elements" aria-selected="false">@lang('Elements')</a>
                            @else
                                <a class="nav-link mb-2 active"  data-bs-toggle="pill" href="#v-pills-header" role="tab" aria-controls="v-pills-header" aria-selected="true">@lang('Header')</a>
                                <a class="nav-link mb-2 "  data-bs-toggle="pill" href="#v-pills-sidebar" role="tab" aria-controls="v-pills-sidebar" aria-selected="false">@lang('Sidebar')</a>
                                <a class="nav-link mb-2 "  data-bs-toggle="pill" href="#v-pills-elements" role="tab" aria-controls="v-pills-elements" aria-selected="false">@lang('Elements')</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                           

                            @if(isset($hash))
                            <div class="tab-pane fade show {{($hash == 'v-pills-header' )? 'active show': ''}}" id="v-pills-header" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @else
                            <div class="tab-pane fade active show " id="v-pills-header" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @endif
                                <div class="row">
                                    <div class="col-md-12 bright-setting-panel p-4">
                                        <h4>@lang('Bright Theme')</h4>
                                        <div class="table-rep-plugin">
                                        <div class="table-responsive" id="header-table-wrapper">
                                            <table class="table table-borderless color-table">
                                                <thead>
                                                    <tr>
                                                        <th ></th>
                                                        <th >@lang('Main')</th>
                                                        <th >@lang('Border')</th>
                                                        <th >@lang('Hover')</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="item-container">
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Background')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_header_background_main"  
                                                                value="{{(setting('color.header.bright.background.main'))? setting('color.header.bright.background.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_header_background_border"  
                                                                value="{{(setting('color.header.bright.background.border'))? setting('color.header.bright.background.border'): '#e9e9ef' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Submenu')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_header_submenu_main"  
                                                                value="{{(setting('color.header.bright.submenu.main'))? setting('color.header.bright.submenu.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_header_submenu_border"  
                                                                value="{{(setting('color.header.bright.submenu.border'))? setting('color.header.bright.submenu.border'): '#e9e9ef' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Text')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_header_text_main"  
                                                                value="{{(setting('color.header.bright.text.main'))? setting('color.header.bright.text.main'): '#6c757d' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_header_text_border"  
                                                                value="{{(setting('color.header.bright.text.border'))? setting('color.header.bright.text.border'): '#6c757d' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Link')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_header_link_main"  
                                                                value="{{(setting('color.header.bright.link.main'))? setting('color.header.bright.link.main'): '#6c757d' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_header_link_hover"  
                                                                value="{{(setting('color.header.bright.link.hover'))? setting('color.header.bright.link.hover'): '#6c757d' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 bright-setting-panel p-4">
                                        <h4>@lang('Dark Theme')</h4>
                                        <div class="table-rep-plugin">
                                        <div class="table-responsive" id="users-table-wrapper">
                                            <table class="table table-borderless color-table" style=" ">
                                                <thead>
                                                    <tr>
                                                        <th ></th>
                                                        <th >@lang('Main')</th>
                                                        <th >@lang('Border')</th>
                                                        <th >@lang('Hover')</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="item-container">
                                                    <tr>
                                                        <td >
                                                            <label>@lang('Background')</label>
                                                        </td>
                                                        <td >
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_header_background_main"  
                                                                value="{{(setting('color.header.dark.background.main'))? setting('color.header.dark.background.main'): '#313533' }}" 
                                                                >
                                                        </td> 
                                                        <td >
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_header_background_border"  
                                                                value="{{(setting('color.header.dark.background.border'))? setting('color.header.dark.background.border'): '#3b403d' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td  >
                                                            <label>@lang('Submenu')</label>
                                                        </td>
                                                        <td >
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_header_submenu_main"  
                                                                value="{{(setting('color.header.dark.submenu.main'))? setting('color.header.dark.submenu.main'): '#373c39' }}" 
                                                                >
                                                        </td>
                                                        <td >
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_header_submenu_border"  
                                                                value="{{(setting('color.header.dark.submenu.border'))? setting('color.header.dark.submenu.border'): '#3b403d' }}" 
                                                                >
                                                        </td>
                                                        <!-- <td >
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_header_submenu_hover"  
                                                                value="{{(setting('color.header.dark.submenu.hover'))? setting('color.header.dark.submenu.hover'): '#373c39' }}" 
                                                                >
                                                        </td> -->
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td >
                                                            <label>@lang('Text')</label>
                                                        </td>
                                                        <td >
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_header_text_main"  
                                                                value="{{(setting('color.header.dark.text.main'))? setting('color.header.dark.text.main'): '#adb5bd' }}" 
                                                                >
                                                        </td>
                                                        <td >
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_header_text_border"  
                                                                value="{{(setting('color.header.dark.text.border'))? setting('color.header.dark.text.border'): '#adb5bd' }}" 
                                                                >
                                                        </td>
                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Link')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_header_link_main"  
                                                                value="{{(setting('color.header.dark.link.main'))? setting('color.header.dark.link.main'): '#6c757d' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_header_link_hover"  
                                                                value="{{(setting('color.header.dark.link.hover'))? setting('color.header.dark.link.hover'): '#6c757d' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(isset($hash))   
                            <div class="tab-pane fade {{($hash == 'v-pills-sidebar')? 'active show' :''}}" id="v-pills-sidebar" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @else
                            <div class="tab-pane fade" id="v-pills-sidebar" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @endif
                                <div class="row">
                                    <div class="col-md-12 bright-setting-panel p-4">
                                        <h4>@lang('Bright Theme')</h4>
                                        <div class="table-rep-plugin">
                                        <div class="table-responsive" id="users-table-wrapper">
                                            <table class="table table-borderless color-table">
                                                <thead>
                                                    <tr>
                                                        <th ></th>
                                                        <th >@lang('Main')</th>
                                                        <th >@lang('Border')</th>
                                                        <th >@lang('Hover')</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="item-container">
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Background')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_background_main"  
                                                                value="{{(setting('color.sidebar.bright.background.main'))? setting('color.sidebar.bright.background.main'): '#fbfaff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_background_border"  
                                                                value="{{(setting('color.sidebar.bright.background.border'))? setting('color.sidebar.bright.background.border'): '#e9e9ef' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('MenuItem')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_menuitem_main"  
                                                                value="{{(setting('color.sidebar.bright.menuitem.main'))? setting('color.sidebar.bright.menuitem.main'): '#545a6d' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                           
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_menuitem_hover"  
                                                                value="{{(setting('color.sidebar.bright.menuitem.hover'))? setting('color.sidebar.bright.menuitem.hover'): '#5156be' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Brand Bottom')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_brandbottom_main"  
                                                                value="{{(setting('color.sidebar.bright.brandbottom.main'))? setting('color.sidebar.bright.brandbottom.main'): '#545a6d' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Brand Right')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_brandright_main"  
                                                                value="{{(setting('color.sidebar.bright.brandright.main'))? setting('color.sidebar.bright.brandright.main'): '#545a6d' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan ="5" >
                                                            <h5 >&nbsp; &nbsp; &nbsp;@lang('Minimization')</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Top')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_minimization_topitem_main"  
                                                                value="{{(setting('color.sidebar.bright.minimization.topitem.main'))? setting('color.sidebar.bright.minimization.topitem.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_minimization_topitem_border"  
                                                                value="{{(setting('color.sidebar.bright.minimization.topitem.border'))? setting('color.sidebar.bright.minimization.topitem.border'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                        
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Submenu')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_minimization_submenu_main"  
                                                                value="{{(setting('color.sidebar.bright.minimization.submenu.main'))? setting('color.sidebar.bright.minimization.submenu.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_minimization_submenu_border"  
                                                                value="{{(setting('color.sidebar.bright.minimization.submenu.border'))? setting('color.sidebar.bright.minimization.submenu.border'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_minimization_submenu_hover"  
                                                                value="{{(setting('color.sidebar.bright.minimization.submenu.hover'))? setting('color.sidebar.bright.minimization.submenu.hover'): '#ffffff' }}" 
                                                                >
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Text')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_minimization_text_main"  
                                                                value="{{(setting('color.sidebar.bright.minimization.text.main'))? setting('color.sidebar.bright.minimization.text.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan ="5" >
                                                            <h5 >&nbsp; &nbsp; &nbsp;@lang('UpgradeBox')</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Background')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_upgradebox_background_main"  
                                                                value="{{(setting('color.sidebar.bright.upgradebox.background.main'))? setting('color.sidebar.bright.upgradebox.background.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_upgradebox_background_border"  
                                                                value="{{(setting('color.sidebar.bright.upgradebox.background.border'))? setting('color.sidebar.bright.upgradebox.background.border'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Button')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_upgradebox_button_main"  
                                                                value="{{(setting('color.sidebar.bright.upgradebox.button.main'))? setting('color.sidebar.bright.upgradebox.button.main'): '#7a7fdc' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_upgradebox_button_border"  
                                                                value="{{(setting('color.sidebar.bright.upgradebox.button.border'))? setting('color.sidebar.bright.upgradebox.button.border'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_upgradebox_button_hover"  
                                                                value="{{(setting('color.sidebar.bright.upgradebox.button.hover'))? setting('color.sidebar.bright.upgradebox.button.hover'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Button Text')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_upgradebox_buttontext_main"  
                                                                value="{{(setting('color.sidebar.bright.upgradebox.buttontext.main'))? setting('color.sidebar.bright.upgradebox.buttontext.main'): '#7a7fdc' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Text')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_upgradebox_text_main"  
                                                                value="{{(setting('color.sidebar.bright.upgradebox.text.main'))? setting('color.sidebar.bright.upgradebox.text.main'): '#495057' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Headline')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_upgradebox_headline_main"  
                                                                value="{{(setting('color.sidebar.bright.upgradebox.headline.main'))? setting('color.sidebar.bright.upgradebox.headline.main'): '#7a7fdc' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Box Shadow')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="bright_sidebar_upgradebox_boxshadow"  
                                                                value="{{(setting('color.sidebar.bright.upgradebox.boxshadow'))? setting('color.sidebar.bright.upgradebox.boxshadow'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                    </tr>             
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 bright-setting-panel p-4">
                                        <h4>@lang('Dark Theme')</h4>
                                        <div class="table-rep-plugin">
                                        <div class="table-responsive" id="users-table-wrapper">
                                            <table class="table table-borderless color-table">
                                                <thead>
                                                    <tr>
                                                        <th ></th>
                                                        <th >@lang('Main')</th>
                                                        <th >@lang('Border')</th>
                                                        <th >@lang('Hover')</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="item-container">
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Background')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_background_main"  
                                                                value="{{(setting('color.sidebar.dark.background.main'))? setting('color.sidebar.dark.background.main'): '#2c302e' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_background_border"  
                                                                value="{{(setting('color.sidebar.dark.background.border'))? setting('color.sidebar.dark.background.border'): '#373c39' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('MenuItem')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_menuitem_main"  
                                                                value="{{(setting('color.sidebar.dark.menuitem.main'))? setting('color.sidebar.dark.menuitem.main'): '#99a4b1' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                           
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_menuitem_hover"  
                                                                value="{{(setting('color.sidebar.dark.menuitem.hover'))? setting('color.sidebar.dark.menuitem.hover'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Brand Bottom')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_brandbottom_main"  
                                                                value="{{(setting('color.sidebar.dark.brandbottom.main'))? setting('color.sidebar.dark.brandbottom.main'): '#545a6d' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Brand Right')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_brandright_main"  
                                                                value="{{(setting('color.sidebar.dark.brandright.main'))? setting('color.sidebar.dark.brandright.main'): '#545a6d' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan ="5" >
                                                            <h5 >&nbsp; &nbsp; &nbsp;@lang('Minimization')</h5>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Top')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_minimization_topitem_main"  
                                                                value="{{(setting('color.sidebar.dark.minimization.topitem.main'))? setting('color.sidebar.dark.minimization.topitem.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_minimization_topitem_border"  
                                                                value="{{(setting('color.sidebar.dark.minimization.topitem.border'))? setting('color.sidebar.dark.minimization.topitem.border'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                        
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Submenu')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_minimization_submenu_main"  
                                                                value="{{(setting('color.sidebar.dark.minimization.submenu.main'))? setting('color.sidebar.dark.minimization.submenu.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_minimization_submenu_border"  
                                                                value="{{(setting('color.sidebar.dark.minimization.submenu.border'))? setting('color.sidebar.dark.minimization.submenu.border'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_minimization_submenu_hover"  
                                                                value="{{(setting('color.sidebar.dark.minimization.submenu.hover'))? setting('color.sidebar.dark.minimization.submenu.hover'): '#ffffff' }}" 
                                                                >
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Text')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_minimization_text_main"  
                                                                value="{{(setting('color.sidebar.dark.minimization.text.main'))? setting('color.sidebar.dark.minimization.text.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan ="5" >
                                                            <h5 >&nbsp; &nbsp; &nbsp;@lang('UpgradeBox')</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Background')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_upgradebox_background_main"  
                                                                value="{{(setting('color.sidebar.dark.upgradebox.background.main'))? setting('color.sidebar.dark.upgradebox.background.main'): '#313533' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_upgradebox_background_border"  
                                                                value="{{(setting('color.sidebar.dark.upgradebox.background.border'))? setting('color.sidebar.dark.upgradebox.background.border'): '#313533' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Button')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_upgradebox_button_main"  
                                                                value="{{(setting('color.sidebar.dark.upgradebox.button.main'))? setting('color.sidebar.dark.upgradebox.button.main'): '#7a7fdc' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_upgradebox_button_border"  
                                                                value="{{(setting('color.sidebar.dark.upgradebox.button.border'))? setting('color.sidebar.dark.upgradebox.button.border'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_upgradebox_button_hover"  
                                                                value="{{(setting('color.sidebar.dark.upgradebox.button.hover'))? setting('color.sidebar.dark.upgradebox.button.hover'): '#7a7fdc' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Button Text')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_upgradebox_buttontext_main"  
                                                                value="{{(setting('color.sidebar.dark.upgradebox.buttontext.main'))? setting('color.sidebar.dark.upgradebox.buttontext.main'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Text')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_upgradebox_text_main"  
                                                                value="{{(setting('color.sidebar.dark.upgradebox.text.main'))? setting('color.sidebar.dark.upgradebox.text.main'): '#495057' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Headline')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_upgradebox_headline_main"  
                                                                value="{{(setting('color.sidebar.dark.upgradebox.headline.main'))? setting('color.sidebar.dark.upgradebox.headline.main'): '#7a7fdc' }}" 
                                                                >
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label>@lang('Box Shadow')</label>
                                                        </td>
                                                        <td>
                                                            <input type="color"  class="form-control input-solid color-select"
                                                                name="dark_sidebar_upgradebox_boxshadow"  
                                                                value="{{(setting('color.sidebar.dark.upgradebox.boxshadow'))? setting('color.sidebar.dark.upgradebox.boxshadow'): '#ffffff' }}" 
                                                                >
                                                        </td>
                                                    </tr>      
                                                </tbody>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            @if(isset($hash))
                            <div class="tab-pane fade show {{($hash == 'v-pills-elements' )? 'active show': ''}}" id="v-pills-elements" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @else
                            <div class="tab-pane fade" id="v-pills-elements" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            @endif
                                <div class="row">
                                    <div class="col-md-12 bright-setting-panel p-4">
                                        <h4>@lang('Bright Theme')</h4>
                                        
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table class="table table-borderless color-table">
                                                    <thead id="color-elem-bright-bar">
                                                        <tr>
                                                            <th ></th>
                                                            <th >@lang('Background')</th>
                                                            <th> @lang('Text')</th>
                                                            <th >@lang('Border')</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="item-container">
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Background')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_background_background"  
                                                                    value="{{(setting('color.elem.bright.background.background'))? setting('color.elem.bright.background.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H1')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_h1_text"  
                                                                    value="{{(setting('color.elem.bright.h1.text'))? setting('color.elem.bright.h1.text'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H2')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_h2_text"  
                                                                    value="{{(setting('color.elem.bright.h2.text'))? setting('color.elem.bright.h2.text'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H3')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_h3_text"  
                                                                    value="{{(setting('color.elem.bright.h3.text'))? setting('color.elem.bright.h3.text'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H4')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_h4_text"  
                                                                    value="{{(setting('color.elem.bright.h4.text'))? setting('color.elem.bright.h4.text'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H5')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_h5_text"  
                                                                    value="{{(setting('color.elem.bright.h5.text'))? setting('color.elem.bright.h5.text'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H6')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_h6_text"  
                                                                    value="{{(setting('color.elem.bright.h6.text'))? setting('color.elem.bright.h6.text'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Sub Text')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_subtext_text"  
                                                                    value="{{(setting('color.elem.bright.subtext.text'))? setting('color.elem.bright.subtext.text'): '#74788d' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Text')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_text_text"  
                                                                    value="{{(setting('color.elem.bright.text.text'))? setting('color.elem.bright.text.text'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Placeholder')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_placeholder_text"  
                                                                    value="{{(setting('color.elem.bright.placeholder.text'))? setting('color.elem.bright.placeholder.text'): '#74788d' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Progress')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_progress_background"  
                                                                    value="{{(setting('color.elem.bright.progress.background'))? setting('color.elem.bright.progress.background'): '#74788d' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_progress_text"  
                                                                    value="{{(setting('color.elem.bright.progress.text'))? setting('color.elem.bright.progress.text'): '#74788d' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Card')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Main')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_box_main_background"  
                                                                    value="{{(setting('color.elem.bright.box.main.background'))? setting('color.elem.bright.box.main.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_box_main_border"  
                                                                    value="{{(setting('color.elem.bright.box.main.border'))? setting('color.elem.bright.box.main.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Inner Border')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_box_inner_border"  
                                                                    value="{{(setting('color.elem.bright.box.inner.border'))? setting('color.elem.bright.box.inner.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_box_boxshadow"  
                                                                    value="{{(setting('color.elem.bright.box.boxshadow'))? setting('color.elem.bright.box.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Link')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_link_normal_text"  
                                                                    value="{{(setting('color.elem.bright.link.normal.text'))? setting('color.elem.bright.link.normal.text'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_link_hover_text"  
                                                                    value="{{(setting('color.elem.bright.link.hover.text'))? setting('color.elem.bright.link.hover.text'): '#2ab57d' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Sign In/Up Button')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_normal_background"  
                                                                    value="{{(setting('color.elem.bright.sign.normal.background'))? setting('color.elem.bright.sign.normal.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_normal_text"  
                                                                    value="{{(setting('color.elem.bright.sign.normal.text'))? setting('color.elem.bright.sign.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_normal_border"  
                                                                    value="{{(setting('color.elem.bright.sign.normal.border'))? setting('color.elem.bright.sign.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_over_background"  
                                                                    value="{{(setting('color.elem.bright.sign.over.background'))? setting('color.elem.bright.sign.over.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_over_text"  
                                                                    value="{{(setting('color.elem.bright.sign.over.text'))? setting('color.elem.bright.sign.over.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_over_border"  
                                                                    value="{{(setting('color.elem.bright.sign.over.border'))? setting('color.elem.bright.sign.over.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_active_background"  
                                                                    value="{{(setting('color.elem.bright.sign.active.background'))? setting('color.elem.bright.sign.active.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_active_text"  
                                                                    value="{{(setting('color.elem.bright.sign.active.text'))? setting('color.elem.bright.sign.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_active_border"  
                                                                    value="{{(setting('color.elem.bright.sign.active.border'))? setting('color.elem.bright.sign.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_sign_boxshadow"  
                                                                    value="{{(setting('color.elem.bright.sign.boxshadow'))? setting('color.elem.bright.sign.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Tab Button')</h5>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_normal_background"  
                                                                    value="{{(setting('color.elem.bright.tab.normal.background'))? setting('color.elem.bright.tab.normal.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_normal_text"  
                                                                    value="{{(setting('color.elem.bright.tab.normal.text'))? setting('color.elem.bright.tab.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_normal_border"  
                                                                    value="{{(setting('color.elem.bright.tab.normal.border'))? setting('color.elem.bright.tab.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_hover_background"  
                                                                    value="{{(setting('color.elem.bright.tab.over.background'))? setting('color.elem.bright.tab.over.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_hover_text"  
                                                                    value="{{(setting('color.elem.bright.tab.over.text'))? setting('color.elem.bright.tab.over.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_hover_border"  
                                                                    value="{{(setting('color.elem.bright.tab.over.border'))? setting('color.elem.bright.tab.over.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_active_background"  
                                                                    value="{{(setting('color.elem.bright.tab.active.background'))? setting('color.elem.bright.tab.active.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_active_text"  
                                                                    value="{{(setting('color.elem.bright.tab.active.text'))? setting('color.elem.bright.tab.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_active_border"  
                                                                    value="{{(setting('color.elem.bright.tab.active.border'))? setting('color.elem.bright.tab.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tab_boxshadow"  
                                                                    value="{{(setting('color.elem.bright.tab.boxshadow'))? setting('color.elem.bright.tab.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Update Button')</h5>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_normal_background"  
                                                                    value="{{(setting('color.elem.bright.update.normal.background'))? setting('color.elem.bright.update.normal.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_normal_text"  
                                                                    value="{{(setting('color.elem.bright.update.normal.text'))? setting('color.elem.bright.update.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_normal_border"  
                                                                    value="{{(setting('color.elem.bright.update.normal.border'))? setting('color.elem.bright.update.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_hover_background"  
                                                                    value="{{(setting('color.elem.bright.update.over.background'))? setting('color.elem.bright.update.over.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_hover_text"  
                                                                    value="{{(setting('color.elem.bright.update.over.text'))? setting('color.elem.bright.update.over.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_hover_border"  
                                                                    value="{{(setting('color.elem.bright.update.over.border'))? setting('color.elem.bright.update.over.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_active_background"  
                                                                    value="{{(setting('color.elem.bright.update.active.background'))? setting('color.elem.bright.update.active.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_active_text"  
                                                                    value="{{(setting('color.elem.bright.update.active.text'))? setting('color.elem.bright.update.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_active_border"  
                                                                    value="{{(setting('color.elem.bright.update.active.border'))? setting('color.elem.bright.update.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_update_boxshadow"  
                                                                    value="{{(setting('color.elem.bright.update.boxshadow'))? setting('color.elem.bright.update.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Save Button')</h5>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_normal_background"  
                                                                    value="{{(setting('color.elem.bright.save.normal.background'))? setting('color.elem.bright.save.normal.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_normal_text"  
                                                                    value="{{(setting('color.elem.bright.save.normal.text'))? setting('color.elem.bright.save.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_normal_border"  
                                                                    value="{{(setting('color.elem.bright.save.normal.border'))? setting('color.elem.bright.save.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_hover_background"  
                                                                    value="{{(setting('color.elem.bright.save.hover.background'))? setting('color.elem.bright.save.hover.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_hover_text"  
                                                                    value="{{(setting('color.elem.bright.save.hover.text'))? setting('color.elem.bright.save.hover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_hover_border"  
                                                                    value="{{(setting('color.elem.bright.save.hover.border'))? setting('color.elem.bright.save.hover.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_active_background"  
                                                                    value="{{(setting('color.elem.bright.save.active.background'))? setting('color.elem.bright.save.active.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_active_text"  
                                                                    value="{{(setting('color.elem.bright.save.active.text'))? setting('color.elem.bright.save.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_active_border"  
                                                                    value="{{(setting('color.elem.bright.save.active.border'))? setting('color.elem.bright.save.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_save_boxshadow"  
                                                                    value="{{(setting('color.elem.bright.save.boxshadow'))? setting('color.elem.bright.save.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Add Button')</h5>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_normal_background"  
                                                                    value="{{(setting('color.elem.bright.addbtn.normal.background'))? setting('color.elem.bright.addbtn.normal.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_normal_text"  
                                                                    value="{{(setting('color.elem.bright.addbtn.normal.text'))? setting('color.elem.bright.addbtn.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_normal_border"  
                                                                    value="{{(setting('color.elem.bright.addbtn.normal.border'))? setting('color.elem.bright.addbtn.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_hover_background"  
                                                                    value="{{(setting('color.elem.bright.addbtn.hover.background'))? setting('color.elem.bright.addbtn.hover.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_hover_text"  
                                                                    value="{{(setting('color.elem.bright.addbtn.hover.text'))? setting('color.elem.bright.addbtn.hover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_hover_border"  
                                                                    value="{{(setting('color.elem.bright.addbtn.hover.border'))? setting('color.elem.bright.addbtn.hover.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_active_background"  
                                                                    value="{{(setting('color.elem.bright.addbtn.active.background'))? setting('color.elem.bright.addbtn.active.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_active_text"  
                                                                    value="{{(setting('color.elem.bright.addbtn.active.text'))? setting('color.elem.bright.addbtn.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_active_border"  
                                                                    value="{{(setting('color.elem.bright.addbtn.active.border'))? setting('color.elem.bright.addbtn.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_addbtn_boxshadow"  
                                                                    value="{{(setting('color.elem.bright.addbtn.boxshadow'))? setting('color.elem.bright.addbtn.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Input Box')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_input_normal_border"  
                                                                    value="{{(setting('color.elem.bright.input.normal.border'))? setting('color.elem.bright.input.normal.border'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_input_active_border"  
                                                                    value="{{(setting('color.elem.bright.input.active.border'))? setting('color.elem.bright.input.normal.border'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Message')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Success')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_message_success_background"  
                                                                    value="{{(setting('color.elem.bright.message.success.background'))? setting('color.elem.bright.message.success.background'): '#d4edda' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_message_success_text"  
                                                                    value="{{(setting('color.elem.bright.message.success.text'))? setting('color.elem.bright.message.success.text'): '#155724' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_message_success_border"  
                                                                    value="{{(setting('color.elem.bright.message.success.border'))? setting('color.elem.bright.message.success.border'): '#c3e6cb' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Warning')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_message_warning_background"  
                                                                    value="{{(setting('color.elem.bright.message.warning.background'))? setting('color.elem.bright.message.warning.background'): '#fff3cd' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_message_warning_text"  
                                                                    value="{{(setting('color.elem.bright.message.warning.text'))? setting('color.elem.bright.message.warning.text'): '#856404' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_message_warning_border"  
                                                                    value="{{(setting('color.elem.bright.message.warning.border'))? setting('color.elem.bright.message.warning.border'): '#ffeeba' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Error')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_message_error_background"  
                                                                    value="{{(setting('color.elem.bright.message.error.background'))? setting('color.elem.bright.message.error.background'): '#f8d7da' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_message_error_text"  
                                                                    value="{{(setting('color.elem.bright.message.error.text'))? setting('color.elem.bright.message.error.text'): '#721c24' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_message_error_border"  
                                                                    value="{{(setting('color.elem.bright.message.error.border'))? setting('color.elem.bright.message.error.border'): '#f5c6cb' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Switch')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_switch_active_background"  
                                                                    value="{{(setting('color.elem.bright.switch.active.background'))? setting('color.elem.bright.switch.active.background'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_switch_active_text"  
                                                                    value="{{(setting('color.elem.bright.switch.active.text'))? setting('color.elem.bright.switch.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Inactive')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_switch_inactive_background"  
                                                                    value="{{(setting('color.elem.bright.switch.inactive.background'))? setting('color.elem.bright.switch.inactive.background'): '#dee2e6' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_switch_inactive_text"  
                                                                    value="{{(setting('color.elem.bright.switch.inactive.text'))? setting('color.elem.bright.switch.inactive.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Enable Button')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_enablebutton_normal_background"  
                                                                    value="{{(setting('color.elem.bright.enablebutton.normal.background'))? setting('color.elem.bright.enablebutton.normal.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_enablebutton_normal_text"  
                                                                    value="{{(setting('color.elem.bright.enablebutton.normal.text'))? setting('color.elem.bright.enablebutton.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_enablebutton_normal_border"  
                                                                    value="{{(setting('color.elem.bright.enablebutton.normal.border'))? setting('color.elem.bright.enablebutton.normal.border'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_enablebutton_hover_background"  
                                                                    value="{{(setting('color.elem.bright.enablebutton.hover.background'))? setting('color.elem.bright.enablebutton.hover.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_enablebutton_hover_text"  
                                                                    value="{{(setting('color.elem.bright.enablebutton.hover.text'))? setting('color.elem.bright.enablebutton.hover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_enablebutton_hover_border"  
                                                                    value="{{(setting('color.elem.bright.enablebutton.hover.border'))? setting('color.elem.bright.enablebutton.hover.border'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_enablebutton_boxshadow"  
                                                                    value="{{(setting('color.elem.bright.enablebutton.boxshadow'))? setting('color.elem.bright.enablebutton.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Disable Button')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_disablebutton_normal_background"  
                                                                    value="{{(setting('color.elem.bright.disablebutton.normal.background'))? setting('color.elem.bright.disablebutton.normal.background'): '#d75350' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_disablebutton_normal_text"  
                                                                    value="{{(setting('color.elem.bright.disablebutton.normal.text'))? setting('color.elem.bright.disablebutton.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_disablebutton_normal_border"  
                                                                    value="{{(setting('color.elem.bright.disablebutton.normal.border'))? setting('color.elem.bright.disablebutton.normal.border'): '#ca4e4b' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_disablebutton_hover_background"  
                                                                    value="{{(setting('color.elem.bright.disablebutton.hover.background'))? setting('color.elem.bright.disablebutton.hover.background'): '#d75350' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_disablebutton_hover_text"  
                                                                    value="{{(setting('color.elem.bright.disablebutton.hover.text'))? setting('color.elem.bright.disablebutton.hover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_disablebutton_hover_border"  
                                                                    value="{{(setting('color.elem.bright.disablebutton.hover.border'))? setting('color.elem.bright.disablebutton.hover.border'): '#ca4e4b' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_disablebutton_boxshadow"  
                                                                    value="{{(setting('color.elem.bright.disablebutton.boxshadow'))? setting('color.elem.bright.disablebutton.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Search Box')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                            
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_searchbox_normal_border"  
                                                                    value="{{(setting('color.elem.bright.searchbox.normal.border'))? setting('color.elem.bright.searchbox.normal.border'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal Button')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_searchbox_normalbutton_background"  
                                                                    value="{{(setting('color.elem.bright.searchbox.normalbutton.background'))? setting('color.elem.bright.searchbox.normalbutton.background'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_searchbox_normalbutton_text"  
                                                                    value="{{(setting('color.elem.bright.searchbox.normalbutton.text'))? setting('color.elem.bright.searchbox.normalbutton.text'): '#ffffff' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_searchbox_normalbutton_border"  
                                                                    value="{{(setting('color.elem.bright.searchbox.normalbutton.border'))? setting('color.elem.bright.searchbox.normalbutton.border'): '#ffffff' }}" 
                                                                    >
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                            
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_searchbox_active_border"  
                                                                    value="{{(setting('color.elem.bright.searchbox.active.border'))? setting('color.elem.bright.searchbox.active.border'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active Button')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_searchbox_activebutton_background"  
                                                                    value="{{(setting('color.elem.bright.searchbox.activebutton.background'))? setting('color.elem.bright.searchbox.activebutton.background'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_searchbox_activebutton_text"  
                                                                    value="{{(setting('color.elem.bright.searchbox.activebutton.text'))? setting('color.elem.bright.searchbox.activebutton.text'): '#ffffff' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_searchbox_activebutton_border"  
                                                                    value="{{(setting('color.elem.bright.searchbox.activebutton.border'))? setting('color.elem.bright.searchbox.activebutton.border'): '#ffffff' }}" 
                                                                    >
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Check Box')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Checked')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_checkbox_checked_background"  
                                                                    value="{{(setting('color.elem.bright.checkbox.checked.background'))? setting('color.elem.bright.checkbox.checked.background'): '#f8f9fa' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Unchecked')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_checkbox_unchecked_background"  
                                                                    value="{{(setting('color.elem.bright.checkbox.unchecked.background'))? setting('color.elem.bright.checkbox.unchecked.background'): '#f8f9fa' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                       
                                                            
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Table Content')</h5>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Odd')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablecontent_odd_background"  
                                                                    value="{{(setting('color.elem.bright.tablecontent.odd.background'))? setting('color.elem.bright.tablecontent.odd.background'): '#f8f9fa' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablecontent_odd_text"  
                                                                    value="{{(setting('color.elem.bright.tablecontent.odd.text'))? setting('color.elem.bright.tablecontent.odd.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Even')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablecontent_even_background"  
                                                                    value="{{(setting('color.elem.bright.tablecontent.even.background'))? setting('color.elem.bright.tablecontent.even.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablecontent_even_text"  
                                                                    value="{{(setting('color.elem.bright.tablecontent.even.text'))? setting('color.elem.bright.tablecontent.even.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Link Normal')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablecontent_linknormal_text"  
                                                                    value="{{(setting('color.elem.bright.tablecontent.linknormal.text'))? setting('color.elem.bright.tablecontent.linknormal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                                
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Link Hover')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablecontent_linkover_text"  
                                                                    value="{{(setting('color.elem.bright.tablecontent.linkover.text'))? setting('color.elem.bright.tablecontent.linkover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablecontent_active_text"  
                                                                    value="{{(setting('color.elem.bright.tablecontent.active.text'))? setting('color.elem.bright.tablecontent.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Table Pagination')</h5>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablepage_normal_background"  
                                                                    value="{{(setting('color.elem.bright.tablepage.normal.background'))? setting('color.elem.bright.tablepage.normal.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablepage_normal_text"  
                                                                    value="{{(setting('color.elem.bright.tablepage.normal.text'))? setting('color.elem.bright.tablepage.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablepage_normal_border"  
                                                                    value="{{(setting('color.elem.bright.tablepage.normal.border'))? setting('color.elem.bright.tablepage.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablepage_over_background"  
                                                                    value="{{(setting('color.elem.bright.tablepage.over.background'))? setting('color.elem.bright.tablepage.over.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablepage_over_text"  
                                                                    value="{{(setting('color.elem.bright.tablepage.over.text'))? setting('color.elem.bright.tablepage.over.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablepage_over_border"  
                                                                    value="{{(setting('color.elem.bright.tablepage.over.border'))? setting('color.elem.bright.tablepage.over.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablepage_active_background"  
                                                                    value="{{(setting('color.elem.bright.tablepage.active.background'))? setting('color.elem.bright.tablepage.active.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablepage_active_text"  
                                                                    value="{{(setting('color.elem.bright.tablepage.active.text'))? setting('color.elem.bright.tablepage.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_tablepage_active_border"  
                                                                    value="{{(setting('color.elem.bright.tablepage.active.border'))? setting('color.elem.bright.tablepage.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        
                                                        


                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Popover')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Header')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_popover_header_background"  
                                                                    value="{{(setting('color.elem.bright.popover.header.background'))? setting('color.elem.bright.popover.header.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_popover_header_text"  
                                                                    value="{{(setting('color.elem.bright.popover.header.text'))? setting('color.elem.bright.popover.header.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_popover_header_border"  
                                                                    value="{{(setting('color.elem.bright.popover.header.border'))? setting('color.elem.bright.popover.header.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Body')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_popover_body_background"  
                                                                    value="{{(setting('color.elem.bright.popover.body.background'))? setting('color.elem.bright.popover.body.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_popover_body_text"  
                                                                    value="{{(setting('color.elem.bright.popover.body.text'))? setting('color.elem.bright.popover.body.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_popover_body_border"  
                                                                    value="{{(setting('color.elem.bright.popover.body.border'))? setting('color.elem.bright.popover.body.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('User Status')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Unconfirmed')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_userstatus_unconfirmed_background"  
                                                                    value="{{(setting('color.elem.bright.userstatus.unconfirmed.background'))? setting('color.elem.bright.userstatus.unconfirmed.background'): '#ffc107' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_userstatus_unconfirmed_text"  
                                                                    value="{{(setting('color.elem.bright.userstatus.unconfirmed.text'))? setting('color.elem.bright.userstatus.unconfirmed.text'): '#212529' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_userstatus_unconfirmed_border"  
                                                                    value="{{(setting('color.elem.bright.userstatus.unconfirmed.border'))? setting('color.elem.bright.userstatus.unconfirmed.border'): '#ffc107' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_userstatus_active_background"  
                                                                    value="{{(setting('color.elem.bright.userstatus.active.background'))? setting('color.elem.bright.userstatus.active.background'): '#28a745' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_userstatus_active_text"  
                                                                    value="{{(setting('color.elem.bright.userstatus.active.text'))? setting('color.elem.bright.userstatus.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_userstatus_active_border"  
                                                                    value="{{(setting('color.elem.bright.userstatus.active.border'))? setting('color.elem.bright.userstatus.active.border'): '#28a745' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Banned')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_userstatus_banned_background"  
                                                                    value="{{(setting('color.elem.bright.userstatus.banned.background'))? setting('color.elem.bright.userstatus.banned.background'): '#dc3545' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_userstatus_banned_text"  
                                                                    value="{{(setting('color.elem.bright.userstatus.banned.text'))? setting('color.elem.bright.userstatus.banned.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_userstatus_banned_border"  
                                                                    value="{{(setting('color.elem.bright.userstatus.banned.border'))? setting('color.elem.bright.userstatus.banned.border'): '#dc3545' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Action Button')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionbutton_normal_text"  
                                                                    value="{{(setting('color.elem.bright.actionbutton.normal.text'))? setting('color.elem.bright.actionbutton.normal.text'): '#adb5bd' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionbutton_hover_text"  
                                                                    value="{{(setting('color.elem.bright.actionbutton.hover.text'))? setting('color.elem.bright.actionbutton.hover.text'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionbutton_active_text"  
                                                                    value="{{(setting('color.elem.bright.actionbutton.active.text'))? setting('color.elem.bright.actionbutton.active.text'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionbutton_active_border"  
                                                                    value="{{(setting('color.elem.bright.actionbutton.active.border'))? setting('color.elem.bright.actionbutton.active.border'): '#adb5bd' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Action Menu')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionmenu_normal_background"  
                                                                    value="{{(setting('color.elem.bright.actionmenu.normal.background'))? setting('color.elem.bright.actionmenu.normal.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionmenu_normal_text"  
                                                                    value="{{(setting('color.elem.bright.actionmenu.normal.text'))? setting('color.elem.bright.actionmenu.normal.text'): '#adb5bd' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionmenu_normal_border"  
                                                                    value="{{(setting('color.elem.bright.actionmenu.normal.border'))? setting('color.elem.bright.actionmenu.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionmenu_hover_background"  
                                                                    value="{{(setting('color.elem.bright.actionmenu.hover.background'))? setting('color.elem.bright.actionmenu.hover.background'): '#adb5bd' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionmenu_hover_text"  
                                                                    value="{{(setting('color.elem.bright.actionmenu.hover.text'))? setting('color.elem.bright.actionmenu.hover.text'): '#212529' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_actionmenu_hover_border"  
                                                                    value="{{(setting('color.elem.bright.actionmenu.hover.border'))? setting('color.elem.bright.actionmenu.hover.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Slider')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Background')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_slider_background_background"  
                                                                    value="{{(setting('color.elem.bright.slider.background.background'))? setting('color.elem.bright.slider.background.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Text 1') </label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_slider_text1_text"  
                                                                    value="{{(setting('color.elem.bright.slider.text1.text'))? setting('color.elem.bright.slider.text1.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Text 2') </label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_slider_text2_text"  
                                                                    value="{{(setting('color.elem.bright.slider.text2.text'))? setting('color.elem.bright.slider.text2.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Text 3') </label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_slider_text3_text"  
                                                                    value="{{(setting('color.elem.bright.slider.text3.text'))? setting('color.elem.bright.slider.text3.text'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Navigation Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_slider_navnormal_background"  
                                                                    value="{{(setting('color.elem.bright.slider.navnormal.background'))? setting('color.elem.bright.slider.navnormal.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Navigation Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_slider_navactive_background"  
                                                                    value="{{(setting('color.elem.bright.slider.navactive.background'))? setting('color.elem.bright.slider.navactive.background'): '#5156be' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Navigation Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="bright_elem_slider_navhover_background"  
                                                                    value="{{(setting('color.elem.bright.slider.navhover.background'))? setting('color.elem.bright.slider.navhover.background'): '#5156be' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                            
                                                            


                                                        
                                                        

                                                            
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-12 bright-setting-panel p-4">
                                        <h4>@lang('Dark Theme')</h4>
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive">
                                                <table class="table table-borderless color-table">
                                                    <thead id="color-elem-dark-bar">
                                                    <tr>
                                                        <th ></th>
                                                        <th >@lang('Background')</th>
                                                        <th> @lang('Text')</th>
                                                        <th >@lang('Border')</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="item-container">
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Background')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_background_background"  
                                                                    value="{{(setting('color.elem.dark.background.background'))? setting('color.elem.dark.background.background'): '#495057' }}" 
                                                                    >
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H1')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_h1_text"  
                                                                    value="{{(setting('color.elem.dark.h1.text'))? setting('color.elem.dark.h1.text'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H2')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_h2_text"  
                                                                    value="{{(setting('color.elem.dark.h2.text'))? setting('color.elem.dark.h2.text'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H3')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_h3_text"  
                                                                    value="{{(setting('color.elem.dark.h3.text'))? setting('color.elem.dark.h3.text'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H4')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_h4_text"  
                                                                    value="{{(setting('color.elem.dark.h4.text'))? setting('color.elem.dark.h4.text'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H5')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_h5_text"  
                                                                    value="{{(setting('color.elem.dark.h5.text'))? setting('color.elem.dark.h5.text'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('H6')</label>
                                                            </td>
                                                            <td>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_h6_text"  
                                                                    value="{{(setting('color.elem.dark.h6.text'))? setting('color.elem.dark.h6.text'): '#ced4da' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Sub Text')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_subtext_text"  
                                                                    value="{{(setting('color.elem.dark.subtext.text'))? setting('color.elem.dark.subtext.text'): '#858D98' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Text')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_text_text"  
                                                                    value="{{(setting('color.elem.dark.text.text'))? setting('color.elem.dark.text.text'): '#adb5bd' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Placeholder')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_placeholder_text"  
                                                                    value="{{(setting('color.elem.dark.placeholder.text'))? setting('color.elem.dark.placeholder.text'): '#74788d' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Progress')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_progress_background"  
                                                                    value="{{(setting('color.elem.dark.progress.background'))? setting('color.elem.dark.progress.background'): '#74788d' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_progress_text"  
                                                                    value="{{(setting('color.elem.dark.progress.text'))? setting('color.elem.dark.progress.text'): '#74788d' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Card')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Main')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_box_main_background"  
                                                                    value="{{(setting('color.elem.dark.box.main.background'))? setting('color.elem.dark.box.main.background'): '#313533' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_box_main_border"  
                                                                    value="{{(setting('color.elem.dark.box.main.border'))? setting('color.elem.dark.box.main.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Inner Border')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_box_inner_border"  
                                                                    value="{{(setting('color.elem.dark.box.inner.border'))? setting('color.elem.dark.box.inner.border'): '#e9e9ef' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_box_boxshadow"  
                                                                    value="{{(setting('color.elem.dark.box.boxshadow'))? setting('color.elem.dark.box.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Link')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_link_normal_text"  
                                                                    value="{{(setting('color.elem.dark.link.normal.text'))? setting('color.elem.dark.link.normal.text'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_link_hover_text"  
                                                                    value="{{(setting('color.elem.dark.link.hover.text'))? setting('color.elem.dark.link.hover.text'): '#2ab57d' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Tab Button')</h5>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_normal_background"  
                                                                    value="{{(setting('color.elem.dark.tab.normal.background'))? setting('color.elem.dark.tab.normal.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_normal_text"  
                                                                    value="{{(setting('color.elem.dark.tab.normal.text'))? setting('color.elem.dark.tab.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_normal_border"  
                                                                    value="{{(setting('color.elem.dark.tab.normal.border'))? setting('color.elem.dark.tab.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_hover_background"  
                                                                    value="{{(setting('color.elem.dark.tab.over.background'))? setting('color.elem.dark.tab.over.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_hover_text"  
                                                                    value="{{(setting('color.elem.dark.tab.over.text'))? setting('color.elem.dark.tab.over.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_hover_border"  
                                                                    value="{{(setting('color.elem.dark.tab.over.border'))? setting('color.elem.dark.tab.over.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_active_background"  
                                                                    value="{{(setting('color.elem.dark.tab.active.background'))? setting('color.elem.dark.tab.active.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_active_text"  
                                                                    value="{{(setting('color.elem.dark.tab.active.text'))? setting('color.elem.dark.tab.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_active_border"  
                                                                    value="{{(setting('color.elem.dark.tab.active.border'))? setting('color.elem.dark.tab.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tab_boxshadow"  
                                                                    value="{{(setting('color.elem.dark.tab.boxshadow'))? setting('color.elem.dark.tab.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Update Button')</h5>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_normal_background"  
                                                                    value="{{(setting('color.elem.dark.update.normal.background'))? setting('color.elem.dark.update.normal.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_normal_text"  
                                                                    value="{{(setting('color.elem.dark.update.normal.text'))? setting('color.elem.dark.update.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_normal_border"  
                                                                    value="{{(setting('color.elem.dark.update.normal.border'))? setting('color.elem.dark.update.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_hover_background"  
                                                                    value="{{(setting('color.elem.dark.update.over.background'))? setting('color.elem.dark.update.over.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_hover_text"  
                                                                    value="{{(setting('color.elem.dark.update.over.text'))? setting('color.elem.dark.update.over.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_hover_border"  
                                                                    value="{{(setting('color.elem.dark.update.over.border'))? setting('color.elem.dark.update.over.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_active_background"  
                                                                    value="{{(setting('color.elem.dark.update.active.background'))? setting('color.elem.dark.update.active.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_active_text"  
                                                                    value="{{(setting('color.elem.dark.update.active.text'))? setting('color.elem.dark.update.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_active_border"  
                                                                    value="{{(setting('color.elem.dark.update.active.border'))? setting('color.elem.dark.update.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_update_boxshadow"  
                                                                    value="{{(setting('color.elem.dark.update.boxshadow'))? setting('color.elem.dark.update.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Save Button')</h5>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_normal_background"  
                                                                    value="{{(setting('color.elem.dark.save.normal.background'))? setting('color.elem.dark.save.normal.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_normal_text"  
                                                                    value="{{(setting('color.elem.dark.save.normal.text'))? setting('color.elem.dark.save.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_normal_border"  
                                                                    value="{{(setting('color.elem.dark.save.normal.border'))? setting('color.elem.dark.save.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_hover_background"  
                                                                    value="{{(setting('color.elem.dark.save.hover.background'))? setting('color.elem.dark.save.hover.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_hover_text"  
                                                                    value="{{(setting('color.elem.dark.save.hover.text'))? setting('color.elem.dark.save.hover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_hover_border"  
                                                                    value="{{(setting('color.elem.dark.save.hover.border'))? setting('color.elem.dark.save.hover.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_active_background"  
                                                                    value="{{(setting('color.elem.dark.save.active.background'))? setting('color.elem.dark.save.active.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_active_text"  
                                                                    value="{{(setting('color.elem.dark.save.active.text'))? setting('color.elem.dark.save.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_active_border"  
                                                                    value="{{(setting('color.elem.dark.save.active.border'))? setting('color.elem.dark.save.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_save_boxshadow"  
                                                                    value="{{(setting('color.elem.dark.save.boxshadow'))? setting('color.elem.dark.save.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Add Button')</h5>
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_normal_background"  
                                                                    value="{{(setting('color.elem.dark.addbtn.normal.background'))? setting('color.elem.dark.addbtn.normal.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_normal_text"  
                                                                    value="{{(setting('color.elem.dark.addbtn.normal.text'))? setting('color.elem.dark.addbtn.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_normal_border"  
                                                                    value="{{(setting('color.elem.dark.addbtn.normal.border'))? setting('color.elem.dark.addbtn.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_hover_background"  
                                                                    value="{{(setting('color.elem.dark.addbtn.hover.background'))? setting('color.elem.dark.addbtn.hover.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_hover_text"  
                                                                    value="{{(setting('color.elem.dark.addbtn.hover.text'))? setting('color.elem.dark.addbtn.hover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_hover_border"  
                                                                    value="{{(setting('color.elem.dark.addbtn.hover.border'))? setting('color.elem.dark.addbtn.hover.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_active_background"  
                                                                    value="{{(setting('color.elem.dark.addbtn.active.background'))? setting('color.elem.dark.addbtn.active.background'): '#7a7fdc' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_active_text"  
                                                                    value="{{(setting('color.elem.dark.addbtn.active.text'))? setting('color.elem.dark.addbtn.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_active_border"  
                                                                    value="{{(setting('color.elem.dark.addbtn.active.border'))? setting('color.elem.dark.addbtn.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_addbtn_boxshadow"  
                                                                    value="{{(setting('color.elem.dark.addbtn.boxshadow'))? setting('color.elem.dark.addbtn.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Input Box')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_input_normal_border"  
                                                                    value="{{(setting('color.elem.dark.input.normal.border'))? setting('color.elem.dark.input.normal.border'): '#adb5bd' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_input_active_border"  
                                                                    value="{{(setting('color.elem.dark.input.active.border'))? setting('color.elem.dark.input.normal.border'): '#adb5bd' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Message')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Success')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_message_success_background"  
                                                                    value="{{(setting('color.elem.dark.message.success.background'))? setting('color.elem.dark.message.success.background'): '#d4edda' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_message_success_text"  
                                                                    value="{{(setting('color.elem.dark.message.success.text'))? setting('color.elem.dark.message.success.text'): '#155724' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_message_success_border"  
                                                                    value="{{(setting('color.elem.dark.message.success.border'))? setting('color.elem.dark.message.success.border'): '#c3e6cb' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Warning')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_message_warning_background"  
                                                                    value="{{(setting('color.elem.dark.message.warning.background'))? setting('color.elem.dark.message.warning.background'): '#fff3cd' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_message_warning_text"  
                                                                    value="{{(setting('color.elem.dark.message.warning.text'))? setting('color.elem.dark.message.warning.text'): '#856404' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_message_warning_border"  
                                                                    value="{{(setting('color.elem.dark.message.warning.border'))? setting('color.elem.dark.message.warning.border'): '#ffeeba' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Error')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_message_error_background"  
                                                                    value="{{(setting('color.elem.dark.message.error.background'))? setting('color.elem.dark.message.error.background'): '#f8d7da' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_message_error_text"  
                                                                    value="{{(setting('color.elem.dark.message.error.text'))? setting('color.elem.dark.message.error.text'): '#721c24' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_message_error_border"  
                                                                    value="{{(setting('color.elem.dark.message.error.border'))? setting('color.elem.dark.message.error.border'): '#f5c6cb' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Switch')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_switch_active_background"  
                                                                    value="{{(setting('color.elem.dark.switch.active.background'))? setting('color.elem.dark.switch.active.background'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_switch_active_text"  
                                                                    value="{{(setting('color.elem.dark.switch.active.text'))? setting('color.elem.dark.switch.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Inactive')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_switch_inactive_background"  
                                                                    value="{{(setting('color.elem.dark.switch.inactive.background'))? setting('color.elem.dark.switch.inactive.background'): '#dee2e6' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_switch_inactive_text"  
                                                                    value="{{(setting('color.elem.dark.switch.inactive.text'))? setting('color.elem.dark.switch.inactive.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Enable Button')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_enablebutton_normal_background"  
                                                                    value="{{(setting('color.elem.dark.enablebutton.normal.background'))? setting('color.elem.dark.enablebutton.normal.background'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_enablebutton_normal_text"  
                                                                    value="{{(setting('color.elem.dark.enablebutton.normal.text'))? setting('color.elem.dark.enablebutton.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_enablebutton_normal_border"  
                                                                    value="{{(setting('color.elem.dark.enablebutton.normal.border'))? setting('color.elem.dark.enablebutton.normal.border'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_enablebutton_hover_background"  
                                                                    value="{{(setting('color.elem.dark.enablebutton.hover.background'))? setting('color.elem.dark.enablebutton.hover.background'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_enablebutton_hover_text"  
                                                                    value="{{(setting('color.elem.dark.enablebutton.hover.text'))? setting('color.elem.dark.enablebutton.hover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_enablebutton_hover_border"  
                                                                    value="{{(setting('color.elem.dark.enablebutton.hover.border'))? setting('color.elem.dark.enablebutton.hover.border'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_enablebutton_boxshadow"  
                                                                    value="{{(setting('color.elem.dark.enablebutton.boxshadow'))? setting('color.elem.dark.enablebutton.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Disable Button')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_disablebutton_normal_background"  
                                                                    value="{{(setting('color.elem.dark.disablebutton.normal.background'))? setting('color.elem.dark.disablebutton.normal.background'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_disablebutton_normal_text"  
                                                                    value="{{(setting('color.elem.dark.disablebutton.normal.text'))? setting('color.elem.dark.disablebutton.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_disablebutton_normal_border"  
                                                                    value="{{(setting('color.elem.dark.disablebutton.normal.border'))? setting('color.elem.dark.disablebutton.normal.border'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_disablebutton_hover_background"  
                                                                    value="{{(setting('color.elem.dark.disablebutton.hover.background'))? setting('color.elem.dark.disablebutton.hover.background'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_disablebutton_hover_text"  
                                                                    value="{{(setting('color.elem.dark.disablebutton.hover.text'))? setting('color.elem.dark.disablebutton.hover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_disablebutton_hover_border"  
                                                                    value="{{(setting('color.elem.dark.disablebutton.hover.border'))? setting('color.elem.dark.disablebutton.hover.border'): '#686cbb' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Box Shadow')</label>
                                                            </td>
                                                            
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_disablebutton_boxshadow"  
                                                                    value="{{(setting('color.elem.dark.disablebutton.boxshadow'))? setting('color.elem.dark.disablebutton.boxshadow'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Search Box')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                            
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_searchbox_normal_border"  
                                                                    value="{{(setting('color.elem.dark.searchbox.normal.border'))? setting('color.elem.dark.searchbox.normal.border'): '#3b403d' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal Button')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_searchbox_normalbutton_background"  
                                                                    value="{{(setting('color.elem.dark.searchbox.normalbutton.background'))? setting('color.elem.dark.searchbox.normalbutton.background'): '#363a38' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_searchbox_normalbutton_text"  
                                                                    value="{{(setting('color.elem.dark.searchbox.normalbutton.text'))? setting('color.elem.dark.searchbox.normalbutton.text'): '#adb5bd' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_searchbox_normalbutton_border"  
                                                                    value="{{(setting('color.elem.dark.searchbox.normalbutton.border'))? setting('color.elem.dark.searchbox.normalbutton.border'): '#adb5bd' }}" 
                                                                    >
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                            
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_searchbox_active_border"  
                                                                    value="{{(setting('color.elem.dark.searchbox.active.border'))? setting('color.elem.dark.searchbox.active.border'): '#3b403d' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active Button')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_searchbox_activebutton_background"  
                                                                    value="{{(setting('color.elem.dark.searchbox.activebutton.background'))? setting('color.elem.dark.searchbox.activebutton.background'): '#363a38' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_searchbox_activebutton_text"  
                                                                    value="{{(setting('color.elem.dark.searchbox.activebutton.text'))? setting('color.elem.dark.searchbox.activebutton.text'): '#adb5bd' }}" 
                                                                    >
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_searchbox_activebutton_border"  
                                                                    value="{{(setting('color.elem.dark.searchbox.activebutton.border'))? setting('color.elem.dark.searchbox.activebutton.border'): '#adb5bd' }}" 
                                                                    >
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Check Box')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Checked')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_checkbox_checked_background"  
                                                                    value="{{(setting('color.elem.dark.checkbox.checked.background'))? setting('color.elem.dark.checkbox.checked.background'): '#f8f9fa' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Unchecked')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_checkbox_unchecked_background"  
                                                                    value="{{(setting('color.elem.dark.checkbox.unchecked.background'))? setting('color.elem.dark.checkbox.unchecked.background'): '#f8f9fa' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Table Content')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Odd')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablecontent_odd_background"  
                                                                    value="{{(setting('color.elem.dark.tablecontent.odd.background'))? setting('color.elem.dark.tablecontent.odd.background'): '#f8f9fa' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablecontent_odd_text"  
                                                                    value="{{(setting('color.elem.dark.tablecontent.odd.text'))? setting('color.elem.dark.tablecontent.odd.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Even')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablecontent_even_background"  
                                                                    value="{{(setting('color.elem.dark.tablecontent.even.background'))? setting('color.elem.dark.tablecontent.even.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablecontent_even_text"  
                                                                    value="{{(setting('color.elem.dark.tablecontent.even.text'))? setting('color.elem.dark.tablecontent.even.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Link Normal')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablecontent_linknormal_text"  
                                                                    value="{{(setting('color.elem.dark.tablecontent.linknormal.text'))? setting('color.elem.dark.tablecontent.linknormal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                                
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Link Hover')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablecontent_linkover_text"  
                                                                    value="{{(setting('color.elem.dark.tablecontent.linkover.text'))? setting('color.elem.dark.tablecontent.linkover.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablecontent_active_text"  
                                                                    value="{{(setting('color.elem.dark.tablecontent.active.text'))? setting('color.elem.dark.tablecontent.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Table Pagination')</h5>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablepage_normal_background"  
                                                                    value="{{(setting('color.elem.dark.tablepage.normal.background'))? setting('color.elem.dark.tablepage.normal.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablepage_normal_text"  
                                                                    value="{{(setting('color.elem.dark.tablepage.normal.text'))? setting('color.elem.dark.tablepage.normal.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablepage_normal_border"  
                                                                    value="{{(setting('color.elem.dark.tablepage.normal.border'))? setting('color.elem.dark.tablepage.normal.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablepage_over_background"  
                                                                    value="{{(setting('color.elem.dark.tablepage.over.background'))? setting('color.elem.dark.tablepage.over.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablepage_over_text"  
                                                                    value="{{(setting('color.elem.dark.tablepage.over.text'))? setting('color.elem.dark.tablepage.over.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablepage_over_border"  
                                                                    value="{{(setting('color.elem.dark.tablepage.over.border'))? setting('color.elem.dark.tablepage.over.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablepage_active_background"  
                                                                    value="{{(setting('color.elem.dark.tablepage.active.background'))? setting('color.elem.dark.tablepage.active.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablepage_active_text"  
                                                                    value="{{(setting('color.elem.dark.tablepage.active.text'))? setting('color.elem.dark.tablepage.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_tablepage_active_border"  
                                                                    value="{{(setting('color.elem.dark.tablepage.active.border'))? setting('color.elem.dark.tablepage.active.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Popover')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Header')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_popover_header_background"  
                                                                    value="{{(setting('color.elem.dark.popover.header.background'))? setting('color.elem.dark.popover.header.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_popover_header_text"  
                                                                    value="{{(setting('color.elem.dark.popover.header.text'))? setting('color.elem.dark.popover.header.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_popover_header_border"  
                                                                    value="{{(setting('color.elem.dark.popover.header.border'))? setting('color.elem.dark.popover.header.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Body')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_popover_body_background"  
                                                                    value="{{(setting('color.elem.dark.popover.body.background'))? setting('color.elem.dark.popover.body.background'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_popover_body_text"  
                                                                    value="{{(setting('color.elem.dark.popover.body.text'))? setting('color.elem.dark.popover.body.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_popover_body_border"  
                                                                    value="{{(setting('color.elem.dark.popover.body.border'))? setting('color.elem.dark.popover.body.border'): '#ffffff' }}" 
                                                                    >
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('User Status')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Unconfirmed')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_userstatus_unconfirmed_background"  
                                                                    value="{{(setting('color.elem.dark.userstatus.unconfirmed.background'))? setting('color.elem.dark.userstatus.unconfirmed.background'): '#ffc107' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_userstatus_unconfirmed_text"  
                                                                    value="{{(setting('color.elem.dark.userstatus.unconfirmed.text'))? setting('color.elem.dark.userstatus.unconfirmed.text'): '#212529' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_userstatus_unconfirmed_border"  
                                                                    value="{{(setting('color.elem.dark.userstatus.unconfirmed.border'))? setting('color.elem.dark.userstatus.unconfirmed.border'): '#ffc107' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_userstatus_active_background"  
                                                                    value="{{(setting('color.elem.dark.userstatus.active.background'))? setting('color.elem.dark.userstatus.active.background'): '#28a745' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_userstatus_active_text"  
                                                                    value="{{(setting('color.elem.dark.userstatus.active.text'))? setting('color.elem.dark.userstatus.active.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_userstatus_active_border"  
                                                                    value="{{(setting('color.elem.dark.userstatus.active.border'))? setting('color.elem.dark.userstatus.active.border'): '#28a745' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Banned')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_userstatus_banned_background"  
                                                                    value="{{(setting('color.elem.dark.userstatus.banned.background'))? setting('color.elem.dark.userstatus.banned.background'): '#dc3545' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_userstatus_banned_text"  
                                                                    value="{{(setting('color.elem.dark.userstatus.banned.text'))? setting('color.elem.dark.userstatus.banned.text'): '#ffffff' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_userstatus_banned_border"  
                                                                    value="{{(setting('color.elem.dark.userstatus.banned.border'))? setting('color.elem.dark.userstatus.banned.border'): '#dc3545' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Action Button')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionbutton_normal_text"  
                                                                    value="{{(setting('color.elem.dark.actionbutton.normal.text'))? setting('color.elem.dark.actionbutton.normal.text'): '#f6f6f6' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionbutton_hover_text"  
                                                                    value="{{(setting('color.elem.dark.actionbutton.hover.text'))? setting('color.elem.dark.actionbutton.hover.text'): '#f6f6f6' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Active')</label>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionbutton_active_text"  
                                                                    value="{{(setting('color.elem.dark.actionbutton.active.text'))? setting('color.elem.dark.actionbutton.active.text'): '#f6f6f6' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionbutton_active_border"  
                                                                    value="{{(setting('color.elem.dark.actionbutton.active.border'))? setting('color.elem.dark.actionbutton.active.border'): '#f6f6f6' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan ="2" >
                                                                <h5>&nbsp; &nbsp; &nbsp;@lang('Action Menu')</h5>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Normal')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionmenu_normal_background"  
                                                                    value="{{(setting('color.elem.dark.actionmenu.normal.background'))? setting('color.elem.dark.actionmenu.normal.background'): '#3d4240' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionmenu_normal_text"  
                                                                    value="{{(setting('color.elem.dark.actionmenu.normal.text'))? setting('color.elem.dark.actionmenu.normal.text'): '#adb5bd' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionmenu_normal_border"  
                                                                    value="{{(setting('color.elem.dark.actionmenu.normal.border'))? setting('color.elem.dark.actionmenu.normal.border'): '#3d4240' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <label>@lang('Hover')</label>
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionmenu_hover_background"  
                                                                    value="{{(setting('color.elem.dark.actionmenu.hover.background'))? setting('color.elem.dark.actionmenu.hover.background'): '#3d4240' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionmenu_hover_text"  
                                                                    value="{{(setting('color.elem.dark.actionmenu.hover.text'))? setting('color.elem.dark.actionmenu.hover.text'): '#adb5bd' }}" 
                                                                    >
                                                            </td>
                                                            <td>
                                                                <input type="color"  class="form-control input-solid color-select"
                                                                    name="dark_elem_actionmenu_hover_border"  
                                                                    value="{{(setting('color.elem.dark.actionmenu.hover.border'))? setting('color.elem.dark.actionmenu.hover.border'): '#3d4240' }}" 
                                                                    >
                                                            </td>
                                                        </tr>
                                                        

                                                            
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
                <input type="hidden" name="color_hash" id="color_hash" value="{{isset($hash)? $hash: 'v-pills-header'}}">
                <button type="submit"  id="color_change_btn" class="btn btn-primary update-btn">
                    @lang('Update')
                </button>
            </div>
        </div>
    </div>
</div>
