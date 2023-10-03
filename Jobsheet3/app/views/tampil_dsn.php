<?php
// memanggil class database
include '../classes/database.php';
// instansiasi class database
$db = new database;
?>

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
        <a class="btn btn-primary" href="input_dsn.php">Tambah Dosen</a>
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
                foreach ($db->tampil_dosen() as $y){ 
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $y['nidn'] ?></td>
                    <td><?php echo $y['nama_dosen'] ?></td>
                    <td><?php echo $y['alamat_dosen'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit_dsn.php?id=<?php echo $y['id_dosen']; ?>&aksi=edit">Edit</a>
                        <a class="btn btn-danger" href="proses_dsn.php?id=<?php echo $y['id_dosen']; ?>&aksi=hapus">Hapus</a>
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
</body>
</html>