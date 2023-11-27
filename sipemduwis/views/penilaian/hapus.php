<?php

include_once '../../config.php';
include_once '../../controllers/PenilaianController.php';

// inisiasi database untuk mengambil koneksi
$database = new database();
$db = $database->getKoneksi();
session_start();


if(isset($_GET['id_penilaian'])){
    $id_penilaian = $_GET['id_penilaian'];

    $penilaianController = new PenilaianController ($db);
    $result = $penilaianController->deletePenilaian($id_penilaian);

    if($result){
        $_SESSION['esksekusi']="Data telah dihapus";
        header("location:index.php");
    }else{
        echo "Gagal menghapus data";
    }
}
?>