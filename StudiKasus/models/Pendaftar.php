<?php

class Pendaftar {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    // models yang akan dipanggil di controller
    public function getAllPendaftar(){
        $query= "SELECT * FROM pendaftar";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createPendaftar($nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tanggal_lahir)
    {
        $query = "INSERT INTO pendaftar (nama,tempat_lahir,jenis_kelamin,agama,alamat,tanggal_lahir) 
        VALUES ('$nama','$tempat_lahir','$jenis_kelamin','$agama','$alamat','$tanggal_lahir')";
    
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    // ambil data mahasiswa berdasarkan id
    public function getPendaftarById($id){
        $query = "SELECT * FROM pendaftar where id= $id";
        $result = mysqli_query($this->koneksi, $query);
        // return=mengambil data dengan select * from pendaftar jadi kita membaca data yang diambil dr array jadi kita akan fetch data dalam bentuk array asosiatif
        return mysqli_fetch_assoc($result);
    }

    // fungsi/method untuk update  
    public function updatePendaftar($id,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat,$tanggal_lahir){
        $query = "UPDATE pendaftar set nama='$nama', tempat_lahir='$tempat_lahir', 
        jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat',tanggal_lahir='$tanggal_lahir' WHERE id= $id";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function deletePendaftar($id){
        $query = "DELETE FROM pendaftar WHERE id= $id";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else {
            return false;
        }
    }
}
?>