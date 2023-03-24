<?php
//array multidimensi
$mahasiswa =[
    [
        "judul" => "The Matrix (1999)",
        "genre" => "Sci-fi/Action",
        "director" => "Lana Wachowski",
        "gambar" => "the matrix2.jpg"
    ],

    [
        "judul" => "Mortal Engines (2018)",
        "genre" => "Sci-fi/Action",
        "director" => "Christian Rivers",
        "gambar" => "mortal engines1.jpg"
    ],

    [
        "judul" => "A Walk To Remember (2002)",
        "genre" => "Romance/Drama",
        "director" => "Adam Shankman",
        "gambar" => "a walk to remember1.jpg"
    ],

    [
        "judul" => "Hacksaw Ridge (2016)",
        "genre" => "War/Drama",
        "director" => "Mel Gibson",
        "gambar" => "hacksaw ridge1.jpg"
    ],

    [
        "judul" => "Ocean Waves (1993)",
        "genre" => "Romance/Drama",
        "director" => "Tomomi Mochizuki",
        "gambar" => "ocean waves1.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Movie by Rafi Wahyu</title>
</head>

<body>
    <h1>Best Movie by Rafi Wahyu</h1>
    <?php foreach ($mahasiswa as $nhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $nhs["gambar"] ?>">
        </li>
        <li>Judul : <?= $nhs["judul"] ?></li>
        <li>Genre : <?= $nhs["genre"] ?></li>
        <li>Director : <?= $nhs["director"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>