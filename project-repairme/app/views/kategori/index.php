<div class="container">
  
  <!-- button kategori -->
  <a class="btn btn-primary" href="<?= BASEURL; ?>/kategori/tambahkategori" role="button">Daftar Kategori</a>
	
	<div class="listKategori"
		<h3>Daftar Kategori</h3>
			<!--<?php foreach($data['kategori'] as $kategori) :?>
			<ul class="list-group">
				<li class="list-group-item" >
					<?= $kategori['nama_kategori']; ?>
					<a href="<?= BASEURL; ?>/kategori/delete/<?= $kategori['id_kategori']; ?>" class="badge badge-danger float-right ml-1">Hapus</a>
					<a href="<?= BASEURL; ?>/kategori/ubah/<?= $kategori['id_kategori']; ?>/<?= $kategori['id_merk']; ?>/<?= $kategori['id_tipe']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $kategori['id']; ?>">Ubah</a>
					<a href="<?= BASEURL; ?>/kategori/detailKategori/<?= $kategori['id_kategori']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
					
				</li>
			</ul>-->
			<?php endforeach; ?>
	</div>


</div>
</div>