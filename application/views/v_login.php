<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Halaman Login Pada CodeIgniter</title>
</head>
<body>
    <h1>Membuat Halaman Login Pada CodeIgniter</h1>

    <form action="<?php echo base_url('index.php/login/action_login'); ?>" method="POST">
        <table style="border: 1; margin: 20px; width: 60%">
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>