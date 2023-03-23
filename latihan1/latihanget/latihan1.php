<?php
$mahasiswa = [
    [
        "nim" => "20510022",
        "nama" => "M Rafi Wahyu Pradhana",
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
        <li>
            <a href="latihan2.php"><?= $ahs["nama"]; ?></a>
        </li>
    </ul>
</body>
</html>