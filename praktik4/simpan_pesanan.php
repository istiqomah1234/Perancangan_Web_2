<?php
include "koneksi.php";

$user_id       = $_POST['user_id'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$total_harga   = $_POST['total_harga'];
$status        = $_POST['status'];

$sql = "INSERT INTO pesanan (user_id, tanggal_pesan, total_harga, status)
        VALUES ('$user_id', '$tanggal_pesan', '$total_harga', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Pesanan berhasil disimpan!</h3>";
    echo "<a href='form_pesanan.php'>Kembali ke Form</a> | ";
    echo "<a href='tampil_pesanan.php'>Lihat Daftar Pesanan</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
