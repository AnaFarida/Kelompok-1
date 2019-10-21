<?php 

	function panggilGet(){
		if(isset($_GET['submit'])){
		echo '<table border="1" cellpadding="10" cellspacing="0">'.
				'<tr><td>Nama : </td><td>'
					.$_GET['nama'].
				'</td></tr>'.
				'<tr><td>Alamat : </td><td>'.
					$_GET['alamat'].
				'</td></tr>'.
			'</table>'.'<br>';

	
		echo "<a href='getPost.php'>Refresh</a>";
	}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penanganan FORM</title>
</head>
<body>
	untuk kembali, klik <a href="index.php"> disni</a>

	<h1>Penanganan Form GET</h1>			
	
	<div class="form">
		<table border="1" cellpadding="10" cellspacing="0">
	<form action="" method="GET">
		
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
	
	 <?php panggilGet(); ?> 
	
	</div>

<!-- 
	-->
	


</body>
</html>