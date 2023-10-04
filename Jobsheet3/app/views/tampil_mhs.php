<?php
// memanggil class database
include '../classes/database.php';
session_start(); //sesi dimulai
$db = new database; // instansiasi class database
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
        th {
            text-align: center;
        }
    </style>


  <!-- Pengaturan Navbar -->
  <!-- Jarak px = jarak kiri, py = jarak atas -->
  <div class="px-4 py-3"> 
    <!-- Pengaturan bg navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIAKAD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!-- Menampilkan navbar menu Home yang dapat nge link -->
                        <a class="nav-link active" aria-current="page" href="tampil_mhs.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- Menampilkan navbar menu Mahasiswa yang dapat nge link -->
                        <a class="nav-link" href="tampil_mhs.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <!-- Menampilkan navbar menu Dosen yang dapat nge link -->
                        <a class="nav-link" href="tampil_dsn.php">Dosen</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- Mengatur navbar search -->
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <!-- button search -->
                    <button class="btn btn-light" type="submit">Search</button> 
                </form>
            </div>
        </div>
    </nav>
</div>

<body>
    <div class="container"> 
        <h3>Data Mahasiswa</h3>
        <a class="btn btn-primary mb-4 mt-2" href="input_mhs.php">Tambah Mahasiswa</a> 
        <!-- mb = margin bawah, mt = margin atas -->

        <!-- bagian alert -->
        <?php
            if (isset($_SESSION['eksekusi'])): //untuk cek alert apakah berhasil dieksekusi
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
        <?php
            echo $_SESSION['eksekusi']; //menampilkan sesion 
        ?>
        </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
        </div>

        <?php
        session_destroy(); //sesi berhenti
        endif; //untuk menghilangkan alert
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
                foreach ($db->tampil_mahasiswa() as $x){  //perulangan 
                ?>
                <tr>
                    <!-- Menampilkan-->
                    <td class="text-center"><?php echo $no++ ?></td>
                    <td><?php echo $x['nim'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                        <a class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Tambahkan tautan ke file JavaScript Bootstrap (jika diperlukan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js">
    </script>

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