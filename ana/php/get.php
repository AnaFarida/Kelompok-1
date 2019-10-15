<?php
$nama = $_GET['nama'];
$Nim = $_GET['Nim'];
echo " Nama :". $nama;
echo "<br>";
echo " Nim:". $Nim;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<br><br><br>
<table border ="1" cellpedding = "10" cellspacing= "0"> 
    <form action="post.php" method="POST">
<form action="post.php" method="POST">	
    <form action="post.php" method="POST">
            <tr>
                <td>
                    <label for="hakakses">Hak Akses </label>
                </td>
                <td>
		<td>	
                <td>
                    <input type="radio" name ="hakakses" id= "admin"  autofocus required > <label for="admin">admin</label>
                    <input type="radio" name ="hakakses" id= "Mahasiswa"  autofocus required ><label for="Mahasiswa">Mahasiswa</label>
                </td>
            </tr>
           <tr>
                <td>
                    <label for="keterangan">Keterangan </label>
                </td>
                <td>
		<td>	
                <td>
                  <textarea name="keterangan" id="keterangan" cols="30" rows="5" autofocus required ></textarea>
                </td>
            </tr>
            <tr>
                <td colspan ="2"><center>
                    <button type ="submit" name ="submit">Masuk</button>
                </center>
		</center>	
                </center>

                </td>
		</td>	
                </td>
            </tr>
    </form>
    </table>
	
</body>
</html>