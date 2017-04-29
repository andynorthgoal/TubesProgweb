
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
                            <a href="<?php echo base_url('index.php/admin/create_agenda') ?>" style="color:#FFF;"><i class="fa fa-laptop fa-fw nav_icon" style="color:#FFF;"></i>Buat Agenda</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables</a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/agenda_table') ?>">Tabel Agenda</a>
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
	   <div class="xs">
  	
		

    
	<!-- Form Name -->
	<legend>Buat Agenda</legend>
	<?php echo form_open("admin/action_edit_mhs/".$no_agenda); ?> 
		<table border=0 align="center">
			<tr>
				<td label >Judul Agenda</td><?php echo form_error('judulAgenda', '<div style="color:red">','</div>');?>
				<td label class="control-label">
					<input type="text" name="judulAgenda" placeholder="contoh : Sumbangan Pantiasuhan" class="form-control">
				</td>
			</tr>
			<tr>
				<td label >Alamat Agenda</td><?php echo form_error('alamatAgenda', '<div style="color:red">','</div>');?>
				<td label class="control-label">
					<input type="text" name="alamatAgenda" placeholder="contoh : Bandung / Jakarta" class="form-control" style="width:800px;">
				</td>
			</tr>
			<tr>
				<td label >Tanggal Akhir</td><?php echo form_error('tglSetor', '<div style="color:red">','</div>');?>
				<td label class="control-label">
					<input type="date" name="tglSetor" class="form-control">
				</td>
			</tr>
			<tr>
				<td label >Target dana (Rp.)</td><?php echo form_error('targetDana', '<div style="color:red">','</div>');?>
				<td label class="control-label">
					<input type="text" name="targetDana" placeholder="contoh : 1000000 / 2000000" class="form-control">
				</td>
			</tr>
			
			<tr>
				<td label >Deskripsi</td><?php echo form_error('deskripsiAgenda', '<div style="color:red">','</div>');?>
				<td label class="control-label">
					<textarea class="form-control" rows="10" name="deskripsiAgenda"></textarea>
				</td>
			</tr>
			<tr>
				<td label class="control-label"></td>
				<td><br>
				<input type="submit" name="submit" value="Submit" class="btn btn-success">
				<input type="reset" name="reset" value="Reset" class="btn btn-danger">
				</td>
			</tr>
		</table>
	</form>

    </div><!-- /.container -->
	
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
