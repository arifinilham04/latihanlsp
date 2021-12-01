<?php
require 'koneksi.php';
if (isset($_POST['register'])) {
    if (register($_POST) > 0) {
        echo "
        <script>
        alert('berhasil register');
        document.location.href = 'login.php';
        </script>
     ";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>register</title>
</head>

<body>
    <div class="center">
        <h1>register</h1>
        <form method="post" action="">
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
            <div class="txt_field">
                <input type="password" required id="password1" name="password1">
                <span></span>
                <label>masukan password kembali</label>
            </div>
            <div class="register">
                <button class="btn btn-primary" id="register" name="register"> register</button>
                <input type="submit" value="reset">
            </div>
    </div>
    </form>
    </div>
</body>

</html>