<div class="container">
	<form action="<?=BASEURL;?>/mitra/insertMitra" method="post">
		<table>
			<tr>
				<td><label for="idmitra" >Id</label></td>
				<td><input type="text" name="idmitra" id="idmitra"></td>
			</tr>
			<tr>
				<td><label for="nama" >Nama mitra</label></td>
				<td><input type="text" name="nama" id="nama"></td>
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
				<td><label for="bukti_pembayaran" >Bukti pembayaran</label></td>
				<td><input type="file" name="bukti_pembayaran" id="bukti_pembayaran"></td>
				<td><input type="submit" value="Upload"></td>
			</tr>
			<tr>
				<td><label for="foto_ktp" >foto ktp anda</label></td>
				<td><input type="text" name="foto_ktp" id="foto_ktp"></td>
			</tr>
			<tr>
				<td><label for="foto_usaha" >foto usaha </label></td>
				<td><input type="text" name="foto_usaha" id="foto_usaha"></td>
			</tr>
			<tr>
				<td><label for="username" >Username</label></td>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td><label for="password" >password</label></td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td><button type="submit">registrasi</button></td></tr>
			</table>
		</form>
	</div>