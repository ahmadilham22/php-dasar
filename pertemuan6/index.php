<?php
    require 'functions.php';

    $mahasiswa = query("SELECT * FROM mahasiswa")


    // memunculkan error
    

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Npm</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="./img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
            <td><?= $row["npm"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>



    </table>
</body>

</html>