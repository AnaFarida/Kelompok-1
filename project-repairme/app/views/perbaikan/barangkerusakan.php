<div class="step-pertama">
	<!-- banyak javascript, tolong perhatikan -->
	<div class="lokasiMitra mt-80" style="position: absolute; left: 4%;">
		
		<h4 class="font-alt mb-0">Lokasi mitra</h4>
		<hr class="divider-w mt-10 mb-20" style="width: 120%;">
	</div>
	<div id="map" style="position: absolute;margin-left: 3%; margin-right: 3%; top: 24%; width: 25%; height: 65%; z-index:100; border: solid black 1px;">
		<?php foreach ($data['id'] as $mitra):?>
		<script>
		var map = L.map('map').setView([<?= $mitra['lat']; ?>, <?= $mitra['lng']; ?>], 17);
		L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(map);
		var marker = L.marker([<?= $mitra['lat']; ?>, <?= $mitra['lng']; ?>]).addTo(map);
		marker.bindPopup('<?= $mitra['nama_usaha']; ?>').openPopup();
		</script>
	</div>
	<div class="namaMitra mt-80" style="position: absolute; left: 35%;">
		<h4 class="font-alt mb-0 namaMitra"><?= $mitra['nama_usaha']; ?></h4>
		<hr class="divider-w mt-10 mb-20" style="width: 120%;">
	</div>
	<div class="row mt-70 miniProfile" style="position: absolute; left: 33%; top: 12%; width: 30%; height: 500px; overflow: auto;">
		<div class="col-sm-12">
			<ul class="nav nav-tabs font-alt" role="tablist">
				<li class="active"><a href="#description" data-toggle="tab"><span class="icon-tools-2"></span>Deskripsi</a></li>
				<li><a href="#data-sheet" data-toggle="tab"><span class="icon-tools-2"></span>Data</a></li>
				<li><a href="#reviews" data-toggle="tab"><span class="icon-tools-2"></span>Reviews (2)</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="description">
					<img class="fotoMitra" src="<?= BASEURL ?>/img/mitra/<?= $mitra['foto_usaha']; ?>" alt="" width="678px" height="452px">
					<?php endforeach; ?>
					<p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages.</p>
				</div>
				<div class="tab-pane" id="data-sheet">
					<table class="table table-striped ds-table table-responsive">
						<tbody>
							<tr>
								<th>Title</th>
								<th>Info</th>
							</tr>
							<tr>
								<td>Compositions</td>
								<td>Jeans</td>
							</tr>
							<tr>
								<td>Size</td>
								<td>44, 46, 48</td>
							</tr>
							<tr>
								<td>Color</td>
								<td>Black</td>
							</tr>
							<tr>
								<td>Brand</td>
								<td>Somebrand</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="reviews">
					<div class="comments reviews">
						<div class="comment clearfix">
							<div class="comment-avatar"><img src="" alt="avatar"/></div>
							<div class="comment-content clearfix">
								<div class="comment-author font-alt"><a href="#">John Doe</a></div>
								<div class="comment-body">
									<p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
								</div>
								<div class="comment-meta font-alt">Today, 14:55 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span>
							</div>
						</div>
					</div>
					<div class="comment clearfix">
						<div class="comment-avatar"><img src="" alt="avatar"/></div>
						<div class="comment-content clearfix">
							<div class="comment-author font-alt"><a href="#">Mark Stone</a></div>
							<div class="comment-body">
								<p>Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
							</div>
							<div class="comment-meta font-alt">Today, 14:59 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><span><i class="fa fa-star star-off"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="comment-form mt-30">
				<h4 class="comment-form-title font-alt">Add review</h4>
				<form method="post">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label class="sr-only" for="name">Name</label>
								<input class="form-control" id="name" type="text" name="name" placeholder="Name"/>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="sr-only" for="email">Name</label>
								<input class="form-control" id="email" type="text" name="email" placeholder="E-mail"/>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<select class="form-control">
									<option selected="true" disabled="">Rating</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<textarea class="form-control" id="" name="" rows="4" placeholder="Review"></textarea>
							</div>
						</div>
						<div class="col-sm-12">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<div class="mt-80" style="position: absolute; left: 68%;">
<h4 class="font-alt mb-0 namaMitra">Barang Dan Kerusakan</h4>
<hr class="divider-w mt-10 mb-20" style="width: 120%;">
</div>
<div class="barang et-icons" style="position: absolute; top: 25%; right: 8%; width: 24%;">
<p>Pilih Barang Yang Ingin Di Perbaiki?</p>
<span class="box1" style="width: 50%;">
	<span class="icon-laptop" aria-hidden="true" style="width:100%;">
	<button class="btn btn-block btn-round btn-d tlaptop" type="button" style="margin-top: 3px;" value="laptop">LAPTOP</button></span>
