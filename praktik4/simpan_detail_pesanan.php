<?php
include "koneksi.php";

$pesanan_id = $_POST['pesanan_id'];
$produk_id  = $_POST['produk_id'];
$jumlah     = $_POST['jumlah'];
$subtotal   = $_POST['subtotal'];

$sql = "INSERT INTO detail_pesanan (pesanan_id, produk_id, jumlah, subtotal)
        VALUES ('$pesanan_id', '$produk_id', '$jumlah', '$subtotal')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Data detail pesanan berhasil disimpan!</h3>";
    echo "<a href='form_detail_pesanan.php'>Tambah Lagi</a> | ";
    echo "<a href='tampil_detail_pesanan.php'>Lihat Data Detail Pesanan</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
