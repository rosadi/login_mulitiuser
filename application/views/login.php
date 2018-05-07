<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="">
</head>
<body>
    
    <h3>LOGIN</h3>

    <?php echo form_open("auth/cek_login") ?>

    <table>
        <tr>
            <td>USERNAME</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="3" align="right"><input type="submit" name="submit" value="Log-in"></td>
        </tr>
    </table>

    <?php echo form_close();; ?>

</body>
</html>