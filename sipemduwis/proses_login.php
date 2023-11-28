<?php
// Mulai sesi
session_start();

// Lakukan pengecekan apakah formulir dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Anda dapat menambahkan logika validasi di sini

    // Contoh sederhana: Periksa apakah username dan password cocok
    if ($username == "admin" && $password == "admin") {
        // Login berhasil
        // Simpan informasi login di sesi (contoh: ID pengguna)
        $_SESSION["user_id"] = 1;

        // Redirect ke halaman landing.php
        header("Location: landing2.php");
        exit();
    } else {
        // Login gagal
        echo "Login gagal. Mohon periksa kembali username dan password Anda.";
    }
} else {
    // Jika formulir tidak dikirimkan, kembalikan ke halaman login
    header("Location: landing.php");
    exit();
}
?>
