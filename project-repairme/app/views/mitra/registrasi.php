<div class="container">
	<!-- tutorial pertama -->
	<div class="tutorial mt-70" style="position: absolute; left: 3%; width: 40%;">
		<h4 class="font-alt mb-0">Ketentuan Untuk Menjadi Mitra</h4>
		<hr class="divider-w mt-10 mb-20">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">Apa Saja Yang Dibutuhkan Untuk Menjadi Mitra RepairME?</a></h4>
				</div>
				<div class="panel-collapse collapse in" id="support1">
					<div class="panel-body">
						Pilih mitra yang anda inginkan dengan menekan area peta, deskripsi mitra akan muncul bersamaan dengan rating mitra.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2">Support Question 2</a></h4>
				</div>
				<div class="panel-collapse collapse" id="support2">
					<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- tombol setuju -->
	<div class="mt-70 syarat" style="position: absolute; right: 5%; width: 45%;">
		<h4 class="font-alt mb-0">Setuju Dengan semua ketentuan dan peraturan RepairME?</h4>
		<hr class="divider-w mt-10 mb-20">
		<a href="<?= BASEURL; ?>" class="btn btn-block btn-round btn-d mt-10 batal" type="button" style="width: 48%; float: right; margin-left: 1px;">SAYA TIDAK SETUJU</a>
		<button class="btn btn-block btn-round btn-d mt-10 setuju" type="button" style="width: 48%; float: right; margin-right: 1px;">SAYA SETUJU</button>
	</div>
	
	<div class="tutorial2 mt-70" style="position: absolute; left: 3%; width: 40%;">
		<h4 class="font-alt mb-0">Ketentuan Pengisian Registrasi</h4>
		<hr class="divider-w mt-10 mb-20">
		<div class="panel-group" id="accordion2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion2" href="#support12">Apa Saja Yang Dibutuhkan Untuk Menjadi Mitra RepairME?</a></h4>
				</div>
				<div class="panel-collapse collapse in" id="support12">
					<div class="panel-body">
						Pilih mitra yang anda inginkan dengan menekan area peta, deskripsi mitra akan muncul bersamaan dengan rating mitra.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#support22">Support Question 2</a></h4>
				</div>
				<div class="panel-collapse collapse" id="support22">
					<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- data diri -->

	<div class="col-sm-5 formLocate mt-70" style="position: absolute; right: 7%;">
		<h4 class="font-alt judul">Data Diri</h4>
		<hr class="divider-w mb-20">
		<form class="form" id="regisMitra" action="<?=BASEURL;?>/mitra/insertMitra" method="POST" enctype="multipart/form-data">
			<div class="dataDiri">
				<div class="form-group">
					<input class="form-control" id="nama" type="text" name="nama" placeholder="nama lengkap anda"/>
					<p class="nama" style="color: red;"></p>
				</div>
				<div class="form-group">
					<input class="form-control" id="email" type="email" name="email" placeholder="Email" required/>
					<p class="email" style="color: red;"></p>
				</div>
				<div class="form-group">
					<input class="form-control" id="no_telpon" type="text" name="no_telpon" placeholder="Nomor Telefon Anda"/>
					<p class="no_telpon" style="color: red;"></p>
				</div>
				<button class="btn btn-block btn-round btn-d selanjutnya" type="button">SELANJUTNYA</button>
			</div>
			
			<!-- jenis usaha -->

			<div class="jenisUsaha et-icons">
				<span class="box1" style="width: 32%;">
					<span class="icon-laptop" aria-hidden="true" style="width: 100%;">
					<button class="btn btn-block btn-round btn-d btnlaptop" type="button">LAPTOP</button></span>
				</span>
				<span class="box1" style="width: 32%;">
					<span class="icon-phone" aria-hidden="true" style="width: 100%;">
						<button class="btn btn-block btn-round btn-d btnhp" type="button">HANDPHONE</button>
					</span>
				</span>
				<span class="box1" style="width: 32%;">
					<span class="icon-tools-2" aria-hidden="true" style="width: 100%;">
						<button class="btn btn-block btn-round btn-d btnserbabisa" type="button">SERBA BISA</button>
					</span>
				</span>
					<input id="jenis" name="jenis" type="text" hidden>
					<input id="deskripsi" name="deskripsi" type="text" value="-" hidden>
				<br><br><br><br><br>
				<button class="btn btn-g btn-round btn-block back1" type="button" style="width: 95%;">Kembali</button>
			</div>
			
				
			<!-- data usaha -->

			<div class="dataUsaha">
				<div class="form-group">
					<input class="form-control" id="nama_usaha" type="text" name="nama_usaha" placeholder="Nama Usaha Anda"/>
					<p class="nama_usaha" style="color: red;"></p>
				</div>
				<div class="form-group">
					<input class="form-control" id="alamat" type="text" name="alamat" placeholder="Alamat Tempat usaha anda"/>
					<p class="alamat" style="color: red;"></p>
				</div> 
				<button class="btn btn-block btn-round btn-d selanjutnya2" type="button">SELANJUTNYA</button>
				<button class="btn btn-g btn-round btn-block back2" type="button" style="width: 100%;">Kembali</button>
			</div>
			
			<!-- data usaha -->

			<div class="dataLokasi">
				<p class="map" style="color: red;"></p>
				<div id="map" style="width: 100%; height: 350px; border: 1px solid black;">
                        <script>
                            var map = L.map('map').setView([-7.91346, 113.82145], 18);
                            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);
                           
                            var popup = L.popup();
                            var lokasiLat;
                            var lokasiLong;
                            var marker = L.marker([-7.91346, 113.82145]).addTo(map).bindPopup("Tekan area peta di titik usaha anda!").openPopup();
                            function onMapClick(e) {
                              marker.setLatLng(e.latlng);
                              marker.bindPopup("Lokasi Usaha anda disini : " + e.latlng.toString()).openPopup();
                                lokasiLat = e.latlng.lat;
                                lokasiLong = e.latlng.lng;
                                $('#lat').attr('value',lokasiLat);
                                $('#lng').attr('value',lokasiLong);
                            }
                              map.on('click', onMapClick);
                            
                        </script>
                    </div>	
                    <input id="lat" name="lat" type="text" hidden>
                    <input id="lng" name="lng" type="text" hidden>
                   	<button class="btn btn-block btn-round btn-d selanjutnya3" type="button">SELANJUTNYA</button>		
                   	<button class="btn btn-g btn-round btn-block back3" type="button" style="width: 100%;">Kembali</button>
			</div>
	

			<div class="upload">
				<div class="form-group">
				 <p>foto KTP</p>
                  <input id="foto_ktp" name="foto_ktp" type="file" required>
                  <p class="foto_ktp" style="color: red;"></p>
				</div>
				<div class="form-group">
				 <p>foto Tempat Usaha</p>
                      <input id="foto_usaha" name="foto_usaha" type="file" required>
                      <p class="foto_usaha" style="color: red;"></p>
                 </div>
				<button class="btn btn-block btn-round btn-d selanjutnya5" type="button">SELANJUTNYA</button>
				<button class="btn btn-g btn-round btn-block back5" type="button" style="width: 100%;">Kembali</button>
			</div>


			<!-- untuk username dan password -->
					


			<div class="userpass">
				<div class="form-group">
					<input class="form-control" id="username" type="text" name="username" placeholder="Username anda"/>
					<p class="username" style="color: red;"></p>
				</div>
				<div class="form-group">
					<input class="form-control" id="password1" type="password" name="password1" placeholder="password"/>
					<p class="password1" style="color: red;"></p>
				</div>
				<div class="form-group">
					<input class="form-control" id="password2" type="password" name="password2" placeholder="ulangi password"/>
					<p class="password2" style="color: red;"></p>
				</div>
				<button class="btn btn-block btn-round btn-d selanjutnya4" type="button">SELANJUTNYA</button>
				<button class="btn btn-g btn-round btn-block back4" type="button" style="width: 100%;">Kembali</button>
			</div>
			

			<div class="finish et-icons">
				<span class="box1" style="width: 50%;">
					<span class="icon-happy" aria-hidden="true" style="width: 100%;">
					<button class="btn btn-block btn-round btn-d submit" type="submit">YA SAYA SIAP!</button>
				</span>
				</span>
				<span class="box1" style="width: 50%;">
					<span class="icon-sad" aria-hidden="true" style="width: 100%;">
						<button class="btn btn-block btn-round btn-d batal" type="button">TIDAK, BATALKAN SAJA!</button>
					</span>
				</span>
				<br><br><br><br><br>
				<button class="btn btn-g btn-round btn-block back6" type="button" style="width: 95%;">Kembali Ke Form Sebelumnya</button>
			</div>
		</div>
	</form>
