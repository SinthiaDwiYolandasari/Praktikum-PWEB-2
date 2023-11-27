<?php
include_once '../../config.php';
include_once '../../controllers/PenilaianController.php';

include_once '../../controllers/PesertaController.php';

session_start();
$database = new database;
$db = $database->getKoneksi();
$pesertaController = new PesertaController($db);

// jika ada perintah submit 
if(isset($_POST['submit'])){
    $id_peserta = $_POST['nama'];
    $pengetahuan1 = $_POST['pengetahuan1'];
    $keterampilan1 = $_POST['keterampilan1'];
    $sikap1 = $_POST['sikap1'];
    $pengetahuan2 = $_POST['pengetahuan2'];
    $keterampilan2 = $_POST['keterampilan2'];
    $sikap2 = $_POST['sikap2'];
    $status_peserta = "peserta" ;
    $total_nilai = (($pengetahuan1+$keterampilan1+$sikap1) + ($pengetahuan2+$keterampilan2+$sikap2));


    $penilaianControler = new PenilaianController($db);
    // $nim dll ngambil dr post di atas, menangkap dari tambah.php
    $result = $penilaianControler->createPenilaian($id_peserta,$pengetahuan1,$keterampilan1,$sikap1,$pengetahuan2,$keterampilan2,$sikap2,$total_nilai);

    if($result){
        $_SESSION['eksekusi'] = "Data Berhasil Ditambahkan";
        header("location:index.php");
    }else{
        header("location:tambah.php");
    }
}
?>