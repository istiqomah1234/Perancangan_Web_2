<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"
    SELECT produk.*, kategori.nama_kategori
    FROM produk
    JOIN kategori ON produk.kategori_id = kategori.kategori_id
");
?>

<h2>Data Produk Frozen Food</h2>
<a href="tambah.php">+ Tambah Produk</a>
<head>
    <title>Data Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Foto</th>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Kategori</th>
    <th>Deskripsi</th>
    <th>Aksi</th>
</tr>

<?php $no=1; while($p=mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $no++ ?></td>
    <td>
        <img src="foto/<?= $p['foto'] ?>" width="80">
    </td>
    <td><?= $p['nama_produk'] ?></td>
    <td><?= $p['harga'] ?></td>
    <td><?= $p['stok'] ?></td>
    <td><?= $p['nama_kategori'] ?></td>
    <td><?= $p['deskripsi'] ?></td>
    <td>
        <a href="edit.php?id=<?= $p['produk_id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $p['produk_id'] ?>"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
