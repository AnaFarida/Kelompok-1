<?php
// fungsi untuk memulai session
session_start();
 
// variabel kosong untuk menyimpan pesan error
$form_error = '';
 
// cek apakah tombol sumit sudah di klik atau belum
if(isset($_POST['submit'])){
 
    // menyimpan data yang dikirim dari metode POST ke masing-masing variabel
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    // validasi login benar atau salah
    if($email == 'username@gmail.com' AND $password == 'admin'){
 
        // jika login benar maka email akan disimpan ke session kemudian akan di redirect ke halaman profil
        $_SESSION['email'] = $email;
        header('Location: profil.php');
    }else{
 
        // jika login salah maka variabel form_error diisi value seperti dibawah
        // nilai variabel ini akan ditampilkan di halaman login jika salah
        $form_error = '<p>Password atau email yang kamu masukkan salah</p>';
    }
}
 
?>

<!DOCTYPE html>
<head>
    <title>Login Sederhana Tanpa Database</title>
</head>
<body>
 
    <h3>Login</h3>

    <form method="POST" action="index.php">
    	<tr>
    		<td>Email : </td>
    			<td><input type="email" name="email" placeholder="Email" autofocus required /></td><br>
        	<td>Password : </td>
        <td><input type="password" name="password" placeholder="Password" required /><br>
        <?php echo $form_error; ?>
        <input type="submit" name="submit" value="Login">
    </form> 

</body>
</html>

<!--<html>
<head>
	<title>Login</title>
</head>
<body>
 
	<form action="login.php" method="post">
	<center><h2>Login </h2></center>
	<table align="center">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" placeholder="Username" required /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" placeholder="Password" required /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="login" value="Login" /></td>
		</tr>
	</table>
	</form>
 
</body>
</html>