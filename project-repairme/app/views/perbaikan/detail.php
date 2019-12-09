

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

  <div class="container" style="position: absolute; top: 100%; left: 10%; width: 80%; ">
    <div class="row">
    <div class="row">
      <div class="col-sm-12">
        <?php foreach ($data['perbaikan']['hp'] as $laptop):?>
        <table class="table table-striped table-border checkout-table laptop">
          <tbody>
            <tr>
              <th class="hidden-xs">Jenis</th>
              <th>Description</th>
              <th class="hidden-xs">Price</th>
              <th>Quantity</th>
              <th>Total</th>
              <th>Remove</th>
            </tr>
            <tr>
              
              <td class="hidden-xs"><a href="#"><img src=""></a></td>
              <td>
                <h5 class="product-title font-alt">Accessories Pack</h5>
              </td>
              <td class="hidden-xs">
                <h5 class="product-title font-alt">£20.00</h5>
              </td>
              <td>
                <input class="form-control" type="number" name="" value="1" max="50" min="1"/>
              </td>
              <td>
                <h5 class="product-title font-alt">£20.00</h5>
              </td>
              <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
            </tr>
          </tbody>
        </table>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<script>  

</script>