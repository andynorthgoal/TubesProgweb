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

     <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/css/tes.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css.map') ?>">

    <script src="<?php echo base_url('file/mdl/material.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js.map') ?>"></script>
</head>
<body>
  <div class="list-agenda">
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
        <h1 align="center"><b>Daftar Kegiatan</b></h1>
        <h4 align="center" font-size="20pt"><b>Pilih dan salurkan donasi
          untuk daftar kegiatan yang berarti bagi Anda.</b></h4>
    </div>
    <!--Content-->
    <div class="content">
        <div class="container">
            <!--List Agenda-->
            <?php
            for ($i=1; $i <= 9; $i++) {
              if($i % 3 == 0){
                  echo "<div class=\"row\">";
              }

              //#code..?>
                <a href="<?php echo base_url('index.php/beranda/detail') ?>" class="col-md-4 list" role="button">
                  <div class="thumbnail">
                    <img class="list" src="<?php echo base_url('file/asset/img/tanahlongsor.jpg')?>" alt="...">
                    <div class="caption">
                      <h3>Tanah Longsor</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac tortor maximus nisl porta hendrerit feugiat eget mi. Nullam massa urna, posuere a tristique tincidunt, tempor eu dolor. Integer nec sem enim......s</p>
                    </div>
                  </div>
                </a>

            <?php
              if($i % 3 == 0 ){
                  echo "</div>";
                  echo "<div class=\"margin\">";
                  echo "</div>";
              }
            }
            ?>
            <!--End of List Agenda-->

            <div class="col-md-offset-4">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </div>

      </div><!--End Container -->
    </div><!-- Enc of Content-->

     <!-- footer -->
       <footer class="mdl-mini-footer">
         <div class="mdl-mini-footer__left-section">
           <div class="mdl-logo">&copy; 2017  FunCharity | Design by <a href="#">King Code</a></div>
         </div>
      </footer>
   </div>
</body>
 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</html>
