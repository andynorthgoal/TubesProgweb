<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('file/bootstrap/css/login-style.css') ?>">
</head>
<body style="background-color:#546E7A">
    <div class="login-card">
        <h1 style="color:#D50000">WARNING!!</h1>
        <form action="<?php echo base_url('index.php/login'); ?>">
            <h1>Username atau Password</h1>
            <h1 style="color:#D50000">SALAH</h1>
            <input type="submit" name="login" class="login login-submit" value="Kembali">
        </form>
    </div>
</body>
</html>