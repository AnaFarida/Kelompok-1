<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="ie=edge">	
	<title>Login</title>
</head>
<body>
	<h1>Penanganan Form</h1>
	<table border="1" cellpadding="	10" cellspacing="0">	
	<form method="GET" action="get.php">
		<tr>	
			<td>
				<label for="nama">nama</label>	
			</td>
			<td>
				<input type="text" name="nama" id="nama" placeholder="nama" autofocus required>
			</td>
		</tr>
		<tr>	
			<td>
				<label for="Nim">Nim</label>	
			</td>
			<td>
				<input type="text" name="Nim" id="Nim" placeholder="Nim" autofocus required>
			</td>
		</tr>
		<tr>
			<td colspan="2"><center>
					<button type="submit" name="submit">Kirim</button>	
			</center>

			</td>	
		</tr>
	</form>
	</table>
		
</body>
</html>