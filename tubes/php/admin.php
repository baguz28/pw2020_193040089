<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit;
}


require 'functions.php' ;

if (isset($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $alatmusik = query ("SELECT * FROM alat_musik WHERE
    nama LIKE '%$keyword%'OR
    gambar LIKE '%$keyword%'OR
    cara LIKE '%$keyword%'OR
    asal LIKE '%$keyword%'OR
    harga LIKE '%$keyword%' ");

}else{
    $alatmusik = query("SELECT * FROM alat_musik");

}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Halaman Admin</title>
</head>
<body style="background-color: mintcream;">

<div class="container">
<nav class="navbar navbar-light" style="background-color:lightblue;">
  <a class="navbar-brand">Halaman Admin</a>
  <a class="nav-item nav-link" href="tambah.php">Tambah Data</a>
  <a class="nav-item nav-link" href="logout.php">Logout</a>
  <form class="form-inline" action="" method="get">
    <input class="form-control mr-sm-2" type="search" placeholder="cari" name="keyword">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
  </form>
</nav>

<table align=center border ="1px solid black"; cellpadding=10; cellsapcing="7" class="p-3 mb-2 bg-light">
<tr bgcolor=silver>
    <th>No</th>
    <th>Opsi</th>
    <th>Nama</th>
    <th>Gambar</th>
    <th>Cara Bermain</th>
    <th>Asal</th>
    <Th>Harga</Th>
</tr>

<?php if(empty($alatmusik)) : ?>

<tr>
    <td colspan="7">
    <h3>Data tidak ditemukan</h3>
    </td>
</tr>
    <?php else : ?>
<?php $i = 1 ?>
<?php foreach ($alatmusik as $row) : ?>
    <tr>
         <td><?= $i ?></td>
         <td>
            <a href="ubah.php?id= <?= $row['id']; ?>"><button type="button" class="btn btn-outline-primary">Ubah</button></a>
            <br>
            <br>
            <a href="hapus.php?id= <?= $row['id']; ?>" onclick="return confirm('hapus data?')"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
         </td>
         <td><?= $row["nama"] ?></td>
         <td><img src="../assets/img/<?= $row["gambar"]; ?>"></td>
         <td><?= $row["cara"] ?></td>
         <td><?= $row["asal"] ?></td>
         <td><?= $row["harga"] ?></td>
    </tr>
<?php $i++ ?>
<?php endforeach; ?>
<?php endif; ?>
</table>
</div>
</body>
</html>