<?php 
require('function.php');
$mahasiswa = query('SELECT * FROM mahasiswa');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD PHP</title>
</head>
<body>
	<h2>Menampilkan Data Mahasiswa</h2>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Gambar</th>
		</tr>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $mhs['id']; ?></td>
			<td><?= $mhs['nama']; ?></td>
			<td><?= $mhs['nim']; ?></td>
			<td><?= $mhs['email']; ?></td>
			<td><?= $mhs['jurusan']; ?></td>
			<td><img src="img/<?= $mhs['gambar']; ?>" alt="<?= $mhs['gambar']; ?>" width="100"></td>
		</tr>	
	

	<?php endforeach; ?>
	</table>
</body>
</html>