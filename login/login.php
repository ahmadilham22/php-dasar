<?php
    if ( isset($_POST["submit"]) ) {
        if ( $_POST["username"] == "admin" && $_POST["password"] == "12345" ) {
            header("Location: admin.php");
            exit;
        } else {
            $error = true;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<style>
.form1 li {
    list-style-type: none;
}

p {
    color: red;
    font-style: italic;
}
</style>

<body>
    <?php if( isset($error) ): ?>
    <p>Username / Password salah</p>
    <?php endif; ?>
    <h2>Login admin</h2>
    <ul>
        <form action="" method="post" class="form1">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">
                    kirim
                </button>
            </li>
        </form>
    </ul>

</body>

</html>