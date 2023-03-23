<?php
$mahasiswa = [
    [
        "nim" => "20510022",
        "nama1" => "M Rafi Wahyu Pradhana","nama2" => "Yoga Mauludin Prasetio","nama3" => "Uriyanti Rinda Sari", "nama4" => "I Gusti Bagus Agung Alif Indra Wardhana", "nama5" => "Muh Fauzan Mirfaqoh",
        "jurusan" => "Sistem Informasi",
        "email" => "muhammad_20510022@stimata.ac.id",
        "gambar" => "me2.jpg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $ahs); ?>
        <li><a href="rafi.php"><?= $ahs["nama1"]; ?></a></li>
        <li><a href="yoga.php"><?= $ahs["nama2"]; ?></a></li>
        <li><a href="rinda.php"><?= $ahs["nama3"]; ?></a></li>
        <li><a href="indra.php"><?= $ahs["nama4"]; ?></a></li>
        <li><a href="fauzan.php"><?= $ahs["nama5"]; ?></a></li>
    </ul>
</body>
</html>