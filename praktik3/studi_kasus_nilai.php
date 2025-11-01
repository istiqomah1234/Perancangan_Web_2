<!DOCTYPE html>
<html lang="id">
<head>
    <title>Studi Kasus - Penentuan Nilai Mahasiswa</title>
</head>
<body>
    <h1>Penentuan Grade Nilai Mahasiswa</h1>
    <form method="post" action="">
        Masukkan Nilai: <input type="number" name="nilai" min="0" max="100" required>
        <input type="submit" value="Proses">
    </form>
    <hr>

    <?php
    if (isset($_POST['nilai'])) {
        $nilai = $_POST['nilai'];

        if ($nilai >= 85) {
            $grade = "A";
        } elseif ($nilai >= 75) {
            $grade = "B";
        } elseif ($nilai >= 65) {
            $grade = "C";
        } elseif ($nilai >= 50) {
            $grade = "D";
        } else {
            $grade = "E";
        }

        echo "<p>Nilai Anda: <b>$nilai</b></p>";
        echo "<p>Grade Anda: <b>$grade</b></p>";

        if ($grade == "A" || $grade == "B") {
            echo "<p><b>Keterangan:</b> Lulus dengan baik.</p>";
        } elseif ($grade == "C") {
            echo "<p><b>Keterangan:</b> Lulus, tapi perlu meningkatkan prestasi.</p>";
        } else {
            echo "<p><b>Keterangan:</b> Tidak Lulus.</p>";
        }
    }
    ?>
</body>
</html>
