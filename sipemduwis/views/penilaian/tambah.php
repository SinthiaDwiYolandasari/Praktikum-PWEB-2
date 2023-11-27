<?php
// memanggil class model database
// pada views yang pertama kali yang dibutuhkan adalah koneksi
include_once '../../config.php';
// controllers 
include_once '../../controllers/PenilaianController.php';
include_once '../../controllers/PesertaController.php';
// require '../../index.php';


// instansiasi class database
session_start();
$database = new database;
// getKoneksi untuk mengkoneksikan file index ke dalam getKoneksi
$db = $database->getKoneksi();

// memanggil controller
$penilaianController = new PenilaianController($db);
$penilaian = $penilaianController->getAllPenilaian();

$pesertaController = new PesertaController($db);
$peserta = $pesertaController->getAllPeserta();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Penilaian Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        h3 {
            color: #007bff;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #007bff;
        }

        .form-control {
            margin-bottom: 15px;
        }

        select.form-select {
            margin-bottom: 15px;
        }

        button.btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
        }

        /* Custom Style */
        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .col-mb-6 {
            flex: 0 0 48%;
            margin-bottom: 15px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        @media (max-width: 768px) {
            .col-mb-6 {
                flex: 0 0 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h3>Form Data Penilaian Peserta</h3>
        <form action="proses_tambah.php" method="post">
            <div class="row">
                <div class="col-mb-6 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <select name="nama" id="id_peserta" class="form-select required">
                        <option selected disabled>Pilih Opsi</option>
                        <?php foreach ($peserta as $x) { ?>
                            <?php if($x['status_peserta']==="Peserta"){ ?>
                                <option value="<?php echo $x['id_peserta'] ?>"><?php echo $x['nama'] ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>

                </div>
                <table style = "text-align :center">
                    <tr>
                        <th rowspan="1"></th>
                        <th>Pengetahuan</th>
                        <th>Keterampilan</th>
                        <th>Sikap</th>
                    </tr>
                    <tr>
                        <td>Showcase</td>
                        <td><input type="text" name="pengetahuan1"></td>
                        <td><input type="text" name="keterampilan1"></td>
                        <td><input type="text" name="sikap1"></td>
                    </tr>
                    <tr>
                        <td>Grand Final</td>
                        <td><input type="text" name="pengetahuan2"></td>
                        <td><input type="text" name="keterampilan2"></td>
                        <td><input type="text" name="sikap2"></td>
                    </tr>
                </table>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">
                <i class="fa fa-save"></i> Simpan
            </button>
        </form>
    </div>

    <!-- Menggunakan Bootstrap JS (jika diperlukan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
