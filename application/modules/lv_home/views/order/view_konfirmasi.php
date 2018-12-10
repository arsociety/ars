<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AR Society</title>
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta content="AR Society" name="description">
        <link href="<?php echo base_url('public/home/assets/images/favicon-ars.ico" rel="shortcut icon')?>">
        <link href="<?php echo base_url('public/home/assets/css/core/bootstrap.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('public/home/assets/css/core/animate.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('public/home/assets/css/core/font-awesome.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('public/home/assets/css/plugins/owl.carousel.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('public/home/assets/css/plugins/owl.theme.min.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('public/home/assets/css/core/main.css')?>" rel="stylesheet">
        <link href="<?php echo base_url('public/home/assets/css/homepages/homepage-02.css')?>" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv.min.js')?>"></script>
        <![endif]-->
        <style type="text/css">
        .se-pre-con {
          position: fixed;
          left: 0px;
          top: 0px;
          width: 100%;
          height: 100%;
          z-index: 9999;
          background: url(<?php echo base_url('public/skins/loader/loaders.gif')?>) center no-repeat #fff;
        }
        </style>
        <script>
            $(window).load(function() {
              $(".se-pre-con").fadeOut("slow");;
            });
        </script>
    </head>
    <body id="home">
        <div id="preloader" class="se-pre-con">
            <div id="status"></div>
        </div>
        <nav class="navbar navbar-default navbar-blue navbar-fixed-top">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#home">
                        <img height="50" width="50" class="logo" src="<?php echo base_url('public/img/fikri.png')?>" alt="logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="page-scroll" href="<?php echo base_url('lv_')?>">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll label label-warning label-sm" href="<?php echo base_url('ars')?>">Coming Soon</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="layanan-kami" class="features gradient-bg">
            <div class="container">
                <div class="row features">
                    <div class="section-title">
                        <div class="subtitle">AR Society</div>
                        <h2>Konfirmasi <span class="gradient-text">Pemesanan</span></h2>
                    </div>
                     <hr class="hr-title-01 hr-icon">
                    <div class="panel">
              	  	  <div class="panel-body">
                        <div class="container-fluid">
                          <h1>Portofolio/Blog</h1>
                          <hr>
                          <div class="container text-center">
                            <div class="row">
                              <div class="col-md-6 text-left">
                                <h3>Detail Pemesan</h3>
                                <hr>
                                Renaldy Dani <br>
                                me@renaldydani.id <br>
                                0811535810
                              </div>
                              <div class="col-md-6 text-left">
                                <h3>Detail Pesanan</h3>
                                <hr>
                                Tipe: Portofolio Standart <br>
                                Domain: abiganteng.id
                              </div>
                            </div>
                            <a href="<?php echo base_url('pembayaran')?>" class="dark-btn">
                                <span>Bayar</span>
                            </a>
                          </div>

                        </div>
              	  	  </div>
              	    </div>
                </div>
            </div>
        </section>


        <footer class="footer">
            <div class="container">
                <p class="copyright">
                   ©2018 All Right Reserved. Code with ❤ by AR Society.
                </p>
            </div>
            <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
        </footer>

        <script src="<?php echo base_url('public/home/assets/js/core/jquery-3.1.1.min.js')?>"></script>
        <script src="<?php echo base_url('public/home/assets/js/core/bootstrap.min.js')?>"></script>
        <script src="<?php echo base_url('public/home/assets/js/core/jquery.easing.min.js')?>"></script>
        <script src="<?php echo base_url('public/home/assets/js/index.js')?>"></script>
        <script src="<?php echo base_url('public/home/assets/js/plugins/waypoints/jquery.waypoints.min.js')?>"></script>
        <script src="<?php echo base_url('public/home/assets/js/plugins/counter/jquery.counterup.min.js')?>"></script>
        <script src="<?php echo base_url('public/home/assets/js/plugins/typed/typed.min.js')?>"></script>
        <script src="<?php echo base_url('public/home/assets/js/plugins/owl-carousel/owl.carousel.min.js')?>"></script>
        <script src="<?php echo base_url('public/home/assets/js/core/main.js')?>"></script>
        <script src="<?php echo base_url('public/home/assets/js/pages/homepage-02.js')?>"></script>
    </body>
</html>
