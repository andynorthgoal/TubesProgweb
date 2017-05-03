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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/bootstrap2.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/3-col-portfolio') ?>">

     <script src="<?php echo base_url('file/bootstrap/js/bootstrap.min.js') ?>"></script>
     <script src="<?php echo base_url('file/bootstrap/js/jquery.js') ?>"></script>
     <script src="<?php echo base_url('file/bootstrap/js/bootsrap.js') ?>"></script>

     <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/css/style.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css.map') ?>">

    <script src="<?php echo base_url('file/mdl/material.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js.map') ?>"></script>
</head>
<body>
  <!-- Always shows a header, even in smaller screens. -->
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title & Logo -->
          <a href="<?php echo base_url('index.php/beranda/home') ?>">
            <img src="<?php echo base_url('file/asset/img/FunCharityLogo.png')?>" alt="" class="img-responsive" width="40px" height="40px">
          </a>
          <span class="mdl-layout-title"> Fun Charity</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/home') ?>">Beranda</a>
            <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/donasi') ?>">Agenda</a>
            <a class="mdl-navigation__link" href="<?php echo base_url('index.php/beranda/aboutus') ?>">Tentang Kami</a>
          </nav>
        </div>
      </header>

    <!--Title-->
    <div class="container">
        <h1 align="center">Daftar Kegiatan</h1>
        <h4 align="center" font-size="20pt">Pilih dan salurkan donasi untuk daftar kegiatan yang berarti bagi Anda.</h4>
    </div>
    <!--Content-->
      <div class="container">
        <div class="row">

		<?php
			foreach($tb_agenda as $agenda){?>
				
			
          <a href="<?php echo base_url('index.php/beranda/donasi') ?>" class="col-sm-6 col-md-4 list" role="button">
            <div class="thumbnail">
              <img class="list" src="<?php echo base_url('file/asset/img/2.jpg')?>" alt="...">
              <div class="caption">
                <h3><? $agenda->judul_agenda;?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac tortor maximus nisl porta hendrerit feugiat eget mi. Nullam massa urna, posuere a tristique tincidunt, tempor eu dolor. Integer nec sem enim......s</p>
              </div>
            </div>
          </a>
		
		<?php } ?>
        </div><!--End Row-->
      </div><!--End Container -->


    <!-- Pagination -->
    <div class="row text-center">
      <div class="col-lg-12">
          <ul class="pagination">
              <li>
                  <a href="#">&laquo;</a>
              </li>
              <li class="active">
                  <a href="#">1</a>
              </li>
              <li>
                  <a href="#">3</a>
              </li>
              <li>
                  <a href="#">4</a>
              </li>
              <li>
                  <a href="#">5</a>
              </li>
              <li>
                  <a href="#">&raquo;</a>
              </li>
          </ul>
      </div>
    </div>

     <!-- footer -->
    <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer__left-section">
        <div class="mdl-logo">Title</div>
        <ul class="mdl-mini-footer__link-list">
          <li><a href="#">Help</a></li>
          <li><a href="#">Privacy & Terms</a></li>
        </ul>
      </div>
   </footer>
</body>
 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>
