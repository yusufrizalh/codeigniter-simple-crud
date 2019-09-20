<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mengubah Data</title>
</head>
<body>
    <h1>Membuat CRUD Pada CodeIgniter</h1>
    <h3>Mengubah Data</h3>

    <?php foreach($users as $usr) { ?>
        <form action="<?php echo base_url().'index.php/crud/update' ?>" method="POST">
            <table style="border: 1; margin: 20px; width: 60%">
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $usr->id ?>">
                        <input type="text" name="nama" value="<?php echo $usr->nama ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $usr->alamat ?>">
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>
                        <input type="text" name="pekerjaan" value="<?php echo $usr->pekerjaan ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Ubah Data"></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>
</html>