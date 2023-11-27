<?php
include_once '../../models/Penilaian.php';

class PenilaianController{
    // properti model untuk me return di conctruct nya
    private $model;

    // membuat cons $db agar terhubung dua arah antara controller dengan model
    public function __construct($db){

        // instansiasi mahasiswa yang ada di models
        $this->model = new Penilaian($db);
    }

    public function getAllPenilaian(){
        return $this->model->getAllPenilaian();
    }

    public function createPenilaian($id_peserta,$pengetahuan1,$keterampilan1,$sikap1,$pengetahuan2,$keterampilan2,$sikap2,$total_nilai)
    {
        return $this->model->createPenilaian($id_peserta,$pengetahuan1,$keterampilan1,$sikap1,$pengetahuan2,$keterampilan2,$sikap2,$total_nilai);

    }

    public function getPenilaianById($id_penilaian){
        return $this->model->getPenilaianById($id_penilaian);
    }

    // method untuk update
    public function updatePenilaian($id_penilaian,$pengetahuan1,$keterampilan1,$sikap1,$pengetahuan2,$keterampilan2,$sikap2,$total_nilai)
    {
        return $this->model->updatePenilaian($id_penilaian,$pengetahuan1,$keterampilan1,$sikap1,$pengetahuan2,$keterampilan2,$sikap2,$total_nilai);
    }
    // method untuk hapus
    public function deletePenilaian($id_penilaian){
        return $this->model->deletePenilaian($id_penilaian);
    }


}
?>