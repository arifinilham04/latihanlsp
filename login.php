<?php
session_start();
require 'koneksi.php';
if (isset($_POST['login'])) {
    if (login($_POST)) {
        header("location: tampildata.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form action="" method="post">
            <div class="txt_field">
                <input type="text" required id="username" name="username">
                <span></span>
                <label>username</label>
            </div>
            <div class="txt_field">
                <input type="password" required id="password" name="password">
                <span></span>
                <label>password</label>
            </div>
            <div class="pass">Forgot password</div>
            <div class="login">
                <button class="btn btn-primary" id="login" name="login">login</button>
                <input type="submit" value="reset">
            </div>
            <div class="sign">
                Register Now? <a href="register.php">sign up</a>
            </div>
        </form>
    </div>
</body>

</html>