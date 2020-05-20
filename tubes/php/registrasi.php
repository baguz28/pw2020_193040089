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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Register</title>
</head>
<body style="background-color: aliceblue;">

<div class="container" style="padding: 15px; width: 500px;">
<nav class="navbar navbar-dark bg-primary">
  <span class="navbar-brand mb-0 h1">Registrasi</span>
</nav>
<form action="" method="post" class="bg-light" style="padding: 5px;">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="register" style="margin: 10px;">Daftar</button>
  </form>
  <nav class="navbar navbar-dark bg-primary">
  <span class="navbar-brand mb-0 h1"></span>
        <br>
        <br>
</nav>


</body>
</html>