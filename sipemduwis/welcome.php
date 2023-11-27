<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user_username'])) {
    // Jika belum, redirect ke halaman login
    header('Location: login.php');
    exit();
}

// Pengguna sudah login, lanjutkan dengan halaman selamat datang
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['user_username']; ?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
