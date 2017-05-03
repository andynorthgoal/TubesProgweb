
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
                            <a href="<?php echo base_url('index.php/admin') ?>" style="color:#FFF;"><i class="fa fa-dashboard fa-fw nav_icon" style="color:#FFF;"></i>Dashboard</a>
                        </li>
						<li>
                            <a href="<?php echo base_url('index.php/admin/form_agenda') ?>"><i class="fa fa-laptop fa-fw nav_icon"></i>Buat Agenda</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Management</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/agenda_table') ?>">Agenda</a>
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
<div class="xs">
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
	<!-- Form Name -->
	<legend><h1>Selamat Datang , <?php echo $this->session->userdata("nama"); ?></h1></legend>
		<table border=0 class="table">
			<tr>
                <th>Jumlah Agenda Amal</th>
                <th>Jumlah Donatur Tergabung</th>
			</tr>
            <tr>
                <th><h2><?php echo $agenda;?> Agenda</h2></th>
                <th><h2><?php echo $donasi;?> Donasi</h2></th>
			</tr>	
		</table>
	</form>
    </div><!-- /.container -->
      </div>
        	</div>
		</div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
