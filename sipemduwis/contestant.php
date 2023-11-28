<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contestant Page</title>
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

         /* Table styling */
         .ranking-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .ranking-table th, .ranking-table td {
            padding: 10px;
            text-align: center;
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


    <!-- Content Section -->
    <section class="container mt-5">
        <h2 class="text-center mb-4">Duta Wisata Cilacap Tahun 2023</h2>

        <!-- PHP Script to Fetch Contestant Data -->
        <?php
        // Gantilah bagian ini dengan skrip PHP yang sesuai untuk mengambil data finalis dari database atau sumber lainnya.
        // Berikut ini hanya contoh statis untuk ilustrasi.

        $contestants = [
            ['name' => 'Contestant 1', 'votes' => 150, 'photo' => 'https://localhost/sipemduwis/img/contestant1.jpg'],
            ['name' => 'Contestant 3', 'votes' => 120, 'photo' => 'contestant3.jpg'],
            ['name' => 'Contestant 5', 'votes' => 180, 'photo' => 'contestant5.jpg'],
            ['name' => 'Contestant 7', 'votes' => 180, 'photo' => 'contestant7.jpg'],
            ['name' => 'Contestant 9', 'votes' => 180, 'photo' => 'contestant9.jpg'],
            ['name' => 'Contestant 11', 'votes' => 180, 'photo' => 'contestant11.jpg'],
            ['name' => 'Contestant 13', 'votes' => 180, 'photo' => 'contestant13.jpg'],
            ['name' => 'Contestant 15', 'votes' => 180, 'photo' => 'contestant15.jpg'],
            ['name' => 'Contestant 17', 'votes' => 180, 'photo' => 'contestant17.jpg'],
            ['name' => 'Contestant 19', 'votes' => 180, 'photo' => 'contestant19.jpg'],
            ['name' => 'Contestant 2', 'votes' => 180, 'photo' => 'contestant2.jpg'],
            ['name' => 'Contestant 4', 'votes' => 180, 'photo' => 'contestant4.jpg'],
            ['name' => 'Contestant 6', 'votes' => 180, 'photo' => 'contestant6.jpg'],
            ['name' => 'Contestant 8', 'votes' => 180, 'photo' => 'contestant8.jpg'],
            ['name' => 'Contestant 10', 'votes' => 180, 'photo' => 'contestant10.jpg'],
            ['name' => 'Contestant 12', 'votes' => 180, 'photo' => 'contestant12.jpg'],
            ['name' => 'Contestant 14', 'votes' => 180, 'photo' => 'contestant14.jpg'],
            ['name' => 'Contestant 16', 'votes' => 180, 'photo' => 'contestant16.jpg'],
            ['name' => 'Contestant 18', 'votes' => 180, 'photo' => 'contestant18.jpg'],
            ['name' => 'Contestant 20', 'votes' => 180, 'photo' => 'contestant20.jpg'],
            // ... tambahkan data finalis sesuai kebutuhan
        ];
        ?>

 <!-- Content Section -->
 <section class="container mt-5">
        <h2 class="text-center mb-4">Perolehan Vote Peserta</h2>

        <!-- Display Contestant Ranking Table -->
        <table class="table table-bordered ranking-table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Votes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Assuming $contestants array is sorted by votes in descending order
                $rank = 1;
                foreach ($contestants as $contestant) :
                ?>
                    <tr>
                        <td><?php echo $rank; ?></td>
                        <td><?php echo $contestant['name']; ?></td>
                        <td><?php echo $contestant['votes']; ?></td>
                    </tr>
                <?php
                    $rank++;
                endforeach;
                ?>
            </tbody>
        </table>

        <!-- Display Contestant Data -->
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant1.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant2.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant3.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant4.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant5.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant6.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant7.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant8.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant9.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant10.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant11.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant12.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant13.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant14.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant15.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant16.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant17.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant18.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant19.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>BRYAN MADEWA PUTRA</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
        <div class="col-md-6">
            <section class="contestant-section text-center">
                <p>SMA NEGERI 1 JERUKLEGI</p>
                <img src="img/contestant20.jpg" alt="Contestant Photo" style="width: 50%; max-width: 200px; display: block; margin: 0 auto; margin-bottom: 10px;">
                <p>TRI MARTIANI RACHMAN</p>
                <button type="button" class="btn btn-primary">Vote</button>
            </section>
        </div>
    </div>
</div>

    </section>
    <!-- Bootstrap JS scripts (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eKpwnXyk77YZC73T+Tq4PJjDsh+8w7nO1Jlz+Hd0eL3HyLq+qjta7Hz7l5i2jBsa"
        crossorigin="anonymous"></script>
</body>

</html>
