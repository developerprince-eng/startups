<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Startup</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
        ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url('images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('images/favicon.ico'); ?>" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
        ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/card.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/prettyPhoto.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>

    </head>
    <body>
        <!-- Navigation
        ==========================================-->
        <nav id="menu" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.html"><i class="fa fa-sun-o"></i>Startupzw<strong></strong></a> </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(!$this->session->userdata('logged_in')): ?>
                        <li><a href="#home" class="page-scroll">Home</a></li>
                        <li><a href="#about-section" class="page-scroll">About</a></li>
                        <li><a href="#works-section" class="page-scroll">Startups</a></li>
                        <li><a href="#team-section" class="page-scroll">Contributors</a></li>
                        <li><a href="#contact-section" class="page-scroll">Contact</a></li>
                        <?php endif ?>
                        <?php if($this->session->userdata('logged_in')): ?>
                        <li><a href="<?php echo base_url(); ?>home" class="page-scroll">Home</a></li>
                        <li><a href="#team-section" class="page-scroll">Contributors</a></li>
                        <li><a href="#contact-section" class="page-scroll">Contact</a></li>
                        <li><a href="<?php echo base_url(); ?>user/logout" class="page-scroll">Logout</a></li>
                        <?php endif ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>