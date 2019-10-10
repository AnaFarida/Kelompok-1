<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan</title>
	<style>
		body{
			background-image: url(../img/trees.png);
		}
	</style>
</head>
<body>

<h1>Array</h1>

<?php 
//deklarasi Array
$namaHewan = ['ikan', 'ayam', 'burung', 'badak']; ?>

<?= $namaHewan[0]; ?> 
<br>
<?php var_dump($namaHewan); ?>

<br>

<?php 
//membuat array associative

$mahasiswa = ['nama'=>'bagus'];
echo $mahasiswa['nama'];
?> 

<h1>menampilkan array menggunakan for</h1>

<?php 
//menampilkan array menggunakan for

for ($i=0; $i < count($namaHewan); $i++) { 
	echo $namaHewan[$i].'<br>';
}
 ?>	

<h1>Menampilkan array dengan foreach</h1>

<?php 

foreach ($namaHewan as $nh) {
	echo $nh.'<br>'; 
}

?>

<h1>Perulangan While</h1>

<?php 
	$x = 1;
	while ($x <= 10) {
		echo 'Hello World : '.$x.'<br>';
		$x++;
	}

 ?>

 <h1>Aritmatika PHP</h1>

<?php 

function perkalian($angka, $angka1){
	return $angka * $angka1;
}

echo 'hasil perkalian : ' . perkalian(10,10).'<br>';

function pembagian($angka, $angka1){
	return $angka / $angka1;
}

echo 'hasil pembagian : ' . pembagian(100,5);
?>

<h1>Penanganan Form</h1>
untuk penanganan form, untuk Get Klik <a href="getPost.php"> disini</a><br>
untuk Post klik <a href="getPost2.php">disini</a>

<br><br>

<h1>Penggunaan Include dan Require pada PHP</h1>

<!-- include (jika program salah, maka di abaikan) -->
<!-- jika menggunakan _once maka akan dieksekusi sekali saja -->

<?php include('include.php'); ?>
<?php include_once('include.php'); ?>

<!-- require(jika program salah, maka akan error) -->
<br>
<?php require('require.php'); ?>




<br><br><br>
</body>
</html>