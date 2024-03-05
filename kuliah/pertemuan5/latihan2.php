<?php
$binatang = ["😼", "🐶", "🐥", "🐵", "🐮", "🫏"];
$makanan = ["🍜", "🍰", "🍇", "🍛"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>

<body>

<!-- Rumus Utama -->

    <h1>Daftar Binatang</h1>
    <ol>
        <?php 
        for ($i = 0; $i < count($binatang); $i++) { ?>
        <li><?php echo $binatang[$i] ?></li>
        <?php } ?>
    </ol>

    <h1>Makanan Favorit</h1>
    <ul>
        <?php 
        for ($i = 0; $i < count($makanan); $i++) { 
        ?>
            <li><?php echo $makanan[$i] ?></li>
        <?php } ?>
    </ul>


    <hr>

<!-- Lebih Efisien -->

    <h1>Daftar Binatang</h1>
    <ol>
        <?php foreach ($binatang as $b) { ?>
            <li><?php echo $b ?></li>
        <?php } ?>
    </ol>



    <hr>



    <h1>Daftar Makanan</h1>
    <ol>
        <?php foreach ($makanan as $m) : ?>
            <li><?= $m ?></li>
        <?php endforeach ?>
    </ol>



</body>

</html>