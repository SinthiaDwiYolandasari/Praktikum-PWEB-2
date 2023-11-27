<?php
include_once '../../models/Pendaftar.php';

class PendaftarController{
    // properti model untuk me return di conctruct nya
    private $model;

    // membuat cons $db agar terhubung dua arah antara controller dengan model
    public function __construct($db){

        // instansiasi mahasiswa yang ada di models
        $this->model = new Pendaftar($db);
    }

    public function getAllPendaftar(){
        return $this->model->getAllPendaftar();
    }

    public function createPendaftar($nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tanggal_lahir)
    {
        return $this->model->createPendaftar($nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tanggal_lahir);

    }

    public function getPendaftarById($id){
        return $this->model->getPendaftarById($id);
    }

    // method untuk update
    public function updatePendaftar($id,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tanggal_lahir)
    {
        return $this->model->updatePendaftar($id,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tanggal_lahir);
    }
    // method untuk hapus
    public function deletePendaftar($id){
        return $this->model->deletePendaftar($id);
    }
}
?>