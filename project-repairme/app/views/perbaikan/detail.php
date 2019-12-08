<section class="module">
<div style="position: absolute; top: 20%;">
<h4 class="font-alt mb-0 namaMitra">Barang Dan Kerusakan</h4>
<hr class="divider-w mt-10 mb-20" style="width: 120%;">
</div>
<div class="barang et-icons" style="margin: 0 10%;">
<span class="box1">
  <span class="icon-laptop" aria-hidden="true" style="width:100%;">
  <button class="btn btn-block btn-round btn-d tlaptop" type="button" style="margin-top: 3px;" value="laptop">LAPTOP</button></span>
</span>
<span class="box1">
  <span class="icon-phone" aria-hidden="true" style="width: 100%;">
    <button class="btn btn-block btn-round btn-d thp" type="button" style="margin-top: 3px;" value="hp">HANDPHONE</button>
  </span>
</span>
</div>

  <div class="container">
    <div class="row" style="position: absolute; height: 700px;">
    <div class="row">
      <div class="col-sm-12">
        <?php foreach ($data['perbaikan']['laptop'] as $laptop):?>
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
    
    <script>
    // $('.laptop').hide();
    </script>
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
</section>