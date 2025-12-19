<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Frozen Food</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h1>Frozen Food</h1>
    <p class="subtitle">Login Sistem</p>

    <form action="proses_login.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <p class="link">
        Belum punya akun?
        <a href="register.php">Daftar</a>
    </p>
</div>

</body>
</html>
