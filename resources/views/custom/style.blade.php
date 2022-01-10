<style type="text/css">
    .auth-bg{
        background-image:url({{url(setting('logImage'))}}) !important;
    }
    /* header */
    body[data-layout-mode=dark] header{
        background-color:{{ setting('color.header.dark.background.main')}} !important;
        border-color:{{setting('color.header.dark.background.border')}} !important;
        /* color: {{setting('color.header.dark.text.main')}} !important; */
    }
    body[data-layout-mode=dark] header .dropdown-menu{
        background-color:{{ setting('color.header.dark.submenu.main')}} !important;
        border-color:{{setting('color.header.dark.submenu.border')}} !important;
    }
    body[data-layout-mode=dark] header .dropdown-divider{
        border-top-color: {{setting('color.header.dark.submenu.border')}} !important;
    }
    body[data-layout-mode=dark] header .dropdown-menu a{
        background-color:{{ setting('color.header.dark.submenu.main')}} !important;
    }
    body[data-layout-mode=dark] header .header-profile-user{
        background-color:{{ setting('color.header.dark.text.border')}} !important;
    }
    body[data-layout-mode=dark] header button:hover,
    body[data-layout-mode=dark] header .breadcrumb-item a:hover,
    body[data-layout-mode=dark] header .dropdown-menu a:hover{
        color:{{ setting('color.header.dark.link.hover')}} !important;
    }
    body[data-layout-mode=dark] .navbar-header .dropdown .show.header-item {
        background-color:{{ setting('color.header.dark.background.main')}} !important;
    }
    body[data-layout-mode=dark] header .btn{
        color:{{setting('color.header.dark.text.main')}} !important;
    }
    body[data-layout-mode=dark] header .breadcrumb-item,
    body[data-layout-mode=dark] header .breadcrumb-item+.breadcrumb-item:before
    {
        color:{{setting('color.header.dark.text.main')}} !important;
    }
    body[data-layout-mode=dark] header .breadcrumb-item>a,
    {
        color:{{setting('color.header.dark.link.main')}} !important;
    }
    /* body[data-layout-mode=dark] header button:focus, */
    body[data-layout-mode=dark] header .breadcrumb-item>a:hover
    {
        color:{{setting('color.header.dark.link.hover')}} !important;
    }
    body[data-layout-mode=dark] header a.dropdown-item{
        color:{{setting('color.header.dark.link.main')}} !important;
    }
    
    
    header .dropdown-menu{
        background-color:{{ setting('color.header.bright.submenu.main')}} !important;
        border-color:{{setting('color.header.bright.submenu.border')}} !important;
    }
    header{
        background-color:{{ setting('color.header.bright.background.main')}} !important;
        border-color:{{setting('color.header.bright.background.border')}} !important;
        /* color: {{setting('color.header.bright.text.main')}} !important; */
    }
    header .header-profile-user{
        background-color:{{ setting('color.header.bright.text.border')}} !important;
    }

    header .dropdown-menu a{
        background-color:{{ setting('color.header.bright.submenu.main')}} !important;
    }
    header button:hover,
    header .breadcrumb-item a:hover,
    header .dropdown-menu a:hover{
        color:{{ setting('color.header.bright.link.hover')}} !important;
    }
    
    /* header .breadcrumb-item a:active,
    header .dropdown-menu a:active{
        color:{{ setting('color.header.bright.text.link')}} !important;
    } */
    .navbar-header .dropdown .show.header-item {
        background-color:{{ setting('color.header.bright.background.main')}} !important;
    }
    header .btn{
        color:{{setting('color.header.bright.text.main')}} !important;
    }
    header .breadcrumb-item,
    header .breadcrumb-item+.breadcrumb-item:before
    {
        color:{{setting('color.header.bright.text.main')}} !important;
    }
    header .breadcrumb-item>a{
        color:{{setting('color.header.bright.link.main')}} !important;
    }
    /* header button:focus, */
    header .breadcrumb-item>a:hover{
        color:{{setting('color.header.bright.link.hover')}} !important;
    }
    header a.dropdown-item{
        color:{{setting('color.header.bright.link.main')}} !important;
    }
    header .dropdown-divider{
        border-top-color: {{setting('color.header.bright.submenu.border')}} !important;
    }
   
    
    /* sidebar */
    body[data-layout-mode=dark] .vertical-menu
    {
        background-color:{{setting('color.sidebar.dark.background.main')}} !important;
        border-right-color:{{setting('color.sidebar.dark.background.border')}} !important;
    }
    body[data-layout-mode=dark] .navbar-brand-box{
        background-color:{{setting('color.sidebar.dark.background.main')}} !important;
        border-right-color:{{setting('color.sidebar.dark.brandright.main')}} !important;
        box-shadow: 0 3px 1px {{setting('color.sidebar.dark.brandbottom.main')}} !important;
    }
    .vertical-menu
    {
        background-color:{{setting('color.sidebar.bright.background.main')}} !important;
        border-right-color:{{setting('color.sidebar.bright.background.border')}} !important;
    }
    .navbar-brand-box{
        background-color:{{setting('color.sidebar.bright.background.main')}} !important;
        border-right-color:{{setting('color.sidebar.bright.brandright.main')}} !important;
        box-shadow: 0 3px 1px {{setting('color.sidebar.bright.brandbottom.main')}} !important;
    }
   
    body[data-layout-mode=dark] #side-menu li a{
        color:{{setting('color.sidebar.dark.menuitem.main')}} !important;
    }
    #side-menu .menu-title,
    .logo-txt,
    #vertical-menu-btn,
    #side-menu li a,
    #side-menu li a i{
        color:{{setting('color.sidebar.bright.menuitem.main')}} !important;
    }
    #side-menu li a:hover,
    #side-menu li a:hover i,
    #vertical-menu-btn:hover
    {
        color:{{setting('color.sidebar.bright.menuitem.hover')}} !important;
    }
    #side-menu .mm-active>a,
    #side-menu .mm-active>a i{
        color:{{setting('color.sidebar.bright.menuitem.hover')}} !important;
    }
    @if(null!=setting('color.sidebar.bright.upgradebox.background.border') )
    .upgrade-box
    {
        background-color:{{setting('color.sidebar.bright.upgradebox.background.main')}} !important;
        border:1px solid{{setting('color.sidebar.bright.upgradebox.background.border')}}!important;
        border-radius:.5rem;
        -webkit-box-shadow: 0 0 8px 0 {{setting('color.sidebar.bright.alpha.upgradebox.boxshadow')}}, 0 1px 0 0 {{setting('color.sidebar.bright.alpha.upgradebox.boxshadow')}};
        box-shadow: 0 0 8px 0 {{setting('color.sidebar.bright.alpha.upgradebox.boxshadow')}}, 0 1px 0 0 {{setting('color.sidebar.bright.alpha.upgradebox.boxshadow')}};
    
        
    }
    @else
    .upgrade-box
    {
        background-color:{{setting('color.sidebar.bright.upgradebox.background.main')}} !important;
        border-radius:.5rem;
        -webkit-box-shadow: 0 0 8px 0 {{setting('color.sidebar.bright.alpha.upgradebox.boxshadow')}}, 0 1px 0 0 {{setting('color.sidebar.bright.alpha.upgradebox.boxshadow')}};
        box-shadow: 0 0 8px 0 {{setting('color.sidebar.bright.alpha.upgradebox.boxshadow')}}, 0 1px 0 0 {{setting('color.elem.bright.alpha.box.boxshadow')}};
    
    }
    @endif
    #sidebar-menu .card{
        background-color:{{setting('color.sidebar.bright.background.main')}} !important;
    }
    .upgrade-box .mt-4 a{
        background-color:{{setting('color.sidebar.bright.upgradebox.button.main')}} !important;
        border-color:{{setting('color.sidebar.bright.upgradebox.button.border')}} !important;
        color:{{setting('color.sidebar.bright.upgradebox.buttontext.main')}}!important;
    }
    .upgrade-box .mt-4 a:hover,
    .upgrade-box .mt-4 a:active
    {
        background-color:{{setting('color.sidebar.bright.upgradebox.button.hover')}} !important;
        border-color:{{setting('color.sidebar.bright.upgradebox.button.hover')}} !important;
    }
    .upgrade-box .mt-4 p{
        color:{{setting('color.sidebar.bright.upgradebox.text.main')}}!important;
    }
    .upgrade-box .mt-4 h5{
        color:{{setting('color.sidebar.bright.upgradebox.headline.main')}}!important;
    }

   


    body[data-layout-mode=dark] #side-menu .menu-title,
    body[data-layout-mode=dark] .logo-txt,
    body[data-layout-mode=dark] #vertical-menu-btn,
    body[data-layout-mode=dark] #side-menu li a,
    body[data-layout-mode=dark] #side-menu li a i{
        color:{{setting('color.sidebar.dark.menuitem.main')}} !important;
    }
    body[data-layout-mode=dark] #side-menu li a:hover,
    body[data-layout-mode=dark] #side-menu li a:hover i,
    body[data-layout-mode=dark] #vertical-menu-btn:hover
    {
        color:{{setting('color.sidebar.dark.menuitem.hover')}} !important;
    }
    body[data-layout-mode=dark] #side-menu .mm-active>a,
    body[data-layout-mode=dark] #side-menu .mm-active>a i{
        color:{{setting('color.sidebar.dark.menuitem.hover')}} !important;
    }
    @if(null != setting('color.sidebar.dark.upgradebox.background.border'))
    body[data-layout-mode=dark] .upgrade-box
    {
        background-color:{{setting('color.sidebar.dark.upgradebox.background.main')}} !important;
        border:1px solid {{setting('color.sidebar.dark.upgradebox.background.border')}}!important;
        border-radius:.5rem;
        -webkit-box-shadow: 0 0 8px 0 {{setting('color.sidebar.dark.alpha.upgradebox.boxshadow')}}, 0 1px 0 0 {{setting('color.sidebar.dark.alpha.upgradebox.boxshadow')}};
        box-shadow: 0 0 8px 0 {{setting('color.sidebar.dark.alpha.upgradebox.boxshadow')}}, 0 1px 0 0 {{setting('color.sidebar.dark.alpha.upgradebox.boxshadow')}};
    
    }
    @else
    body[data-layout-mode=dark] .upgrade-box
    {
        background-color:{{setting('color.sidebar.dark.upgradebox.background.main')}} !important;
        border-radius:.5rem;
        -webkit-box-shadow: 0 0 8px 0 {{setting('color.sidebar.dark.alpha.upgradebox.boxshadow')}}, 0 1px 0 0 {{setting('color.sidebar.dark.alpha.upgradebox.boxshadow')}};
        box-shadow: 0 0 8px 0 {{setting('color.sidebar.dark.alpha.upgradebox.boxshadow')}}, 0 1px 0 0 {{setting('color.sidebar.dark.alpha.upgradebox.boxshadow')}};
    
    }
    @endif
    body[data-layout-mode=dark] #sidebar-menu .card{
        background-color:{{setting('color.sidebar.dark.background.main')}} !important;
    }
    body[data-layout-mode=dark] .upgrade-box .mt-4 a{
        background-color:{{setting('color.sidebar.dark.upgradebox.button.main')}} !important;
        border-color:{{setting('color.sidebar.dark.upgradebox.button.border')}} !important;
        color:{{setting('color.sidebar.dark.upgradebox.buttontext.main')}}!important;
    }
    body[data-layout-mode=dark] .upgrade-box .mt-4 a:hover,
    body[data-layout-mode=dark] .upgrade-box .mt-4 a:active
    {
        background-color:{{setting('color.sidebar.dark.upgradebox.button.hover')}} !important;
        border-color:{{setting('color.sidebar.dark.upgradebox.button.hover')}} !important;
    }
    body[data-layout-mode=dark] .upgrade-box .mt-4 p{
        color:{{setting('color.sidebar.dark.upgradebox.text.main')}}!important;
    }
    body[data-layout-mode=dark] .upgrade-box .mt-4 h5{
        color:{{setting('color.sidebar.dark.upgradebox.headline.main')}}!important;
    }

    
    body[data-sidebar-size=sm] .vertical-menu #sidebar-menu>ul>li:hover>a
    {
        background-color:{{setting('color.sidebar.bright.minimization.topitem.main')}} !important;
        border:1px solid {{setting('color.sidebar.bright.minimization.topitem.border')}} !important;
    }
    body[data-sidebar-size=sm] .vertical-menu #settings-dropdown a,
    body[data-sidebar-size=sm] .vertical-menu #roles-dropdown a{
        color:{{setting('color.sidebar.bright.minimization.text.main')}} !important;
    }
    body[data-sidebar-size=sm] .vertical-menu #settings-dropdown a:hover,
    body[data-sidebar-size=sm] .vertical-menu #settings-dropdown a:active,
    body[data-sidebar-size=sm] .vertical-menu #roles-dropdown a:hover,
    body[data-sidebar-size=sm] .vertical-menu #roles-dropdown a:active
    {
        color:{{setting('color.sidebar.bright.minimization.submenu.hover')}} !important;
    }
    @if( null !== setting('color.sidebar.bright.minimization.border'))
    body[data-sidebar-size=sm] .vertical-menu #settings-dropdown,
    body[data-sidebar-size=sm] .vertical-menu #roles-dropdown {
        background-color:{{setting('color.sidebar.bright.minimization.submenu.main')}} !important;
        border:1px solid {{setting('color.sidebar.bright.minimization.submneu.border')}} !important;
        color:{{setting('color.sidebar.bright.minimization.text.main')}} !important;
    }
    @else
    body[data-sidebar-size=sm] .vertical-menu #settings-dropdown,
    body[data-sidebar-size=sm] .vertical-menu #roles-dropdown{
        background-color:{{setting('color.sidebar.bright.minimization.submenu.main')}} !important;
        border:1px solid {{setting('color.sidebar.bright.minimization.submneu.border')}} !important;
        color:{{setting('color.sidebar.bright.minimization.text.main')}} !important;

    }
    @endif
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #sidebar-menu>ul>li:hover>a
    {
        background-color:{{setting('color.sidebar.dark.minimization.topitem.main')}} !important;
        border:1px solid {{setting('color.sidebar.dark.minimization.topitem.border')}} !important;
    }
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #settings-dropdown a,
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #roles-dropdown a
    {
        color:{{setting('color.sidebar.dark.minimization.text.main')}} !important;
    }
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #settings-dropdown a:hover,
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #settings-dropdown a:active,
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #roles-dropdown a:hover,
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #roles-dropdown a:active
    {
        color:{{setting('color.sidebar.dark.minimization.submenu.hover')}} !important;
    }
    @if(null !== setting('color.sidebar.dark.minimization.border'))
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #settings-dropdown,
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #roles-dropdown{
        background-color:{{setting('color.sidebar.dark.minimization.submenu.main')}} !important;
        border:1px solid {{setting('color.sidebar.dark.minimization.submenu.border')}} !important;


    }
    @else
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #settings-dropdown,
    body[data-layout-mode=dark][data-sidebar-size=sm] .vertical-menu #roles-dropdown{
        background-color:{{setting('color.sidebar.dark.minimization.submenu.main')}} !important;
        border-bottom:1px solid {{setting('color.sidebar.dark.minimization.submenu.border')}} !important;
        color:{{setting('color.sidebar.dark.minimization.text.main')}} !important;

    }
    @endif
    
    /* slider */

    .carousel-item .text-success
    {
        color:{{setting('color.elem.bright.slider.text1.text')}} !important;
    }
    h4.text-white,
    h5.text-white
    {
        color:{{setting('color.elem.bright.slider.text2.text')}} !important;
    }
    p.text-white-50{
        color:{{setting('color.elem.bright.slider.text3.text')}} !important;

    }
    button[data-bs-target="#reviewcarouselIndicators"]{
        background-color:{{setting('color.elem.bright.slider.navnormal.background')}} !important;
    }
    button[data-bs-target="#reviewcarouselIndicators"]:hover{
        background-color:{{setting('color.elem.bright.slider.navhover.background')}} !important;
    }
    button[data-bs-target="#reviewcarouselIndicators"].active{
        background-color:{{setting('color.elem.bright.slider.navactive.background')}} !important;
    }
    .bg-overlay{
        background-color:{{setting('color.elem.bright.slider.background.background')}} !important;
    }

    /* elements */
    h1{
        color:{{setting('color.elem.bright.h1.text')}} !important;
    }
    h2{
        color:{{setting('color.elem.bright.h2.text')}} !important;
    }
    h3{
        color:{{setting('color.elem.bright.h3.text')}} !important;
    }
    h4{
        color:{{setting('color.elem.bright.h4.text')}} !important;
    }
    h5{
        color:{{setting('color.elem.bright.h5.text')}} !important;
    }
    h6{
        color:{{setting('color.elem.bright.h6.text')}} !important;
    }
    .card-title-desc,
    .text-muted,
    .copyright{
        color:{{setting('color.elem.bright.subtext.text')}} !important;
    }
    label, textarea, input.form-control, th, .list-group-item{
        color:{{setting('color.elem.bright.text.text')}} !important;
    }
    .lasted-registration li
    {
        background-color:{{setting('color.elem.bright.box.main.background')}} !important;

    }
    @if( null !== setting('color.elem.bright.box.main.border'))

    .card{
        background-color:{{setting('color.elem.bright.box.main.background')}} !important;
        border:1px solid {{setting('color.elem.bright.box.main.border')}} !important;
        -webkit-box-shadow: 0 0 8px 0 {{setting('color.elem.bright.alpha.box.boxshadow')}}, 0 1px 0 0 {{setting('color.elem.bright.alpha.box.boxshadow')}};
        box-shadow: 0 0 8px 0 {{setting('color.elem.bright.alpha.box.boxshadow')}}, 0 1px 0 0 {{setting('color.elem.bright.alpha.box.boxshadow')}};
    
    }
    @else
    .card{
        background-color:{{setting('color.elem.bright.box.main.background')}} !important;
        -webkit-box-shadow: 0 0 8px 0 {{setting('color.elem.bright.alpha.box.boxshadow')}}, 0 1px 0 0 {{setting('color.elem.bright.alpha.box.boxshadow')}};
        box-shadow: 0 0 8px 0 {{setting('color.elem.bright.alpha.box.boxshadow')}}, 0 1px 0 0 {{setting('color.elem.bright.alpha.box.boxshadow')}};
    
    }
    @endif
    
    @if( null !== setting('color.elem.bright.box.inner.border')))
    .card-header{
        background-color:{{setting('color.elem.bright.box.main.background')}} !important;
        border-bottom:1px solid {{setting('color.elem.bright.box.inner.border')}} !important;
    }
    @else
    .card-header{
        background-color:{{setting('color.elem.bright.box.main.background')}} !important;   
    }
    @endif
    
    a[href*="http"], 
    .custom-control-label a 
    {
        color:{{setting('color.elem.bright.link.normal.text')}} !important;
    }
    a[href*="http"]:hover,
    .custom-control-label a:hover{
        color:{{setting('color.elem.bright.link.hover.text')}} !important;
    }
    a[data-bs-toggle="pill"]{
        background-color:{{setting('color.elem.bright.tab.normal.background')}} !important;
        color:{{setting('color.elem.bright.tab.normal.text')}} !important;
        border:1px solid {{setting('color.elem.bright.tab.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.tab.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.tab.boxshadow')}};
    }
    a[data-bs-toggle="pill"]:hover{
        background-color:{{setting('color.elem.bright.tab.over.background')}} !important;
        color:{{setting('color.elem.bright.tab.over.text')}} !important;
        border:1px solid {{setting('color.elem.bright.tab.over.border')}} !important;
    }
    .nav-pills .nav-link.active{
        background-color:{{setting('color.elem.bright.tab.active.background')}} !important;
        color:{{setting('color.elem.bright.tab.active.text')}} !important;
        border:1px solid {{setting('color.elem.bright.tab.active.border')}} !important;
    }
    .update-btn{
        background-color:{{setting('color.elem.bright.update.normal.background')}} !important;
        color:{{setting('color.elem.bright.update.normal.text')}} !important;
        border:1px solid {{setting('color.elem.bright.update.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.update.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.update.boxshadow')}};
    }
    .update-btn:hover{
        background-color:{{setting('color.elem.bright.update.over.background')}} !important;
        color:{{setting('color.elem.bright.update.over.text')}} !important;
        border:1px solid {{setting('color.elem.bright.update.over.border')}} !important;
    }
    .update-btn:focus{
        background-color:{{setting('color.elem.bright.update.active.background')}} !important;
        color:{{setting('color.elem.bright.update.active.text')}} !important;
        border:1px solid {{setting('color.elem.bright.update.active.border')}} !important;
    }
    .save-btn{
        background-color:{{setting('color.elem.bright.save.normal.background')}} !important;
        color:{{setting('color.elem.bright.save.normal.text')}} !important;
        border:1px solid {{setting('color.elem.bright.save.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.save.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.save.boxshadow')}};
    }
    .save-btn:hover{
        background-color:{{setting('color.elem.bright.save.hover.background')}} !important;
        color:{{setting('color.elem.bright.save.hover.text')}} !important;
        border:1px solid {{setting('color.elem.bright.save.hover.border')}} !important;
    }
    .save-btn:focus{
        background-color:{{setting('color.elem.bright.save.active.background')}} !important;
        color:{{setting('color.elem.bright.save.active.text')}} !important;
        border:1px solid {{setting('color.elem.bright.save.active.border')}} !important;
    }
    .add-btn,
    .add-btn>a{
        background-color:{{setting('color.elem.bright.addbtn.normal.background')}} !important;
        color:{{setting('color.elem.bright.addbtn.normal.text')}} !important;
        border:1px solid {{setting('color.elem.bright.addbtn.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.addbtn.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.addbtn.boxshadow')}};
        border-radius:0.25rem;
    }
    .add-btn:hover,
    .add-btn:hover>a{
        background-color:{{setting('color.elem.bright.addbtn.hover.background')}} !important;
        color:{{setting('color.elem.bright.addbtn.hover.text')}} !important;
        border:1px solid {{setting('color.elem.bright.addbtn.hover.border')}} !important;
    }
    .add-btn:focus,
    .add-btn:focus>a{
        background-color:{{setting('color.elem.bright.addbtn.active.background')}} !important;
        color:{{setting('color.elem.bright.addbtn.active.text')}} !important;
        border:1px solid {{setting('color.elem.bright.addbtn.active.border')}} !important;
    }
    textarea, select.form-control
    {
        border-color:{{setting('color.elem.bright.input.normal.border')}} !important;
    } 
    input.form-control{
        border-color:{{setting('color.elem.bright.input.normal.border')}} !important;
        margin-right:1px;
        border-radius: 0.25rem !important; 
    }
    input.form-control:focus{
        border-color:{{setting('color.elem.bright.input.active.border')}} !important;
        margin-right:1px;
        border-radius: 0.25rem !important; 
    }
     textarea:focus,  select.form-control:focus
    {
        border-color:{{setting('color.elem.bright.input.active.border')}} !important;
        z-index:999;
    }
    input[type="color"]{
        border: 1px solid #ced4da !important;
    }
    body[data-layout-mode=dark] input[type="color"]
    {
        border:1px solid #3b403d !important;
    }
    .alert-success{
        background-color:{{setting('color.elem.bright.message.success.background')}} !important;
        color:{{setting('color.elem.bright.message.success.text')}} !important;
        border:1px solid {{setting('color.elem.bright.message.success.border')}} !important;
    }
    .alert-warning{
        background-color:{{setting('color.elem.bright.message.warning.background')}} !important;
        color:{{setting('color.elem.bright.message.warning.text')}} !important;
        border:1px solid {{setting('color.elem.bright.message.warning.border')}} !important;
    }
    .alert-error{
        background-color:{{setting('color.elem.bright.message.error.background')}} !important;
        color:{{setting('color.elem.bright.message.error.text')}} !important;
        border:1px solid {{setting('color.elem.bright.message.error.border')}} !important;
    }

    .switch input:checked+label:before{
        background-color:{{setting('color.elem.bright.switch.active.background')}} !important
    }
    .switch input:checked+label:after{
        background-color:{{setting('color.elem.bright.switch.active.text')}} !important
    }
    .switch input+label:before
    {
        background-color:{{setting('color.elem.bright.switch.inactive.background')}} !important
    }
    .switch input+label:after
    {
        background-color:{{setting('color.elem.bright.switch.inactive.text')}} !important
    }
    .enable-btn{
        background-color:{{setting('color.elem.bright.enablebutton.normal.background')}} !important;
        color:{{setting('color.elem.bright.enablebutton.normal.text')}} !important;
        border:1px solid {{setting('color.elem.bright.enablebutton.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.enablebutton.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.enablebutton.boxshadow')}};
        
    }
    .enable-btn:hover{
        background-color:{{setting('color.elem.bright.enablebutton.hover.background')}} !important;
        color:{{setting('color.elem.bright.enablebutton.hover.text')}} !important;
        border:1px solid {{setting('color.elem.bright.enablebutton.hover.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.enablebutton.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.enablebutton.boxshadow')}};
    }
    .disable-btn{
        background-color:{{setting('color.elem.bright.disablebutton.normal.background')}} !important;
        color:{{setting('color.elem.bright.disablebutton.normal.text')}} !important;
        border:1px solid {{setting('color.elem.bright.disablebutton.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.disablebutton.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.disablebutton.boxshadow')}};
    }
    .disable-btn:hover{
        background-color:{{setting('color.elem.bright.disablebutton.hover.background')}} !important;
        color:{{setting('color.elem.bright.disablebutton.hover.text')}} !important;
        border:1px solid {{setting('color.elem.bright.disablebutton.hover.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.disablebutton.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.disablebutton.boxshadow')}};
    }

    input.input-search{
        border-color:{{setting('color.elem.bright.searchbox.normal.border')}} !important;
        border-right-width:1px;
        z-index:999;
        margin-right:1px;
        border-radius:0.25rem !important;
    }
    input.input-search:focus,
    input.input-search:active{
        border-color:{{setting('color.elem.bright.searchbox.active.border')}} !important;
        border-right-width:1px;
        z-index:999;
        margin-right:1px;
        border-radius:0.25rem !important;
    }
    span.input-group-append>.btn-light{
        background-color:{{setting('color.elem.bright.searchbox.normalbutton.background')}} !important;
        color:{{setting('color.elem.bright.searchbox.normalbutton.text')}} !important;
        border-color:{{setting('color.elem.bright.searchbox.normalbutton.border')}} !important;
        border-radius:0.25rem !important;
    }
    #password-addon{
        background-color:{{setting('color.elem.bright.searchbox.normalbutton.background')}} !important;
        color:{{setting('color.elem.bright.searchbox.normalbutton.text')}} !important;
        border-color:{{setting('color.elem.bright.searchbox.normalbutton.border')}} !important;
        border-radius:0.25rem;
    }
    #password-addon:hover,
    #password-addon:focus{
        background-color:{{setting('color.elem.bright.searchbox.activebutton.background')}} !important;
        color:{{setting('color.elem.bright.searchbox.activebutton.text')}} !important;
        border-color:{{setting('color.elem.bright.searchbox.activebutton.border')}} !important;
        border-radius:0.25rem;
    }
    span.input-group-append>.btn-light:hover,
    span.input-group-append>.btn-light:focus{
        background-color:{{setting('color.elem.bright.searchbox.activebutton.background')}} !important;
        color:{{setting('color.elem.bright.searchbox.activebutton.text')}} !important;
        border-color:{{setting('color.elem.bright.searchbox.activebutton.border')}} !important;
    }
    .table-striped>tbody>tr:nth-of-type(odd)
    {
        --bs-table-accent-bg:{{setting('color.elem.bright.tablecontent.odd.background')}};
        color:{{setting('color.elem.bright.tablecontent.odd.text')}} !important;
    }
    .table-striped>tbody>tr:nth-of-type(even)
    {
        --bs-table-accent-bg:{{setting('color.elem.bright.tablecontent.even.background')}};
        color:{{setting('color.elem.bright.tablecontent.even.text')}} !important;
    }
    .badge-warning{
        background-color:{{setting('color.elem.bright.userstatus.unconfirmed.background')}} !important;
        color:{{setting('color.elem.bright.userstatus.unconfirmed.text')}} !important;
        border:1px solid {{setting('color.elem.bright.userstatus.unconfirmed.border')}} !important;
    }
    .badge-success{
        background-color:{{setting('color.elem.bright.userstatus.active.background')}} !important;
        color:{{setting('color.elem.bright.userstatus.active.text')}} !important;
        border:1px solid {{setting('color.elem.bright.userstatus.active.border')}} !important;
    }
    .badge-danger{
        background-color:{{setting('color.elem.bright.userstatus.banned.background')}} !important;
        color:{{setting('color.elem.bright.userstatus.banned.text')}} !important;
        border:1px solid {{setting('color.elem.bright.userstatus.banned.border')}} !important;
    }
    a.btn-icon{
        color:{{setting('color.elem.bright.actionbutton.normal.text')}} !important;
    }
    a.btn-icon:hover{
        color:{{setting('color.elem.bright.actionbutton.hover.text')}} !important;
    }
    a.btn-icon:active{
        color:{{setting('color.elem.bright.actionbutton.active.text')}} !important;
        border-color:{{setting('color.elem.bright.actionbutton.active.border')}} !important;
    }
    ul.dropdown-menu{
        background-color:{{setting('color.elem.bright.actionmenu.normal.background')}} !important;
        border:1px solid {{setting('color.elem.bright.actionmenu.normal.border')}} !important;
    }
    ul.dropdown-menu a, #status_select{
        color:{{setting('color.elem.bright.actionmenu.normal.text')}} !important;
    }
    .dropdown-item:hover{
        background-color:{{setting('color.elem.bright.actionmenu.hover.background')}} !important;
        color:{{setting('color.elem.bright.actionmenu.hover.text')}} !important;
        /* border:1px solid {{setting('color.elem.bright.actionmenu.hover.border')}} !important; */
    }
    
    body[data-layout-mode=dark] h1{
        color:{{setting('color.elem.dark.h1.text')}} !important;
    }
    body[data-layout-mode=dark] h2{
        color:{{setting('color.elem.dark.h2.text')}} !important;
    }
    body[data-layout-mode=dark] h3{
        color:{{setting('color.elem.dark.h3.text')}} !important;
    }
    body[data-layout-mode=dark] h4{
        color:{{setting('color.elem.dark.h4.text')}} !important;
    }
    body[data-layout-mode=dark] h5{
        color:{{setting('color.elem.dark.h5.text')}} !important;
    }
    body[data-layout-mode=dark] h6{
        color:{{setting('color.elem.dark.h6.text')}} !important;
    }
    body[data-layout-mode=dark] .card-title-desc,
    body[data-layout-mode=dark] .text-muted,
    body[data-layout-mode=dark] .copyright
    {
        color:{{setting('color.elem.dark.subtext.text')}} !important;
    }
    body[data-layout-mode=dark] label, 
    body[data-layout-mode=dark] th,
    body[data-layout-mode=dark] textarea, 
    body[data-layout-mode=dark] input.form-control,
    body[data-layout-mode=dark] .list-group-item{
        color:{{setting('color.elem.dark.text.text')}} !important;
    }
   
    body[data-layout-mode=dark] .lasted-registration li{
        background-color:{{setting('color.elem.dark.box.main.background')}} !important;
    }
    body[data-layout-mode=dark] .card
    {
        background-color:{{setting('color.elem.dark.box.main.background')}} !important;
        border:1px solid {{setting('color.elem.dark.box.main.border')}} !important;
        -webkit-box-shadow: 0 0 8px 0 {{setting('color.elem.dark.alpha.box.boxshadow')}}, 0 1px 0 0 {{setting('color.elem.dark.alpha.box.boxshadow')}};
        box-shadow: 0 0 8px 0 {{setting('color.elem.dark.alpha.box.boxshadow')}}, 0 1px 0 0 {{setting('color.elem.dark.alpha.box.boxshadow')}};
    }
    body[data-layout-mode=dark] .card-header{
        background-color:{{setting('color.elem.dark.box.main.background')}} !important;
        border-bottom:1px solid {{setting('color.elem.dark.box.inner.border')}} !important;
    }
    body[data-layout-mode=dark] a[href*="http"],
    body[data-layout-mode=dark] .custom-control-label a 
    {
        color:{{setting('color.elem.dark.link.normal.text')}} !important;
    }
    body[data-layout-mode=dark] a[href*="http"]:hover,
    body[data-layout-mode=dark] .custom-control-label a:hover{
        color:{{setting('color.elem.dark.link.hover.text')}} !important;

    }
    body[data-layout-mode=dark] a[data-bs-toggle="pill"]{
        background-color:{{setting('color.elem.dark.tab.normal.background')}} !important;
        color:{{setting('color.elem.dark.tab.normal.text')}} !important;
        border:1px solid {{setting('color.elem.dark.tab.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.alpha.tab.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.alpha.tab.boxshadow')}};
    }
    body[data-layout-mode=dark] a[data-bs-toggle="pill"]:hover{
        background-color:{{setting('color.elem.dark.tab.over.background')}} !important;
        color:{{setting('color.elem.dark.tab.over.text')}} !important;
        border:1px solid {{setting('color.elem.dark.tab.over.border')}} !important;
    }
    body[data-layout-mode=dark] .nav-pills .nav-link.active{
        background-color:{{setting('color.elem.dark.tab.active.background')}} !important;
        color:{{setting('color.elem.dark.tab.active.text')}} !important;
        border:1px solid {{setting('color.elem.dark.tab.active.border')}} !important;
    }
    body[data-layout-mode=dark] .update-btn{
        background-color:{{setting('color.elem.dark.update.normal.background')}} !important;
        color:{{setting('color.elem.dark.update.normal.text')}} !important;
        border:1px solid {{setting('color.elem.dark.update.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.dark..alpha.update.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.alpha.update.boxshadow')}};
    }
    body[data-layout-mode=dark] .update-btn:hover{
        background-color:{{setting('color.elem.dark.update.over.background')}} !important;
        color:{{setting('color.elem.dark.update.over.text')}} !important;
        border:1px solid {{setting('color.elem.dark.update.over.border')}} !important;
    }
    body[data-layout-mode=dark] .update-btn:focus{
        background-color:{{setting('color.elem.dark.update.active.background')}} !important;
        color:{{setting('color.elem.dark.update.active.text')}} !important;
        border:1px solid {{setting('color.elem.dark.update.active.border')}} !important;
    }
    body[data-layout-mode=dark] .save-btn{
        background-color:{{setting('color.elem.dark.save.normal.background')}} !important;
        color:{{setting('color.elem.dark.save.normal.text')}} !important;
        border:1px solid {{setting('color.elem.dark.save.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.alpha.save.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.alpha.save.boxshadow')}};
    }
    body[data-layout-mode=dark] .save-btn:hover{
        background-color:{{setting('color.elem.dark.save.hover.background')}} !important;
        color:{{setting('color.elem.dark.save.hover.text')}} !important;
        border:1px solid {{setting('color.elem.dark.save.hover.border')}} !important;
    }
    body[data-layout-mode=dark] .save-btn:focus{
        background-color:{{setting('color.elem.dark.save.active.background')}} !important;
        color:{{setting('color.elem.dark.save.active.text')}} !important;
        border:1px solid {{setting('color.elem.dark.save.active.border')}} !important;
    }
    body[data-layout-mode=dark] .add-btn{
        background-color:{{setting('color.elem.dark.addbtn.normal.background')}} !important;
        color:{{setting('color.elem.dark.addbtn.normal.text')}} !important;
        border:1px solid {{setting('color.elem.dark.addbtn.normal.border')}} !important;
        border-radius:0.25rem;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.alpha.addbtn.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.alpha.addbtn.boxshadow')}};
        border-radius:0.25rem;
    }
    .add-btn>a,
    .add-btn>a:hover,
    .add-btn>a:active
    {
        border:none !important;
    }
    body[data-layout-mode=dark] .add-btn:hover{
        background-color:{{setting('color.elem.dark.addbtn.hover.background')}} !important;
        color:{{setting('color.elem.dark.addbtn.hover.text')}} !important;
        border:1px solid {{setting('color.elem.dark.addbtn.hover.border')}} !important;
    }
    body[data-layout-mode=dark] .add-btn:focus{
        background-color:{{setting('color.elem.dark.addbtn.active.background')}} !important;
        color:{{setting('color.elem.dark.addbtn.active.text')}} !important;
        border:1px solid {{setting('color.elem.dark.addbtn.active.border')}} !important;
    }
    body[data-layout-mode=dark] textarea, 
    body[data-layout-mode=dark] select.form-control
    {
        border-color:{{setting('color.elem.dark.input.normal.border')}} !important;
    }
    body[data-layout-mode=dark] input.form-control{
        border-color:{{setting('color.elem.dark.input.normal.border')}} !important;
        border-radius:0.25rem !important;
        margin-right:1px;
    }
    body[data-layout-mode=dark] input.form-control:focus{
        border-color:{{setting('color.elem.dark.input.active.border')}} !important;
        border-radius:0.25rem !important;
        margin-right:1px;
    }
    body[data-layout-mode=dark] textarea:focus, 
    body[data-layout-mode=dark] select.form-control:focus
    {
        border-color:{{setting('color.elem.dark.input.active.border')}} !important;
    }
    body[data-layout-mode=dark] input[type="color"]{
        border: 1px solid #ced4da !important;
    }
    body[data-layout-mode=dark] body[data-layout-mode=dark] input[type="color"]
    {
        border:1px solid #3b403d !important;
    }
    body[data-layout-mode=dark] .alert-success{
        background-color:{{setting('color.elem.dark.message.success.background')}} !important;
        color:{{setting('color.elem.dark.message.success.text')}} !important;
        border:1px solid {{setting('color.elem.dark.message.success.border')}} !important;
    }
    body[data-layout-mode=dark] .alert-warning{
        background-color:{{setting('color.elem.dark.message.warning.background')}} !important;
        color:{{setting('color.elem.dark.message.warning.text')}} !important;
        border:1px solid {{setting('color.elem.dark.message.warning.border')}} !important;
    }
    body[data-layout-mode=dark] .alert-error{
        background-color:{{setting('color.elem.dark.message.error.background')}} !important;
        color:{{setting('color.elem.dark.message.error.text')}} !important;
        border:1px solid {{setting('color.elem.dark.message.error.border')}} !important;
    }

    body[data-layout-mode=dark] .switch input:checked+label:before{
        background-color:{{setting('color.elem.dark.switch.active.background')}} !important
    }
    body[data-layout-mode=dark] .switch input:checked+label:after{
        background-color:{{setting('color.elem.dark.switch.active.text')}} !important
    }
    body[data-layout-mode=dark] .switch input+label:before
    {
        background-color:{{setting('color.elem.dark.switch.inactive.background')}} !important
    }
    body[data-layout-mode=dark] .switch input+label:after
    {
        background-color:{{setting('color.elem.dark.switch.inactive.text')}} !important
    }
    body[data-layout-mode=dark] .enable-btn{
        background-color:{{setting('color.elem.dark.enablebutton.normal.background')}} !important;
        color:{{setting('color.elem.dark.enablebutton.normal.text')}} !important;
        border:1px solid {{setting('color.elem.dark.enablebutton.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.enablebutton.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.enablebutton.boxshadow')}};
    }
    body[data-layout-mode=dark] .enable-btn:hover{
        background-color:{{setting('color.elem.dark.enablebutton.hover.background')}} !important;
        color:{{setting('color.elem.dark.enablebutton.hover.text')}} !important;
        border:1px solid {{setting('color.elem.dark.enablebutton.hover.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.enablebutton.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.enablebutton.boxshadow')}};
    }
    body[data-layout-mode=dark] .disable-btn{
        background-color:{{setting('color.elem.dark.disablebutton.normal.background')}} !important;
        color:{{setting('color.elem.dark.disablebutton.normal.text')}} !important;
        border:1px solid {{setting('color.elem.dark.disablebutton.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.disablebutton.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.disablebutton.boxshadow')}};
    }
    body[data-layout-mode=dark] .disable-btn:hover{
        background-color:{{setting('color.elem.dark.disablebutton.hover.background')}} !important;
        color:{{setting('color.elem.dark.disablebutton.hover.text')}} !important;
        border:1px solid {{setting('color.elem.dark.disablebutton.hover.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.disablebutton.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.dark.disablebutton.boxshadow')}};
    }

    body[data-layout-mode=dark] input.input-search{
        border-color:{{setting('color.elem.dark.searchbox.normal.border')}} !important;
        border-right-width:1px;
        z-index:999;
        margin-right:1px;
        border-radius:0.25rem !important;
    }
    body[data-layout-mode=dark] input.input-search:active,
    body[data-layout-mode=dark] input.input-search:focus{
        border-color:{{setting('color.elem.dark.searchbox.active.border')}} !important;
        border-right-width:1px;
        z-index:999;
        margin-right:1px;
        border-radius:0.25rem !important;
    }
    body[data-layout-mode=dark] span.input-group-append>.btn-light{
        background-color:{{setting('color.elem.dark.searchbox.normalbutton.background')}} !important;
        color:{{setting('color.elem.dark.searchbox.normalbutton.text')}} !important;
        border-color:{{setting('color.elem.dark.searchbox.normalbutton.border')}} !important;
    }
    body[data-layout-mode=dark] span.input-group-append>.btn-light:hover,
    body[data-layout-mode=dark] span.input-group-append>.btn-light:focus{
        background-color:{{setting('color.elem.dark.searchbox.activebutton.background')}} !important;
        color:{{setting('color.elem.dark.searchbox.activebutton.text')}} !important;
        border-color:{{setting('color.elem.dark.searchbox.activebutton.border')}} !important;
    }
    body[data-layout-mode=dark] .table-striped>tbody>tr:nth-of-type(odd)
    {
        --bs-table-accent-bg:{{setting('color.elem.dark.tablecontent.odd.background')}};
        color:{{setting('color.elem.dark.tablecontent.odd.text')}} !important;

    }
    body[data-layout-mode=dark] .table-striped>tbody>tr:nth-of-type(even)
    {
        --bs-table-accent-bg:{{setting('color.elem.dark.tablecontent.even.background')}};
        color:{{setting('color.elem.dark.tablecontent.even.text')}} !important;
    
    }
    body[data-layout-mode=dark] .badge-warning{
        background-color:{{setting('color.elem.dark.userstatus.unconfirmed.background')}} !important;
        color:{{setting('color.elem.dark.userstatus.unconfirmed.text')}} !important;
        border:1px solid {{setting('color.elem.dark.userstatus.unconfirmed.border')}} !important;
    }
    body[data-layout-mode=dark] .badge-success{
        background-color:{{setting('color.elem.dark.userstatus.active.background')}} !important;
        color:{{setting('color.elem.dark.userstatus.active.text')}} !important;
        border:1px solid {{setting('color.elem.dark.userstatus.active.border')}} !important;
    }
    body[data-layout-mode=dark] .badge-danger{
        background-color:{{setting('color.elem.dark.userstatus.banned.background')}} !important;
        color:{{setting('color.elem.dark.userstatus.banned.text')}} !important;
        border:1px solid {{setting('color.elem.dark.userstatus.banned.border')}} !important;
    }
    body[data-layout-mode=dark] a.btn-icon{
        color:{{setting('color.elem.dark.actionbutton.normal.text')}} !important;
    }
    body[data-layout-mode=dark] a.btn-icon:hover{
        color:{{setting('color.elem.dark.actionbutton.hover.text')}} !important;
    }
    body[data-layout-mode=dark] a.btn-icon:active{
        color:{{setting('color.elem.dark.actionbutton.active.text')}} !important;
        border-color:{{setting('color.elem.dark.actionbutton.active.border')}} !important;
    }
    body[data-layout-mode=dark] ul.dropdown-menu{
        background-color:{{setting('color.elem.dark.actionmenu.normal.background')}} !important;
        border:1px solid {{setting('color.elem.dark.actionmenu.normal.border')}} !important;
    }
    body[data-layout-mode=dark] ul.dropdown-menu a, body[data-layout-mode=dark] #status_select{
        color:{{setting('color.elem.dark.actionmenu.normal.text')}} !important;
    }
    body[data-layout-mode=dark] .dropdown-item:hover{
        background-color:{{setting('color.elem.dark.actionmenu.hover.background')}} !important;
        color:{{setting('color.elem.dark.actionmenu.hover.text')}} !important;
        /* border:1px solid {{setting('color.elem.dark.actionmenu.hover.border')}} !important; */
    }

    body{
        background-color:{{setting('color.elem.bright.background.background')}} !important;
    }
    body[data-layout-mode=dark] {
        background-color:{{setting('color.elem.dark.background.background')}} !important;
    }
    .popover-header{
        background-color:{{setting('color.elem.bright.popover.header.background')}} !important;
        color:{{setting('color.elem.bright.popover.header.text')}} !important;
        border:1px solid {{setting('color.elem.bright.popover.header.border')}} !important;
    }
    .popover-body{
        background-color:{{setting('color.elem.bright.popover.body.background')}} !important;
        color:{{setting('color.elem.bright.popover.body.text')}} !important;
        border:1px solid {{setting('color.elem.bright.popover.body.border')}} !important;
    }
    body[data-layout-mode=dark] .popover-header{
        background-color:{{setting('color.elem.dark.popover.header.background')}} !important;
        color:{{setting('color.elem.dark.popover.header.text')}} !important;
        border:1px solid {{setting('color.elem.dark.popover.header.border')}} !important;
    }
    body[data-layout-mode=dark] .popover-body{
        background-color:{{setting('color.elem.dark.popover.body.background')}} !important;
        color:{{setting('color.elem.dark.popover.body.text')}} !important;
        border:1px solid {{setting('color.elem.dark.popover.body.border')}} !important;
    }
    
    .signbtn{
        background-color:{{setting('color.elem.bright.sign.normal.background')}} !important;
        color:{{setting('color.elem.bright.sign.normal.text')}} !important;
        border:1px solid {{setting('color.elem.bright.sign.normal.border')}} !important;
        -webkit-box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.sign.boxshadow')}};
        box-shadow: 0 2px 6px 0 {{setting('color.elem.bright.alpha.sign.boxshadow')}};
    }
    .singbtn:hover{
        background-color:{{setting('color.elem.bright.sign.over.background')}} !important;
        color:{{setting('color.elem.bright.sign.over.text')}} !important;
        border:1px solid {{setting('color.elem.bright.over.normal.border')}} !important;
    }
    .singbtn:focus{
        background-color:{{setting('color.elem.bright.sign.active.background')}} !important;
        color:{{setting('color.elem.bright.sign.active.text')}} !important;
        border:1px solid {{setting('color.elem.bright.active.normal.border')}} !important;
        
    }
    ::placeholder{
        color:{{setting('color.elem.bright.placeholder.text')}} !important;
    }
    body[data-layout-mode=dark] ::placeholder{
        color:{{setting('color.elem.dark.placeholder.text')}} !important;
    }
    table[id*="-clone"]{
        background-color:{{setting('color.elem.bright.box.main.background')}} !important;
        color:{{setting('color.elem.bright.text.text')}} !important;
    }
    .table-rep-plugin .sticky-table-header{
        border-color:{{setting('color.elem.bright.box.inner.border')}} !important;
    }
    body[data-layout-mode=dark] table[id*="-clone"]{
        background-color:{{setting('color.elem.dark.box.main.background')}} !important;
        color:{{setting('color.elem.dark.text.text')}} !important;
    }
    body[data-layout-mode=dark] .table-rep-plugin .sticky-table-header{
        border-color:{{setting('color.elem.dark.box.inner.border')}} !important;
    }
    
    /* check box */
    
    .custom-checkbox .custom-control-input:checked~.custom-control-label:before
    {
        background-color:{{setting('color.elem.bright.checkbox.checked.background')}} !important;
    }
    .custom-checkbox .custom-control-label:before{
        background-color:{{setting('color.elem.bright.checkbox.unchecked.background')}} !important;
    }
    .form-check-input:checked{
        background-color:{{setting('color.elem.bright.checkbox.checked.background')}} !important;
        border-color:{{setting('color.elem.bright.checkbox.checked.background')}} !important;
    }
    
    .form-check-input{
        background-color:{{setting('color.elem.bright.checkbox.unchecked.background')}} !important;
        border-color:{{setting('color.elem.bright.checkbox.unchecked.background')}} !important;
    }
    body[data-layout-mode=dark] .custom-checkbox .custom-control-label:before{
        background-color:{{setting('color.elem.dark.checkbox.unchecked.background')}} !important;
    }
    body[data-layout-mode=dark] .custom-checkbox .custom-control-input:checked~.custom-control-label:before
    {
        background-color:{{setting('color.elem.dark.checkbox.checked.background')}} !important;
    }
    
    .sidebar-alert
    {
        border:none !important;
    }

    td a[href*='http']
    {
        color:{{setting('color.elem.bright.tablecontent.linknormal.text')}} !important;
    }
    td a[href*='http']:hover
    {
        color:{{setting('color.elem.bright.tablecontent.linkover.text')}} !important;
    }
    td .btn-icon:hover,
    td .btn-icon:focus{
        color:{{setting('color.elem.bright.tablecontent.active.text')}} !important;
    }
    body[data-layout-mode=dark] td a[href*='http']
    {
        color:{{setting('color.elem.dark.tablecontent.linknormal.text')}} !important;
    }
    body[data-layout-mode=dark] td a[href*='http']:hover
    {
        color:{{setting('color.elem.dark.tablecontent.linkover.text')}} !important;
    }
    body[data-layout-mode=dark] td .btn-icon:hover,
    body[data-layout-mode=dark] td .btn-icon:focus{
        color:{{setting('color.elem.dark.tablecontent.active.text')}} !important;
    }

    #page-header-user-dropdown{
        border:none !important;
        background:transparent !important;
    }
    .pace-activity{
        background:{{setting('color.elem.bright.progress.background')}} !important;
    }
    .pace-activity::after{
        border-left-color: {{setting('color.elem.bright.progress.text')}} !important;
        border-top-color:{{setting('color.elem.bright.progress.text')}} !important;
    }
    body[data-layout-mode=dark] .pace-activity{
        background:{{setting('color.elem.dark.progress.background')}} !important;
    }
    body[data-layout-mode=dark] .pace-activity::after{
        border-left-color: {{setting('color.elem.dark.progress.text')}} !important;
        border-top-color:{{setting('color.elem.dark.progress.text')}} !important;
    }

    .page-item a.page-link,
    .page-item.disabled .page-link{
        background-color:{{setting('color.elem.bright.tablepage.normal.background')}} !important;
        color:{{setting('color.elem.bright.tablepage.normal.text')}} !important;
        border-color:{{setting('color.elem.bright.tablepage.normal.border')}} !important;
    }
    .page-item a.page-link:hover{
        background-color:{{setting('color.elem.bright.tablepage.over.background')}} !important;
        color:{{setting('color.elem.bright.tablepage.over.text')}} !important;
        border-color:{{setting('color.elem.bright.tablepage.over.border')}} !important;
    }
    .page-item.active .page-link{
        background-color:{{setting('color.elem.bright.tablepage.active.background')}} !important;
        color:{{setting('color.elem.bright.tablepage.active.text')}} !important;
        border-color:{{setting('color.elem.bright.tablepage.active.border')}} !important;
    }
    body[data-layout-mode=dark] .page-item a.page-link,
    body[data-layout-mode=dark] .page-item.disabled .page-link{
        background-color:{{setting('color.elem.dark.tablepage.normal.background')}} !important;
        color:{{setting('color.elem.dark.tablepage.normal.text')}} !important;
        border-color:{{setting('color.elem.dark.tablepage.normal.border')}} !important;
    }
    body[data-layout-mode=dark] .page-item a.page-link:hover{
        background-color:{{setting('color.elem.dark.tablepage.over.background')}} !important;
        color:{{setting('color.elem.dark.tablepage.over.text')}} !important;
        border-color:{{setting('color.elem.dark.tablepage.over.border')}} !important;
    }
    body[data-layout-mode=dark] .page-item.active .page-link{
        background-color:{{setting('color.elem.dark.tablepage.active.background')}} !important;
        color:{{setting('color.elem.dark.tablepage.active.text')}} !important;
        border-color:{{setting('color.elem.dark.tablepage.active.border')}} !important;
    }
</style>

