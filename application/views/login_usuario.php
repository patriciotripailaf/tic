<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>/light/assets/images/favicon.ico">

        <!-- App title -->
        <title>Login</title>

        <!-- App CSS -->
        <link href="<?php echo base_url(); ?>/light/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/light/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/light/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/light/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/light/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/light/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>/light/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url(); ?>/light/assets/js/modernizr.min.js"></script>

</head>
<body>
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
            </div>
	<div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                </div>
                <div class="panel-body">
                    <form method="post" class="form-horizontal m-t-20" action="control_login/chequea_login">

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name='username' type="text" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name='password' type="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Don't have an account? <a href="control_registro/registrar" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                </div>
            </div>
            
        </div>
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>light/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>/light/assets/js/jquery.app.js"></script>
</body>
</html>