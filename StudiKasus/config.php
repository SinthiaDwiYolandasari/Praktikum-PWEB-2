<?php
class database {
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "sipemduwis";
    var $koneksi;

    // method
    function getKoneksi(){
        // method getKoneksi akan dibungkus ke variable koneksi
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if (!$this->koneksi){
            // jika koneksi database tidak ditemukan, maka akan memunculkan allert
            die("koneksi database gagal : ".mysqli_connect_error());
        }
        // jika database ditemukan, maka akan dilanjutkan eksekusi
        return $this->koneksi;
    }
}
?>