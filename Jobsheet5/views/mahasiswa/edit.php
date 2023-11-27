<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id);

    if ($mahasiswaData) {
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            // $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $alamat = $_POST['alamat'];

            $result = $mahasiswaController->updateMahasiswa($id, $nim, $nama, $tempat_lahir,$jenis_kelamin, $agama, $alamat);

            if ($result) {
                header("location:index.php");
            } else {
                header("location:edit.php");
            }
        }
    } else {
        echo "Mahasiswa tidak ditemukan";
    }
}
?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h3>Edit Data Mahasiswa</h3>

        <?php if ($mahasiswaData): ?>
            <form action="" method="post">
                <div class="row">
                    <?php foreach ($mahasiswaData as $d => $value): ?>
                        <div class="col-md-6 mb-3">
                            <label for="<?php echo $d; ?>" class="form-label"><?php echo ucfirst(str_replace('_', ' ', $d)); ?></label>
                            <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </form>
        <?php endif; ?>
    </div>

    <!-- Menggunakan Bootstrap JS (jika diperlukan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
