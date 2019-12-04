<div class="mt-80" style="position: absolute; left: 64%;">
<h4 class="font-alt mb-0 namaMitra">Barang Dan Kerusakan</h4>
<hr class="divider-w mt-10 mb-20" style="width: 120%;">
</div>
<form class="row detailKerusakan" style="position: absolute; top: 25%; right: 10%; width: 28%;">
<select class="form-control" id="merk" style="margin: 10px;">
<option selected="selected">MERK</option>
<?php for ($i=0; $i < count($data['barangMerk']); $i++):?>
<option class="merk"><?= $data['barangMerk'][$i][0]['merk']; ?></option>
<?php endfor; ?>
</select>
<select class="form-control" style="margin: 10px;">
<option selected="selected">TIPE</option>
<?php foreach ($data['barang']['merk'] as $value):?>
<option class="tipe"><?= $value['merk']; ?></option>
<?php endforeach; ?>
</select>
<button class="btn btn-block btn-round btn-d" type="button" style="margin: 10px; margin-top: 30px;">SELANJUTNYA</button>
</form>
<script>
	$(document).ready(function(){
		$('.merk').on('click',function(){
			<?php for ($i=0; $i < count($data['barangTipe']); $i++):?>
				$('.tipe').text("<?= $data['barangTipe'][$i][0]['tipe']; ?>");
			<?php endfor; ?>
		});
	});
</script>