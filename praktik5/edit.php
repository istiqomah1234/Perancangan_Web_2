<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query($koneksi,"SELECT * FROM produk WHERE produk_id='$id'")
);

if(isset($_POST['update'])){
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kategori = $_POST['kategori'];

    if($_FILES['foto']['name'] != ""){
        $foto = $_FILES['foto']['name'];
        $tmp  = $_FILES['foto']['tmp_name'];
        move_uploaded_file($tmp,"foto/".$foto);

        mysqli_query($koneksi,"
            UPDATE produk SET
            nama_produk='$nama',
            deskripsi='$deskripsi',
            harga='$harga',
            stok='$stok',
            foto='$foto',
            kategori_id='$kategori'
            WHERE produk_id='$id'
        ");
    } else {
        mysqli_query($koneksi,"
            UPDATE produk SET
            nama_produk='$nama',
            deskripsi='$deskripsi',
            harga='$harga',
            stok='$stok',
            kategori_id='$kategori'
            WHERE produk_id='$id'
        ");
    }

    header("Location: index.php");
}
?>

<h2>Edit Produk</h2>
<head>
    <title>Data Produk</title>
    <link rel="stylesheet" href="style.css">
</head>

<form method="post" enctype="multipart/form-data">
    Nama Produk <br>
    <input type="text" name="nama" value="<?= $data['nama_produk'] ?>"><br><br>

    Deskripsi <br>
    <textarea name="deskripsi"><?= $data['deskripsi'] ?></textarea><br><br>

    Harga <br>
    <input type="number" name="harga" value="<?= $data['harga'] ?>"><br><br>

    Stok <br>
    <input type="number" name="stok" value="<?= $data['stok'] ?>"><br><br>

    Foto Lama <br>
    <img src="foto/<?= $data['foto'] ?>" width="100"><br><br>

    Ganti Foto <br>
    <input type="file" name="foto"><br><br>

    Kategori <br>
    <select name="kategori">
        <?php
        $kat = mysqli_query($koneksi,"SELECT * FROM kategori");
        while($k=mysqli_fetch_assoc($kat)){
            $sel = ($k['kategori_id']==$data['kategori_id'])?"selected":"";
            echo "<option value='$k[kategori_id]' $sel>$k[nama_kategori]</option>";
        }
        ?>
    </select><br><br>

    <button name="update">Update</button>
</form>
