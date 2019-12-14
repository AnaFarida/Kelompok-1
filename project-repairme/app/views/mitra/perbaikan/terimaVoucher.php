<!-- daterange picker -->
<link rel="stylesheet" href="<?= BASEURL; ?>/panel-master/plugins/daterangepicker/daterangepicker.css">
<!-- InputMask -->
<script src="<?= BASEURL; ?>/panel-master/plugins/moment/moment.min.js"></script>
<!-- date-range-picker -->
<script src="<?= BASEURL; ?>/panel-master/plugins/daterangepicker/daterangepicker.js"></script>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Perbaikan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Perbaikan</a></li>
            <li class="breadcrumb-item active">Perbaikan</li>
          </ol>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card card-dark" style="width: 35%; margin-left: 20px">
      <div class="card-header">
        <h3 class="card-title">Masukkan Voucher</h3>
      </div>
      <div class="card-body">
        <div class="input-group">
          <input class="form-control form-control-lg" type="text" id="cariVoucher" name="cariVoucher"  placeholder="Voucher">
          <span class="input-group-append">
            <button type="button" class="btn btn-dark terimaVoucher">Terima</button>
          </span>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    
    <!-- untuk laptop -->
    <div class="card card-dark dataLaptop" style="width: 40%; position: absolute; right: 5%; top: 10%;">
      <div class="card-header">
        <h3 class="card-title">Informasi Laptop</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td style="width: 30%;"><strong>Merk Laptop</strong></td>
              <td class="merklaptop"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Tipe Laptop</strong></td>
              <td class="tipelaptop"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Kerusakan Laptop</strong></td>
              <td class="kerusakanlaptop"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Keterangan Lain</strong></td>
              <td class="keteranganlainlaptop"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Keterangan Mitra</strong></td>
              <td class="keteranganmitralaptop"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Harga</strong></td>
              <td class="hargalaptop"></td>
            </tr>
          </tbody>
        </table>
        <button class="btn btn-dark btn-block mt-4" data-toggle="modal" data-target="#terimaLaptop" type="button">Perbaiki Laptop</button>
      </div>
      <!-- /.card-body -->
    </div>
    <div class="card card-dark pelangganLaptop" style="width: 35%;  margin-left: 20px">
      <div class="card-header">
        <h3 class="card-title">Informasi Pelanggan</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td style="width: 42%;"><strong>Nama Pelanggan</strong></td>
              <td class="namapelangganlaptop"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    
    <!-- untuk hp -->
    <div class="card card-dark datahp" style="width: 40%; position: absolute; right: 5%; top: 10%;">
      <div class="card-header">
        <h3 class="card-title">Informasi Handphone</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td style="width: 30%;"><strong>Merk Handphone</strong></td>
              <td class="merkhp"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Tipe hp</strong></td>
              <td class="tipehp"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Kerusakan Handphone</strong></td>
              <td class="kerusakanhp"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Keterangan Lain</strong></td>
              <td class="keteranganlainhp"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Keterangan Mitra</strong></td>
              <td class="keteranganmitrahp"></td>
            </tr>
            <tr>
              <td style="width: 30%;"><strong>Harga</strong></td>
              <td class="hargahp"></td>
            </tr>
          </tbody>
        </table>
        <button class="btn btn-dark btn-block mt-4">Perbaiki Handphone</button>
      </div>
      <!-- /.card-body -->
    </div>
    <div class="card card-dark pelangganhp" style="width: 35%;  margin-left: 20px">
      <div class="card-header">
        <h3 class="card-title">Informasi Pelanggan</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td style="width: 42%;"><strong>Nama Pelanggan</strong></td>
              <td class="namapelangganhp"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

<!-- untuk penerimaan -->

