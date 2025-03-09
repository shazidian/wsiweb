<?php
include 'koneksi.php';

// Mengambil dan membersihkan data
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$tgl = mysqli_real_escape_string($conn, $_POST['tgl']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$tlpn = mysqli_real_escape_string($conn, $_POST['tlpn']);
$alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
$kelamin = mysqli_real_escape_string($conn, $_POST['kelamin']);

// Menyusun query insert
$sql = "INSERT INTO diri (nama, lahir, email, telpon, alamat, kelamin)
        VALUES ('$nama', '$tgl', '$email', '$tlpn', '$alamat', '$kelamin')";

// Eksekusi query
if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>
    alert('Data Berhasil Dimasukan!');
    location.replace('index.php?page=tabel');
    </script>";
} else {
    echo "<script type='text/javascript'>
    alert('Data Gagal Dimasukan: " . mysqli_error($conn) . "');
    location.replace('index.php?page=tabel');
    </script>";
}

// Menutup koneksi
mysqli_close($conn);
?>
