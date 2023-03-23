<?php

// mendapatkan nilai jumlah dari input form
$jumlah_item1 = $_POST['jumlah_item1'];
$jumlah_item2 = $_POST['jumlah_item2'];

// menghitung total harga
$total_harga_item1 = $jumlah_item1 * 10000;
$total_harga_item2 = $jumlah_item2 * 20000;
$total_harga = $total_harga_item1 + $total_harga_item2;

// memasukkan data transaksi ke dalam database

// menampilkan total harga
echo "Total harga: Rp" . number_format($total_harga, 0, ",", ".");
?>
