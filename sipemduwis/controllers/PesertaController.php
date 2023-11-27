<?php
include_once '../../models/Peserta.php';

class PesertaController{
    // properti model untuk me return di conctruct nya
    private $model;

    // membuat cons $db agar terhubung dua arah antara controller dengan model
    public function __construct($db){

        // instansiasi mahasiswa yang ada di models
        $this->model = new Peserta($db);
    }

    public function getAllPeserta(){
        return $this->model->getAllPeserta();
    }

    public function createPeserta($nama,$tempat_lahir,$jenis_kelamin,$alamat,$agama,$umur,$asal_perwakilan,$no_hp,$status_peserta,)
    {
        return $this->model->createPeserta($nama,$tempat_lahir,$jenis_kelamin,$alamat,$agama,$umur,$asal_perwakilan,$no_hp,$status_peserta);

    }

    public function getPesertaById($id_peserta){
        return $this->model->getPesertaById($id_peserta);
    }

    // method untuk update
    public function updatePeserta($id_peserta,$nama,$tempat_lahir,$jenis_kelamin,$alamat,$agama,$umur,$asal_perwakilan,$no_hp,$status_peserta)
    {
        return $this->model->updatePeserta($id_peserta,$nama,$tempat_lahir,$jenis_kelamin,$alamat,$agama,$umur,$asal_perwakilan,$no_hp,$status_peserta);
    }
    // method untuk hapus
    public function deletePeserta($id_peserta){
        return $this->model->deletePeserta($id_peserta);
    }
}
?>