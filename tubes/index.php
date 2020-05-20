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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Mengenal Alat Musik</title>
</head>
<body style="background-color: floralwhite;">
<div class="container" style="background-color: floralwhite; align-content: center;">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light">
  <a class="navbar-brand" href="#">Mengenal Alat Musik</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.instagram.com/baguzzzzzzzz/">Oleh : Tito Bagus <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="php/login.php">Halaman Admin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="" method="get">
      <input class="form-control mr-sm-2" type="search" placeholder="Cari" name="keyword">
      <button class="btn btn-success" type="submit" name="cari">Cari</button>
    </form>
  </div>
</nav>


    <?php if(empty($alatmusik)) : ?>
    <h1>Data tidak ditemukan</h1>
    <?php else : ?>

      <div class="kartu" style="margin-left:70px;">
    <?php foreach ($alatmusik as $row) : ?>

      <div class="card" style="width: 18rem; float: left; margin: 15px; ">
        <img src="assets/img/<?= $row['gambar']; ?>" class="card-img-top" alt="..." style="width: 100px; height: 100px;">
        <div class="card-body text-light" style="background-color: lightskyblue;">
          <h5 class="card-title"><?= $row["nama"] ?></h5>
          <p class="card-text">Lihat detail tentang alat musik ini, klik link dibawah!</p>
          <a href="php/detail.php?id=<?= $row['id'] ?>" style="text-decoration: none;">
                Detail lebih lanjut
            </a>
        </div>
      </div>
    

    <?php endforeach; ?>
    </div>
    <?php endif; ?>

    


    </div>
</body>
</html>