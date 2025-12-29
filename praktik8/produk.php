<?php
include 'koneksi.php';

// jumlah data per halaman
$batas = 5;

// halaman aktif
$halaman = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$halaman_awal = ($halaman - 1) * $batas;

// ambil data produk
$query = mysqli_query(
    $conn,
    "SELECT * FROM produk LIMIT $halaman_awal, $batas"
);

// hitung total data
$total_data = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM produk"));
$total_halaman = ceil($total_data / $batas);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk Frozen Food</title>
    <style>
        body { font-family: Arial; }
        table {
            width: 90%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #555;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
        img {
            width: 80px;
        }
        .pagination a {
            padding: 6px 10px;
            margin: 2px;
            border: 1px solid #333;
            text-decoration: none;
            color: black;
        }
        .pagination .active {
            background: #333;
            color: white;
        }
    </style>
</head>
<body>

<h2>Data Produk Frozen Food</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    <?php
    $no = $halaman_awal + 1;
    while ($data = mysqli_fetch_assoc($query)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['nama_produk']; ?></td>
        <td>Rp <?= number_format($data['harga']); ?></td>
        <td><?= $data['stok']; ?></td>
    </tr>
    <?php } ?>
</table>

<br>

<div class="pagination">
<?php
for ($i = 1; $i <= $total_halaman; $i++) {
    if ($i == $halaman) {
        echo "<a class='active' href='?page=$i'>$i</a>";
    } else {
        echo "<a href='?page=$i'>$i</a>";
    }
}
?>
</div>

</body>
</html>