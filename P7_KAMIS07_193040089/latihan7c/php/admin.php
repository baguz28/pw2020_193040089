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
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="add"><a href="tambah.php">Tambah Data</a></div>
<div class="logout"><a href="logout.php">Logout</a></div>
    <form action="" method="get">
        <input type="text" name="keyword" >
        <button type="submit" name="cari">Cari</button>
    </form>
<table align=center border ="1px solid black"; cellpadding=10; cellsapcing="7">
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
            <a href="ubah.php?id= <?= $row['id']; ?>"><button>Ubah</button></a>
            <a href="hapus.php?id= <?= $row['id']; ?>" onclick="return confirm('hapus data?')"><button>Hapus</button></a>
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