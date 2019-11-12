<div class="container">
  
  <!-- button registrasi -->
  <a class="btn btn-primary" href="<?= BASEURL; ?>/pelanggan/registrasi" role="button">registrasi pelanggan</a>
	
	<div class="listpelanggan">
		<h3>Daftar pelanggan Bergabung</h3>
			<?php foreach($data['pelanggan'] as $pelanggan) :?>
			<ul class="list-group">
				<li class="list-group-item" >
					<?= $mitra['nama']; ?>
					<a href="<?= BASEURL; ?>/pelanggan/delete/<?= $mitra['id_pelanggan']; ?>" class="badge badge-danger float-right ml-1">Hapus</a>
					
				</li>
			</ul>
			<?php endforeach; ?>
	</div>


</div>
</div>