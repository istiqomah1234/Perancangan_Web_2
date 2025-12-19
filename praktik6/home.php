<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home - Frozen Food</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h1>Selamat Datang</h1>
    <p>User: <b><?= $_SESSION['username']; ?></b></p>
    <p>Gender: <?= $_SESSION['gender']; ?></p>

    <a href="logout.php" class="logout">Logout</a>
</div>

</body>
</html>
