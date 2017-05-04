<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/login-style.css') ?>">
</head>
<body style="background-color:#546E7A">
	<div class="login-car">
		<h1>Login Admin</h1>
        <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post" class = "form-horizontal">			
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" class="login login-submit" value="Login">
        </form>
    </div>
</body>
</html>
