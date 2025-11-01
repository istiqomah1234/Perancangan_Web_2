<?php
include "koneksi.php";

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // enkripsi password
$alamat   = $_POST['alamat'];
$telepon  = $_POST['telepon'];
$role     = $_POST['role'];

$sql = "INSERT INTO user (nama, email, password, alamat, telepon, role, created_at)
        VALUES ('$nama', '$email', '$password', '$alamat', '$telepon', '$role', NOW())";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Data user berhasil disimpan!</h3>";
    echo "<a href='form_user.php'>Kembali ke Form</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
