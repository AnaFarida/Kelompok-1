<div class="container">
	
	<form action="<?= BASEURL; ?>/mitra/insertMitra" method="post">
		
		<table>
			<tr>
				<td><label for="username">username</label>
				<input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td>
					<label for="password">password</label>
					<input type="password" name="password" id="password">
				</td>
			</tr>
			<tr>
				<td>
					<label for="nama">nama</label>
					<input type="text" name="nama" id="nama">
				</td>
			</tr>

			<tr>
				<td>
					<button type="submit">submit</button>
				</td>
			</tr>
		</table>

	</form>

</div>