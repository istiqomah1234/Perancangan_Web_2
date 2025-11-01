<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Detail Pesanan</title>
</head>
<body>
    <h2>Form Data Detail Pesanan</h2>
    <form action="simpan_detail_pesanan.php" method="post">
        <table>
            <tr>
                <td>ID Pesanan</td>
                <td><input type="number" name="pesanan_id" required></td>
            </tr>
            <tr>
                <td>ID Produk</td>
                <td><input type="number" name="produk_id" required></td>
            </tr>
            <tr>
                <td>Jumlah Produk</td>
                <td><input type="number" name="jumlah" required></td>
            </tr>
            <tr>
                <td>Subtotal (Rp)</td>
                <td><input type="number" name="subtotal" step="0.01" required></td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Simpan Detail">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
