<?php

//membuat class
class mahasiswa {
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat; 

    function __construct(){
        //akan dieksekusi pertama kali walaupun letaknya dibawah function
        echo "Saya Mahasiswa Teknik Informatika";
        echo "</br>";
    }

    function __destruct(){
        //akan diesksekusi paling akhir
        echo "Politeknik Negeri Cilacap";
    }

    //method untuk menampilkan nama
    function tampil_nama(){
        //isi method
        return "Nama saya adalah Sinthia </br>";
    }
    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
    }
    function tampil_alamat(){
        //isi method
    }
}

//object baru yang merupakan instansiasi dari class mahasiswa
$nama_mahasiswa= new mahasiswa();

//menampilkan object ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_mahasiswa();
