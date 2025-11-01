<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tugas Praktikum 1 - Ganjil Genap</title>
</head>
<body>
    <h2>Cek Bilangan Ganjil atau Genap</h2>
    <form method="post" action="">
        Masukkan Bilangan: <input type="number" name="angka" required>
        <input type="submit" value="Cek">
    </form>
    <hr>

    <?php
    if (isset($_POST['angka'])) {
        $angka = $_POST['angka'];
        if ($angka % 2 == 0) {
            echo "Bilangan $angka adalah <b>Genap</b>.";
        } else {
            echo "Bilangan $angka adalah <b>Ganjil</b>.";
        }
    }
    ?>
</body>
</html>
