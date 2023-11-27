<?php
// memanggil class model database
// pada views yang pertama kali yang dibutuhkan adalah koneksi
include_once '../../config.php';
// controllers 
include_once '../../controllers/DosenController.php';


// instansiasi class database
$database = new database;
// getKoneksi untuk mengkoneksikan file index ke dalam getKoneksi
$db = $database->getKoneksi();

// memanggil controller
$dosenController = new DosenController($db);
$dosen = $dosenController->getAllDosen();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <!-- navbar start -->
  <div class="px-3 py-3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Siakad</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/Jobsheet5/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Jobsheet5/views/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Jobsheet5/views/dosen">Dosen</a>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<!-- navbar end -->
<body>
    <div class="container">
        <h3>Data Dosen</h3>
        <a class="btn btn-primary mb-3" href="tambah.php">
        <i class="fa fa-plus"></i> Tambah Dosen
        </a>
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
        // supaya session nya hilang
        session_destroy();
        endif;
        ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1;
                foreach ($dosen as $x){ 
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $x['nidn'] ?></td>
                    <td><?php echo $x['nama'] ?></td>
                    <td><?php echo $x['alamat'] ?></td>

                    <td> 
                    <a class="btn btn-warning" href="edit.php?id_dosen=<?php echo $x['id_dosen']; ?>">
                    <i class="fa fa-pencil"></i> Edit </a>

                    <a class="btn btn-danger" href="hapus.php?id_dosen=<?php echo $x['id_dosen']; ?>"
                    onclick="return confirm('Apakah yakin akan menghapus..?')">
                    <i class="fa fa-trash"></i> Hapus </a>
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
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
</html>