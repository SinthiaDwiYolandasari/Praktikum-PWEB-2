<?php
// memanggil class model database
// pada views yang pertama kali yang dibutuhkan adalah koneksi
include_once '../../config.php';
// controllers 
include_once '../../controllers/PenilaianController.php';
include_once '../../controllers/PesertaController.php';
require '../../index.php';

session_start();

// instansiasi class database
$database = new database;
// getKoneksi untuk mengkoneksikan file index ke dalam getKoneksi
$db = $database->getKoneksi();

// memanggil controller
$penilaianController = new PenilaianController($db);
$penilaian = $penilaianController->getAllPenilaian();

$pesertaController = new PesertaController($db);
$peserta = $pesertaController->getAllPeserta();
?>

<style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
        vertical-align:middle;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }

    </style>
<!DOCTYPE html>
<html>
<div class="content">
    <h3>Data Penilaian</h3>
    <a class="btn btn-primary mb-3" href="tambah.php">
    <i class="fa fa-plus"></i> Tambah Data Penilaian</a>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
        vertical-align:middle;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
        .logo-container {
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .logo {
            max-height: 40px;
            margin-right: 10px;
        }

        .container {
            margin-top: 20px;
        }

        /* Sidebar styling */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa; /* Bootstrap's light gray background color */
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #495057; /* Bootstrap's dark gray text color */
            display: block;
        }

        .sidebar a:hover {
            background-color: #e9ecef; /* Bootstrap's light gray hover color */
        }

        /* Content styling to offset for the fixed sidebar */
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
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
    <table class="table table-success table-striped" >
        <thead>
        <tr>
            <th rowspan="2"style ="text-align : center">No</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Status</th>
            <th colspan="3">Showcase</th>
            <th colspan="3">Grand Final</th>
            <th rowspan="2">Total Penilaian</th>
            <th rowspan="2">Aksi</th>
        </tr>
        <tr>
            
            <th>Pengetahuan</th>
            <th>Keterampilan</th>
            <th>Sikap</th>
            
            <th>Pengetahuan</th>
            <th>Keterampilan</th>
            <th>Sikap</th>
            
        </tr>

        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($penilaian as $x){ 
            ?>
            <tr style ="text-align : center" >
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['status_peserta'] ?></td>
                <td><?php echo $x['pengetahuan1'] ?></td>
                <td><?php echo $x['keterampilan1'] ?></td>
                <td><?php echo $x['sikap1'] ?></td>
                <td><?php echo $x['pengetahuan2'] ?></td>
                <td><?php echo $x['keterampilan2'] ?></td>
                <td><?php echo $x['sikap2'] ?></td>
                <td><?php echo $x['total_nilai'] ?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id_penilaian=<?php echo $x['id_penilaian']; ?>">
                    <i class="fa fa-pencil"></i> Edit</a>
                    <a class="btn btn-danger" href="hapus.php?id_penilaian=<?php echo $x['id_penilaian']; ?>" 
                    onclick="return confirm('Apakah yakin akan menghapus?')">
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
<script>
        // Fungsi untuk menghilangkan alert setelah beberapa detik
        function hideAlert() {
            var successAlert = document.querySelector('.alert-success');
            if (successAlert) {
                setTimeout(function () {
                    successAlert.style.display = 'none';
                }, 5000);
            }
        }

        // Panggil fungsi hideAlert saat halaman dimuat
        window.addEventListener('load', hideAlert);
    </script>
</body>
</html>
