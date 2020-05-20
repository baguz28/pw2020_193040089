<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:aliceblue;">

<br>
<br>
<div class="container bg-white" style="width:500px; margin-bottom:50px;">
<br>
<h3> Form Tambah Data</h3>


<form action="" method="post">
<input type= "hidden" name="id" value="<?= $row['id']; ?>">
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" class="form-control" id="nama" required>
  </div>
  <div class="form-group">
    <label for="gambar">Gambar:</label>
    <input type="text" name="gambar" class="form-control" id="gambar" required>
  </div>
  <div class="form-group">
    <label for="cara">Cara Bermain:</label>
    <input type="text" name="cara" class="form-control" id="cara" required>
  </div>
  <div class="form-group">
    <label for="asal">Asal:</label>
    <input type="text" name="asal" class="form-control" id="asal" required>
  </div>
  <div class="form-group">
    <label for="harga">Harga:</label>
    <input type="text" name="harga" class="form-control" id="harga" required>
  </div>
  <br>
  <button type="submit" name="tambah" class="btn btn-outline-primary">Tambah data!</button>
    <button type="submit" class="btn btn-outline-primary">
        <a href="admin.php" style=" text-decoration:none;">Kembali</a>
    </button> 
</form>
<br>
<br>

 
</div>            
</body>
</html>