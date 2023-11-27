<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_dosen'])) {
    $id_dosen = $_GET['id_dosen'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id_dosen);

    if ($dosenData) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];

            $result = $dosenController->updateDosen($id_dosen, $nidn, $nama, $alamat);

            if ($result) {
                header("location:index.php");
            } else {
                header("location:edit.php");
            }
        }
    } else {
        echo "Dosen tidak ditemukan";
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
    <title>Edit Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h3>Edit Data Dosen</h3>

        <?php if ($dosenData): ?>
            <form action="" method="post">
                <div class="row">
                    <?php foreach ($dosenData as $d => $value): ?>
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
