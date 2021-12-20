<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
    table,
    tr,
    td {
        border: 1px solid black;
    }

    thead {
        background-color: #cccddd;
    }
    </style>
</head>

<body>
    <h2>Menampilkan Data Dari Database PHP</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM penjual');
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['nama_penjual'] ?></td>
            <td><?php echo $data['alamat_penjual'] ?></td>
            <td><?php echo $data['email_penjual'] ?></td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>