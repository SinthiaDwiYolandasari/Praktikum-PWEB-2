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

<!-- TUGAS -->


<!-- <?php
// // Membuat class manusia
// class Manusia {
//     protected $nama_saya; // Menjadikan property protected

//     public function panggil_nama($saya) {
//         $this->nama_saya = $saya;
//     }
// }

// // Class turunan atau sub class dari manusia
// class Mahasiswa extends Manusia {
//     private $nama_mahasiswa; // Menjadikan property private

//     public function panggil_mahasiswa($mahasiswa) {
//         $this->nama_mahasiswa = $mahasiswa;
//     }

//     public function tampilkan_data() {
//         echo "Nama Depan Saya : " . $this->nama_saya . "</br>";
//         echo "Nama Belakang : " . $this->nama_mahasiswa . "</br>";
//     }
// }

// // Instansiasi class mahasiswa
// $informatika = new Mahasiswa();

// $informatika->panggil_nama("Sinthia Dwi");
// $informatika->panggil_mahasiswa("Yolandasari");

// // Memanggil metode tampilkan_data
// $informatika->tampilkan_data();

?> -->

<?php
class Manusia {
    private $nama_saya; // Menjadikan property protected

    public function panggil_nama($saya) {
        $this->nama_saya = $saya;
    }
    function cari_nama(){
        return $this->nama_saya;
    }
}

// Class turunan atau sub class dari manusia
class Mahasiswa extends Manusia {
    protected $nama_mahasiswa; // Menjadikan property private

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
