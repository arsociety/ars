<?php $this->load->view('themes/ars/header.php') ?>

	<!-- Page -->
	<div class="page">
	  <div class="page-content container-fluid">

		<!-- Blog Posting -->
	  	<div class="panel panel-bordered">
	  	  <div class="panel-heading">
	  	  	<h2 class="panel-title text-center">Artikel AR Society</h2>
	  	  </div>
	  	  <div class="panel-body">
	  	  	<ul class="blocks blocks-100 blocks-xxl-4 blocks-lg-3 blocks-md-2" data-plugin="masonry">
					<?php foreach ($artikel as $art): ?>
		  	  <li class="masonry-item">
	            <div class="card card-shadow">
	              <div class="card-header cover">
	                <img class="cover-image" src="<?php echo base_url('public/material/global/photos/placeholder.png')?>" alt="...">
	              </div>
	              <div class="card-block">
	                <h3 class="card-title"><?php echo $art->judul ?></h3>
	                <p class="card-text type-link">
	                  <small>
	                    By
	                    <a href="javascript:void(0)"><?php echo $art->penulis ?></a>
	                    <a href="javascript:void(0)"><?php echo $art->tgl_awal ?></a>
	                    <a href="javascript:void(0)">
	                      <span>3</span> Komentar</a>
	                  </small>
	                </p>
	                <p class="card-text" align="justify"><?php echo $art->isi ?> </p>
	              </div>
	              <div class="card-block text-right">
	                <button type="button" class="btn btn-primary card-link"><i class="fa fa-globe"></i>&nbsp; Baca artikel</button>
	              </div>
	            </div>
						</li>
						<?php endforeach; ?>
	          <li class="masonry-item">
	            <div class="card card-shadow">
	              <div class="card-header cover">
	                <img class="cover-image" src="<?php echo base_url('public/material/global/photos/placeholder.png')?>" alt="...">
	              </div>
	              <div class="card-block">
	                <h3 class="card-title">Postingan Contoh</h3>
	                <p class="card-text type-link">
	                  <small>
	                    By
	                    <a href="javascript:void(0)">Admin</a>
	                    <a href="javascript:void(0)">05, 2017</a>
	                    <a href="javascript:void(0)">
	                      <span>3</span> Komentar</a>
	                  </small>
	                </p>
	                <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                tempor incididunt ut labore et dolore magna aliqua. </p>
	              </div>
	              <div class="card-block text-right">
	                <button type="button" class="btn btn-primary card-link"><i class="fa fa-globe"></i>&nbsp; Baca artikel</button>
	              </div>
	            </div>
	          </li>
          	</ul>
          	<div class="text-center">
          	  <a href="" class="btn btn-warning text-white btn-waves"><i class="fa fa-list"></i>&nbsp; Lihat semua artikel AR Society</a>
          	</div>
	  	  </div>
	  	</div>
	  	<!-- End Blog Posting -->

		<!-- Welcome  -->
	  	<div class="panel text-center panel-primary panel-line">
	  	  <div class="panel-heading">
	  	  	<h2 class="panel-title display-3">Salam AR Society!</h2>
	  	  </div>
	  	  <div class="panel-body">
			<p>
			  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>
			  	<a href="#" class="btn btn-icon social-facebook waves-effect waves-classic"><i class="icon bd-facebook" aria-hidden="true"></i></a>&nbsp;
			  	<a href="#" class="btn btn-icon social-twitter waves-effect waves-classic"><i class="icon bd-twitter" aria-hidden="true"></i></a>&nbsp;
			  	<a href="#" class="btn btn-icon social-instagram waves-effect waves-classic"><i class="icon bd-instagram" aria-hidden="true"></i></a>&nbsp;
			  	<a href="#" class="btn btn-icon social-youtube waves-effect waves-classic"><i class="icon bd-youtube" aria-hidden="true"></i></a>
			</p>
			<hr>
			<a href="<?php echo base_url('home#harga')?>" class="btn btn-success padding-horizontal-40 animated infinite pulse waves-effect waves-light text-white"><i class="md-mail-send"></i>&nbsp; gunakan jasa AR Society sekarang</a>
	  	  </div>
	  	</div>
	  	<!-- End Welcome -->

	  </div>
	</div>
    <!-- End Page -->

<?php $this->load->view('themes/ars/footer.php') ?>
