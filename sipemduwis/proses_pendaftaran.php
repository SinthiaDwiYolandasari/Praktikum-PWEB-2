<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form
    $nama_lengkap = $_POST["nama_lengkap"];
    $email = $_POST["email"];
    $nama_panggilan = $_POST["nama_panggilan"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $no_whatsapp = $_POST["no_whatsapp"];
    $media_sosial = $_POST["media_sosial"];
    $tinggi_badan = $_POST["tinggi_badan"];
    $berat_badan = $_POST["berat_badan"];
    $cerita = $_POST["cerita"];

    // Lakukan operasi yang diinginkan dengan data yang telah ditangkap
    // Misalnya, menyimpan data ke dalam database atau melakukan validasi lainnya

    // Setelah operasi selesai, Anda bisa melakukan redirect ke halaman lain atau menampilkan pesan sukses
    header("Location: sukses_pendaftaran.php");
    exit();
} else {
    // Jika form tidak di-submit melalui metode POST, kembalikan ke halaman sebelumnya atau beri pesan kesalahan
    header("Location: daftar.php");
    exit();
}
?>
