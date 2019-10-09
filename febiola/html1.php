<!DOCTYPE html>
<html lang="en" >
<head>
    
    <title>page title </title>
</head>
<body>
    <h1 style ="color:red">Selamat Belajar HTML</h1>
    <h2 style ="color:blue">NAMA SAYA : FEBIOLA PUTRI YUNITA </h2>
    <h3> POLITEKNIK NEGERI JEMBER </h3>
    <?php 
    echo "hellow Kelas </br></br>";
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
define("febi","Selamat datang di polije !!");
echo "</br></br>".febi;
// fungsi 
function febi(){
    echo "</br></br>".febi."Dua";
febi();
}
   ?>
</body>
</html>  