<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "Login gagal! Username atau password salah!";
    } else if ($_GET['pesan'] == "logout") {
        echo "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "belum_login") {
        echo "Anda harus login untuk mengakses halaman admin";
    }
}
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>Login Admin</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 10px;
        }

        .card-title {
            font-size: 24px;
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .alert {
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center">Login Admin</h3>

                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "<div class='alert alert-danger text-center'>Login gagal! Username atau password salah!</div>";
                            } else if ($_GET['pesan'] == "logout") {
                                echo "<div class='alert alert-success text-center'>Anda telah berhasil logout</div>";
                            } else if ($_GET['pesan'] == "belum_login") {
                                echo "<div class='alert alert-warning text-center'>Anda harus login untuk mengakses halaman admin</div>";
                            }
                        }
                        ?>

                        <form method="post" action="cek_login.php">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Masukkan username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Masukkan password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" style="color: white;">Login</button>
                        </form>

                        <p class="text-center mt-3">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.js"></script>

</body>

</html>
