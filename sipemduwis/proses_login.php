<?php
// Menggunakan session untuk menyimpan data sesi pengguna
session_start();

// Mengambil nilai dari formulir HTML
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan validasi atau otentikasi pengguna di sini
// Contoh sederhana, Anda dapat menyesuaikan dengan logika otentikasi yang sesuai

// Simpan data pengguna ke sesi (hanya contoh)
$_SESSION['user_username'] = $username;

// Redirect ke halaman yang sesuai setelah login
header('Location: welcome.php');
exit();
?>
