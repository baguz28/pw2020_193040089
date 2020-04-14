<?php
    require 'php/functions.php';

    $alat_musik = query("SELECT * FROM alat_musik")
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
<?php foreach($alat_musik as $am) : ?>
    <tr>
         <td><?= $i ?></td>
         <td><?= $am["nama"] ?></td>
         <td><img src="assets/img/<?= $am["gambar"]; ?>"></td>
         <td><?= $am["cara"] ?></td>
         <td><?= $am["asal"] ?></td>
         <td><?= $am["harga"] ?></td>
    </tr>
<?php $i++ ?>
<?php endforeach; ?>
</table>
</div>
</body>
</html>