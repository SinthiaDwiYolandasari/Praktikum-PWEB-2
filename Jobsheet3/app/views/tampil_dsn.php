<?php
// memanggil class database
include '../classes/database.php';
session_start(); //sesion dimulai


// instansiasi class database
$db = new database;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
        th {
            text-align: center;
        }
    </style>
  <div class="px-4 py-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tampil_dsn.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_mhs.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tampil_dsn.php">Dosen</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</div>

<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <!-- my style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3>Data Dosen</h3>
        <a class="btn btn-primary mb-4 mt-2" href="input_dsn.php">Tambah Dosen</a>

        <?php
            if (isset($_SESSION['eksekusi'])):
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
        <?php
            echo $_SESSION['eksekusi'];
        ?>
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php
        session_destroy();
        endif;
        ?>

        <table class="table table-bordered mx-auto">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">NIM</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($db->tampil_dosen() as $y){ 
                ?>
                <tr>
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $y['nidn'] ?></td>
                    <td><?php echo $y['nama_dosen'] ?></td>
                    <td><?php echo $y['alamat_dosen'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit_dsn.php?id_dosen=<?php echo $y['id_dosen']; ?>&aksi=edit">Edit</a>
                        <a class="btn btn-danger" href="proses_dsn.php?id_dosen=<?php echo $y['id_dosen']; ?>&aksi=hapus">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>

        </table>
    </div>
    
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