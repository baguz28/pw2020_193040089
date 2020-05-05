<?php
    require 'php/functions.php';

    if (isset($_GET['cari'])){
        $keyword = $_GET['keyword'];
        $alatmusik = query ("SELECT * FROM alat_musik WHERE
        nama LIKE '%$keyword%'OR
        gambar LIKE '%$keyword%'OR
        cara LIKE '%$keyword%'OR
        asal LIKE '%$keyword%'OR
        harga LIKE '%$keyword%' ");
    
    }else{
        //melakukan query 
    $alatmusik = query("SELECT * FROM alat_musik");
    
    }
?>

<!DOCTYPE html>
<html>
    <title>Document</title>
</head>
<body>
<div class="container">
<h3>Alat Musik</h3>
<form action="" method="get">
        <input type="text" name="keyword" >
        <button type="submit" name="cari">Cari</button>
    </form>

    <?php if(empty($alatmusik)) : ?>
    <h1>Data tidak ditemukan</h1>
    <?php else : ?>

    <?php foreach ($alatmusik as $row) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $row['id'] ?>">
                <?= $row["nama"] ?>
            </a>
        </p>
    <?php endforeach; ?>
    <?php endif; ?>
</div>
<a href="php/login.php">
        <button type="">
        Masuk ke halaman admin
        </button>
    </a>
</body>
</html>