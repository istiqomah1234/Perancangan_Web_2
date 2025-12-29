<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "frozenfood", 3307);

if ($conn) {
    echo "Koneksi BERHASIL";
} else {
    echo "Koneksi GAGAL: " . mysqli_connect_error();
}
?>
