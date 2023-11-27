<?php
include_once '../../models/Dosen.php';

class DosenController{
    // properti model untuk me return di conctruct nya
    private $model;

    // membuat cons $db agar terhubung dua arah antara controller dengan model
    public function __construct($db){

        // instansiasi mahasiswa yang ada di models
        $this->model = new Dosen($db);
    }

    public function getAllDosen(){
        return $this->model->getAllDosen();
    }

    public function createDosen($nidn,$nama,$alamat)
    {
        return $this->model->createDosen($nidn,$nama,$alamat);

    }

    public function getDosenById($id_dosen){
        return $this->model->getDosenById($id_dosen);
    }

    // method untuk update
    public function updateDosen($id_dosen,$nidn,$nama,$alamat)
    {
        return $this->model->updateDosen($id_dosen,$nidn,$nama,$alamat);
    }


    // method untuk hapus
    public function deleteDosen($id_dosen){
        return $this->model->deleteDosen($id_dosen);
    }
}
?>