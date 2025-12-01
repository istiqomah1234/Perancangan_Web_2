<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-page">

<div class="login-box">
    <h2>Login</h2>

    <?php
    if(isset($_GET['pesan']) && $_GET['pesan'] == "gagal"){
        echo "<p class='error'>Username atau Password salah!</p>";
    }
    ?>

    <form action="proses_login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        
        <input type="password" name="password" placeholder="Password" required>
        
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
