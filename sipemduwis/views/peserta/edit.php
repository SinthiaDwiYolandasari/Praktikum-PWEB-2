<?php
include_once '../../config.php';
include_once '../../controllers/PesertaController.php';

$database = new database();
$db = $database->getKoneksi();
session_start();

if (isset($_GET['id_peserta'])) {
    $id_peserta = $_GET['id_peserta'];

    $pesertaController = new PesertaController($db);
    $pesertaData = $pesertaController->getPesertaById($id_peserta);

    if ($pesertaData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $umur = $_POST['umur'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat = $_POST['alamat'];
            $agama = $_POST['agama'];
            $asal_perwakilan = $_POST['asal_perwakilan'];
            $no_hp = $_POST['no_hp'];
            $status_peserta = $_POST['status_peserta'];

            $result = $pesertaController->updatePeserta($id_peserta,$nama,$tempat_lahir,$jenis_kelamin,$alamat,$agama,$umur,$asal_perwakilan,$no_hp,$status_peserta);

            if ($result) {
                $_SESSION['eksekusi']="Data berhasil di Update";
                header("location:index.php");
            } else {
                header("location:edit.php");
            }
        }
    } else {
        echo "Peserta tidak ditemukan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* CSS untuk membuat judul di tengah pada tabel */
        th {
            text-align: center;
        }
    </style>
    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-top: 20px;
    }

    h3 {
        color: #007bff;
    }

    label {
        font-weight: bold;
    }

    .form-control {
        margin-bottom: 10px;
    }

    select.form-select {
        margin-bottom: 10px;
    }

    button.btn-primary {
        background-color: #007bff;
        border: none;
    }

    button.btn-primary:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
    <div class="container mt-4">
        <h3>Edit Data Peserta</h3>

        <?php if ($pesertaData): ?>
    <form action="" method="post">
        <div class="row">
            <?php foreach ($pesertaData as $d => $value): ?>
                <div class="col-md-6 mb-3">
                    <label for="<?php echo $d; ?>" class="form-label"><?php echo ucfirst(str_replace('_', ' ', $d)); ?></label>
                    <!-- <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>" <?php echo ($d === 'id_peserta') ? 'readonly' : ''; ?> -->
                    <?php if ($d === 'jenis_kelamin'): ?>
                        <select name="<?php echo $d; ?>" class="form-select">
                            <option value="Laki -Laki" <?php echo ($value === 'Laki-Laki') ? 'selected' : ''; ?>>Laki-Laki</option>
                            <option value="Perempuan" <?php echo ($value === 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                    <?php elseif ($d === 'agama'): ?>
                        <select name="<?php echo $d; ?>" class="form-select">
                            <option value="Islam" <?php echo ($value === 'Islam') ? 'selected' : ''; ?>>Islam</option>
                            <option value="Kristen" <?php echo ($value === 'Kristen') ? 'selected' : ''; ?>>Katolik</option>
                            <option value="Hindu" <?php echo ($value === 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                            <option value="Budha" <?php echo ($value === 'Budha') ? 'selected' : ''; ?>>Budha</option>
                            <option value="Konghuchu" <?php echo ($value === 'Konghuchu') ? 'selected' : ''; ?>>Konghuchu</option>
                        </select>
                    <?php elseif ($d === 'asal_perwakilan'): ?>
                        <select name="<?php echo $d; ?>" class="form-select">
                            <option value="Instansi" <?php echo ($value === 'Instansi') ? 'selected' : ''; ?>>Instansi</option>
                            <option value="Umum" <?php echo ($value === 'Umum') ? 'selected' : ''; ?>>Umum</option>
                        </select>
                    <?php elseif ($d === 'status_peserta'): ?>
                        <select name="<?php echo $d; ?>" class="form-select">
                            <option value="Pendaftar" <?php echo ($value === 'Pendaftar') ? 'selected' : ''; ?>>Pendaftar</option>
                            <option value="Peserta" <?php echo ($value === 'Peserta') ? 'selected' : ''; ?>>Peserta</option>
                        </select>
                    <?php else: ?>
                        <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>">
                    <?php endif; ?>
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
