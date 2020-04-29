<?php
require 'functions.php' ;

$alatmusik = query("SELECT * FROM alat_musik");

?>

<!DOCTYPE html>
<html>
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="add"><a href="tambah.php">Tambah Data</a></div>
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
<?php $i = 1 ?>
<?php foreach ($alatmusik as $row) : ?>
    <tr>
         <td><?= $i ?></td>
         <td>
            <a href=""><button>Ubah</button></a>
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
</table>
</div>
</body>
</html>