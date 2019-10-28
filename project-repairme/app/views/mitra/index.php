<div class="container">
	
	<!-- button registrasi -->

	<button type="button"  class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">Sign Up Mitra</button>
	<a href="<?= BASEURL;?>/mitra/registrasi" >registrasi</a>
	<div class="mitra">
		<?php foreach($data['mitra'] as $mitra): ?>
		<ul>
			<li><?= $mitra['nama']; ?></li>
		</ul>
		<?php endforeach; ?>
	</div>

</div>