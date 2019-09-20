<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menambah Data </title>
</head>

<body>
    <h1>Membuat CRUD Pada CodeIgniter</h1>
    <h3>Tambah Data Baru</h3>
    
    <form action="<?php echo base_url() . 'index.php/crud/tambah_action'; ?>" method="POST">
        <table style="border: 1; margin: 20px; width: 60%">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah Data"></td>
            </tr>
        </table>
    </form>
</body>

</html>