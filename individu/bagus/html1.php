<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halo HTML</title>
    <style>
    body{
        background-color: lightblue;
    }
    </style>
</head>
<body>
    <h1 style="color: red"> Selamat belajar HTML</h1>
    <h2 style="color: blue"> Nama Saya : Bagus Duwi Prasetiyo</h2>
    <h3>Politeknik Negeri Jember</h3>

<?php 
        
        echo "Halo, ini adalah php"; 

            $tempat = " di polije";
            $Tempat = "di Polije Dua";
            $TempaT = "di Polije Tiga";
           
           echo "<h1 style='color:red'> Selamat Belajar HTML".$tempat."</h1>";
           ECHO "<h2 style ='color:blue'> Selamat belajar HTML</h2>";
           ecHo"<h3> Selamat Belajar HTML".
           
            $Tempat."</h3>";
            echo $TempaT."</br></br>";
            echo date("Y/m/d")."</br></br>";
   
    //penjumlahan
    $a = 10; $b=$c=20; $d=2;
    $jumlah = ($a+$b)/$d;

    echo $jumlah ."</br></br>";
    for ($x=0; $x<= 10; $x++){
        echo "Tempat ke - ".$x."<br>";

    }
    
        $t = date("H");
        if ($t<"20"){
        echo "selamat pagi!";
    }

// konstanta
define("bagus","Selamat datang di polije !!");
echo "</br></br>".bagus;

// fungsi 
function bagus(){
    echo "</br></br>".bagus."Dua";
}
bagus();
 ?>
</body>
</html>