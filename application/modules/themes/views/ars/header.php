<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta content="AR Society" name="description">
    
    <title>AR Society - Big Dream Big Change</title>
    
    <link rel="apple-touch-icon" href="<?php echo base_url('public/material/topbar/assets/images/apple-touch-icon.png')?>')?>">
    <link rel="shortcut icon" href="<?php echo base_url('public/material/topbar/assets/images/favicon.ico')?>">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/css/bootstrap-extend.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/topbar/assets/css/site.min.css')?>">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/vendor/animsition/animsition.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/vendor/asscrollable/asScrollable.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/vendor/switchery/switchery.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/vendor/intro-js/introjs.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/vendor/slidepanel/slidePanel.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/vendor/flag-icon-css/flag-icon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/vendor/waves/waves.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/vendor/asscrollable/asScrollable.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/topbar/assets/examples/css/structure/ribbon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/topbar/assets/examples/css/advanced/masonry.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/vendor/plyr/plyr.css')?>">

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/fonts/material-design/material-design.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/fonts/brand-icons/brand-icons.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/fonts/font-awesome/font-awesome.min.css')?>">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!-- Scripts -->
    <script src="<?php echo base_url('public/material/global/vendor/breakpoints/breakpoints.js')?>"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="site-navbar-small">

    <!-- Navbar -->
    <nav class="site-navbar navbar navbar-inverse navbar-fixed-top navbar-mega" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon md-more" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand navbar-brand-center" href="../index.html">
          <img class="navbar-brand-logo navbar-brand-logo-normal" src="<?php echo base_url('public/material/topbar/assets/images/logo.png')?>"
            title="AR Society">
          <img class="navbar-brand-logo navbar-brand-logo-special" src="<?php echo base_url('public/material/topbar/assets/images/logo-colored.png')?>"
            title="AR Society">
          <span class="navbar-brand-text hidden-xs-down"> AR Society</span>
        </a>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-fw dropdown-mega">
              <a class="nav-link" data-toggle="dropdown" href="<?php echo base_url()?>" aria-expanded="false" data-animation="fade"
                role="button"><i class="fa fa-users"></i>&nbsp; Team </a>
            </li>
            <li class="nav-item dropdown dropdown-fw dropdown-mega">
              <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
                role="button"><i class="fa fa-rocket"></i>&nbsp; Forum </a>
            </li>
            <li class="nav-item dropdown dropdown-fw dropdown-mega">
              <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
                role="button"><i class="fa fa-globe"></i>&nbsp; Blog </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('login')?>">
                <i class="fa fa-sign-in" aria-hidden="true"></i> Masuk
              </a>
            </li>
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon md-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon md-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav> 
    <!-- End Navbar -->