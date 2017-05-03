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
      <span class="mdl-layout-title">  Fun Charity</span>
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
   <div class="container">
        <h1 align="center"><b>Tentang Kami</b></h1>
        <h4 align="center" font-size="20pt"><b> </b></h4>
    </div>
    <div class="page-content">
    <!-- Container -->
        <div class="container" align="center">
          <div class="col-sm-12 col-md-4">
             <img src="<?php echo base_url('asset/img/andi.png') ?>" alt="" class="img-circle" style="width:250px; height:250px;">
              <div class="caption">
                <h3>Andi Waluyo</h3>
                <h5>6706154107</h5>
			        </div>
          </div>
          <div class="col-sm-12 col-md-4">
             <img src="<?php echo base_url('asset/img/ikhsan.png') ?>" alt="" class="img-circle" style="width:250px; height:250px;">
              <div class="caption">
                <h3>M. Ikhsan Syahputra</h3>
                <h5>6706151123</h5>
			        </div>
          </div>
          <div class="col-sm-12 col-md-4">
             <img src="<?php echo base_url('file/asset/img/ucup.jpg') ?>" alt="" class="img-circle" style="width:250px; height:250px;">
              <div class="caption">
                <h3>Muchammad Yusuf</h3>
                <h5>6706154063</h5>
			        </div>
          </div>

          </div><!--End of row one-->
        </div>
		<div class="container" >
		 </br></br>
		</div>
    <!-- footer -->
      <footer class="mdl-mini-footer">
        <div class="mdl-mini-footer__left-section">
          <div class="mdl-logo">&copy; 2017  FunCharity | Design by <a href="#">King Code</a></div>
        </div>
     </footer>
    </div>
  </main>
</div>
</body>
</html>
