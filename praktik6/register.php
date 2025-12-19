<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - Frozen Food</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="card">
    <h1>Frozen Food</h1>
    <p class="subtitle">Registrasi Akun</p>

    <form action="proses_register.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>

        <select name="gender" required>
            <option value="">Pilih Gender</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <button type="submit">Daftar</button>
    </form>

    <p class="link">
        Sudah punya akun?
        <a href="login.php">Login</a>
    </p>
</div>

</body>
</html>
