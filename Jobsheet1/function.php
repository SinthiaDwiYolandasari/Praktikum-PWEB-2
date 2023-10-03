<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>

    <!-- TUGAS -->
</br></br>
    <form method="post">
        Masukkan Alas Segitiga : <input type = "number" name ="a"> </br> </br>
        Masukkan Tinggi Segitiga : <input type = "number" name ="t"> </br> </br>

        <input type="submit" name="submit" value="Hitung Luas">
    </form>

    <?php
        function luas_segitiga($a, $t){  //reusabilty
            return 0.5*$a*$t;
        }
        // function luas_persegi_panjang($p,$l){
        //     return $p*$l;
        // }

        if (isset($_POST['submit'])){ //jika formulir sudah di submit
            $a = $_POST['a'];
            $t = $_POST['t'];
            // $r = $_POST['r']; //maka kita mengambil nilai r dri sini

            // $luasp = luas_persegi_panjang ($p,$l); 
            $luasl = luas_segitiga($a, $t);

            // echo "Luas Persegi Panjang dengan panjang $p dan lebar $l adalah = $luasp cm </br>";
            echo "Luas segitiga dengan alas $a dan tinggi $t adalah = $luasl cm </br>";
        }
    ?>


    <!-- Mempraktikkan -->
    <!-- <?php
    // if (isset($_POST['submit'])) {
    //     $panjang = $_POST['panjang'];
    //     $lebar = $_POST['lebar'];
    //     $jari = $_POST['jari'];

    //     // Mengonversi nilai yang diinput menjadi tipe numerik (float)
    //     $panjang = floatval($panjang);
    //     $lebar = floatval($lebar);
    //     $jari = floatval($jari);

    //     // Memanggil fungsi dan menghitung luas
    //     $luasPersegiPanjang = $panjang * $lebar;
    //     $luasLingkaran = 3.14 * $jari * $jari;

    //     // Menampilkan hasil
    //     echo "Luas Persegi Panjang = " . $luasPersegiPanjang . "</br>";
    //     echo "Luas Lingkaran = " . $luasLingkaran . "</br>";
    // }
    ?> -->
</body>
</html>

</body>
</html>