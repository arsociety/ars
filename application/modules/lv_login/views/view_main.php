<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">
    
    <title>Masuk ke AR Society</title>
    
    <link rel="apple-touch-icon" href="<?php echo base_url('public/material/topbar/assets/images/apple-touch-icon.png')?>">
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
    <link rel="stylesheet" href="<?php echo base_url('public/material/topbar/assets/examples/css/pages/login-v3.css')?>">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/fonts/material-design/material-design.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/material/global/fonts/brand-icons/brand-icons.min.css')?>">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        
    <!-- Scripts -->
    <script src="<?php echo base_url('public/material/global/vendor/breakpoints/breakpoints.js')?>"></script>
    <script>
      Breakpoints();
    </script>
  </head>
  <body class="animsition page-login-v3 layout-full">

    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
      <div class="page-content vertical-align-middle">
        <div class="panel">
          <div class="panel-body">
            <div class="brand">
              <img class="brand-img" width="75" height="75" src="<?php echo base_url('public/home/assets/images/logo-ars.png')?>" alt="...">
            </div>
            <form method="post" action="#" autocomplete="off">
              <div class="form-group text-left">
                <label class="control-label">Username</label>
                <input type="text" class="form-control" name="username" autofocus="" required>
              </div>
              <div class="form-group text-left">
                <label class="control-label">Password</label>
                <input type="password" class="form-control" name="password" autofocus="" required>
              </div>
              <div class="form-group clearfix">
                <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                  <input type="checkbox" id="inputCheckbox" name="remember">
                  <label for="inputCheckbox">Ingatkan saya</label>
                </div>
                <a class="float-right" href="#">Lupa kata sandi?</a>
              </div>
              <button type="submit" class="btn btn-primary btn-block btn-md mt-20">Masuk</button>
            </form>
            <p>Belum mempunyai akun? Daftar sekarang <a href="#"><b>disini</b></a></p>
          </div>
        </div>

      </div>
    </div>
    <!-- End Page -->


    <!-- Core  -->
    <script src="<?php echo base_url('public/material/global/vendor/babel-external-helpers/babel-external-helpers.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/jquery/jquery.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/popper-js/umd/popper.min.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/bootstrap/bootstrap.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/animsition/animsition.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/mousewheel/jquery.mousewheel.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/asscrollbar/jquery-asScrollbar.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/asscrollable/jquery-asScrollable.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/waves/waves.js')?>"></script>
    
    <!-- Plugins -->
    <script src="<?php echo base_url('public/material/global/vendor/switchery/switchery.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/intro-js/intro.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/screenfull/screenfull.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/slidepanel/jquery-slidePanel.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/vendor/jquery-placeholder/jquery.placeholder.js')?>"></script>
    
    <!-- Scripts -->
    <script src="<?php echo base_url('public/material/global/js/Component.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/js/Plugin.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/js/Base.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/js/Config.js')?>"></script>
    
    <script src="<?php echo base_url('public/material/topbar/assets/js/Section/Menubar.js')?>"></script>
    <script src="<?php echo base_url('public/material/topbar/assets/js/Section/Sidebar.js')?>"></script>
    <script src="<?php echo base_url('public/material/topbar/assets/js/Section/PageAside.js')?>"></script>
    <script src="<?php echo base_url('public/material/topbar/assets/js/Plugin/menu.js')?>"></script>
    
    <!-- Config -->
    <script src="<?php echo base_url('public/material/global/js/config/colors.js')?>"></script>
    <script src="<?php echo base_url('public/material/topbar/assets/js/config/tour.js')?>"></script>
    <script>Config.set('assets', '<?php echo base_url('public/material/topbar/assets')?>;</script>
    
    <!-- Page -->
    <script src="<?php echo base_url('public/material/topbar/assets/js/Site.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/js/Plugin/asscrollable.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/js/Plugin/slidepanel.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/js/Plugin/switchery.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/js/Plugin/jquery-placeholder.js')?>"></script>
    <script src="<?php echo base_url('public/material/global/js/Plugin/material.js')?>"></script>
    
    <script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    
  </body>
</html>
