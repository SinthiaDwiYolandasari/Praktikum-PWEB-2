<?php
// Mulai sesi
session_start();

// Hancurkan semua variabel sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain yang sesuai
header("Location: landing.php");
exit();
?>
