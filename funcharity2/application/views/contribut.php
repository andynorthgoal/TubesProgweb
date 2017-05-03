<html>
<title></title>
<head>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/normalize.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/component.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/custom-styles.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/demo.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/font-awesome-ie7.css') ?>">

     <script src="<?php echo base_url('file/bootstrap/js/jquery.mobilemenu.js') ?>"></script>
     <script src="<?php echo base_url('file/bootstrap/js/html5shiv.js') ?>"></script>
     <script src="<?php echo base_url('file/bootstrap/js/respond.min.js') ?>"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css.map') ?>">
    <script src="<?php echo base_url('file/mdl/material.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js.map') ?>"></script>

</head>
<body>
   <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header" style="background-color:#5E35B1;">
    <div class="mdl-layout__header-row" >
      <!-- Title -->
	  <img src=" <?php echo base_url('file/asset/img/FunCharityLogo.png') ?>" alt="" class="img-responsive" width="40px" height="40px" >
      <span class="mdl-layout-title" >  Fun Charity</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
          <a class="mdl-navigation__link" role="button" href="<?php echo base_url('index.php/beranda/home') ?>">Beranda</a>
          <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/donasi') ?>">Agenda</a>
          <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/aboutus') ?>">Tentang Kami</a>
        </nav>
    </div>
  </header>

  <main class="mdl-layout__content">
    <div class="page-content">

    <!-- Container -->
    <form method="post" action="<?php echo base_url().'index.php/donasi/insert';?>">
      <div class="container" >
        <div class="col-sm-8">
          <h2>Identitas Anda</h2>
        </div>
      </div>
      <div class="container">
  	    <div class="col-xs-3">
  		      <label for="ex1">Nama Lengkap</label>
  		    <input class="form-control" name="nama" type="text">
  		  </div>
      	<div class="col-xs-3">
      	  <label for="ex2">Email</label>
      	  <input class="form-control" name="email" type="text">
      	</div>
      </div>
  		<div class="container" >
  	    <div class="col-xs-6">
  			  <label for="ex1">Masukan no hp anda</label>
  			  <input class="form-control" name="no_hp" type="number">
			     <p>Isi untuk mendapatkan progres dari campaign ini.</p>
  			</div>
  		</div>
			<div class="container">
        <div class="col-sm-8">
          <h3>Masukan Nominal Donasi</h3>
        </div>
	      <div class="col-xs-5">
			     <input class="form-control" name="jumlah_donasi" type="number">
	         <label style="font-weight:normal"><input type="checkbox"> 	Sembunyikan nama saya</label>
				</div>
        </div>
	      <div class="col-xs-5">
			     <input class="form-control" name="no_agenda" type="number">
	      </div>
			</div>
  		<div class="container">
        <div class="col-sm-8">
  				<h4>Pilih Metode Pembayaran</h4>
  				<div class="radio">
  					<label><input type="radio" name="optradio">Transfer BCA</label>
  				</div>
  				<div class="radio">
  					<label><input type="radio" name="optradio">Transfer BNI</label>
  				</div>
  				<div class="radio disabled">
  					<label><input type="radio" name="optradio" disabled>Transfer MANDIRI</label>
  				</div>
  				<div class="checkbox panel panel-default">
	          <label><input class="panel-heading" type="checkbox" value="">Saya mempercayai/mengenal campaigner ini dan setuju dengan Syarat & Ketentuan Donasi di Kingcode.com</label>
					</div>
        </div>
  		</div>
      <div class="container">
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Kirim"/></br></br>
				</div>
  		</div>
    </form>

         <!-- footer -->
    <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer__left-section">
        <div class="mdl-logo">&copy; 2017  FunCharity | Design by <a href="#">King Code</a></div>
        <ul class="mdl-mini-footer__link-list">
          <li><a href="#">Help</a></li>
          <li><a href="#">Privacy & Terms</a></li>
        </ul>
      </div>
   </footer>
    </div>
  </main>
</div>
</body>
</html>
