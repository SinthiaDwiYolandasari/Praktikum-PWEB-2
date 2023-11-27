<?php
include_once '../../config.php';
include_once '../../controllers/PendaftarController.php';

$database = new database;
$db = $database->getKoneksi();

// jika ada perintah submit 
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $pendaftarControler = new PendaftarController($db);
    // $nim dll ngambil dr post di atas, menangkap dari tambah.php
    $result = $pendaftarControler->createPendaftar($nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tanggal_lahir);

    if($result){
        header("location:index.php");
    }else{
        header("location:tambah.php");
    }
}
?>