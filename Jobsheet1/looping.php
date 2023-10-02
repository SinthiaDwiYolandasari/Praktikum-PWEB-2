<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    for ($x = 2; $x <= 10; $x += 2)
        echo "$x </br>";
    
    echo "</br> Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
    $y = 1;
    while ($y <= 10){
        echo "$y </br>";
        $y += 2;
    }
    
    // Tugas
    echo "</br> Perulangan DO WHILE bilangan prima kurang dari 20 </br>";

    $nilai = 2; //dimulai dr angka 2

    do {
        $isPrime = true; //menentukan apakah $nilai prima atau bukan
        
        if ($nilai <= 1) { 
            $isPrime = false;
        } 
        else {
            for ($i = 2; $i < $nilai; $i++) {
                if ($nilai % $i == 0) {
                    $isPrime = false;
                }
            }
        }
        
        if ($isPrime) {
            echo "$nilai </br>";
        }
        
        $nilai++;
    } while ($nilai < 20);
    ?>

    <!-- Buatlah perulangan menggunakan do while 
    menampilkan bilangan prima kurang dari 20 -->
</body>
</html>