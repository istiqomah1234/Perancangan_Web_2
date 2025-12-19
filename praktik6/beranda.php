<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda - Frozen Food</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <h2>Frozen Food</h2>
    <div class="nav-right">
        <span>👤 <?= $_SESSION['username']; ?></span>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</div>

<!-- CONTENT -->
<div class="content">
    <h1>Selamat Datang di Frozen Food</h1>
    <p>Produk makanan beku berkualitas, praktis dan higienis</p>

    <!-- CARD PRODUK -->
    <div class="produk-container">

        <div class="produk-card">
            <h3>Nugget Ayam</h3>
            <p>Lezat & bergizi</p>
            <span>Rp 25.000</span>
        </div>

        <div class="produk-card">
            <h3>Sosis Sapi</h3>
            <p>Siap masak</p>
            <span>Rp 30.000</span>
        </div>

        <div class="produk-card">
            <h3>Dimsum</h3>
            <p>Favorit keluarga</p>
            <span>Rp 20.000</span>
        </div>

    </div>
</div>

</body>
</html>
