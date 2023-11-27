<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

// inisiasi database untuk mengambil koneksi
$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_dosen'])){
    $id_dosen = $_GET['id_dosen'];

    $dosenController = new DosenController ($db);
    $result = $dosenController->deleteDosen($id_dosen);

    if($result){
        header("location:index.php");
    }else{
        echo "Gagal menghapus data";
    }
}
?>