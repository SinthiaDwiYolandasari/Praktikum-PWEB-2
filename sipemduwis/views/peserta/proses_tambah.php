<?php
include_once '../../config.php';
include_once '../../controllers/PesertaController.php';

session_start();
$database = new database;
$db = $database->getKoneksi();

// jika ada perintah submit 
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $umur = $_POST['umur'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $asal_perwakilan = $_POST['asal_perwakilan'];
    $no_hp = $_POST['no_hp'];
    $status_peserta = $_POST['status_peserta'];

    $pesertaControler = new PesertaController($db);
    // $nim dll ngambil dr post di atas, menangkap dari tambah.php
    $result = $pesertaControler->createPeserta($nama,$tempat_lahir,$jenis_kelamin,$alamat,$agama,$umur,$asal_perwakilan,$no_hp,$status_peserta);

    if($result){
        $_SESSION['eksekusi'] = "Data Berhasil Ditambahkan";
        header("location:index.php");
    }else{
        header("location:tambah.php");
    }
}
?>