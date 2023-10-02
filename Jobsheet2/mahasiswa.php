<?php

//membuat class
class mahasiswa {
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat; 

    //method untuk menampilkan nama
    function tampil_nama(){
        //isi method
        return "Nama saya adalah Sinthia";
    }

    function tampil_alamat(){
        //isi method
    }
}

//object baru yang merupakan instansiasi dari class mahasiswa
$nama_mahasiswa= new mahasiswa();

//menampilkan object ke layar
echo $nama_mahasiswa->tampil_nama();

// TUGAS
class dosen {
    //property
    var $nidn;
    var $nama;
    var $prodi;

    function tampil_nidn(){
        return "</br></br>220102023";
    }
    function tampil_nama(){
        return "</br>Nama Saya adalah Sinthia Dwi Yolandasari";
    }
    function tampil_prodi(){
        return "</br>Program Studi D3 Teknik Informatika";
    }
}
//object baru 
$data_dosen = new dosen;

//menampilkan 
echo $data_dosen->tampil_nidn();
echo $data_dosen->tampil_nama();
echo $data_dosen->tampil_prodi();
?>