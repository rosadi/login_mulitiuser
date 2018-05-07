<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
</head>
<body>
<h3>Page - Admin</h3>
<h1>Haii selamat datang...</h1>
<h3>Username Anda adalah :  <?php echo $username; ?></h3>
 <a href="<?php echo site_url('admin/controller_admin/logout'); ?>">Logout</a>

</body>
</html>