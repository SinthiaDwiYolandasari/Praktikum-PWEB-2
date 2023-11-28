<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran Duta Wisata</title>
    <link rel="stylesheet" href="path/to/your/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-2" style ="text-align : center">Formulir Pendaftaran Mas dan Mbak Duta Wisata Cilacap</h2>
        <h2 class="mb-0" style ="text-align : center"> Tahun 2023</h2>
        <div style="text-align: center;">
            <img src="img/icon.png" alt="icon" style="width: 45%; max-width: 75px; display: block; margin: 0 auto; margin-bottom: 10px;">
        </div>
        <form action="proses_pendaftaran.php" method="post">
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <!-- Nama Lengkap -->
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap (Sesuai KTP):</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <!-- Nama Panggilan -->
                    <div class="mb-3">
                        <label for="nama_panggilan" class="form-label">Nama Panggilan:</label>
                        <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" required>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki"
                                value="Laki-laki" required>
                            <label class="form-check-label" for="laki_laki">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                value="Perempuan" required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>

                    <!-- Tempat Lahir -->
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>

                    <!-- Agama -->
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama:</label>
                        <input type="text" class="form-control" id="agama" name="agama" required>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <!-- Sisanya Kolom Kanan -->
                    <!-- Alamat Lengkap -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Lengkap (Sesuai KTP):</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>

                    <!-- Nomor WhatsApp -->
                    <div class="mb-3">
                        <label for="no_whatsapp" class="form-label">Nomor WhatsApp:</label>
                        <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp" required>
                    </div>

                    <!-- Media Sosial -->
                    <div class="mb-3">
                        <label for="media_sosial" class="form-label">Media Sosial:</label>
                        <input type="text" class="form-control" id="media_sosial" name="media_sosial" required>
                    </div>

                    <!-- Tinggi Badan -->
                    <div class="mb-3">
                        <label for="tinggi_badan" class="form-label">Tinggi Badan (cm):</label>
                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan" required>
                    </div>

                    <!-- Berat Badan -->
                    <div class="mb-3">
                        <label for="berat_badan" class="form-label">Berat Badan (kg):</label>
                        <input type="number" class="form-control" id="berat_badan" name="berat_badan" required>
                    </div>

                    <!-- Ceritakan Tentang Diri Anda -->
                    <div class="mb-3">
                        <label for="cerita" class="form-label">Ceritakan Tentang Diri Anda:</label>
                        <textarea class="form-control" id="cerita" name="cerita" rows="5" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Tombol Selanjutnya -->
            <button type="submit" class="btn btn-primary">Selanjutnya</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eKpwnXyk77YZC73T+Tq4PJjDsh+8w7nO1Jlz+Hd0eL3HyLq+qjta7Hz7l5i2jBsa"
        crossorigin="anonymous"></script>
</body>

</html>
