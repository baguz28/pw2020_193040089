<?php
session_start();
require 'functions.php' ;

if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}


if(isset($_SESSION['username'])){
    header("Location: admin.php");
    exit;
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

    if(mysqli_num_rows($cek_user) > 0){
        $row = mysqli_fetch_assoc($cek_user);
        if(password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            if(isset($_POST['remember'])){
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id'], false);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
        }
        if(hash('sha256', $row['id']) == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-color: aliceblue;">
<span class="border border-secondary">
<div class="container" style="width: 500px;">
<nav class="navbar navbar-dark bg-primary">
  <span class="navbar-brand mb-0 h1">Login</span>
</nav>
<form action="" method="post" class="bg-light" style="padding: 5px;">
    <?php if (isset($error)) : ?>
    <p style="color : red; font-style: italic;">Username atau password salah</p>
    <?php endif; ?>

    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="remember" name="remember">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <p><i>Username : tito, Pass: tito</i></p>
  <button type="submit" class="btn btn-primary" name="submit">Login</button>




    <div class="registrasi">
        <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
    <nav class="navbar navbar-dark bg-primary">
  <span class="navbar-brand mb-0 h1"></span>
        <br>
        <br>
</nav>
</div>
</form>
</span>
</body>
</html>