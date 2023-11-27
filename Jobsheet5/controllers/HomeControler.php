<?php

class HomeController{
    public function home(){
        header("location:http://localhost/Jobsheet5/");
    }

    public function mahasiswa(){
        header("location:http://localhost/Jobsheet5/views/mahasiswa/index.php");
    }
    public function dosen(){
        header("location:http://localhost/Jobsheet5/views/dosen/index.php");
    }
}

    
?>