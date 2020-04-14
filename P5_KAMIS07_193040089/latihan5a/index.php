<?php
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040089") or die("Database Salah");
    $result = mysqli_query($conn, "SELECT * FROM alat_musik");

?>

<!DOCTYPE html>
<html>
    <title>Document</title>
</head>
<body>
<div class="container">
<table align=center border ="1px solid black"; cellpadding=10; cellsapcing="7">
<tr bgcolor=silver>
    <th>No</th>
    <th>Nama</th>
    <th>Gambar</th>
    <th>Cara Bermain</th>
    <th>Asal</th>
    <Th>Harga</Th>
</tr>
<?php $i = 1 ?>
<?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
         <td><?= $i ?></td>
         <td><?= $row["nama"] ?></td>
         <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
         <td><?= $row["cara"] ?></td>
         <td><?= $row["asal"] ?></td>
         <td><?= $row["harga"] ?></td>
    </tr>
<?php $i++ ?>
<?php endwhile; ?>
</table>
</div>
</body>
</html>