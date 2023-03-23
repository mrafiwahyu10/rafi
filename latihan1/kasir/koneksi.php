<?php
// membuat koneksi ke database
$host = "127.0.0.1";
$user = "root";
$password = "YES";
$database = "indra";
$koneksi = mysqli_connect($host, $user, $password, $database);
if (!$koneksi) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
