<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Simulador Plan Empresa</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/global/css/components.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!--[if lt IE 9]>
    <script src="/global/plugins/respond.min.js"></script>
    <script src="/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <script src="/global/plugins/jquery.min.js" type="text/javascript"></script>

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->





    <script src="/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/global/plugins/moment.min.js" type="text/javascript"></script>
    <script src="/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
    <script src="/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
    <script src="/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
    <script src="/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
    <script src="/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
    <script src="/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
    <script src="/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
    <script src="/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
    <script src="/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>




    <script src="/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
    <script src="/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
    <script src="/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
    <script src="/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
    <script src="/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <script src="/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script src="/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
    <script src="/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->


    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/global/plugins/bootstrap-confirmation/bootstrap-confirmation.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->




    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/pages/scripts/ui-confirmations.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/pages/scripts/dashboard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
    <script src="/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
    <script src="/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->

    <script src="/js/tinymce/tinymce.min.js"></script>
    <script src="/js/tinymce/es.js"></script>
    <script>

        tinymce.init({
            selector:'textarea',
            plugins: "advlist lists code link wordcount textcolor importcss colorpicker table hr",
            // plugins: 'code print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount  imagetools contextmenu colorpicker textpattern help',

            advlist_bullet_styles: "square",
            toolbar1: "cut copy paste | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code",
            toolbar2: "undo redo | format formatcss formatselect fontselect fontsizeselect | link unlink responsivefilemanager | forecolor backcolor"
        });</script>

</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo text-center">
            <a href="{{ route('home') }}" style="padding-top:20px;color:white">
                {{--<img src="/images/plandeempresacabecera.png" width="100%" style="max-width: 400px;" alt="Simulador Plan de Empresa" />--}}
                <span >Simulador Plan de Empresa</span>

            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->

        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->

               <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">

                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-user"></i>
                            <span class="username username-hide-on-mobile"> {{ Auth::user()->name }}  </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ route('micuenta') }}">
                                    <i class="icon-user"></i> Mi Cuenta </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->

                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- END SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="nav-item start open">
                    <a href="{{ route('home') }}" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <!--<ul class="sub-menu">
                        <li class="nav-item start active open">
                            <a href="index.html" class="nav-link ">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Dashboard 1</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    </ul>
                    -->
                </li>


@if (session()->has('PlanEmpresa'))



                <li class="nav-item @if (session()->get('section')==='datosPrevios')  active  @endif">
                    <a href="/newDatosPrevios/{{session()->get('PlanEmpresa')->id}}" class="nav-link nav-toggle">
                        <i class="icon-diamond"></i>
                        <span class="title">Datos previos</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                <li class="nav-item   @if (session()->get('section')==='planDeMarketing')  active  @endif">
                    <a href="/plan-de-marketing/{{session()->get('PlanEmpresa')->id}}" class="nav-link nav-toggle">
                        <i class="icon-puzzle"></i>
                        <span class="title">Plan de marketing</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                    <li class="nav-item @if (session()->get('section')==='planDeOperaciones')  active  @endif">
                        <a href="/plan-de-operaciones/{{session()->get('PlanEmpresa')->id}}" class="nav-link nav-toggle">
                        <i class="icon-settings"></i>
                        <span class="title">Plan de Operaciones</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                    <li class="nav-item @if (session()->get('section')==='planDeRecursosHumanos')  active  @endif">
                        <a href="/plan-de-recursos-humanos/{{session()->get('PlanEmpresa')->id}}" class="nav-link nav-toggle">
                        <i class="icon-bulb"></i>
                        <span class="title">Plan de recursos humanos</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                    <li class="nav-item @if (session()->get('section')==='planJuridicoMercantil')  active  @endif">
                        <a href="/plan-juridico-mercantil/{{session()->get('PlanEmpresa')->id}}" class="nav-link nav-toggle">
                        <i class="icon-briefcase"></i>
                        <span class="title">Plan jurídico mercantil</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                <li class="nav-item @if (session()->get('section')==='planEconomicoFinanciero')  active  @endif">
                    <a href="/plan-economico-financiero/{{session()->get('PlanEmpresa')->id}}" class="nav-link nav-toggle">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Plan económico financiero</span>
                        <span class="arrow"></span>
                    </a>
                </li>
                @endif
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->

    <!-- BEGIN CONTENT -->

    @if(session('mensaje') != "" && session('mensajeType') != "")
    <script type="text/javascript">

        Command: toastr["{{ session('mensajeType') }}"]("{{ session('mensaje') }}", "{{ session('mensajeTitle') }}")

        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-full-width",
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "2000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

    </script>

    @endif




    @yield('content')

    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> 2017 © Ayuntamiento de Madrid.</div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>



<!-- END FOOTER -->


</body>


</html>