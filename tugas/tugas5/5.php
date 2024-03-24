<?php

$mahasiswa = [
    [
        "nama" => "Aufa Ramadhan",
        "nrp" => "233040999",
        "email" => "aufa@gmail.com"
    ],
    [
        "nama" => "Arinal Haq",
        "nrp" => "233040998",
        "email" => "arinal@gmail.com"
    ],
    [
        "nama" => "Alfi Mifta",
        "nrp" => "233040997",
        "email" => "alfi@gmail.com"
    ],
    [
        "nama" => "Daffa Galang",
        "nrp" => "233040996",
        "email" => "dafa@gmail.com"
    ],
    [
        "nama" => "I Made Surya",
        "nrp" => "233040995",
        "email" => "made@gmail.com"
    ],
    [
        "nama" => "Novan Ramanda Putra",
        "nrp" => "233040994",
        "email" => "novan@gmail.com"
    ],
    [
        "nama" => "Rafi Adyatma Sukanto",
        "nrp" => "233040993",
        "email" => "rafi@gmail.com"
    ],
    [
        "nama" => "Roy Martin Silaban ",
        "nrp" => "233040992",
        "email" => "roy@gmail.com"
    ],
    [
        "nama" => "Syah Putra Sopiyan ",
        "nrp" => "233040991",
        "email" => "syahputra@gmail.com"
    ],
    [
        "nama" => " Rudol Prasetyo Sinurat ",
        "nrp" => "233040990",
        "email" => "Rudol@gmail.com"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array Associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nrp : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>