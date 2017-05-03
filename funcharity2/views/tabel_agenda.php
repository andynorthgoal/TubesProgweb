
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
                            <a href="<?php echo base_url('index.php/admin') ?>" ><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
						<li>
                            <a href="<?php echo base_url('index.php/admin/form_agenda') ?>" ><i class="fa fa-laptop fa-fw nav_icon"></i>Buat Agenda</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Management</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/agenda_table') ?>" style="color:#FFF;">Agenda</a>
                                </li>
								 <li>
                                    <a href="<?php echo base_url('index.php/admin/donatur_table') ?>">Donatur</a>
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
	   
  	 <h3>Management Agenda</h3>
	 
  	<div class="bs-example4" data-example-id="contextual-table">
	<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
    <div class="panel-body no-padding">
	<table class="table table-striped">
      <thead>
        <tr class="success">
          <th><center>Kode</center></th>
          <th><center>Tgl-setor</center></th>
          <th><center>Target-Dana</center></th>
          <th><center>Action</center></th>
        </tr>
      </thead>
      <tbody>
	  <?php 
			$no = 1;
			foreach($agenda as $u){ 
		?>
	  
        <tr class="active">
			  <th><center><?php echo $u->no_agenda; ?></center></th>
			  <td><center><?php echo $u->tgl_setor; ?></center></td>
			  <td><center><?php echo "Rp. ".$u->target_dana; ?></center></td>
			  <td><center>
					  <a href="<?php echo base_url('index.php/admin/edit_age/'.$u->no_agenda)?>">edit</a> |
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
