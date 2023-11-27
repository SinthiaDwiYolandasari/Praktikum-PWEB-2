<?php

class Dosen {
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi=$db;
    }

    // models akan dipanggil di controller
    public function getAllDosen(){
        $query = "SELECT * FROM dosen";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createDosen($nidn,$nama,$alamat)
    {
        $query = "INSERT INTO dosen (nidn,nama,alamat)
        VALUES ('$nidn','$nama','$alamat')";

        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }

    }

    // ambil data dosen berdasarkan id
    public function getDosenById($id_dosen){
        $query = "SELECT * FROM dosen WHERE id_dosen= $id_dosen";
        $result = mysqli_query($this->koneksi, $query);
        // return=mengambil data dengan select * from dosen jadi kita membaca data yang diambil dr array jadi kita akan fetch data dalam bentuk array asosiatif
        return mysqli_fetch_assoc($result);
    }

    // method untuk method
    public function updateDosen($id_dosen,$nidn,$nama,$alamat){
        $query = "UPDATE dosen set nidn='$nidn', nama='$nama', alamat='$alamat' WHERE id_dosen= $id_dosen";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    // method untuk delete
    public function deleteDosen($id_dosen){
    $query = "DELETE FROM dosen WHERE id_dosen= $id_dosen";
    $result = mysqli_query($this->koneksi, $query);
    if($result){
        return true;
    }else{
        return false;
    }
}
}
?>