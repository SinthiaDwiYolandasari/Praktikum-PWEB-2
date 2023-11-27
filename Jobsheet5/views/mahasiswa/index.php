<?php
// memanggil class model database
// pada views yang pertama kali yang dibutuhkan adalah koneksi
include_once '../../config.php';
// controllers 
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

// instansiasi class database
$database = new database;
// getKoneksi untuk mengkoneksikan file index ke dalam getKoneksi
$db = $database->getKoneksi();

// memanggil controller
$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<!DOCTYPE html>
<html>
<div class="container">
    <h3>Data Mahasiswa</h3>
    <a class="btn btn-primary mb-3" href="tambah.php">
    <i class="fa fa-plus"></i> Tambah Mahasiswa</a>
    
    <?php
    // jika ada perubahan pada variable session dengan nama eksekusi, maka menampilkan alert
    if(isset($_SESSION['eksekusi'])):
    ?>
        
        <div class="alert alert-success alert-dismissible fade show" role="alert">
    
            <?php
            // menampilkan variable eksekusi 
            echo $_SESSION['eksekusi'];
            ?>
       
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <?php
    // jika halaman di reload, sessionnya akan hilang
    session_destroy();
    endif;
    ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <!-- <th>Tangal Lahir</th> -->
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($mahasiswa as $x){ 
            ?> 
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['nim'] ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['tempat_lahir'] ?></td>
                <td><?php echo $x['jenis_kelamin'] ?></td>
                <td><?php echo $x['agama'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?php echo $x['id']; ?>">
                    <i class="fa fa-pencil"></i> Edit</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $x['id']; ?>" 
                    onclick="return confirm('Apakah yakin akan menghapus..?')">
                    <i class="fa fa-trash"></i> Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Tambahkan tautan ke file JavaScript Bootstrap (jika diperlukan) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
