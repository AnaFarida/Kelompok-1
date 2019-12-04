<div class="container_laptop">
<div class="mt-80" style="position: absolute; left: 64%;">
<h4 class="font-alt mb-0 namaMitra">Barang Dan Kerusakan</h4>
<hr class="divider-w mt-10 mb-20" style="width: 120%;">
</div>
<form class="row detailKerusakan" style="position: absolute; top: 25%; right: 10%; width: 28%;">
<select class="form-control" id="merk" style="margin: 10px;">
<option selected="selected">MERK</option>
<option class="merk"></option>
</select>
<select class="form-control" id="tipe" style="margin: 10px;">
<option selected="selected">TIPE</option>
<?php foreach ($data['tipe_laptop'] as $tipe_laptop):?>
<option class="tipe"><?= $tipe_laptop['tipe_laptop']; ?></option>	
<?php endforeach; ?>
</select>
<?php var_dump($data['merk_laptop']); ?>
<button class="btn btn-block btn-round btn-d" type="button" style="margin: 10px; margin-top: 30px;">SELANJUTNYA</button>
</form>
</div>



<script>
	$(document).ready(function(){

		if ("<?= $data['kategori']; ?>" == 'laptop') {
			// $('.container_laptop').hide();
			$('#tipe').hide();
			$('#merk').on('change',function(){
				<?php foreach ($data['laptop'] as $laptop):?>
					if ($(this).val() == "<?= $laptop['id_merk_laptop']; ?>") {
					
					$('#tipe').show();
						
					}
				<?php endforeach; ?>
			});
		}
		
	});
</script>