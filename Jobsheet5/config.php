<?php
class database {
    var $host="localhost";
    var $username="username";
    var $password="";
    var $db="akademik";
    var $koneksi;

    function getKoneksi(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        if ($this->koneksi){
            die("Koneksi dataase gagal : " .mysqli_connect_error());
        }
        return $this->koneksi;
    }

}

?>