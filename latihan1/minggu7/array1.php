<?php
// perulangan pada array
// for atau foreach
$angka = [1, 3, 5, 7 ,9];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
    </style>
</head>

<body>
    <?php for($i = 0 ; $i < 5; $i++) { ?>
    <div> class="kotak">
        <?php echo $angka[$i] ?>
    </div>
    <?php } ?>
</body>

</html>