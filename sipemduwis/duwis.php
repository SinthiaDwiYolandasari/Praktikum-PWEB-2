<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemilihan Duta Wisata</title>
    <!-- Sertakan file CSS dan Bootstrap di sini -->
    <link rel="stylesheet" href="path/to/your/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* Gaya untuk konten */
        .content-section {
            padding: 50px 0;
            background-color: #f8f9fa; /* Warna latar belakang yang sesuai */
        }

        .content-section h2 {
            margin-bottom: 30px;
        }

        .content-section p {
            text-align: justify;
        }

        /* Gaya untuk membuat konten di tengah secara horizontal */
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .logo-container {
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .logo {
            max-height: 40px;
            margin-right: 10px;
        }

        /* Sidebar styling */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f8f9fa; /* Bootstrap's light gray background color */
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: #495057; /* Bootstrap's dark gray text color */
            display: block;
        }

        .sidebar a:hover {
            background-color: #e9ecef; /* Bootstrap's light gray hover color */
        }

        /* Content styling to offset for the fixed sidebar */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Form login styling */
        .login-form {
            max-width: 400px;
            margin: auto;
        }

         /* Table styling */
         .ranking-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .ranking-table th, .ranking-table td {
            padding: 10px;
            text-align: center;
        }
        .max-width-100 {
        max-width: 45%; /* Ukuran maksimum gambar adalah 100% dari lebar kontainer */
    }
</style>

</head>

<body>
        <!-- Navbar -->
    <!-- navbar.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <div class="logo-container">
    <a href="http://localhost/sipemduwis/views/peserta">
        <img src="logo.png" alt="Logo" class="logo">
    </a>
    <h3>SIPEMDUWIS</h3>
</div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/sipemduwis/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/sipemduwis/contestant.php">Contestant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/sipemduwis/duwis.php">Duta Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pariwisata">Pariwisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-outline-primary me-2" type="button">Login</button>
                <button class="btn btn-primary" type="button">Sign Up</button>
            </div>
        </div>
    </div>
</nav>
    <!-- Pesyaratan Umum -->
    <section class="content-section">
        <div class="container center-content">
            <h2 class="text-center mb-2">Pemilihan Mas dan Mbak Duta Wisata Cilacap Tahun 2023</h2>
            <div style="text-align: center;">
            <img src="img/icon.png" alt="icon" style="width: 80%; max-width: 75px; display: block; margin: 0 auto; margin-bottom: 0px">
        </div>
        </div>
    </section>

   <!-- Persyaratan Umum -->
   <section class="content-section">
    <div class="container center-content">
        <h2 class="text-center mb-2">Persyaratan Umum</h2>
        <div style="text-align: center;">
            <img src="img/icon.png" alt="icon" style="width: 80%; max-width: 75px; display: block; margin: 0 auto; margin-bottom: 10px;">
        </div>
        <div style="text-align: center;">
            <img src="img/persyaratan_umum.jpg" alt="Gambar Persyaratan Umum" style="width: 45%; max-width: 100%; display: block; margin: 0 auto; margin-bottom: 10px;">
        </div>
    </div>
</section>
   <!-- Persyaratan Umum -->
   <section class="content-section">
    <div class="container center-content">
        <h2 class="text-center mb-2">Persyaratan Administrasi</h2>
        <div style="text-align: center;">
            <img src="img/icon.png" alt="icon" style="width: 80%; max-width: 75px; display: block; margin: 0 auto; margin-bottom: 10px;">
        </div>
        <div style="text-align: center;">
            <img src="img/persyaratan_administrasi.jpg" alt="Gambar Persyaratan Administrasi" style="width: 45%; max-width: 100%; display: block; margin: 0 auto; margin-bottom: 10px;">
        </div>
    </div>
</section>
   <!-- Persyaratan Umum -->
   <section class="content-section">
    <div class="container center-content">
        <h2 class="text-center mb-2">Timeline Pemilihan Mas dan Mbak Duta Wisata Cilacap Tahun 2023</h2>
        <div style="text-align: center;">
            <img src="img/icon.png" alt="icon" style="width: 80%; max-width: 75px; display: block; margin: 0 auto; margin-bottom: 10px;">
        </div>
        <div style="text-align: center;">
            <img src="img/timeline.jpg" alt="Gambar Timeline" style="width: 100%; max-width: 100%; display: block; margin: 0 auto; margin-bottom: 10px;">
        </div>
    </div>
</section>



<!-- Pendaftaran Duta Wisata -->
<section class="content-section">
    <div class="container center-content">
        <h2 class="text-center mb-2" >Pendaftaran Duta Wisata</h2>
        <div style="text-align: center;">
            <img src="img/icon.png" alt="icon" style="width: 80%; max-width: 75px; display: block; margin: 0 auto; margin-bottom: 10px;">
        </div>
        <a href="http://localhost/sipemduwis/daftar.php" class="btn btn-primary">Daftar Duta Wisata</a>
        <p style="text-align: center">
            Segera daftar dan ikuti ajang Pemilihan Mas dan Mbak Duta Wisata Cilacap Tahun 2023.
            Jadilah pemuda yang berkontribusi untuk menjadikan kemajuan kota Cilacap tercinta terutama dalam hal Pariwisata!
        </p>
    </div>
</section>



    <!-- Bootstrap JS scripts (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eKpwnXyk77YZC73T+Tq4PJjDsh+8w7nO1Jlz+Hd0eL3HyLq+qjta7Hz7l5i2jBsa"
        crossorigin="anonymous"></script>
</body>

</html>