</span>
<span class="box1" style="width: 50%;">
	<span class="icon-phone" aria-hidden="true" style="width: 100%;">
		<button class="btn btn-block btn-round btn-d thp" type="button" style="margin-top: 3px;" value="hp">HANDPHONE</button>
	</span>
</span>
</div>
</div>


<div class="step-kedua">
<div class="container" style="width: 100%;">
<!-- tutorial pertama -->
<div class="tutorial mt-70" style="position: absolute; left: 3%; width: 30%;">
	<h4 class="font-alt mb-0">Tutorial</h4>
	<hr class="divider-w mt-10 mb-20">
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">Bagaimana Jika Merk Tidak Ada DI daftar?</a></h4>
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

<div class="namaMitra mt-70" style="position: absolute; left: 37%; width: 28%; ">
	<h4 class="font-alt mb-0 namaMitra">Detail Mitra Dan Barang</h4>
	<hr class="divider-w mt-10 mb-20" >
</div>
<div class="detail" style="overflow: auto;">
	<div class="row mt-70 miniProfile" style="position: absolute; left: 37%; top: 7%; width: 28%;">
		<div class="col-sm-12">
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
	<div class="row mt-70 miniProfile" style="position: absolute; top: 45%; left: 37%; width: 28%; margin-top: 20px;">
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
								<td class="getKategori"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container_laptop">
	<div class="mt-70" style="position: absolute; right: 2%; width: 30%;">
		<h4 class="font-alt mb-0 namaMitra">Merk Dan Tipe</h4>
		<hr class="divider-w mt-10 mb-20">
	</div>
	<div class="row" style="position: absolute; right: 3%; top: 24%; width: 30%;">
		<select class="form-control" id="selector_merk_laptop" >
			<option selected="selected" disabled>MERK</option>
			<option style="color: red;" value="false">tidak ada di daftar</option>
			<?php foreach ($data['merk_laptop'] as $merk):?>
			<option value="<?= $merk['id_merk_laptop']; ?>"><?php $getMerklaptop = $merk['merk_laptop']; ?><?= $merk['merk_laptop']; ?></option>
			<?php endforeach; ?>
		</select>
		<div class="form-group mt-20">
			<input type="text" name="merklaptop" id="merklaptop" hidden>
			<input class="form-control" id="merklaptopbaru" name="merklaptopbaru" type="text" placeholder="Merk dan tipe Laptop Anda">
		</div>
		<select class="form-control" id="selector_tipe_laptop" >
			<option selected="selected" disabled>Tipe</option>
			<option style="color: red;" value="false">tidak ada di daftar</option>
		</select>
		<div class="form-group mt-20">
			<input type="text" name="tipelaptop" id="tipelaptop" hidden>
			<input class="form-control" id="tipelaptopbaru" name="tipelaptopbaru" type="text" placeholder="tipe Laptop Anda">
		</div>
		<button class="btn btn-block btn-round btn-d next1" style="width: 100%; margin-top: 30px;">SELANJUTNYA</button>
	</div>
</div>
<div class="container_hp">
	<div class="mt-70" style="position: absolute; right: 2%; width: 30%;">
		<h4 class="font-alt mb-0 namaMitra">Merk Dan Tipe</h4>
		<hr class="divider-w mt-10 mb-20">
	</div>
	<div class="row" style="position: absolute; right: 3%; top: 24%; width: 30%;">
		<select class="form-control" id="selector_merk_hp" >
			<option selected="selected" disabled>MERK</option>
			<option style="color: red;" value="false">tidak ada di daftar</option>
			<?php foreach ($data['merk_hp'] as $merk):?>
			<option value="<?= $merk['id_merk_hp']; ?>"><?php $getMerkhp = $merk['merk_hp']; ?><?= $merk['merk_hp']; ?></option>
			<?php endforeach; ?>
		</select>
		<div class="form-group mt-20">
			<input type="text" name="merkhp" id="merkhp" hidden>
			<input class="form-control" id="merkhpbaru" name="merkhpbaru" type="text" placeholder="Merk dan tipe hp Anda">
		</div>
		<select class="form-control" id="selector_tipe_hp" >
			<option selected="selected" disabled>Tipe</option>
			<option style="color: red;" value="false">tidak ada di daftar</option>
		</select>
		<div class="form-group mt-20">
			<input type="text" name="tipehp" id="tipehp" hidden>
			<input class="form-control" id="tipehpbaru" name="tipehpbaru" type="text" placeholder="tipe hp Anda">
		</div>
		<button class="btn btn-block btn-round btn-d next2" style="width: 100%; margin-top: 30px;">SELANJUTNYA</button>
	</div>
