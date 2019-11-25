<div class="container">
  
  <!-- button registrasi -->
  <a class="btn btn-primary" href="<?= BASEURL; ?>/kategori/tambahkategori" role="button">Kategori</a>
	
	<div class="listkategori">
		<h3>Kategori</h3>
			<?php foreach($data['kategori'] as $kategori) :?>
			<ul class="list-group">
				<li class="list-group-item" >
					<?= $kategori['kategori']; ?>
					<a href="<?= BASEURL; ?>/kategori/delete/<?= $pelanggan['id_pelanggan']; ?>" class="badge badge-danger float-right ml-1">Hapus</a>
					
				</li>
			</ul>
			<?php endforeach; ?>
	</div>


</div>
</div>