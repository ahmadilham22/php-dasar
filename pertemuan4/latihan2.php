<?php
    $angka = [1,2,3,4,5,6,7,8,10,23,1231,1213,421,23];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }
    </style>
</head>

<body>
    <?php for ($i=0; $i < count($angka); $i++) : ?>


    <div><?php echo $angka[$i]; ?></div>

    <?php endfor; ?>
</body>

</html>