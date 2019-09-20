<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
    <h1>Membuat CRUD dengan CodeIgniter</h1>
    <?php echo anchor('crud/tambah', 'Tambah Data User'); ?>

    <table style="margin:20px; width: 60%;">
        <tr style="background-color: #abc123">
            <th style="height: 30px">No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>
        <?php 
            $no = 1;
            foreach($users as $usr) {
        ?>
        <tr>
            <td style="height: 30px"><?php echo $no++ ?></td>
            <td><?php echo $usr->nama ?></td>
            <td><?php echo $usr->alamat ?></td>
            <td><?php echo $usr->pekerjaan ?></td>
            <td align="center">
                <?php echo anchor('crud/edit/'.$usr->id, 'Edit'); ?> | 
                <?php echo anchor('crud/hapus/'.$usr->id, 'Hapus'); ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>