<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    $foto = $_FILES['foto']['name'];
    $tmp  = $_FILES['foto']['tmp_name'];

    move_uploaded_file($tmp, "foto/".$foto);

    mysqli_query($koneksi,"
        INSERT INTO produk
        (nama_produk, deskripsi, harga, stok, foto, kategori_id, created_at)
        VALUES
        ('$nama','$deskripsi','$harga','$stok','$foto','$kategori',NOW())
    ");

    header("Location: index.php");
}
?>

<h2>Tambah Produk</h2>
<head>
    <title>Data Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<form method="post" enctype="multipart/form-data">
    Nama Produk <br>
    <input type="text" name="nama" required><br><br>

    Deskripsi <br>
    <textarea name="deskripsi"></textarea><br><br>

    Harga <br>
    <input type="number" name="harga" required><br><br>

    Stok <br>
    <input type="number" name="stok" required><br><br>

    Foto <br>
    <input type="file" name="foto" required><br><br>

    Kategori <br>
    <select name="kategori">
        <?php
        $kat = mysqli_query($koneksi,"SELECT * FROM kategori");
        while($k=mysqli_fetch_assoc($kat)){
            echo "<option value='$k[kategori_id]'>$k[nama_kategori]</option>";
        }
        ?>
    </select><br><br>

    <button name="simpan">Simpan</button>
</form>
