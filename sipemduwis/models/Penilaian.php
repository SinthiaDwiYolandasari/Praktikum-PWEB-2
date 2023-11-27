<?php

class Penilaian {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    // models yang akan dipanggil di controller
    public function getAllPenilaian(){
        $query= "SELECT * FROM penilaian INNER JOIN peserta ON penilaian.id_peserta = peserta.id_peserta";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPenilaian($id_peserta,$pengetahuan1,$keterampilan1,$sikap1,$pengetahuan2,$keterampilan2,$sikap2,$total_nilai)
    {
        $query = "INSERT INTO penilaian (id_peserta,pengetahuan1,keterampilan1,sikap1,pengetahuan2,keterampilan2,sikap2,total_nilai) 
        VALUES ('$id_peserta','$pengetahuan1','$keterampilan1','$sikap1','$pengetahuan2','$keterampilan2','$sikap2','$total_nilai')";
        
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    // ambil data mahasiswa berdasarkan id
    public function getPenilaianById($id_penilaian){
        $query = "SELECT * FROM penilaian where id_penilaian= $id_penilaian";
        $result = mysqli_query($this->koneksi, $query);
        // return=mengambil data dengan select * from mahasiswa jadi kita membaca data yang diambil dr array jadi kita akan fetch data dalam bentuk array asosiatif
        return mysqli_fetch_assoc($result);
    }

    // fungsi/method untuk update  
    public function updatePenilaian($id_penilaian,$pengetahuan1,$keterampilan1,$sikap1,$pengetahuan2,$keterampilan2,$sikap2,$total_nilai){
        $query = "UPDATE penilaian set pengetahuan1='$pengetahuan1', keterampilan1='$keterampilan1', sikap1='$sikap1', pengetahuan2='$pengetahuan2', keterampilan2='$keterampilan2', sikap2='$sikap2',
        total_nilai='$total_nilai' WHERE id_penilaian= $id_penilaian";
       
       $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }


    public function deletePenilaian($id_penilaian){
        $query = "DELETE FROM penilaian WHERE id_penilaian= $id_penilaian";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else {
            return false;
        }
    }

}
?>