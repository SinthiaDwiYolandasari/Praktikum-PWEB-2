<?php

class Peserta {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    // models yang akan dipanggil di controller
    public function getAllPeserta(){
        $query= "SELECT * FROM peserta";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPeserta($nama,$tempat_lahir,$jenis_kelamin,$alamat,$agama,$umur,$asal_perwakilan,$no_hp,$status_peserta)
    {
        $query = "INSERT INTO peserta (nama,tempat_lahir,jenis_kelamin,alamat,agama,umur,asal_perwakilan,no_hp,status_peserta) 
        VALUES ('$nama','$tempat_lahir','$jenis_kelamin','$alamat','$agama','$umur','$asal_perwakilan','$no_hp','$status_peserta')";
        
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    // ambil data mahasiswa berdasarkan id
    public function getPesertaById($id_peserta){
        $query = "SELECT * FROM peserta where id_peserta= $id_peserta";
        $result = mysqli_query($this->koneksi, $query);
        // return=mengambil data dengan select * from mahasiswa jadi kita membaca data yang diambil dr array jadi kita akan fetch data dalam bentuk array asosiatif
        return mysqli_fetch_assoc($result);
    }

    // fungsi/method untuk update  
    public function updatePeserta($id_peserta,$nama,$tempat_lahir,$jenis_kelamin,$alamat,$agama,$umur,$asal_perwakilan,$no_hp,$status_peserta){
        $query = "UPDATE peserta set nama='$nama', tempat_lahir='$tempat_lahir', 
        jenis_kelamin='$jenis_kelamin',alamat='$alamat', agama='$agama',  umur='$umur', asal_perwakilan='$asal_perwakilan', no_hp='$no_hp',
        status_peserta='$status_peserta' WHERE id_peserta= $id_peserta";
       
       $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function deletePeserta($id_peserta){
        $query = "DELETE FROM peserta WHERE id_peserta= $id_peserta";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else {
            return false;
        }
    }
}
?>