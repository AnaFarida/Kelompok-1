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

</div>
<script>
	$(document).ready(function(){
		// $('.tutorial2').hide();
		$('.tutorial').hide();
		$('.batal').click(function(){
			alert('Mohon Maaf Anda Harus Mengikuti Persyaratan Dan Peraturan Kami!');
		});
		$('.setuju').click(function(){
			$('.syarat').hide();
			$('.tutorial').hide();
		});
	});
</script>