<?php
include "koneksi.php";
$error = "";
$success = "";

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($username) && !empty($password) && !empty($nama)) {
        // Cek apakah username sudah ada
        $cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
        if (mysqli_num_rows($cek) > 0) {
            $error = "Username sudah digunakan!";
        } else {
            // Simpan data baru (default role: users)
            $query = mysqli_query($conn, "INSERT INTO users (username, password, nama, role) VALUES ('$username', '$password', '$nama', 'users')");
            if ($query) {
                $success = "Pendaftaran berhasil! Silakan login.";
            } else {
                $error = "Gagal mendaftar. Coba lagi.";
            }
        }
    } else {
        $error = "Harap isi semua data!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Aplikasi</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #00c853, #b2ff59);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .register-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #00c853;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #00e676;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background: #00c853;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
        .success {
            color: green;
            text-align: center;
            margin-bottom: 15px;
        }
        .login-link {
            margin-top: 20px;
            text-align: center;
        }
        .login-link a {
            color: #00c853;
            text-decoration: none;
            font-weight: bold;
        }
        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="register-container">
    <h1>Register</h1>
    <?php if ($error): ?>
        <div class="error"><?= $error ?></div>
    <?php elseif ($success): ?>
        <div class="success"><?= $success ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="form-group">
            <input type="text" name="nama" placeholder="Nama lengkap" required>
        </div>
        <div class="form-group">
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" name="register">Daftar</button>
    </form>
    <div class="login-link">
        Sudah punya akun? <a href="login.php">Login di sini</a>
    </div>
</div>
</body>
</html>
