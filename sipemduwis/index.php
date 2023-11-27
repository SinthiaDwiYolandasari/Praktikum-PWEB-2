<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPEMDUWIS</title>
    <style>
        .logo-container {
            display: flex;
            align-items: center;
            padding: 10px;
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
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Sidebar -->
    <nav class="sidebar">
        <div class="logo-container">
            <img src="logo.png" alt="Logo" class="logo">
            <h3>SIPEMDUWIS</h3>
        </div>
        <a href="http://localhost/sipemduwis/home">Home</a>
        <a href="http://localhost/sipemduwis/views/peserta">Peserta</a>
        <a href="http://localhost/sipemduwis/views/penilaian">Penilaian</a>
        <!-- Add more links as needed -->
    </nav>

    <!-- Page content -->
    <div class="content">
        <!-- Your existing content goes here -->
        <!-- For example: -->
        <h1>Sistem Informasi Pemilihan Duta Wisata Cilacap</h1>
    </div>

    <!-- Bootstrap JS scripts (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eKpwnXyk77YZC73T+Tq4PJjDsh+8w7nO1Jlz+Hd0eL3HyLq+qjta7Hz7l5i2jBsa" crossorigin="anonymous"></script>
</body>

</html>
