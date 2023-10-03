<!-- <?php
// //membuat class manusia
// class manusia {
//     public $nama_saya;

//     function panggil_nama($saya){
//         $this->nama_saya=$saya;
//     }
// }

// //class turunan atau sub class dari manusia
// class mahasiswa extends manusia{
//     public $nama_mahasiswa;

//     function panggil_mahasiswa($mahasiswa){
//         $this->nama_mahasiswa=$mahasiswa;
//     }
// }

// //instansiasi class mahasiswa
// $informatika = new mahasiswa();

// $informatika->panggil_nama("Sinthia Dwi");
// $informatika->panggil_mahasiswa("Yolandasari");

// //tampilkan isi properti
// echo "Nama Depan Saya : ". $informatika->nama_saya."</br>";
// echo "Nama Belakang : ". $informatika->nama_mahasiswa. "</br>";
?> -->

<!-- Tugas -->
<?php
class Manusia {
    private $nama_saya; 

    public function panggil_nama($saya) {
        $this->nama_saya = $saya;
    }
    function cari_nama(){
        return $this->nama_saya;
    }
}

// Class turunan atau sub class dari manusia
class Mahasiswa extends Manusia {
    protected $nama_mahasiswa; 

    public function panggil_mahasiswa($mahasiswa) {
        $this->nama_mahasiswa = $mahasiswa;
    }

    public function cari_mahasiswa(){
        return $this->nama_mahasiswa;
    }
}

// Instansiasi class mahasiswa
$informatika = new Mahasiswa();

$informatika->panggil_nama("Sinthia Dwi");
$informatika->panggil_mahasiswa("Yolandasari");

//Tampilkan data
echo "Nama Depan Saya : ". $informatika->cari_nama(). "</br>";
echo "Nama Belakang  : ". $informatika->cari_mahasiswa(). "</br>";
?>