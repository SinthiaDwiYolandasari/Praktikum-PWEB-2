<?php
include '../classes/database.php';
$db=new database();

$aksi = $_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_dsn($_POST['nidn'], $_POST['nama_dosen'], $_POST['alamat_dosen']);
    header("location:tampil_dsn.php");
}elseif ($aksi=="update"){
    $db->update_dosen($_POST['id_dosen'], $_POST['nidn'], $_POST['nama_dosen'], $_POST['alamat_dosen']);
    header("location:tampil_dsn.php");
}elseif ($aksi=="hapus"){
    $db->hapus_dosen($_GET['id_dosen']);
    header("location:tampil_dsn.php");
}