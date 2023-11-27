<?php
// memanggil class model database
// pada views yang pertama kali yang dibutuhkan adalah koneksi
include_once '../../config.php';
// controllers 
include_once '../../controllers/PesertaController.php';
require '../../index.php';

session_start();

// instansiasi class database
$database = new database;
// getKoneksi untuk mengkoneksikan file index ke dalam getKoneksi
$db = $database->getKoneksi();

// memanggil controller
$pesertaController = new PesertaController($db);
$peserta = $pesertaController->getAllPeserta();
?>

<!DOCTYPE html>
<html>
<div class="content">
    <h3>Data Peserta</h3>
    <a class="btn btn-primary mb-3" href="tambah.php">
    <i class="fa fa-plus"></i> Tambah Peserta</a>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPEMDUWIS</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
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
</head>

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

    <table class="table table-success table-striped" style ="text-align : center">
        <thead>
            <tr>
                <th >No</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Asal Perwakilan</th>
                <th>No Telepon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($peserta as $x){ 
            ?> 
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $x['nama'] ?></td>
                <td><?php echo $x['tempat_lahir'] ?></td>
                <td><?php echo $x['umur'] ?></td>
                <td><?php echo $x['jenis_kelamin'] ?></td>
                <td><?php echo $x['agama'] ?></td>
                <td><?php echo $x['alamat'] ?></td>
                <td><?php echo $x['asal_perwakilan'] ?></td>
                <td><?php echo $x['no_hp'] ?></td>
                <td><?php echo $x['status_peserta'] ?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id_peserta=<?php echo $x['id_peserta']; ?>">
                    <i class="fa fa-pencil"></i></a>
                    <a class="btn btn-danger" href="hapus.php?id_peserta=<?php echo $x['id_peserta']; ?>" 
                    onclick="return confirm('Apakah yakin akan menghapus?')">
                    <i class="fa fa-trash"></i></a>
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
