<?php
    $mahasiswa = [
        [
            "nama" => "Ahmad ilham",
            "npm" => "1915061059",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Alucard",
            "npm" => "19150610909",
            "jurusan" => "Teknikop Informatika"
        ]
        ];
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach( $mahasiswa as $mhs) :?>
        <li>
            <a
                href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&jurusan=<?= $mhs["jurusan"]; ?> "><?= $mhs["nama"]; ?></a>

        </li>
        <?php endforeach ; ?>
    </ul>
</body>



</html>