

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <!-- Sertakan file CSS dan Bootstrap di sini -->
    <link rel="stylesheet" href="path/to/your/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
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
    </style>
</head>

<body>

 <!-- Navbar -->
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
                    <a class="nav-link" href="#dutawisata">Duta Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pariwisata">Pariwisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <!-- Tombol Login dan Sign Up -->
            <div class="d-flex">
                <button class="btn btn-outline-primary me-2" type="button">Login</button>
                <button class="btn btn-primary" type="button">Sign Up</button>
            </div>
        </div>
    </div>
</nav>




   <!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row">
           <!-- Bagian kiri dengan pesan selamat datang -->
<div class="col-md-6">
    <h1>Sistem Informasi Pemilihan Duta Wisata</h1>
    <p>Daftarkan diri anda dan jadilah generasi muda penerus bangsa yang berkualitas dan berkakter</p>
    <div class="mt-4">
        <a href="#" class="btn btn-primary">Get Started</a>
        <a href="#" class="btn btn-outline-primary" style="color: blue; background-color : white;">Sign Up with Google</a>
    </div>
</div>


            <!-- Bagian kanan dengan form login -->
            <div class="col-md-6">
                <div class="card login-card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Login</h2>
                        <form action="proses_login.php" method="post">
                            <!-- Your login form fields here -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" >Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Vision and Mission Section -->
    <section id="vision-mission" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Visi Misi Duta Wisata Cilacap</h2>
            <!-- Your vision and mission content here -->
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contact Us</h2>
            <!-- Your contact form or contact information here -->
        </div>
    </section>

    <!-- Bootstrap JS scripts (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eKpwnXyk77YZC73T+Tq4PJjDsh+8w7nO1Jlz+Hd0eL3HyLq+qjta7Hz7l5i2jBsa"
        crossorigin="anonymous"></script>
</body>

</html>
