<?php
$username = $_GET['username'];
$password = $_GET['password'];

echo "username anda :". $username;
echo "<br>";
echo "password :". $password;	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="ie=edge">	
	<title>Login</title>
</head>
<body>
<br><br><br>
<table border="1" cellpadding="	10" cellspacing="0">	
<form action="post.php" method="POST">	
	<tr>
		<td>
		<label for="hakakses">hak akses</label>	
		</td>
		<td>	
		<input type="radio" name="hakakses" id="admin" autofocus required value="admin"><label for="admin">admin</label>
		<input type="radio" name="hakakses" id="petugas" autofocus required value="petugas"><label for="petugas">petugas</label>	
		</td>
	</tr>
	<tr>
		<td>
		<label for="keterangan">keterangan</label>	
		</td>
		<td>	
		<textarea name="keterangan" id="keterangan" cols="30" rows="5" autofocus required>	</textarea>	
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