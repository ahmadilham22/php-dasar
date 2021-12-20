<?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "jbi1");
    

    // mengambil data dari tabel 
    $result = mysqli_query($conn, "SELECT * FROM penjual");
    var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Menampilkan data</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>

        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>Ini gambar</td>
            <td>Ahmad Ilham</td>
            <td>Teknik Informatika</td>
        </tr>



    </table>



</body>

</html>