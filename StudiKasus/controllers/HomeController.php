<?php

class HomeController{
    public function home(){
        header("location:http://localhost/StudiKasus/index.php");
        
    }
    public function pendaftar(){
        header("location:http://localhost/StudiKasus/views/pendaftar/index.php");

    }
}