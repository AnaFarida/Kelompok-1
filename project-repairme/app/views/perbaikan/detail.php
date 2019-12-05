<div class="container">
	<div class="namaMitra mt-80" style="position: absolute; left: 5%; ">
	<h4 class="font-alt mb-0 namaMitra">Detail</h4>
	<hr class="divider-w mt-10 mb-20" style="width: 120%;">
</div>
<div class="detail" style="overflow: auto;">
	<div class="row mt-70 miniProfile" style="position: absolute; left: 5%; top: 12%; width: 30%;">
	<div class="col-sm-12">
		<ul class="nav nav-tabs font-alt" role="tablist">
			<li class="active"><a href="#data-sheet" data-toggle="tab"><span class="icon-tools-2"></span>Data Mitra</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="data-sheet">
				<table class="table table-striped ds-table table-responsive">
					<tbody>
						<?php foreach ($data['id'] as $mitra):?>
						<tr>
							<th>Mitra</th>
							<th>Informasi</th>
						</tr>
						<tr>
							<td>Nama Usaha</td>
							<td><?= strtoupper($mitra['nama_usaha']); ?></td>
						</tr>
						<tr>
							<td>Jenis Perbaikan</td>
							<td><?= strtoupper($mitra['jenis']); ?></td>
						</tr>
						<tr>
							<td>No Telfon</td>
							<td><?= $mitra['no_tlp']; ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><?= $mitra['email']; ?></td>
						</tr>
						<tr>
							<td>Alamat Usaha</td>
							<td><?= $mitra['alamat']; ?></td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
	</div>
</div>
</div>

<div class="row mt-70 miniProfile" style="position: absolute; top: 12%; right: 2%; width: 28%; margin-top: 20px;  height: 14%;">
	<div class="col-sm-12">
		<div class="tab-content">
			<div class="tab-pane active" id="data-sheet">
				<table class="table table-striped ds-table table-responsive">
					<tbody>
						<tr>
							<th>Barang</th>
							<th>Informasi</th>
						</tr>
						<tr>
							<td>Barang Yang Dipilih</td>
							<td><?= strtoupper($data['kategori']); ?></td>
						</tr>
					</tbody>
				</table>
			</div>
	</div>
</div>
</div>

</div>
<div class="container_laptop">
<div class="mt-80" style="position: absolute; right: 12%;">
<h4 class="font-alt mb-0 namaMitra">Barang Dan Kerusakan</h4>
<hr class="divider-w mt-10 mb-20" style="width: 120%;">
</div>
<form class="row detailKerusakan" style="position: absolute; top: 40%; right: 5%; width: 28%;">
<select class="form-control" id="merk" style="margin: 10px;">
<option selected="selected">MERK</option>
<?php foreach ($data['merk_laptop'] as $merk):?>
<option class="merk" value="<?= $merk['id_merk_laptop']; ?>"><?= $merk['merk_laptop']; ?></option>
<?php endforeach; ?>
</select>
<button class="btn btn-block btn-round btn-d kirim" type="button" style="margin: 10px; margin-top: 30px;">SELANJUTNYA</button>
</form>
</div>



</div>

<script>
	$(document).ready(function(){

		if ("<?= $data['kategori']; ?>" == 'laptop') {
			$('.kirim').hide();
			// $('.container_laptop').hide();
			$('#merk').on('change',function(){
				$('.kirim').show();	
			});
		}
		
	});
</script>