<?php

class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    //method
    function __construct(){ //kita tidak usah membuat function, maka file lain ketika meng include kan database.php maka method ini akan ikut tanpa panggil nama function [hanya panggil nama file]
     $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db); //memanggil property
    }

    function tampil_mahasiswa(){
        $data= mysqli_query($this->koneksi, "select * from mahasiswa"); //menampilkan data mahasiswa dari tabel akademik
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return  $hasil;
    }

    // function tampil_mahasiswa_saya(){
    //     $data= mysqli_query($this->koneksi, "select * from mahasiswa where nim='220102023'"); //menampilkan data mahasiswa dari tabel akademik
    //     while($d = mysqli_fetch_array($data)){
    //         $hasil[]=$d;
    //     }
    //     return $hasil;
    // }
    
    function tambah_mhs($nim, $nama, $alamat){
        mysqli_query($this->koneksi, "insert into mahasiswa(nim,nama,alamat) values('$nim', '$nama', '$alamat')");
    }

    function edit($id){
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where id='$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($id, $nim, $nama, $alamat){
        mysqli_query($this->koneksi, "update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where id='$id'");
    }

    function hapus($id){
        mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
    }



    
    // Milik dosen
    function tampil_dosen(){
        $data= mysqli_query($this->koneksi, "select * from dosen"); //menampilkan data mahasiswa dari tabel dosen
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambah_dsn($nidn, $nama_dosen, $alamat_dosen){
        mysqli_query($this->koneksi, "insert into dosen(nidn,nama_dosen,alamat_dosen) values('$nidn', '$nama_dosen', '$alamat_dosen')");
    }

    function edit_dosen($id_dosen){
        $data = mysqli_query($this->koneksi, "select * from dosen where id_dosen='$id_dosen'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update_dosen($id_dosen, $nidn, $nama_dosen, $alamat_dosen){
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama_dosen='$nama_dosen', alamat_dosen='$alamat_dosen' where id_dosen='$id_dosen'");
    }
    
    function hapus_dosen($id_dosen){
        mysqli_query($this->koneksi, "delete from dosen where id_dosen='$id_dosen'");
    }
}

?>