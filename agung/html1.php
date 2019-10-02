<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style type="text/css">
body { background-color:silver; }
</style>
</head>
<body>
    
    <center><h1 style="color:red">Selamat Belajar HTML</h1></center>
    <h2 style="color:blue"> Nama : Agung Joyo Prassetyo</h2>
    <h3><b>Politeknik Negeri Jember</h3></b>
    <?php
    echo "Php sricpt!";
    ?>

    <?php
    echo "Haloow kelas </br></br>";
    $tempat = "di Polije";
    $Tempat = "di Polije Dua";
    $Tempat = "di Polije Tiga";

    echo "<h1 style='color:red'> Selamat Belajar HTML ".$tempat."</h1>";
    Echo "<h2 style='color:blue'> Selamat Belajar HTML</h2>";
    Echo "<h3>Selamat Belajar HTML ".$Tempat."</h3>";
    echo $Tempat."</br></br>";
    echo date("Y/m/d")."</br></br>";

    //Penjumlahan
    $a = 10; $b = $c = 20; $d = 2;
    $jumlah = ($a + $b)/$d;

    echo $jumlah."</br></br>";

    for ($x = 0; $x <= 10; $x++) {
        echo "Tempat Ke - ".$x."<br>";
    }

    $t = date("H");

    if ($t < "20") {
        echo "Selamat Pagi!";
    }

    //Konstanta
    define("Agung", "Selamat datang di politeknik negeri jember!");
    echo "</br></br>".Agung;

    //Fungsi
    function agung(){
        echo "</br></br>".Agung." Dua";
    }

    Agung();

?>

</body>
</html>
