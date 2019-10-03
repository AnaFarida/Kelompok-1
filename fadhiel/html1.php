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
    <h2 style="color:blue"> Nama : AHMAD FADHIEL</h2>
    <h3><b>Politeknik Negeri Jember</h3></b>
    <?php
    echo "Php sricpt!";
    ?>

    <?php
    echo "Hello Class </br></br>";
    $tempat = "di Polije";
    $Tempat = "di Polije Kampus Dua";

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
        echo "Good morning!";
    }

    //Konstanta
    define("Fadhiel", "Welcome To Politeknik Negeri Jember!");
    echo "</br></br>".fadhiel;

    //Fungsi
    function fadhiel(){
        echo "</br></br>".fadhiel." Dua";
    }

    fadhiel();

?>

</body>
</html>
