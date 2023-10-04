<?php 
include '../classes/database.php';
session_start();

$db=new database();

$aksi = $_GET['aksi'];
if($aksi=="tambah"){
    $db->tambah_mhs($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    $_SESSION['eksekusi'] = "Data Berhasil Ditambahkan";
     header("location:tampil_mhs.php");
 }elseif ($aksi=="update"){
     $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
     $_SESSION['eksekusi'] = "Update Successfully";
        header("location:tampil_mhs.php");
 }elseif ($aksi=="hapus"){
     $db->hapus($_GET['id']);
     $_SESSION['eksekusi'] = "Data Berhasil Dihapus";
     header("location:tampil_mhs.php?");
}
?>