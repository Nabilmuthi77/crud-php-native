<?php
$host = "localhost";
$user = "root";   // username MySQL kamu
$pass = "";       // password MySQL kamu
$db   = "crud_db";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
