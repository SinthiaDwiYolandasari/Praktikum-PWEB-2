<?php
include_once '../../models/Mahasiswa.php';

class MahasiswaController{
    // properti model untuk me return di conctruct nya
    private $model;

    // membuat cons $db agar terhubung dua arah antara controller dengan model
    public function __construct($db){

        // instansiasi mahasiswa yang ada di models
        $this->model = new Mahasiswa($db);
    }

    public function getAllMahasiswa(){
        return $this->model->getAllMahasiswa();
    }

    public function createMahasiswa($nim,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat)
    {
        return $this->model->createMahasiswa($nim,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat);

    }

    public function getMahasiswaById($id){
        return $this->model->getMahasiswaById($id);
    }

    // method untuk update
    public function updateMahasiswa($id,$nim,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat)
    {
        return $this->model->updateMahasiswa($id,$nim,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat);
    }
    // method untuk hapus
    public function deleteMahasiswa($id){
        return $this->model->deleteMahasiswa($id);
    }
}
?>