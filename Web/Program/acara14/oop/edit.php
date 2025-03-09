<?php
require('koneksi.php');  // Menghubungkan file koneksi.php
require('query.php');    // Menghubungkan file query.php

$obj = new crud();  // Membuat objek dari kelas crud

// Mengambil ID dari URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Jika ID tidak ada, redirect ke halaman utama
if (!$id) {
    echo "<p>user tidak ditemukan</p>";
    exit;
}

// Mengambil data user berdasarkan ID
$user = $obj->lihatDataById($id);  // Fungsi ini diambil dari kelas crud

// Jika data tidak ditemukan, redirect ke halaman utama
if (!$user) {
    echo "<p>user tidak ditemukan</p>";
    exit;
}

// Jika form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['user_email'];
    $fullname = $_POST['user_fullname'];

    // Validasi sederhana
    if (!empty($email) && !empty($fullname)) {
        // Update data user
        $obj->updateData($id, $email, $fullname);
        header("Location: home.php");  // Redirect ke halaman utama setelah update
        exit;
    } else {
        $error = "Semua field harus diisi!";
    }
}
?>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>  <!-- Tampilkan error jika ada -->
    <?php endif; ?>

    <form method="POST" action="">
        <label for="user_email">Email:</label><br>
        <input type="text" id="user_email" name="user_email" value="<?php echo htmlspecialchars($user['user_email']); ?>" required><br><br>

        <label for="user_fullname">Nama Lengkap:</label><br>
        <input type="text" id="user_fullname" name="user_fullname" value="<?php echo htmlspecialchars($user['user_fullname']); ?>" required><br><br>

        <input type="submit" value="Update">
        <a href="home.php">Batal</a>  <!-- Link untuk batal kembali ke halaman utama -->
    </form>
</body>
</html>
