<?php

class Mahasiswa {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    // models yang akan dipanggil di controller
    public function getAllMahasiswa(){
        $query= "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMahasiswa($nim,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat)
    {
        $query = "INSERT INTO mahasiswa (nim,nama,tempat_lahir,jenis_kelamin,agama,alamat) 
        VALUES ('$nim','$nama','$tempat_lahir','$jenis_kelamin','$agama','$alamat')";
    
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    // ambil data mahasiswa berdasarkan id
    public function getMahasiswaById($id){
        $query = "SELECT * FROM mahasiswa where id= $id";
        $result = mysqli_query($this->koneksi, $query);
        // return=mengambil data dengan select * from mahasiswa jadi kita membaca data yang diambil dr array jadi kita akan fetch data dalam bentuk array asosiatif
        return mysqli_fetch_assoc($result);
    }

    // fungsi/method untuk update  
    public function updateMahasiswa($id,$nim,$nama,$tempat_lahir,$jenis_kelamin,$agama,$alamat){
        $query = "UPDATE mahasiswa set nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', 
        jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat' WHERE id= $id";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function deleteMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id= $id";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else {
            return false;
        }
    }
}
?>