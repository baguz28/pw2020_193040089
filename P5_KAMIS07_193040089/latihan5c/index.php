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
    <?php foreach ($alat_musik as $row) : ?>
        <p class="nama">
            <a href="php/detail.php?id=<?= $row['id'] ?>">
                <?= $row["nama"] ?>
            </a>
        </p>
    <?php endforeach; ?>
</div>
</body>
</html>