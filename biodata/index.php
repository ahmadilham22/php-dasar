<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
h1 {
    text-align: center;
}

.tes {
    text-align: center;
    border: 2px solid salmon;
}

.tes1 {
    padding-left: 20px;
}
</style>

<body>
    <h1>
        Biodata Ahmad Ilham
    </h1>
    <hr>

    <div class="tes">
        <h2>بسم الله الرحمن الرحيم</h2>
        <div class="content">
            <?php 
        $nama = "Ahmad Ilham" . "<br>";
        $tag = "Teknik Informatika" . "<br>";
        $tag1 = "Universitas lampung" . "<br>";
        echo  $nama ;
        echo $tag ;
        echo $tag1 ;
        ?>
        </div>\
    </div>
    <h2>Data Diri</h2>
    <div class="tes1">

        <?php 
            echo "Umur : 21 tahun <br>"  ;
            echo "Alamat : Jambi, Indonesia <br>";
            echo "NPM : 1915061059";
            ?>
    </div>







</body>

</html>