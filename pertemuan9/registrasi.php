<?php 
    require 'functions.php';

    if (isset($_POST['registrasi'])){
       if( registrasi($_POST)){
           echo "<script>
            alert('Berhasil ditambahkan');
            document.location.href = 'login.php';
          </script>";
       } else {
           echo "user gagal ditambahkan";
       }
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasit</title>
</head>

<body>
    <h3>Form Registrasi</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Username :
                    <input type="text" name="username" autofocus autocomplete="off" required>
                </label>
            </li>
            <li>
                <label>
                    Password :
                    <input type="password" name="password1" required>
                </label>
            </li>
            <li>
                <label>
                    Konfirmasi Password :
                    <input type="password" name="password2" required>
                </label>
            </li>
            <li>
                <Button type="submit" name="registrasi">Sign Up</Button>
            </li>
        </ul>
    </form>
</body>

</html>