</div>
</div>
<script>
	$(document).ready(function(){
				$('.formLocate').hide();
				$('.tutorial2').hide();
				$('.jenisUsaha').hide();
				$('.dataUsaha').hide();
				$('.dataLokasi').hide();
				$('.userpass').hide();
				$('.upload').hide();
				$('.finish').hide();
				$('.batal').click(function(){
					alert('Mohon Maaf Anda Harus Mengikuti Persyaratan Dan Peraturan Kami!');
				});
				$('.setuju').click(function(){
					$('.syarat').hide();
					$('.tutorial').hide();
					$('.dataDiri').show();
					$('.tutorial2').show();
					$('.formLocate').show();
				});
				function invalid(){
					alert('oke');
				}


				// Validasi Nama Lengkap
				$('#nama').on('keyup',function(){
				var regex = /^[a-z A-Z]+$/;
				if (regex.test(this.value) !== true) {
				this.value = this.value.replace(/[^a-zA-Z]+/, '');
				}else if ($(this).val().length < 5) {
				$('.nama').text('Anda Yakin Nama Anda Terdiri Dari '+ $(this).val().length + ' Huruf?');
				}else{
				$('.nama').text('');
				}
				if ($(this).val().length == 0) {
				$('.nama').text('Nama Harus Di isi!');
				}
				});

				// validasi email
				var email;
				$('#email').on('keyup', function(){


				var valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
				if (!this.value.match(valid)){
				$('.email').text('Isi Email dengan Benar!');
				email = false;
				}
				<?php foreach ($data['mitra'] as $mitra): ?>
				else if($(this).val() == "<?= $mitra['email']; ?>"){
				$('.email').text('Email Sudah Terdaftar!');
				email = false;
				}
				<?php endforeach; ?>
				else{
				$('.email').text('');
				email = true;
				}
				});

				// validasi nomor telepon
				$('#no_telpon').on('keyup', function(){
				var regex = /^[0-9]+$/;
				if (regex.test(this.value) !== true) {
				this.value = this.value.replace(/[^0-9]+/, '');
				}if ($(this).val().length < 12) {
				$('.no_telpon').text('salah');
				}
				else{
				$('.no_telpon').text('');
				}
				});
				$('.selanjutnya').on('click', function(){
					if ($('#nama').val() === '') {
					$('.nama').text('Nama Harus Di isi!');
					}else if ($('#email').val() === '') {
					$('.email').text('Email Harus Di isi!');
					}else if ($('#no_telpon').val() === '') {
					$('.no_telpon').text('Nomor Harus Di isi!');
					}else if (email == false) {
					$('.email').text('Isi Email dengan Benar!');
				}

				else{
				$('.dataDiri').hide();
					$('.jenisUsaha').show();
					$('.judul').text('Mitra Dapat Memperbaiki Apa?');
				}
				});

				// untuk jenis mitra
				$('.btnlaptop').on('click',function(){
					$('#jenis').attr('value','laptop');
					$('.dataUsaha').show();
					$('.jenisUsaha').hide();
					$('.judul').text('Data Tempat Usaha');
				});
				$('.btnhp').on('click',function(){
					$('#jenis').attr('value','hp');
					$('.dataUsaha').show();
					$('.jenisUsaha').hide();
					$('.judul').text('Data Tempat Usaha');
				});
				$('.btnserbabisa').on('click',function(){
					$('#jenis').attr('value','serbabisa');
					$('.jenisUsaha').hide();
					$('.dataUsaha').show();
					$('.judul').text('Data Tempat Usaha');
				});

				// validasi data tempat usaha
				$('#nama_usaha').on('keyup',function(){
					$('.nama_usaha').text('');
				});
				$('#alamat').on('keyup',function(){
					$('.alamat').text('');
				});
				$('.selanjutnya2').on('click', function(){
					if ($('#nama_usaha').val() === '') {
						$('.nama_usaha').text('Nama Usaha Harus Di isi!');
					}else if($('#alamat').val() === ''){
						$('.alamat').text('Alamat Harus Di isi!');
					}else{
						$('.dataUsaha').hide();
						$('.dataLokasi').show();
						$('.judul').text('Lokasi Tempat Usaha');
					}
				});

				// validasi dataLokasi mitra
				$('#map').on('click',function(){
					$('.map').text('');
				});
				$('.selanjutnya3').on('click',function(){
					// $('.dataLokasi').hide();	
					if ($('#lat').val() === '' && $('#lng').val() === '') {
						$('.map').text('Pilih Lokasi Usaha Anda dengan cara klik area peta!');
					}else {
						$('.dataLokasi').hide();
						$('.upload').show();
						$('.judul').text('Unggah foto Data Diri dan usaha');
					}
				});


				// validasi file upload 

				$('#foto_ktp').on('change',function(){
                  var filename = this.files[0].name.split('.').pop();
                  if ((this).files[0].size > 2000000) {
                    $('.foto_ktp').text('Ukuran Gambar Tidak Boleh Melebihi 2MB!');
                    var kel = $(this).val(null);
                  }else if(filename != 'jpeg' && filename != 'jpg' && filename != 'png'){
                    $('.foto_ktp').text('Format Gambar Tidak Benar!');
                    var kel = $(this).val(null);
                  }else{
                    $('.foto_ktp').text('');
                  }

                  });

                $('#foto_usaha').on('change',function(){
                  var filename = this.files[0].name.split('.').pop();
                  if ((this).files[0].size > 2000000) {
                    $('.foto_usaha').text('Ukuran Gambar Tidak Boleh Melebihi 2MB!');
                    var kel = $(this).val(null);
                  }else if(filename != 'jpeg' && filename != 'jpg' && filename != 'png'){
                    $('.foto_usaha').text('Format Gambar Tidak Benar!');
                    var kel = $(this).val(null);
                  }else{
                    $('.foto_usaha').text('');
                  }

                  });

				$('.selanjutnya5').on('click',function(){	
					if ($('#foto_ktp').val() === '') {
						$('.foto_ktp').text('Upload Foto Ktp anda');
					}
					else if ($('#foto_usaha').val() === '') {
						$('.foto_usaha').text('Upload Foto Usaha anda');
					}
					else {
						$('.upload').hide();
						$('.userpass').show();
						$('.judul').text('Akun Login');
					}
				});


				// validasi username dan password untuk login
				var username;
				$('#username').on('keyup',function(){
					if ($(this).val() < 1) {
						$('.username').text('Username Harus Diisi');
					}
					<?php foreach ($data['user'] as $user):?>
					else if ($(this).val() == "<?= $user['username']; ?>" ){
							$('.username').text('Username tidak bisa dipakai');
							username = false;
					}
					<?php endforeach; ?>
					else{
						$('.username').text('');
					}
					
				});
				var passv;
				$('#password1').on('keyup',function(){
					if ($(this).val().length < 8) {
						$('.password1').text('Password Minimal 8 digit');
						passv = false; 
					}else{
						$('.password1').text('');
						passv = true;
					}
				});
				var passvalid;
				$('#password2').on('keyup',function(){
					if ($(this).val() != $('#password1').val()) {
						$('.password2').text('Password Tidak Sama');
						passvalid = false;
					}else{
						$('.password2').text('');
						passvalid = true;
					}
				});
				$('.selanjutnya4').on('click',function(){
					if ($('#username').val() === '') {
						$('.username').text('Username Harus Di Isi!');
					}
					else if($('#password1').val() === ''){
						$('.password1').text('Password Harus Di Isi!');
					}
					else if($('#password2').val() === ''){
						$('.password2').text('Password Harus Di Isi!');
					}
					else if(passvalid == false){
						$('.password2').text('Password Harus sama');
					}
					else if(passv == false){
						$('.password1').text('Password Minimal 8 Digit');
					}
					else {
						$('.userpass').hide();
						$('.judul').text('Apakah Anda Siap menjadi Mitra RepairMe?');
						$('.finish').show();
					}
				});




				// untuk button back
				$('.back1').on('click',function(){
					$('.jenisUsaha').hide();
					$('.dataDiri').show();
				});
				$('.back2').on('click',function(){
					$('.dataUsaha').hide();
					$('.jenisUsaha').show();
				});
				$('.back3').on('click',function(){
					$('.dataLokasi').hide();
					$('.dataUsaha').show();
				});
				$('.back5').on('click',function(){
					$('.upload').hide();
					$('.dataLokasi').show();
				});
				$('.back4').on('click',function(){
					$('.userpass').hide();
					$('.upload').show();
				});
				$('.back6').on('click',function(){
					$('.finish').hide();
					$('.userpass').show();
				});
		});
		</script>