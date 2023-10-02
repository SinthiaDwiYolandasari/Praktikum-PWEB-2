<?php
//membuat class mahasiswa
class mahasiswa{
    //property public
    public $nama;
    private $nim="220102023"; //tidak bisa dipanggil diluar kelasnya tapi bisanya di keturunannya

    //public method
    public function tampilkan_nama(){
        //nilai kembalian
        return "Nama Saya Sinthia Dwi </br>";
    }

    function tampilkan_nim(){
        //nilai kembalian
        return "NIM saya ".$this->nim;
    }
}
//instansiasi object mahasiswa ke dalam variabel $mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
?>