

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>light/assets/images/favicon.ico">

        <!-- App title -->
        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!--calendar css-->
        <link href="<?php echo base_url(); ?>light/assets/plugins/fullcalendar/dist/fullcalendar.css" rel="stylesheet" />

        <!-- App CSS -->
        <link href="<?php echo base_url(); ?>light/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>light/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>light/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>light/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>light/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>light/assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>light/assets/css/core.css" rel = "stylesheet" type = "text/css"> 

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url(); ?>/light/assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>Admin<span>to</span></span><i class="zmdi zmdi-layers"></i></a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                            <li>
                                <h4 class="page-title">Club chile ajedrez</h4>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline m-b-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="zmdi zmdi-notifications-none"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>
                            <li class="hidden-xs">
                                <form role="search" class="app-search">
                                    <input type="text" placeholder="Search..."
                                           class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!-- User -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                        </div>
                        <h5><a href="#">Mat Helme</a> </h5>
                        <ul class="list-inline">
                            <li>
                                <a href="#" >
                                    <i class="zmdi zmdi-settings"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-custom">
                                    <i class="zmdi zmdi-power"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- End User -->

                    <!--- Sidebar -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navigation</li>

                         

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-invert-colors"></i> <span> Torneos </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('tournamentController/cargarTorneos'); ?>">ver Torneos</a> </li>
                                    <li><a href="<?php echo site_url('tournamentController/crearTorneo'); ?>">crear Torneo</a> </li>

                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-view-list"></i> <span> Noticias </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="<?php echo site_url('noticiasController/cargarNoticias'); ?>">ver Torneos</a></li>
                                    <li><?php anchor('noticiasController/cargarNoticia', 'Cargar noticia') ;?></li>
                                    <li><a href="tables-editable.html">nada aun</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> usuarios </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-other.html">Other Chart</a></li>
                                </ul>
                            </li>

                            

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        