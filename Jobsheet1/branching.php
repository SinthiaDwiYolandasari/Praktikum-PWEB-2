<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <!-- x=0
    jika x>0 maka bilangan positif
    jika x<0 maka bilangan negatif 
    jika x=0 maka bilangan nol  -->

    <?php
    $x=1;
    echo "Nilai x = $x </br></br>";
    if ($x > 0 ){
       echo "$x adalah Bilangan Positif";
    }else if ($x < 0){
       echo "$x adalah Bilangan Negatif";
    }else {
        echo "$x adalah Bilangan Nol";
    }
    ?> 

    <!-- tugas -->
    
</br></br>
    <form method="post">
        Masukkan nilai x : <input type="number" name ="x">
        <input type="submit" name="submit" value="hitung">
    </form>

    <?php
    if (isset($_POST['submit'])){ //memeriksa apakah tombol hitung sudah ditekan
        $x = $_POST['x']; // jika tombol hitung sudah ditekan maka akan diambil oleh ini
        echo "Nilai x = $x </br> <br>";
        if($x > 0){
            echo "$x adalah Bilangan Positif";
        }else if ($x < 0){
            echo "$x adalah Bilangan Negatif";
        }else {
            echo "$x adalah Bilangan Nol";
        }
    }
    ?>

</body>
</html>