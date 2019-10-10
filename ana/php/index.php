<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
	<h1>Array</h1>
<?php
//deklarasi array
$Makankesukaan = ['bakso', 'mie ayam', 'soto']; ?>
<?= $Makankesukaan[0]; ?>
<br>
<?php var_dump($Makankesukaan); 
?>

<h1>Array Associative</h1>
<?php 
//Array Associative
$matakuliah = ['materi'=>'statistika'];
echo $matakuliah['materi'];

?>

<h1>menanmpilkan array dengan for</h1>
<?php
//menanmpilkan array dengan for 
for($x=0;$x<count($Makankesukaan);$x++){
	echo $Makankesukaan[$x].'<br>';
}
?>
 <h1>Menampilkan array dengan foreach</h1>
<?php

foreach ($Makankesukaan as $bakso) {
	echo $bakso.'<br>';
}

?>

<h1>Perulangan While</h1>

<?php
	$y = 1;
	while ($y <= 10) {
		echo 'Hello world : '.$y.'<br>';
		$y++;
	}
?>
<h1>Aritmatika PHP</h1>

<?php

function perkalian($angka, $angka1){
	return $angka * $angka1;
}

echo 'hasil perkalian :'. perkalian(18,18).'<br>';

function pembagian($angka, $angka1){
	return $angka / $angka1;
}

echo 'hasil pembagian :'. pembagian(50,5);
?>


</body>
</html>

