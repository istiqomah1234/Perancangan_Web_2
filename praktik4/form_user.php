<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Registrasi User</title>
</head>
<body>
    <h2>Form Registrasi User</h2>
    <form action="simpan_user.php" method="post">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="30" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <select name="role">
                        <option value="pelanggan">Pelanggan</option>
                        <option value="admin">Admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Simpan User">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
