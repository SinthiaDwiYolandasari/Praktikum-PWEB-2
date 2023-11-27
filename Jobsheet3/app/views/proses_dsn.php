<?php
include '../classes/database.php';
session_start();
$db=new database();

$aksi = $_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_dsn($_POST['nidn'], $_POST['nama'], $_POST['alamat']);
    $_SESSION['eksekusi'] = "Data Berhasil Ditambahkan";
    header("location:tampil_dsn.php");
}elseif ($aksi=="update"){
    $db->update_dosen($_POST['id_dosen'], $_POST['nidn'], $_POST['nama'], $_POST['alamat']);
    $_SESSION['eksekusi'] = "Update Successfully";
    header("location:tampil_dsn.php");
}elseif ($aksi=="hapus"){
    $db->hapus_dosen($_GET['id_dosen']);
    $_SESSION['eksekusi'] = "Data Berhasil Dihapus";
    header("location:tampil_dsn.php");
}