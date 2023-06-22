<?php
include_once __DIR__ . '/classes/Category.php';
include_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: black;
        color: white;
    }
</style>
<body>
    <?php
        foreach ($prodotti as $prodotto){?>
        <div class="card">
            <h1>
                <?= $prodotto->nome ?>
            </h1>
            <h5>
                <?= $prodotto->stampaCategory()?>
            </h5>
        </div><?php } ?>
</body>
</html>