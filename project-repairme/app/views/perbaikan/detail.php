<section class="module">
	<div class="tutorial" style="position: absolute; left: 3%; width: 50%; top: 20%;">
		<h4 class="font-alt mb-0">Tutorial</h4>
		<hr class="divider-w mt-10 mb-20">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">Pengajuan Perbaikan ke Mitra</a></h4>
				</div>
				<div class="panel-collapse collapse in" id="support1">
					<div class="panel-body">
						Setelah mengisi form perbaikan, Pelanggan menunggu konfirmasi dari Mitra .
						Setelah dikonfirmasi pelanggan akan menerima kisaran harga dan bisa meneruskan proses perbaikan.
						<?php var_dump($data['perbaikan']['mitra']); ?> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div style="position: absolute; top: 20%; left: 60%;">
		<h4 class="font-alt mb-0 namaMitra">Tampilkan Berdasarkan Kategori</h4>
		<hr class="divider-w mt-10 mb-20" style="width: 120%;">
	</div>
	<div class="barang et-icons" style=" left: 60%; width: 50%; top: 45%; position: absolute;">
		<span class="box1">
			<span class="icon-tools-2" aria-hidden="true" style="width:100%;">
				<button class="btn btn-block btn-round btn-d semua" type="button" style="margin-top: 3px;" value="hp">SEMUA</button>
			</span>
		</span>
		<span class="box1">
			<span class="icon-laptop" aria-hidden="true" style="width:100%;">
				<button class="btn btn-block btn-round btn-d tlaptop" type="button" style="margin-top: 3px;" value="laptop">LAPTOP</button>
			</span>
		</span>
		<span class="box1">
			<span class="icon-phone" aria-hidden="true" style="width:100%;">
				<button class="btn btn-block btn-round btn-d thp" type="button" style="margin-top: 3px;" value="hp">HANDPHONE</button>
			</span>
		</span>
	</div>
</div>
</div>
</div>
</section>
<div class="container" style="width: 90%;">
<div class="detaillaptop">
<h4 class="font-alt mb-0"><?= $_SESSION['login']['data']['nama']; ?>. Jenis : LAPTOP</h4>

	<hr class="divider-w pt-20">
<div class="row">
<div class="col-sm-12">
<table class="table table-striped table-border checkout-table table_laptop">
	<tbody>
		<?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
		<?php if ($i < 3):?>
			<tr>
			<th style="width: 12%;">Mitra</th>
			<th>Status Perbaikan</th>
			<th>Merk Laptop</th>
			<th>Tipe Laptop</th>
			<th>Kerusakan</th>
			<th>Keterangan Lain</th>
			<th>Keterangan Dari Mitra</th>
			<th>Harga</th>
		</tr>
		<tr>
			<td>
				<h5 class="product-title font-alt"><?= $data['perbaikan']['mitra'][$i][0]['nama_usaha']; ?></h5>
			</td>
			<td>
				<script>
					$(document).ready(function(){
						if ("<?= $data['perbaikan']['status'][$i][0]['status_perbaikan']; ?>" == 'Mitra Menolak Perbaikan') 
						{ $('.status').attr("style", "color:red;");}
						else{
							
						}
					});
				</script>
	
				<h5 class="product-title font-alt status"><?= $data['perbaikan']['status'][$i][0]['status_perbaikan']; ?></h5>
			</td>
			<td>
				<h5 class="product-title font-alt"><?= $data['perbaikan']['merk_laptop'][$i][0]['merk_laptop']; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan']['tipe_laptop'][$i][0]['tipe_laptop']; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan']['kerusakan_laptop'][$i][0]['kerusakan_laptop']; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan']['keterangan_lain'][$i]; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan']['perbaikan_laptop'][$i]['keterangan_mitra']; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan']['harga'][$i]; ?></h5>
			</td>
			
		</tr>
		<?php endif; ?>
		<?php endfor; ?>
	</tbody>
</table>
</div>
</div>
</div>
<div class="detailhp">
	<h4 class="font-alt mb-0"><?= $_SESSION['login']['data']['nama']; ?>. JENIS : HANDPHONE</h4>
<hr class="divider-w">
<div class="row mt-20">
<div class="col-sm-12">
<table class="table table-striped table-border checkout-table">
	<tbody>
		<?php for ($j=0; $j < count($data['perbaikan2']['perbaikan_hp']); $j++):?>
		<?php if ($j < 3):?>
			<tr>
			<th style="width: 12%;">Mitra</th>
			<th>Status Perbaikan</th>
			<th>Merk Handphone</th>
			<th>Tipe Handphone</th>
			<th>Kerusakan</th>
			<th>Keterangan Lain</th>
			<th>Keterangan Dari Mitra</th>
			<th>Harga</th>
			
		</tr>
		<tr>
			<td>
				<h5 class="product-title font-alt"><?= $data['perbaikan2']['mitra'][$i][0]['nama_usaha']; ?></h5>
			</td>
			<td>
				<h5 class="product-title font-alt"><?= $data['perbaikan2']['status'][$j][0]['status_perbaikan']; ?></h5>
			</td>
			<td>
				<h5 class="product-title font-alt"><?= $data['perbaikan2']['merk_hp'][$j][0]['merk_hp']; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan2']['tipe_hp'][$j][0]['tipe_hp']; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan2']['kerusakan_hp'][$j][0]['kerusakan_hp']; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan2']['keterangan_lain'][$j]; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan2']['perbaikan_hp'][$j]['keterangan_mitra']; ?></h5>
			</td>
			<td class="hidden-xs">
				<h5 class="product-title font-alt"><?= $data['perbaikan2']['harga'][$j]; ?></h5>
			</td>
			
		</tr>
		<?php endif; ?>
		<?php endfor; ?>
	</tbody>
</table>

</div>
<div class="row">
<div class="col-sm-3" >
<div class="form-group">
	<a class="btn btn-block btn-round btn-d pull-right" href="<?= BASEURL; ?>/pelanggan/perbaikan">Lihat detail</a>
</div>
</div>
</div>

</div>
</div>
</div>

<script>
	$(document).ready(function(){
		
		$('.semua').click(function() {
			$('.detaillaptop').show();
			$('.detailhp').show();
		});
		$('.tlaptop').click(function() {
			$('.detaillaptop').show();
			$('.detailhp').hide();
		});
		$('.thp').click(function() {
			$('.detaillaptop').hide();
			$('.detailhp').show();
		});
	});
</script>
