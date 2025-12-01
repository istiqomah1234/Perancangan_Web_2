<?php
session_start();
if($_SESSION['status'] != "login"){
    header("Location: login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <h3>Dashboard</h3>
    <a href="logout.php">Logout</a>
</div>

<div class="container">
    <h2>Selamat Datang, <?= $_SESSION['username'] ?>!</h2>
    <p>Silakan pilih menu:</p>

    <div class="menu-box">
        <a href="home.php">➡ Masuk ke Home</a>
    </div>
</div>

</body>
</html>
