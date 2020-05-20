<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';
$id = $_GET['id'];
$row = query("SELECT * FROM alat_musik WHERE id = $id")[0];
    if(isset($_POST['ubah'])){
        if(ubah($_POST) > 0){
            echo "<script>
                        alert('Data Berhasil diubah')
                        document.location.href = 'admin.php';
                   </script>";

        } else {
            echo "<script> 
                        alert('Data Gagal diubah')
                        document.location.href = 'admin.php';
                 </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:aliceblue;">
<br>
<br>
<div class="container bg-white" style="width:500px; margin-bottom:50px;">
<br>
<h3> Form Ubah Data</h3>


<form action="" method="post">
<input type= "hidden" name="id" value="<?= $row['id']; ?>">
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" id="nama" required value="<?= $row ['nama'];?>">
  </div>
  <div class="form-group">
    <label for="gambar">Gambar:</label>
    <input type="text" name="gambar" class="form-control" id="gambar" required value="<?= $row ['gambar'];?>">
  </div>
  <div class="form-group">
    <label for="cara">Cara Bermain:</label>
    <input type="text" name="cara" class="form-control" id="cara" required value="<?= $row ['cara'];?>">
  </div>
  <div class="form-group">
    <label for="asal">Asal:</label>
    <input type="text" name="asal" class="form-control" id="asal" required value="<?= $row ['asal'];?>">
  </div>
  <div class="form-group">
    <label for="harga">Harga:</label>
    <input type="text" name="harga" class="form-control" id="harga" required value="<?= $row ['harga'];?>">
  </div>
  <br>
  <button type="submit" name="ubah" class="btn btn-outline-primary">Ubah Data</button>
    <button type="submit" class="btn btn-outline-primary">
        <a href="admin.php" style=" text-decoration:none;">Kembali</a>
    </button> 
</form>
<br>
<br>

 
</div>         
</body>
</html>

