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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $alat_musik["gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $alat_musik["nama"]; ?></p>
            <p><?= $alat_musik["cara"]; ?></p>
            <p><?= $alat_musik["asal"]; ?></p>
            <p><?= $alat_musik["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>