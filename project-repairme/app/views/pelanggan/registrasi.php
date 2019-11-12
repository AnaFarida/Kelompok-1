
<div class="container">
	<form action="<?=BASEURL;?>/pelanggan/insertPelanggan" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label for="nama" >Nama lengkap</label></td>
				<td><input type="text" name="nama" id="nama" required></td>
			</tr>
			
			<tr>
				<td><label for="email" >email</label></td>
				<td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
				<td><label for="no_telpon" >no telpon</label></td>
				<td><input type="text" name="no_telpon" id="no_telpon"></td>
			</tr>
			<tr>
				<td><label for="alamat" >Alamat</label></td>
				<td><input type="text" name="alamat" id="alamat"></td>
			</tr>
			<tr>
				<td><label for="username" >username</label></td>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td><label for="password" >password</label></td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td><label for="password2" >konfirmasi password</label></td>
				<td><input type="password" name="password2" id="password2"></td>
			</tr>
			<tr>
				<td><button type="submit" id="submit">registrasi</button></td></tr>
			</table>
		</form>
	</div>