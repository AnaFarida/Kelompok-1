<?php 

	function panggilPost(){
		if (isset($_POST['submit'])) {
		echo '<br><br>'.'nama : '.$_POST['nama'];
		echo '<br><br>'.'alamat : '.$_POST['alamat'];
		echo '<br><br><a href="getPost2.php">Refresh</a>';
	}

	}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>	

	Untuk kembali, klik  <a href="index.php">disini</a>
	<br><br>
	
	<h1>Penanganan Form POST</h1>
	
	<table border="1" cellpadding="10" cellspacing="0">
	<form action="getPost2.php" method="POST">
		
		<tr>
			<td>
				<label for="nama">Nama : </label>
			</td>
			<td>
				<input type="text" name="nama" id="nama" placeholder="masukkan nama" autofocus required>
			</td>
		</tr>
		<tr>
			<td>
				<label for="alamat">Alamat : </label>
			</td>
			<td>
				<input type="text" name="alamat" id="alamat" placeholder="masukkan alamat" autofocus required>
			</td>
		</tr>
		<tr>
			<td colspan="2"><center><button type="submit" name="submit">Kirim!</button></center></td>
		</tr>
	</form>
	</table> 

	<?php panggilPost(); ?>
</body>
</html>