</div>
<div class="container_kerusakan_laptop">
	<div class="mt-70" style="position: absolute; right: 2%; width: 30%;">
		<h4 class="font-alt mb-0">Kerusakan</h4>
		<hr class="divider-w mt-10 mb-20">
	</div>
	<div class="row" style="position: absolute; right: 3%; top: 24%; width: 30%;">
		<select class="form-control" id="selector_kerusakan_laptop" >
			<option selected="selected" disabled>Kerusakan</option>
			<option style="color: red;" value="false">tidak ada di daftar</option>
			<?php foreach ($data['kerusakan_laptop'] as $laptop):?>
			<option value="<?= $laptop['id_kerusakan_laptop']; ?>"><?= $laptop['kerusakan_laptop']; ?></option>
			<?php endforeach; ?>
		</select>
		<div class="form-group mt-20">
			<input type="text" name="kerusakanlaptop" id="kerusakanlaptop" hidden>
			<input class="form-control" id="kerusakanlaptopbaru" name="kerusakanlaptopbaru" type="text" placeholder="Kerusakan Laptop Anda">
		</div>
		<div class="form-group mt-20">
			<input class="form-control" id="ketkerlap" name="ketkerlap" type="text" placeholder="Keterangan kerusakan lain">
		</div>
		<button class="btn btn-block btn-round btn-d next3" style="width: 100%; margin-top: 30px;">SELANJUTNYA</button>
	</div>
</div>
</div>
</div>

<script>
$(document).ready(function(){
	$('.step-pertama').hide();
	// $('.step-kedua').hide();
	$('#merklaptopbaru').hide();
	$('#merkhpbaru').hide();
	$('#tipelaptopbaru').hide();
	$('#tipehpbaru').hide();
	$('#kerusakanlaptopbaru').hide()
	$('.next1').hide();
	$('.next2').hide();
	$('.next3').hide();
	$('#ketkerlap').hide();
	$('#selector_tipe_laptop').hide();
	$('#selector_tipe_hp').hide();
	$('.container_laptop').hide();
	$('.container_hp').hide();
	// $('.container_kerusakan_laptop').hide();

$('.tlaptop').on('click', function(){
	$('.step-pertama').hide();
	$('.getKategori').text('LAPTOP');
	$('.step-kedua').show();
	$('.container_laptop').show();
});
$('.thp').on('click', function(){
	$('.step-pertama').hide();
	$('.getKategori').text('HANDPHONE');
	$('.step-kedua').show();
	$('.container_hp').show();
});

	// untuk yang kedua

	$('#selector_merk_laptop').change(function(){
		$('.optiontipe').remove();
		if($(this).val() == 'false'){
			$('#merklaptopbaru').show();
			$('#tipelaptopbaru').show();
			$('.next1').show();
			$('#selector_tipe_laptop').hide();
		}else{
			alert("<?= $getMerklaptop; ?>");
			$('.next1').show();
			$('#merklaptopbaru').hide();
			$('#tipelaptopbaru').hide();
			$('#selector_tipe_laptop').show();
		}
		<?php foreach ($data['tipe_laptop'] as $tipe):?>
			if ($(this).val() == "<?= $tipe['id_merk_laptop']; ?>") {
				$('#selector_tipe_laptop').append("<option class='optiontipe' value='<?= $tipe['id_tipe_laptop']; ?>'><?= $tipe['tipe_laptop']; ?></option>");
			}
		<?php endforeach; ?>
	});

	$('#selector_tipe_laptop').change(function(){
		if ($(this).val() == 'false') {
			$('#tipelaptopbaru').show();
		}else{
			$('#tipelaptopbaru').hide();
		}
	});

	$('#selector_merk_hp').change(function(){
		$('.optiontipe2').remove();
		if($(this).val() == 'false'){
			$('#merkhpbaru').show();
			$('#tipehpbaru').show();
			$('#selector_tipe_hp').hide();
			$('.next2').show();
		}else{
			$('#merkhpbaru').hide();
			$('#tipehpbaru').hide();
			$('#selector_tipe_hp').show();
			$('.next2').show();
		}

		<?php foreach ($data['tipe_hp'] as $tipe):?>
			if ($(this).val() == "<?= $tipe['id_merk_hp']; ?>") {
				$('#selector_tipe_hp').append("<option class='optiontipe2' value='<?= $tipe['id_tipe_hp']; ?>'><?= $tipe['tipe_hp']; ?></option>");
			}
		<?php endforeach; ?>
	});

	$('#selector_tipe_hp').change(function(){
		if ($(this).val() == 'false') {
			$('#tipehpbaru').show();
		}else{
			$('#tipehpbaru').hide();
		}
	});

	$('.next1').click(function(){
		$('.container_laptop').hide();
		$('.container_kerusakan_laptop').show();
	});
	$('.next2').click(function(){
		$('.container_hp').hide();
	});

	//untuk step 3

	$('#selector_kerusakan_laptop').change(function(){
		if ($(this).val() == 'false') {
			$('#kerusakanlaptopbaru').show();
			$('.next3').show();
			$('#ketkerlap').show();
		}else{
			$('#kerusakanlaptopbaru').hide();
			$('.next3').show();
			$('#ketkerlap').show();
		}
	});


});
</script>