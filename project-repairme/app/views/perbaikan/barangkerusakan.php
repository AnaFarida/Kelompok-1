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
<button class="btn btn-block btn-round btn-d tlaptop" type="button" style="margin-top: 3px;">LAPTOP</button></span>
</span>
<span class="box1" style="width: 50%;">
<span class="icon-phone" aria-hidden="true" style="width: 100%;">
	<button class="btn btn-block btn-round btn-d thp" type="button" style="margin-top: 3px;">HANDPHONE</button>
</span>
</span>
</div>
<form class="row detailKerusakan" style="position: absolute; top: 25%; right: 8%; width: 24%;">
<select class="form-control" style="margin: 10px;">
<option selected="selected">MERK</option>
<option>A</option>
</select>
<select class="form-control" style="margin: 10px;">
<option selected="selected">TIPE</option>
<option>A</option>
</select>
<select class="form-control" style="margin: 10px;">
<option selected="selected">KERUSAKAN</option>
<option>A</option>
</select>
<button class="btn btn-block btn-round btn-d" type="submit" style="margin: 10px; margin-top: 30px;">KIRIM PERMINTAAN</button>
</form>
<script>
$(document).ready(function(){
$('.detailKerusakan').hide();
$('.tlaptop').on('click', function(){
$('.barang').hide();
$('.detailKerusakan').show();
});
$('.thp').on('click', function(){
$('.barang').hide();
$('.detailKerusakan').show();
});
});
</script>