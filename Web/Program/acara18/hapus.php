<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM diri WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php?page=tabel");
} else {
    echo "<script type='text/javascript'>
        alert('Data Gagal Dihapus!');
        location.replace('index.php?page=tabel');
        </script>";
}
mysqli_close($conn);
?>