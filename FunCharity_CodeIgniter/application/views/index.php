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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/css/tes.css') ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/mdl/material.min.css.map') ?>">

    <script src="<?php echo base_url('file/mdl/material.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js') ?>"></script>
    <script src="<?php echo base_url('file/mdl/material.min.js.map') ?>"></script>

<body>
  <!-- Navigation Bar-->
  <div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
      <div class="mdl-layout__header-row">
        <!-- Title & Logo -->
        <img src="<?php echo base_url('file/asset/img/FunCharityLogo.png')?>" alt="" class="img-responsive" width="40px" height="40px">
        <span class="mdl-layout-title"> Fun Charity</span>
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

    <!--Header konten-->
    <div class="container">
      <div class="col-md-7" style="margin-top: 80px;">
        <h1 class="white" style="font-weight:bold;">Fun Charity</h1>
        <p class="white" style="font-size:16pt;">Saatnya anda mulai membantu sesama dengan menyumbangkan dana dan menjadi <i>Donatur</i> dari kegiatan-kegiatan amal</p>
        <p class="white">Galang dana Online untuk,</p>
        <h4 class="white" id="changeText" style="margin-top:-20px;">Bencana Alam</h4>
        <br>
        <a class="btn btn-lg btn-pink" style="border-radius:0px;" href="<?php echo base_url('index.php/beranda/donasi') ?>" role="button">Donasi Sekarang</a></p>
      </div>
    </div><!--End of container-->
  </div>
  <div class="bg">
  </div>


  <!--Title-->
  <div class="content">
      <h1 align="center">Daftar Kegiatan</h1>
      <h4 align="center" font-size="20pt">Pilih dan salurkan donasi untuk daftar kegiatan yang berarti bagi Anda.</h4>
    </div>
  </div>
  <!--Content-->
  <div class="content">
    <div class="container">

        <!--List Agenda-->
        <?php
		$i=0;
        foreach ($agenda as $list) {
		  $i++;
          if($i % 3 == 0){
              echo "<div class=\"row\">";
          }

		 
          //#code..?>
             <a href="<?php echo base_url('index.php/beranda/detail/'.$list->no_agenda)?>" class="col-md-4 list" role="button">
              <div class="thumbnail">
                <img class="list" src="<?php echo base_url('file/asset/img/2.jpg')?>" alt="...">
                <div class="caption">
                  <h3><?php echo $list->judul_agenda ?></h3>
                  <p><?php echo substr($list->deskripsi_agenda,0,100)."....."; ?></p>
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

      
    </div><!--End Container -->
  </div><!--End Content-->
	<center>
	   <div class="row">
         <a class="btn btn-lg btn-primary text-center" style="margin:40px;" href="<?php echo base_url('index.php/beranda/donasi') ?>" role="button">Lihat Semua</a>
       </div>
	  </center>
  <div class="content">
    <div class="content-white"></div>
  </div>

  <!-- footer -->
    <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer__left-section">
        <div class="mdl-logo">&copy; 2017  FunCharity | Design by <a href="#">King Code</a></div>
      </div>
   </footer>
</body>







<script type="text/javascript">
  var text = ["Bencana Alam", "Kaum Duafa", "Pembangunan Tempat Ibadah", "Anak Yatim Piatu" , "Buka Puasa Bersama"];
  var counter = 1;
  var elem = document.getElementById("changeText");
  setInterval(change, 2000);
  function change() {
   elem.innerHTML = text[counter];
      counter++;
      if(counter >= text.length) { counter = 0; }
  }
</script>
</html>
