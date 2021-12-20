<?php
include "koneksi.php";

$select = "SELECT * FROM penjual";
$query = mysqli_query($konek, $select);
while ($proses = mysqli_fetch_array ($query)){
    $item[] = array(
        "id_penjual" => $proses ['id_penjual'],
        "nama_penjual" => $proses ['nama_penjual'],
        "alamat_penjual" => $proses ['alamat_penjual'],
    );
}

$respon = array(
    "hasil" => "sukses mantap",
    "item" => $item
);

echo json_encode($respon);
?>