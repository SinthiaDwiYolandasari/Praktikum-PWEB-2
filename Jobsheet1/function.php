<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php
    function persegi_panjang($p, $l){
        return $p*$l;
    }
    function lingkaran ($r){
        return 3.14*$r*$r;
    }
    echo "Luas Persegi Panjang = " .persegi_panjang(5, 2) ."</br>";
    echo "Luas Lingkaran = " .lingkaran(7)."</br>";
    ?>

    <!-- TUGAS -->
</br></br>
    <form method="post">
        Masukkan Jari jari lingkaran : <input type="number" name ="r">
        <input type="submit" name="submit" value="Hitung Luas">
    </form>

    <?php
        function luas_lingkaran($r){
            return 3.14*$r*$r;
        }
        if (isset($_POST['submit'])){ //jika formulir sudah di submit
            $r = $_POST['r']; //maka kita mengambil nilai r dri sini
            $luas = luas_lingkaran($r);
            echo "Luas Lingkaran dengan jari jari $r adalah = $luas cm";
        }
    ?>
</body>
</html>