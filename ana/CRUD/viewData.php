<?php 
require('function.php');
$table_login = query('SELECT * FROM table_login');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD diPHP</title>
</head>
<body>
	<h2>Menampilkan Data untuk Login</h2>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>ID</th>
			<th>username</th>
			<th>password</th>
			
		</tr>
	<?php foreach ($table_login as $log) : ?>
		<tr>
			<td><?= $log['id_user']; ?></td>
			<td><?= $log['username']; ?></td>
			<td><?= $log['password']; ?></td>
		
			<td><img src="img/Ana.jpg"<?= $log['gambar']; ?>" alt="<?= $log['gambar']; ?>" width="50"></td>
		</tr>	
	

	<?php endforeach; ?>
	</table>
</body>
</html>