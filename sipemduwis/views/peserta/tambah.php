<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
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

        /* Custom Style */
        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .col-mb-6 {
            flex: 0 0 48%;
            margin-bottom: 10px;
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
        <h3>Form Tambah Data Peserta</h3>
        <form action="proses_tambah.php" method="post">
            <div class="row">
                <div class="col-mb-6 mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="col-mb-6 mb-3">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                </div>
                <div class="col-mb-6 mb-3">
                    <label for="umur" class="form-label">Usia</label>
                    <input type="text" class="form-control" id="umur" name="umur" required>
                </div>
                <div class="col-mb-6 mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-mb-6 mb-3">
                    <label for="agama" class="form-label">Agama</label>
                    <select name="agama" id="agama" class="form-select">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghuchu">Konghuchu</option>
                    </select>
                </div>
                <div class="col-mb-6 mb-1">
                    <label for="no_hp" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="col-mb-6 mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="4" required></textarea>
                </div>
                <div class="col-mb-6 mb-3">
                    <label for="asal_perwakilan" class="form-label">Asal Perwakilan</label>
                    <select name="asal_perwakilan" id="asal_perwakilan" class="form-select">
                        <option value="Instansi">Instansi</option>
                        <option value="Umum">Umum</option>
                    </select>
                </div>
        
                <div class="col-mb-6 mb-3">
                    <label for="status_peserta" class="form-label">Status</label>
                    <select name="status_peserta" id="status_peserta" class="form-select">
                        <option value="Pendaftar">Pendaftar</option>
                        <option value="Peserta">Peserta</option>
                    </select>
                </div>
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
