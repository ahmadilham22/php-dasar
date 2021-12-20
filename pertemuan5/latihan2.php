<?php
    if ( !isset($_GET["nama"]) || !isset($_GET["npm"]) || !isset($_GET["jurusan"])) {
        header("Location: latihan1.php");
        exit;
    }

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
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["npm"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>
</body>

</html>