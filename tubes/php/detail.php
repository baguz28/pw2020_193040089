<?php

    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }

    require 'functions.php' ;

    $id = $_GET['id'];

    $alat_musik = query("SELECT * FROM alat_musik WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
    h5, p{
        color: white;
    }
    </style>
</head>
<body style="background-color:aliceblue;">

<div class="container" style="padding: 40px;">
<div class="card mb-4">
  <img src="../assets/img/<?= $alat_musik["gambar"]; ?>" class="card-img-top" alt="..." style="width:300px; height:300px; display:block; margin:auto; padding: 5px;">
  <div class="card-body" style="text-align: center; background-color: cornflowerblue;">
    <h5 class="card-title"><?= $alat_musik["nama"]; ?></h5>
    <p class="card-text">Cara Bermain: <?= $alat_musik["cara"]; ?></p>
    <p class="card-text">Asal: <?= $alat_musik["asal"]; ?></p>
    <p class="card-text">Harga: <?= $alat_musik["harga"]; ?></p>
    <button class="btn btn-light" style=" text-decoration:none;"><a href="https://www.google.com/search?q=beli+<?= $alat_musik["nama"]; ?>">Beli Sekarang!</a></button>
    <button class="btn btn-light" style=" text-decoration:none;"><a href="../index.php">Kembali</a></button>
</div>
</div>
    </div>
</body>
</html>