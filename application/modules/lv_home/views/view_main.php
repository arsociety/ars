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
                            <a class="page-scroll" href="#home">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#layanan-kami">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#harga">Price</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team">Team</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#hubungi-kami">Contact</a>
                        </li>
                        <li>
                            <a class="page-scroll label label-warning label-sm" href="<?php echo base_url('ars')?>">AR Society</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section id="hero-video">
            <div class="container">
                <div class="row">
                    <div class="hero-content-video">
                        <div class="hero-content">
                            <div class="col-md-7">
                                <h1 class="os-animation" data-os-animation="bounceInDown">
                                    AR Society
                                </h1>
                                <p class="sub-title os-animation" data-os-animation="slideInLeft">
                                   Website Services. <br> <span class="typed"></span>
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-5 text-center np">
                                <div class="hero-img img-responsive os-animation" data-os-animation="bounceInUp">
                                    <img height="500" width="600" src="<?php echo base_url('public/home/assets/images/mockup/preview.png')?>" alt="mockup3" title="mockup3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.hero-content-video -->
                    <div class="arrow animated infinite bounce fixed-bottom">
                        <a style="color: white;" class="page-scroll" href="#tentang-kami"><i class="fa fa-angle-down"></i></a>
                    </div>
                </div>
            </div>
            <div class="wrap-hero-content-video"></div>
            <video autoplay loop poster="<?php echo base_url('public/home/assets/images/background/copy.jpg')?>" id="bgvid">
                <div class='particle-network-animation text-center'></div>
                <!--<source src="<?php echo base_url('public/home/assets/video/video.mp4')?>" type="video/mp4">-->
            </video>
        </section>

        <div id ="stunning" class="stunning white-bg">
            <div class="container">
                <div class="row">
                    <div class="options">
                        <div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                            <div class="options-box">
                                <div class="options-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="options-content">
                                    <h3 class="title"><b>Online Store Website</b></h3>
                                    <p class="description" align="justify">
                                        An online store is a website created to sell products online. We accept orders for online website creation services where the features will be based on what you want, such as product catalog with complete information, sales report results, shopping cart, online chatting and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
                            <div class="options-box">
                                <div class="options-icon">
                                    <i class="fa fa-building"></i>
                                </div>
                                <div class="options-content">
                                    <h3 class="title"><b>Information System Website</b></h3>
                                    <p class="description" align="justify">
                                        Information systems are used to support operations and management. We accept orders for making information system websites with policies made by the agency / institution, we will manage the information data as best as possible to maintain the confidentiality of data from the agency / institution. You can customized the features by yourself.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.6s">
                            <div class="options-box">
                                <div class="options-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="options-content">
                                    <h3 class="title"><b>Portfolio/Blog</b></h3>
                                    <p class="description" align="justify">
                                      Portfolio / blog are used to show a set of products, projects, service services or brands offered for sale. We accept Portfolio creation and provide several <i>Free</i> and <i>Premium</i> templates with <i>User Friendly</i> appearance that can be chosen directly by our customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="layanan-kami" class="features gradient-bg">
            <div class="container">
                <div class="row features">
                    <div class="section-title">
                        <div class="subtitle">AR Society</div>
                        <h2>Our <span class="gradient-text">Services</span></h2>
                    </div>
                    <hr class="hr-title-01 hr-icon">
                    <div class="features-content">
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <div class="col-sm-3 col-xs-12 np">
                                    <div class="box-icon os-animation bg-dark" data-os-animation="fadeInDown" data-os-animation-delay="0.2s">
                                        <span class="fa fa-2x fa-thumbs-up gradient-text-02"></span>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-9 col-xs-12 np">
                                    <div class="info">
                                        <h4><b>User Friendly</b></h4>
                                        <p>
                                            Penggunaan website sangat mudah digunakan, bahkan untuk pengguna baru.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="col-sm-3 col-xs-12 np">
                                    <div class="box-icon os-animation bg-dark" data-os-animation="fadeInDown" data-os-animation-delay="0.2s">
                                        <span class="fa fa-3x fa-mobile gradient-text-02"></span>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-9 col-xs-12 np">
                                    <div class="info">
                                        <h4><b>Responsive Interface</b></h4>
                                        <p>
                                            Website sangat menarik untuk tampilan diperangkat desktop, tablet hingga handphone.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="col-sm-3 col-xs-12 np">
                                    <div class="box-icon os-animation bg-dark" data-os-animation="fadeInDown" data-os-animation-delay="0.2s">
                                        <span class="fa fa-2x fa-diamond gradient-text-02"></span>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-xs-12 np">
                                    <div class="info">
                                        <h4><b>Security</b></h4>
                                        <p>
                                            Website yang telah di proses akan diuji tingkat keamanan sebelum dirilis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="col-sm-3 col-xs-12 np">
                                    <div class="box-icon os-animation bg-dark" data-os-animation="fadeInDown" data-os-animation-delay="0.2s">
                                        <span class="fa fa-2x fa-certificate gradient-text-02"></span>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-xs-12 np">
                                    <div class="info">
                                        <h4><b>Guaranteed</b></h4>
                                        <p>
                                            Kami akan memberikan garansi jika terjadi Error atau BUG pada website.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="img-responsive mockup animated infinite bounce" data-os-animation="slideInBottom">
                                <img src="<?php echo base_url('public/home/assets/images/mockup/pelayanan.png')?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="milestones" class="milestones parallax">
            <div class="wrap-milestones-content">
                <div class="milestones-content dark-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <div class="counter-box">
                                    <div class="counter-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <h3 class="title text-info"><b>Portfolio/Blog</b></h3>
                                    <div class="counter-title">Web Portfolio or Blog with Free / Premium templates. <br>Price starts from Rp. 500.000,-</div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="counter-box">
                                    <div class="counter-icon">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <h3 class="title text-info"><b>Online Store</b></h3>
                                    <div class="counter-title">Online shop with product description and shopping cart features. <br>Price starts from Rp. 800.000,-</div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="counter-box">
                                    <div class="counter-icon">
                                        <i class="fa fa-building"></i>
                                    </div>
                                    <h3 class="title text-info"><b>Information System</b></h3>
                                    <div class="counter-title">Website with data management with User Friendly appearance. <br>Price starts from Rp. 1.500.000,-</div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="counter-box">
                                    <div class="counter-icon">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                    <h3 class="title text-info"><b>Website Custom</b></h3>
                                    <div class="counter-title">We also accept Custom Website orders from you. <br>Price starts from Rp. 2.000.000,-</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="harga" class="pricing white-bg">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <div class="subtitle">AR Society</div>
                        <h2>Harga <span class="gradient-text">Pembuatan Website</span></h2>
                    </div>
                    <hr class="hr-title-01 hr-icon">
                    <div class="pricing-position">
                        <div class="col-md-4 col-sm-4 np os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <h4 class="heading text-info">Portfolio/Blog</h4>
                                </div>
                                <p class="pricing-content">
                                    <h5><b>Blog Standart</b></h5>
                                    <hr>Template Standart<hr>
                                    Free Domain<hr>
                                    <h5><b>RP. 500.000,-</b></h5>
                                    <br>

                                    <h5><b>Portfolio Standart</b></h5>
                                    <hr>Template Standart<hr>
                                    Free Domain<hr>
                                    <h5><b>RP. 650.000,-</b></h5>
                                    <br>

                                    <h5><b>Custom Blog/Portofolio</b></h5>
                                    <hr>Template Premium<hr>
                                    Free Domain<hr>
                                    <h5>Mulai dari <b>RP. 800.000,-</b></h5>
                                </p><br>
                                <a href="<?php echo base_url('personal')?>" class="dark-btn">
                                    <span>Order Now</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 np os-animation" data-os-animation="fadeInDown" data-os-animation-delay="0.4s">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <h4 class="heading text-info">Online Store</h4>
                                </div>
                                <p class="pricing-content">
                                    <h5><b>Toko Online Standart</b></h5>
                                    <hr>Template Standart<hr>
                                    1 Pages Khusus<hr>
                                    Free Domain<hr>
                                    Fitur Keranjang Pembelian<hr>
                                    <h5><b>RP. 800.000,-</b></h5>
                                    <br>

                                    <h5><b>Toko Online Custom</b></h5>
                                    <hr>Template Premium<hr>
                                    2 Pages Khusus<hr>
                                    Free Domain<hr>
                                    Custom Fitur<hr>
                                    Maintenance Service<hr>
                                    <h5>Mulai dari <b>RP. 1.000.000,-</b></h5>
                                </p><br>
                                <a href="<?php echo base_url('order')?>" class="dark-btn">
                                    <span>Order Now</span>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 np os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.4s">
                            <div class="pricing-table">
                                <div class="pricing-table-header">
                                    <h4 class="heading text-info">Information System</h4>
                                </div>
                                <p class="pricing-content">
                                    <h5><b>Reguler</b></h5>
                                    <hr>Template Standart<hr>
                                    1 Pages Khusus<hr>
                                    Free Domain<hr>
                                    Maintenance Service<hr>
                                    <h5><b>RP. 1.500.000,-</b></h5>
                                    <br>
                                    <h5><b>Premium</b></h5>
                                    <hr>Template Premium<hr>
                                    3 Pages Khusus<hr>
                                    Free Domain<hr>
                                    Request Fitur<hr>
                                    Maintenance Service<hr>
                                    <h5>Mulai dari <b>RP. 1.900.000,-</b></h5>
                                </p><br>
                                <a href="<?php echo base_url('order')?>" class="dark-btn">
                                    <span>Order Now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="milestones" class="milestones parallax">
            <div class="wrap-milestones-content">
                <div class="milestones-content gradient-bg">
                    <h2 class="text-center text-primary" style="margin-top: -30px; margin-bottom: 60px;"><b>How to use our service</b></h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <div class="features box">
                                    <div class="box-icon os-animation bg-info" data-os-animation="fadeInDown" data-os-animation-delay="0.2s">
                                        <span class="fa fa-3x fa-shopping-cart text-white-01"></span>
                                    </div><br>
                                    <div align="center"><b>Choose the package or website creation website that you want.</b></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="features box">
                                    <div class="box-icon os-animation bg-warning" data-os-animation="fadeInDown" data-os-animation-delay="0.2s">
                                        <span class="fa fa-3x fa-wpforms"></span>
                                    </div><br>
                                    <div align="center"><b>Fill out the order form and discuss your order with our team.</b></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="features box">
                                    <div class="box-icon os-animation bg-danger" data-os-animation="fadeInDown" data-os-animation-delay="0.2s">
                                        <span class="fa fa-3x fa-dollar"></span>
                                    </div><br>
                                    <div class="text-primary" align="center"><b>Pay your bill according to your orders.</b></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="features box">
                                    <div class="box-icon os-animation bg-success" data-os-animation="fadeInDown" data-os-animation-delay="0.2s">
                                        <span class="fa fa-3x fa-code"></span>
                                    </div><br>
                                    <div class="text-primary" align="center"><b>We will work on the website according to the time of the agreement.</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="team" class="team white-bg">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <div class="subtitle">AR Society</div>
                        <h2><span class="gradient-text">Team</span></h2>
                    </div>
                    <hr class="hr-title-01 hr-icon">
                    <div class="owl-team owl-carousel">
                        <div class="our-team">
                            <div class="pic">
                                <img src="<?php echo base_url('public/home/assets/images/team/fikri.jpg')?>" alt="team">
                                <ul class="social-links">
                                    <li><a href="https://github.com/fikrisaa" class="fa fa-github"></a></li>
                                    <li><a href="https://www.linkedin.com/in/fikrisaa/" class="fa fa-linkedin"></a></li>
                                    <li><a href="mailto:fikri@ar-society.com" class="fa fa-envelope"></a></li>
                                </ul>
                            </div>
                            <div class="info">
                                <h3 class="team-title">Muhammad Fikri</h3>
                                <span class="job">Web Developer</span>
                            </div>
                        </div>
                        <div class="our-team">
                            <div class="pic">
                                <img src="<?php echo base_url('public/home/assets/images/team/reyy.jpg')?>" alt="team">
                                <ul class="social-links">
                                    <li><a href="https://github.com/renaldydani" class="fa fa-github"></a></li>
                                    <li><a href="https://www.linkedin.com/in/renaldydani/" class="fa fa-linkedin"></a></li>
                                    <li><a href="mailto:rey@ar-society.com" class="fa fa-envelope"></a></li>
                                    <li><a href="https://www.renaldydani.id/" class="fa fa-address-card"></a></li>
                                </ul>
                            </div>
                            <div class="info">
                                <h3 class="team-title">Renaldy Dani</h3>
                                <span class="job">Front End Developer</span>
                            </div>
                        </div>
                        <div class="our-team">
                            <div class="pic">
                                <img src="<?php echo base_url('public/home/assets/images/team/rafif.jpg')?>" alt="team">
                                <ul class="social-links">
                                    <li><a href="https://github.com/rafifm" class="fa fa-github"></a></li>
                                    <li><a href="https://www.linkedin.com/in/rafif-musyaffa-69549986/" class="fa fa-linkedin"></a></li>
                                    <li><a href="mailto:rafif@ar-society.com" class="fa fa-envelope"></a></li>
                                </ul>
                            </div>
                            <div class="info">
                                <h3 class="team-title">Rafif Musyaffa</h3>
                                <span class="job">UI/UX Designer</span>
                            </div>
                        </div>
                        <div class="our-team">
                            <div class="pic">
                                <img src="<?php echo base_url('public/home/assets/images/team/hais.jpg')?>" alt="team">
                                <ul class="social-links">
                                    <li><a href="https://github.com/haisabdillah" class="fa fa-github"></a></li>
                                    <li><a href="https://www.linkedin.com/in/haismansyah-abdillah-2b7aba173/" class="fa fa-linkedin"></a></li>
                                    <li><a href="mailto:abi@ar-society.com" class="fa fa-envelope"></a></li>
                                </ul>
                            </div>
                            <div class="info">
                                <h3 class="team-title">Haismansyah Abdillah</h3>
                                <span class="job">Back End Developer</span>
                            </div>
                        </div>
                        <div class="our-team">
                            <div class="pic">
                                <img src="<?php echo base_url('public/home/assets/images/team/aldy.jpg')?>" alt="team">
                                <ul class="social-links">
                                    <li><a href="https://github.com/aldyHelix" class="fa fa-github"></a></li>
                                    <li><a href="https://www.linkedin.com/in/aldy-gumilar-93bb1812a/" class="fa fa-linkedin"></a></li>
                                    <li><a href="mailto:aldy@ar-society.com" class="fa fa-envelope"></a></li>
                                </ul>

                            </div>
                            <div class="info">
                                <h3 class="team-title">Aldy Satria Gumilar</h3>
                                <span class="job">Android Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="hubungi-kami" class="dark-bg">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <div class="subtitle">AR Society</div>
                        <h2>Contact<span class="gradient-text"> Us</span></h2>
                    </div>
                    <hr class="hr-title-01 hr-icon">
                    <div class="contacts">
                            <div class="features-content">
                        <div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                            <div class="contacts-box">
                                <div class="contacts-icon">
                                    <i class="fa fa-map-marker fa-4x gradient-text-01"></i>
                                </div>
                                <div class="contacts-content">
                                    <h3 class="title"><b>Address</b></h3>
                                    <p class="description">
                                       Perum. Villa Sengkaling Blok O/44
                                        <br>
                                        Kec. Dau, Kab. Malang, Jawa Timur
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                            <div class="contacts-box">
                                <div class="contacts-icon">
                                    <i class="fa fa-phone fa-4x  gradient-text-01"></i>
                                </div>
                                <div class="contacts-content">
                                    <h3 class="title"><b>Phone Number</b></h3>
                                    <p class="description">
                                        <strong>Kantor : </strong>
                                        012-143321
                                        <br>
                                        <strong>Pribadi : </strong>
                                        +62 853 9555 5261
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.2s">
                            <div class="contacts-box">
                                <div class="contacts-icon">
                                    <i class="fa fa-envelope fa-4x  gradient-text-01"></i>
                                </div>
                                <div class="contacts-content">
                                    <h3 class="title"><b>E-mail</b></h3>
                                    <p class="description">
                                        contacts@ar-society.com
                                    </p>
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
