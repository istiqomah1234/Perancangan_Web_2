<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tugas Praktikum 2 - Perbandingan Bilangan</title>
</head>
<body>
    <h2>Perbandingan Dua Bilangan</h2>
    <form method="post" action="">
        Bilangan 1: <input type="number" name="bil1" required><br><br>
        Bilangan 2: <input type="number" name="bil2" required><br><br>
        <input type="submit" value="Bandingkan">
    </form>
    <hr>

    <?php
    if (isset($_POST['bil1']) && isset($_POST['bil2'])) {
        $a = $_POST['bil1'];
        $b = $_POST['bil2'];

        if ($a > $b) {
            echo "$a lebih besar dari $b";
        } elseif ($a < $b) {
            echo "$a lebih kecil dari $b";
        } else {
            echo "$a sama dengan $b";
        }
    }
    ?>
</body>
</html>
