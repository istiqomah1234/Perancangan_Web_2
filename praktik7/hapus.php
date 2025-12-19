<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query($koneksi,"SELECT foto FROM produk WHERE produk_id='$id'")
);

if(file_exists("foto/".$data['foto'])){
    unlink("foto/".$data['foto']);
}

mysqli_query($koneksi,"DELETE FROM produk WHERE produk_id='$id'");
header("Location: index.php");
?>
