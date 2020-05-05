<?php
require 'functions.php';

if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
            </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td><label for="username">Username</td>
            <td>:</td>
            <td><input type="text" name="username" id="username" required></td>
        </tr>
        <tr>
            <td><label for="password">Paswword</td>
            <td>:</td>
            <td><input type="password" name="password" id="password" required></td>
        </tr>
    </table>
    <button type="submit" name="register">REGISTER</button>
</form>
</body>
</html>