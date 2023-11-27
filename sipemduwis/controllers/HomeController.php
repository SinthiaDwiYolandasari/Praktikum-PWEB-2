<?php

class HomeController{
    public function home(){
        header("location:http://localhost/sipemduwis/landing.php");
    }

    public function peserta(){
        header("location:http://localhost/sipemduwis/views/peserta/index.php");
    }
    public function penilaian(){
        header("location:http://localhost/sipemduwis/views/penilaian/index.php");
    }
}   
?>