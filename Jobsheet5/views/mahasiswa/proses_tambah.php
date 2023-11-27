<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database;
$db = $database->getKoneksi();

// jika ada perintah submit 
if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    // $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];

    $mahasiswaControler = new MahasiswaController($db);
    // $nim dll ngambil dr post di atas, menangkap dari tambah.php
    $result = $mahasiswaControler->createMahasiswa($nim,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat);

    if($result){
        header("location:index.php");
    }else{
        header("location:tambah.php");
    }
}
?>