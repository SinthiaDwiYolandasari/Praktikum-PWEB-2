<?php
include_once '../../config.php';
include_once '../../models/Penilaian.php';
include_once '../../controllers/PenilaianController.php';
include_once '../../controllers/PesertaController.php';



session_start();
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_penilaian'])) {
    $id_penilaian = $_GET['id_penilaian'];

    $penilaianController = new PenilaianController($db);
    $penilaianData = $penilaianController->getPenilaianById($id_penilaian);

    if ($penilaianData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $status_peserta = $_POST['status_peserta'];
            $pengetahuan1 = $_POST['pengetahuan1'];
            $keterampilan1 = $_POST['keterampilan1'];
            $sikap1 = $_POST['sikap1'];
            $pengetahuan2 = $_POST['pengetahuan2'];
            $keterampilan2 = $_POST['keterampilan2'];
            $sikap2 = $_POST['sikap2'];
            $total_nilai = (($pengetahuan1+$keterampilan1+$sikap1) + ($pengetahuan2+$keterampilan2+$sikap2));

            $result = $penilaianController->updatePenilaian($id_penilaian,$pengetahuan1,$keterampilan1,$sikap1,$pengetahuan2,$keterampilan2,$sikap2,$total_nilai);

            if ($result) {
                $_SESSION['eksekusi']="Data berhasil di Update";
                header("location:index.php");
            } else {
                header("location:edit.php");
            }
        }
    } else {
        echo "Data tidak ditemukan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Penilaian Peserta</title>
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
        <h3>Edit Data Penilaian Peserta</h3>
        <?php if ($penilaianData): ?>
            <form action="" method="post">
                <div class="row">
                    <?php foreach ($penilaianData as $d => $value): ?>
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
