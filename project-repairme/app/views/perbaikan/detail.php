<section class="module">
	<div class="tutorial" style="position: absolute; left: 3%; width: 50%; top: 20%;">
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
<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<h1 class="module-title font-alt">Laptop</h1>
</div>
</div>
<h4 class="font-alt mb-0"><?= $_SESSION['login']['data']['nama']; ?></h4>
<hr class="divider-w pt-20">
<div class="row">
<div class="col-sm-12">
<table class="table table-striped table-border checkout-table">
	<?= $data['perbaikan']['keterangan_lain'][0]; ?>
	<tbody>
		<?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
		<tr>
			<th class="hidden-xs" style="width: 18%;">Mitra</th>
			<th style="width: 20%;">Status Perbaikan</th>
			<th class="hidden-xs">Merk Laptop</th>
			<th>Tipe Laptop</th>
			<th>Kerusakan</th>
			<th>Keterangan Lain</th>
			<th>Remove</th>
		</tr>
		<tr>
			<td>
				<h5 class="product-title font-alt"><?= $data['perbaikan']['mitra'][$i][0]['nama_usaha']; ?></h5>
			</td>
			<td>
				<h5 class="product-title font-alt"><?= $data['perbaikan']['status'][$i][0]['status_perbaikan']; ?></h5>
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
			<td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
		</tr>
		<?php endfor; ?>
	</tbody>
</table>
</div>
</div>
<div class="row">
<div class="col-sm-3">
<div class="form-group">
	<input class="form-control" type="text" id="" name="" placeholder="Coupon code"/>
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
	<button class="btn btn-round btn-g" type="submit">Apply</button>
</div>
</div>
<div class="col-sm-3 col-sm-offset-3">
<div class="form-group">
	<button class="btn btn-block btn-round btn-d pull-right" type="submit">Update Cart</button>
</div>
</div>
</div>
<hr class="divider-w">
<div class="row mt-70">
<div class="col-sm-5 col-sm-offset-7">
<div class="shop-Cart-totalbox">
	<h4 class="font-alt">Cart Totals</h4>
	<table class="table table-striped table-border checkout-table">
		<tbody>
			<tr>
				<th>Cart Subtotal :</th>
				<td>£40.00</td>
			</tr>
			<tr>
				<th>Shipping Total :</th>
				<td>£2.00</td>
			</tr>
			<tr class="shop-Cart-totalprice">
				<th>Total :</th>
				<td>£42.00</td>
			</tr>
		</tbody>
	</table>
	<button class="btn btn-lg btn-block btn-round btn-d" type="submit">Proceed to Checkout</button>
</div>
</div>
</div>
</div>