<!-- Modal -->
<div class="modal fade" id="terimaLaptop" tabindex="-1" role="dialog" aria-labelledby="terimaLaptopLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="card  card-dark" style="position: absolute; right: 0; left: 0; top: 0;">
              <div class="card-header">
                <h3 class="card-title">Date picker</h3>
              </div>
              <div class="card-body">
              <!-- Date and time range -->
                <div class="form-group">
                  <label>Perkiraan Mitra :</label>

                  <div class="input-group">
                    <button type="button" class="btn btn-default float-right" id="daterange">
                      <i class="far fa-calendar-alt"></i>Perkiraan Lama Perbaikan
                    </button>
                  </div>
                </div>
                <br>
                <span id="reportrange"></span>
                <br>
                <span id="reportrangeday"></span>
                <!-- /.form group -->

              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $('.dataLaptop').hide();
    $('.pelangganLaptop').hide();
    $('.datahp').hide();
    $('.pelangganhp').hide();

    $('.terimaVoucher').click(function(){
      <?php foreach ($data['voucher'] as $voucher):?>
        if ("<?= $voucher['voucher_laptop']; ?>" === $('#cariVoucher').val()) {
          <?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
            if ("<?= $voucher['id_perbaikan_laptop']; ?>" === "<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>") {
              $('#cariVoucher').val('');
              //untuk barang
              $('.merklaptop').text("<?= $data['perbaikan']['merk_laptop'][$i][0]['merk_laptop']; ?>");
              $('.tipelaptop').text("<?= $data['perbaikan']['tipe_laptop'][$i][0]['tipe_laptop']; ?>");
              $('.kerusakanlaptop').text("<?= $data['perbaikan']['kerusakan_laptop'][$i][0]['kerusakan_laptop']; ?>");
              $('.keteranganlainlaptop').text("<?= $data['perbaikan']['keterangan_lain'][$i]; ?>");
              $('.keteranganmitralaptop').text("<?= $data['perbaikan']['perbaikan_laptop'][$i]['keterangan_mitra']; ?>");
              $('.hargalaptop').text("<?= $data['perbaikan']['harga'][$i]; ?>");

              //untuk data pelanggan
              $('.namapelangganlaptop').text("<?= $data['perbaikan']['pelanggan'][$i][0]['nama']; ?>");
              $('.datahp').hide();
              $('.pelangganhp').hide();

              $('.dataLaptop').show();
              $('.pelangganLaptop').show();
            }
          <?php endfor; ?>
        }
      <?php endforeach; ?>
      <?php foreach ($data['voucher2'] as $voucher):?>
        else if("<?= $voucher['voucher_hp']; ?>" === $('#cariVoucher').val()){
          <?php for ($i=0; $i < count($data['perbaikan2']['perbaikan_hp']); $i++):?>
            if ("<?= $voucher['id_perbaikan_hp']; ?>" === "<?= $data['perbaikan2']['perbaikan_hp'][$i]['id_perbaikan']; ?>") {
              $('#cariVoucher').val('');
              //untuk barang
              $('.merkhp').text("<?= $data['perbaikan2']['merk_hp'][$i][0]['merk_hp']; ?>");
              $('.tipehp').text("<?= $data['perbaikan2']['tipe_hp'][$i][0]['tipe_hp']; ?>");
              $('.kerusakanhp').text("<?= $data['perbaikan2']['kerusakan_hp'][$i][0]['kerusakan_hp']; ?>");
              $('.keteranganlainhp').text("<?= $data['perbaikan2']['keterangan_lain'][$i]; ?>");
              $('.keteranganmitrahp').text("<?= $data['perbaikan2']['perbaikan_hp'][$i]['keterangan_mitra']; ?>");
              $('.hargahp').text("<?= $data['perbaikan2']['harga'][$i]; ?>");

              //untuk data pelanggan
              $('.namapelangganhp').text("<?= $data['perbaikan2']['pelanggan'][$i][0]['nama']; ?>");
              $('.dataLaptop').hide();
              $('.pelangganLaptop').hide();
              $('.datahp').show();
              $('.pelangganhp').show();
            }
        <?php endfor; ?>
        }
        <?php endforeach; ?>

        else{
          alert("Voucher Tidak Ditemukan");
        }
    });

    //Date range button
    var start = moment();
    var end = moment().add(170,'days');
    $('#daterange').daterangepicker(
      {
        startDate : start,
        endDate : end,
        ranges   : {
          'Hari ini'       : [moment(), moment()],
          '3 Hari '   : [moment(), moment().add(3, 'days')],
          '1 Minggu' : [moment(), moment().add(7, 'days')],
          '2 Minggu': [moment(), moment().add(12, 'days')],
          '30 Hari'  : [moment(), moment().add(30,'days')]
        },
        minDate : moment()
      },
      function (star, end) {
        $('#reportrange').text('Jarak Waktu : ' + star.format('D-MMMM-YYYY') + ' sampai ' + end.format('D-MMMM-YYYY'))
        var range = end.format('D') - star.format('D');
        
        $('#reportrangeday').text('Hari : ' + range);
      }
    );

});
</script>
