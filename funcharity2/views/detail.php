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
    <div class="mdl-layout__header-row">
      <!-- Title -->
	  <img src="<?php echo base_url('file/asset/img/FunCharityLogo.png') ?>" alt="" class="img-responsive" width="40px" height="40px">
      <span class="mdl-layout-title"> Fun Charity</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/home') ?>">Beranda</a>
        <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/donasi') ?>">Agenda</a>
        <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/aboutus') ?>">Tentang Kami</a>
      </nav>
    </div>
  </header>
  <?php foreach ($detail_agenda as $agenda): ?>
  <main class="mdl-layout__content">
    <div class="page-content">
	 <div class="container">
                    <div class="col-sm-8">
                      <h2><?php echo $agenda->judul_agenda; ?></h2>

					</div>
     <!-- Container -->
        <div class="container" >
             <div class="row">
				<div class="col-md-8">
					<img src="<?php echo base_url('asset/img/Agenda/kegiatansosial.png')?>" alt="" style="width:730px; height:450px;"><br><br>
					<h6 name="detail"><?php echo $agenda->deskripsi_agenda; ?></h6>
				</div>

            <div class="col-md-4">
                <h2>Target Dana </h2>
				<h3>Rp. <?php echo $agenda->target_dana; ?></h3>
				<h5>pengumpulan dana : <?php echo $agenda->tgl_setor; ?><h5>	
				<div class="col-xs-6">
                <p><a class="btn btn-danger btn-lg" href="<?php echo base_url('index.php/beranda/contribut') ?>" role="button">Donasi Sekarang</a></p>
				<div class="socialfloat">
				<!-- Facebook Share Button -->
				<a class="fbtn share facebook" href="#"><i class="fa fa-facebook"></i></a>
                <p><a class="btn btn-primary btn-lg" href="http://www.facebook.com/sharer/sharer.php?u=http://[::1]/funcharity/index.php/beranda/pontren	" role="button">Share Facebook</a></p>
				</div>
            </div>
		
			</div>
        </div>
		</div>
		<?php endforeach; ?>
       <!-- footer -->
	  </div>
    <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer__left-section">
        <div class="mdl-logo">&copy; 2017  FunCharity | Design by <a href="https://kingcodeblog.wordpress.com/">King Code</a></div>
      </div>
   </footer>

	
  </main>
</div>
</body>
</html>
