<?php
$koneksi = mysqli_connect("localhost", "root", "", "frozenfood");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
