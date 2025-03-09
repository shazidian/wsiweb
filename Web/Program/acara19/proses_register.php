<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $konfirmasi_password = mysqli_real_escape_string($koneksi, $_POST['konfirmasi_password']);
    $level = mysqli_real_escape_string($koneksi, $_POST['level']);

    
    if ($password != $konfirmasi_password) {
        echo "<script>alert('Password dan Konfirmasi Password tidak cocok!'); window.location='register.php';</script>";
        exit();
    }

    
    $password_md5 = md5($password);

   
    $sql = "INSERT INTO admin (username, password, level) VALUES ('$username', '$password_md5', '$level')";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal! Silakan coba lagi.'); window.location='register.php';</script>";
    }
}
?>