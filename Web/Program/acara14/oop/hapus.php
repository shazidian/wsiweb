<?php
require('koneksi.php');  // Menghubungkan file koneksi.php
require('query.php');    // Menghubungkan file query.php
$id = $_GET['id'];      // Mengambil ID user dari parameter URL

$crud = new crud();
if(!empty($id)){
    $crud->hapusData($id);
    header("Location: home.php"); // Redirect ke halaman home setelah penghapusan
}



?>