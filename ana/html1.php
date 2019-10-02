<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

    <h1 style="color:red">Selamat Belajar HTML</h1>
    <h2 style="color:blue">Ana Farida</h2>
    <h3> Politekinik Negeri Jember</h3>
    <?php 
    echo "Selamat Pagi Kita akan belajar PHP biar gak dibaperin";
    $Tempat = "di Polije";
        $Tempat = "di Polije 2 Kampus Bondowoso"
        $Tempat = "di Polije 3"

        echo "<h1 style='color:red'>Selamat Belajar HTML".$Tempat."</h1>";
        ECHO "<h2 style='color:blue'>Selamat Belajar HTML</h2>";
        EcHo "<h3 style=Selamat Belajar HTML ".$Tempat."</h3>";
        echo $Tempat."</br></br>";
        echo date("Y/m/d")."</br></br>";

        //Penjumlahan
        $a = 10; $b = $c = 20; $d = 2;
        $Jumlah = ($a + $b)/$d;

        echo $Jumlah."</br></br>"

        for ($x = 0; $x <= 10; $x++) {
        echo "Tempat Ke - ".$x."<br>";
        }

        $t = date("H");

        if ($t < "20") {
            echo "Selamat Pagi!"
        }

        //Konstanta
        define("Ana", "Selamat datang di Polije!");
        echo "</br></br>".Ana;

        //fungsi
        function ana(){
            echo "</br></br>".Ana."Dua";
        }

        ana();


    ?>
</body>
</html>