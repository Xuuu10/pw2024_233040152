<?php

$perangkat = ["MotherBoard", "Processor", "Hard Disk", "PC Cooler", "VGA Card", "SSD"];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Perangkat Keras</title>
</head>

<body>

<h1>Macam-Macam Perangkat Keras Komputer</h1>
    <ol>
        <?php foreach ($perangkat as $p) { ?>
            <li><?php echo $p ?></li>
        <?php } ?>
    </ol>


<h1>Macam-Macam Perangkat Keras Komputer Baru</h1>
    <ol>
        <?php 
         array_push($perangkat, "Card Reader", "Modem"); asort($perangkat); ?>
        <?php foreach($perangkat as $pb) : ?>
            <li><?php echo $pb; ?></li>
        <?php endforeach; ?>
    </ol>

</body>

</html>
