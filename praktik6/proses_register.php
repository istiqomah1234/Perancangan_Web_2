<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$gender   = $_POST['gender'];

$cek = mysqli_query($conn,
    "SELECT * FROM login WHERE username='$username'"
);

if (mysqli_num_rows($cek) > 0) {
    echo "<script>
        alert('Username sudah digunakan!');
        window.location='register.php';
    </script>";
} else {
    mysqli_query($conn,
        "INSERT INTO login (username, password, gender)
         VALUES ('$username', '$password', '$gender')"
    );

    echo "<script>
        alert('Registrasi berhasil!');
        window.location='login.php';
    </script>";
}
?>
