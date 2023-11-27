<?php

include_once '../../config.php';
include_once '../../controllers/PendaftarController.php';

// inisiasi database untuk mengambil koneksi
$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pendaftarController = new PendaftarController ($db);
    $result = $pendaftarController->deletePendaftar($id);

    if($result){
        header("location:index.php");
    }else{
        echo "Gagal menghapus data";
    }
}
?>