<?php
//array multidimensi
$mahasiswa =[
    [
        "nama" => "M Rafi Wahyu Pradhana",
        "nim" => "20510022",
        "jurusan" => "Sistem Informasi",
        "gambar" => "rafi.png"
    ],

    [
        "nama" => "I Gusti Bagus Agung Alif Indra Wardhana",
        "nim" => "20510023",
        "jurusan" => "Sistem Informasi",
        "gambar" => "gusti.png"
    ],

    [
        "nama" => "Moh Afandy",
        "nim" => "20510025",
        "jurusan" => "Sistem Informasi",
        "gambar" => "afandy.png"
    ],

    [
        "nama" => "Muh Fauzan Mirfaqoh",
        "nim" => "20510026",
        "jurusan" => "Sistem Informasi",
        "gambar" => "fauzan.png"
    ],

    [
        "nama" => "Uriyanti Rinda Sari",
        "nim" => "20510027",
        "jurusan" => "Sistem Informasi",
        "gambar" => "rinda.png"
    ],

    [
        "nama" => "Yoga Mauludin Prasetio",
        "nim" => "20510028",
        "jurusan" => "Sistem Informasi",
        "gambar" => "yoga.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <?php foreach ($mahasiswa as $nhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $nhs["gambar"] ?>">
        </li>
        <li>Nama : <?= $nhs["nama"] ?></li>
        <li>NIM : <?= $nhs["nim"] ?></li>
        <li>Jurusan : <?= $nhs["jurusan"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>