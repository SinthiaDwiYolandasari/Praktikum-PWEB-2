<?php

include_once '../../config.php';
include_once '../../controllers/PesertaController.php';

// inisiasi database untuk mengambil koneksi
$database = new database();
$db = $database->getKoneksi();
session_start();


if(isset($_GET['id_peserta'])){
    $id_peserta = $_GET['id_peserta'];

    $pesertaController = new PesertaController ($db);
    $result = $pesertaController->deletePeserta($id_peserta);

    if($result){
        $_SESSION['esksekusi']="Data telah dihapus";
        header("location:index.php");
    }else{
        echo "Gagal menghapus data";
    }
}
?>