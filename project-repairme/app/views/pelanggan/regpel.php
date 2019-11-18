
		<div class="wrapper">
			<div class="image-holder">
				<img src="<?=BASEURL;?>/regiscoba/assets/images/repairmeStiker.jpg" alt="" >
			</div>
			<div class="form-inner">
				<form action="<?=BASEURL;?>/pelanggan/insertpelanggan" method="POST" enctype="multipart/form-data">
					<div class="form-header">
						<h3>Sign up</h3>
						<img src="<?=BASEURL;?>/regiscoba/assets/images/sign-up.png" alt="" class="sign-up-icon">
					</div>
					<div class="form-group">
						<label for="nama">Nama:</label>
						<input type="text" name="nama" id="nama" class="form-control" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group">
						<label for="email">E-mail:</label>
						<input type="text"name="email" id="email" class="form-control" data-validation="email">
					</div>
					<div class="form-group">
						<label for="no_tlp">No Telepon:</label>
						<input type="text" name="no_tlp" id="no_tlp" class="form-control" data-validation="length numeric" data-validation-length="min11">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat :</label>
						<input type="text" name="alamat" id="alamat" class="form-control" data-validation="length alphanumeric" data-validation-length="3-50">
					</div>
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="text" name="username" id="username"class="form-control" data-validation="length alphanumeric" data-validation-length="3-12">
					</div>
					<div class="form-group" >
						<label for="password1">Password:</label>
						<input type="password" name="password1" id="password1" class="form-control" data-validation="length" data-validation-length="min8">
					</div>
					<button type="submit" id="submit">create my account</button>
					
				</form>
			</div>
			
		</div>
		