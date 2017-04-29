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

  <main class="mdl-layout__content">
    <div class="page-content">
	 <div class="container">
                    <div class="col-sm-8">
                      <h2>FUN CHARITY</h2>

					</div>
     <!-- Container -->
        <div class="container" >
             <div class="row">

				<div class="col-md-8">
					<img class="img-responsive" src="http://placehold.it/700x350" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
					 <h4><strong>MISI:</strong> Membantu kaum yang kurang beruntung atau yang kurang mampu</h4>
                      <p><strong>VISI:</strong> Penggalangan Dana Online , dari teman-teman yang beruntung</p>
				</div>

            <div class="col-md-4">
                <h2>Target Dana </h2>
				<h3>RP. 400.000.000.-</h3>
				<h5>hingga 01 Mei 2017<h5>
				<div class="col-xs-6">
                <p><a class="btn btn-danger btn-lg" href="<?php echo base_url('index.php/beranda/donasi') ?>" role="button">Donasi Sekarang</a></p>
                <p><a class="btn btn-primary btn-lg" href="<?php echo base_url('index.php/beranda/donasi') ?>" role="button">Share Facebook</a></p>
				</div>
            </div>

			</div>
        </div>
		</div>
        <!-- footer -->
        <footer class="mdl-mini-footer" style="background-color:#263238">
          <div class="mdl-mini-footer__left-section">
            <div class="mdl-logo">&copy; 2017  FunCharity | Design by <a href="#">King Code</a></div>
          </div>
        </footer>

	</div>
  </main>
</div>
</body>
</html>
