<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
        
        <!-- jquery.vectormap css  -->
        <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            @include('admin.body.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.body.sidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield('admin')
                <!-- End Page-content -->
               
                @include('admin.body.footer')
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('backend/assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('backend/assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{ asset('backend/assets/css/bootstrap-dark.min.css') }}" data-appStyle="{{ asset('backend/assets/css/app-dark.min.css') }}">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('backend/assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{ asset('backend/assets/css/app-rtl.min.css') }}">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <!-- <script src="{{ asset('backend/') }}"></script> -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        
        <!-- apexcharts -->
        <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- jquery.vectormap map -->
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        
        <!-- Responsive examples -->
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <!-- <script src="{{ asset('backend/assets/js/app.js') }}"></script> -->

        <script>
            !function(n){"use strict";function s(){for(var e=document.getElementById("topnav-menu-content").getElementsByTagName("a"),t=0,n=e.length;t<n;t++)"nav-item dropdown active"===e[t].parentElement.getAttribute("class")&&(e[t].parentElement.classList.remove("active"),e[t].nextElementSibling.classList.remove("show"))}function t(e){1==n("#light-mode-switch").prop("checked")&&"light-mode-switch"===e?(n("html").removeAttr("dir"),n("#dark-mode-switch").prop("checked",!1),n("#rtl-mode-switch").prop("checked",!1),n("#bootstrap-style").attr("href","{{ asset('backend/assets/css/bootstrap.min.css') }}"),n("#app-style").attr("href","{{ asset('backend/assets/css/app.min.css') }}"),sessionStorage.setItem("is_visited","light-mode-switch")):1==n("#dark-mode-switch").prop("checked")&&"dark-mode-switch"===e?(n("html").removeAttr("dir"),n("#light-mode-switch").prop("checked",!1),n("#rtl-mode-switch").prop("checked",!1),n("#bootstrap-style").attr("href","{{ asset('backend/assets/css/bootstrap-dark.min.css') }}"),n("#app-style").attr("href","{{ asset('backend/assets/css/app-dark.min.css') }}"),sessionStorage.setItem("is_visited","dark-mode-switch")):1==n("#rtl-mode-switch").prop("checked")&&"rtl-mode-switch"===e&&(n("#light-mode-switch").prop("checked",!1),n("#dark-mode-switch").prop("checked",!1),n("#bootstrap-style").attr("href","{{ asset('backend/assets/css/bootstrap-rtl.min.css') }}"),n("#app-style").attr("href","{{ asset('backend/assets/css/app-rtl.min.css') }}"),n("html").attr("dir","rtl"),sessionStorage.setItem("is_visited","rtl-mode-switch"))}function e(){document.webkitIsFullScreen||document.mozFullScreen||document.msFullscreenElement||(console.log("pressed"),n("body").removeClass("fullscreen-enable"))}var a;n("#side-menu").metisMenu(),n("#vertical-menu-btn").on("click",function(e){e.preventDefault(),n("body").toggleClass("sidebar-enable"),992<=n(window).width()?n("body").toggleClass("vertical-collpsed"):n("body").removeClass("vertical-collpsed")}),n("body,html").click(function(e){var t=n("#vertical-menu-btn");t.is(e.target)||0!==t.has(e.target).length||e.target.closest("div.vertical-menu")||n("body").removeClass("sidebar-enable")}),n("#sidebar-menu a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&(n(this).addClass("active"),n(this).parent().addClass("mm-active"),n(this).parent().parent().addClass("mm-show"),n(this).parent().parent().prev().addClass("mm-active"),n(this).parent().parent().parent().addClass("mm-active"),n(this).parent().parent().parent().parent().addClass("mm-show"),n(this).parent().parent().parent().parent().parent().addClass("mm-active"))}),n(".navbar-nav a").each(function(){var e=window.location.href.split(/[?#]/)[0];this.href==e&&(n(this).addClass("active"),n(this).parent().addClass("active"),n(this).parent().parent().addClass("active"),n(this).parent().parent().parent().addClass("active"),n(this).parent().parent().parent().parent().addClass("active"),n(this).parent().parent().parent().parent().parent().addClass("active"))}),n(document).ready(function(){var e;0<n("#sidebar-menu").length&&0<n("#sidebar-menu .mm-active .active").length&&(300<(e=n("#sidebar-menu .mm-active .active").offset().top)&&(e-=300,n(".vertical-menu .simplebar-content-wrapper").animate({scrollTop:e},"slow")))}),n('[data-toggle="fullscreen"]').on("click",function(e){e.preventDefault(),n("body").toggleClass("fullscreen-enable"),document.fullscreenElement||document.mozFullScreenElement||document.webkitFullscreenElement?document.cancelFullScreen?document.cancelFullScreen():document.mozCancelFullScreen?document.mozCancelFullScreen():document.webkitCancelFullScreen&&document.webkitCancelFullScreen():document.documentElement.requestFullscreen?document.documentElement.requestFullscreen():document.documentElement.mozRequestFullScreen?document.documentElement.mozRequestFullScreen():document.documentElement.webkitRequestFullscreen&&document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT)}),document.addEventListener("fullscreenchange",e),document.addEventListener("webkitfullscreenchange",e),document.addEventListener("mozfullscreenchange",e),n(".right-bar-toggle").on("click",function(e){n("body").toggleClass("right-bar-enabled")}),n(document).on("click","body",function(e){0<n(e.target).closest(".right-bar-toggle, .right-bar").length||n("body").removeClass("right-bar-enabled")}),function(){if(document.getElementById("topnav-menu-content")){for(var e=document.getElementById("topnav-menu-content").getElementsByTagName("a"),t=0,n=e.length;t<n;t++)e[t].onclick=function(e){"#"===e.target.getAttribute("href")&&(e.target.parentElement.classList.toggle("active"),e.target.nextElementSibling.classList.toggle("show"))};window.addEventListener("resize",s)}}(),[].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function(e){return new bootstrap.Tooltip(e)}),[].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]')).map(function(e){return new bootstrap.Popover(e)}),n(window).on("load",function(){n("#status").fadeOut(),n("#preloader").delay(350).fadeOut("slow")}),window.sessionStorage&&((a=sessionStorage.getItem("is_visited"))?(n(".right-bar input:checkbox").prop("checked",!1),n("#"+a).prop("checked",!0),t(a)):sessionStorage.setItem("is_visited","light-mode-switch")),n("#light-mode-switch, #dark-mode-switch, #rtl-mode-switch").on("change",function(e){t(e.target.id)}),Waves.init()}(jQuery);</script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

            <script>
                @if(Session::has('message'))
                    var type = "{{ Session::get('alert-type', 'info') }}"
                    switch (type) {
                        case 'info':
                            toastr.info(" {{ Session::get('message') }} ")
                            break;
                    
                        case 'success':
                            toastr.success(" {{ Session::get('message') }} ")
                            break;
                    
                        case 'warning':
                            toastr.warning(" {{ Session::get('message') }} ")
                            break;
                    
                        case 'error':
                            toastr.error(" {{ Session::get('message') }} ")
                            break;
                    }
                @endif
            </script>
    </body>

</html>