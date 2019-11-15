
<div class="container">
	<form action="<?=BASEURL;?>/kategori/insertKategori" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label for="kategori" >Kategori</label></td>
				<td><input type="text" name="kategori" id="kategori" required></td>
			</tr>
			<tr>
				<td><label for="merk" >Merk</label></td>
				<td><input type="text" name="merk" id="merk"></td>
			</tr>
			<tr>
				<td><label for="tipe" >Tipe</label></td>
				<td><input type="text" name="tipe" id="tipe"></td>
			</tr>
				<td><button type="submit" id="submit">Simpan</button></td></tr>
			</table>
		</form>
	</div>