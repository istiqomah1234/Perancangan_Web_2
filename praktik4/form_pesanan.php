<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan Produk</title>
</head>
<body>
    <h2>Form Pemesanan Produk</h2>
    <form action="simpan_pesanan.php" method="post">
        <table>
            <tr>
                <td>ID User (Pelanggan)</td>
                <td><input type="number" name="user_id" required></td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td><input type="datetime-local" name="tanggal_pesan" value="<?php echo date('Y-m-d\TH:i'); ?>" required></td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td><input type="number" name="total_harga" step="0.01" required></td>
            </tr>
            <tr>
                <td>Status Pesanan</td>
                <td>
                    <select name="status">
                        <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                        <option value="Dibayar">Dibayar</option>
                        <option value="Dikirim">Dikirim</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Simpan Pesanan">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
