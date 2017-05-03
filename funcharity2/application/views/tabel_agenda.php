
<!DOCTYPE HTML>
<html>
<head>
<title>Hello , <?php echo $this->session->userdata("nama"); ?></title>


<link href="<?php echo base_url('file/bootstrap/css/bootstrap.min.css') ?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->

<!-- Graph CSS -->
<link href="<?php echo base_url('file/bootstrap/css/lines.css') ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('file/bootstrap/css/custom.css') ?>" rel="stylesheet">


</head>
<body>

<div id="wrapper" style="background-color:#212121;">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#212121;">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html" style="color:#FFF;">Control Panel</a>
            </div>
           
            <div class="navbar-default sidebar" role="navigation" style="background-color:#212121;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li >
                            <a href="<?php echo base_url('index.php/admin') ?>" ><i class="fa fa-dashboard fa-fw nav_icon"></i>Beranda</a>
                        </li>
						<li>
                            <a href="<?php echo base_url('index.php/admin/create_agenda') ?>" ><i class="fa fa-laptop fa-fw nav_icon"></i>Buat Agenda</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/agenda_table') ?>" style="color:#FFF;">Tabel Agenda</a>
                                </li>
								 <li>
                                    <a href="<?php echo base_url('index.php/admin/donatur_table') ?>">Tabel Donatur</a>
                                </li>
                            </ul>
							
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                                <li>
                                    <a href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>Tabel Agenda</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
      <thead>
        <tr>
          <th>Kode</th>
          <th>Judul</th>
          <th>Tgl-setor</th>
          <th>Target-Dana</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
	  <?php 
			$no = 1;
			foreach($agenda as $u){ 
		?>
	  
        <tr class="active">
			  <th><?php echo $no++; ?></th>
			  <td><?php echo $u->judul_agenda; ?></td>
			  <td><?php echo $u->tgl_setor; ?></td>
			  <td><?php echo "Rp. ".$u->target_dana; ?></td>
			  <td><center>
					  <a href="<?php echo base_url('index.php/admin/edit_agenda/'.$u->no_agenda)?>">edit</a> |
					  <a href="<?php echo base_url('index.php/admin/delete_agenda/'.$u->no_agenda)?> ">hapus</a>
				  </center>
			  </td>
			  <?php } ?>
        </tr>
      </tbody>
    </table>
   </div>
      </div><!-- /.table-responsive -->
  </div>
  </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
