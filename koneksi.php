<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jbi";

$konek = mysqli_connect ($host, $user, $pass, $dbname);

if($konek){
    echo "database telah terhubung <br/>";
}else{
    echo "database tidak terhubung <br/>";
}
?>