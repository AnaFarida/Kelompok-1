<script src="<?= BASEURL; ?>/panel-master/plugins/moment/moment.min.js"></script>
<script src="<?= BASEURL; ?>/js/autoNumeric.js"></script>
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
            <li class="breadcrumb-item active">Pengajuan Perbaikan</li>
          </ol>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <?php Flasher::flash(); ?>
      <!-- Default box -->
      <div class="card card-dark">
        <div class="card-header">
          <h3 class="card-title">Laptop</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
            <thead>
              <tr>
                <th style="width: 13%">
                  Pelanggan
                </th>
                <th style="width: 13%">
                  Laptop
                </th>
                <th style="width: 13%;">
                  Kerusakan
                </th>
                <th style="width: 8%;">
                  Lama
                </th>
                <th style="width: 5%;">
                  detail
                </th>
                <th style="width: 15%">
                  Keterangan
                </th>
                <th style="width: 15%">
                <button type="button" class="btn btn-default toastsDefaultDefault">
                  Launch Default Toast
                </button>
                </th>
                <th style="width: 40%">
                  Keterangan
                </th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
              <?php if ($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 4 || $data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 5):?>
              <tr>
                <td>
                  <a>
                    <?= $data['perbaikan']['pelanggan'][$i][0]['nama']; ?>
                  </a>
                </td>
                <td>
                  <ul class="list-inline">
                    <?= $data['perbaikan']['merk_laptop'][$i][0]['merk_laptop']; ?>
                    <?= $data['perbaikan']['tipe_laptop'][$i][0]['tipe_laptop']; ?>
                  </ul>
                </td>
                <td>
                  <ul class="list-inline">
                    <?= $data['perbaikan']['kerusakan_laptop'][$i][0]['kerusakan_laptop']; ?>,
                    <?= $data['perbaikan']['keterangan_lain'][$i]; ?>
                  </ul>
                </td>
                <td >
                  <ul class="list-inline">
                   <?php if($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 4): ?>
                    <?= $data['perbaikan']['waktu'][$i][0]['waktu_hari']; ?>
                  <?php endif; ?>
                  <?php if($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 5): ?>
                     ---------
                  <?php endif ?>
                  </ul>
                </td>
                <td>
                  <ul class="list-inline">
                     <?php if($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 4): ?>
                    <button class="btn btn-dark btn-sm btn-p-laptop" data-toggle="modal" data-target="#progress" value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                        Persentase
                    </button>
                  <?php endif; ?>
                   <?php if($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 5): ?>
                    <button class="btn btn-secondary btn-sm" disabled>
                        Persentase
                    </button>
                   <?php endif; ?>
                  </ul>
                </td>
                 <td>
                  <ul class="list-inline">
                    <?= $data['perbaikan']['perbaikan_laptop'][$i]['keterangan_mitra']; ?>
                  </ul>
                </td>
                <td >
                  <ul class="list-inline">
                    <?= $data['perbaikan']['harga'][$i]; ?>
                  </ul>
                </td>
                 <td>
                  <ul class="list-inline">
                    <?php if($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 4): ?>
                    <button class="btn btn-dark btn-sm btn-p-laptop" data-toggle="modal" data-target="#ketlaptop" value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                      Ubah Keterangan
                    </button>
                   <?php endif; ?>
                    <?php if($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 5): ?>
                    <p style="color: red">
                      Menunggu Persetujuan Penambahan Harga
                    </p>
                  <?php endif; ?>
                  </ul>
                </td>
              </tr>
            </tbody>
            <?php endif; ?>
            <?php endfor; ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <br><br>
      <!-- untuk hp -->
      <div class="card card-dark">
        <div class="card-header">
          <h3 class="card-title">Laptop</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
            <thead>
              <tr>
                <th style="width: 13%">
                  Pelanggan
                </th>
                <th style="width: 13%">
                  Laptop
                </th>
                <th style="width: 13%;">
                  Kerusakan
                </th>
                <th style="width: 8%;">
                  Lama
                </th>
                <th style="width: 5%;">
                  detail
                </th>
                <th style="width: 15%">
                  Keterangan
                </th>
                <th style="width: 15%">
                  Harga Awal
                </th>
                <th style="width: 40%">
                  Keterangan
                </th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i=0; $i < count($data['perbaikan2']['perbaikan_hp']); $i++):?>
              <?php if ($data['perbaikan2']['perbaikan_hp'][$i]['id_status_perbaikan'] == 4):?>
              <tr>
                <td>
                  <a>
                    <?= $data['perbaikan2']['pelanggan'][$i][0]['nama']; ?>
                  </a>
                </td>
                <td>
                  <ul class="list-inline">
                    <?= $data['perbaikan2']['merk_hp'][$i][0]['merk_hp']; ?>
                    <?= $data['perbaikan2']['tipe_hp'][$i][0]['tipe_hp']; ?>
                  </ul>
                </td>
                <td>
                  <ul class="list-inline">
                    <?= $data['perbaikan2']['kerusakan_hp'][$i][0]['kerusakan_hp']; ?>,
                    <?= $data['perbaikan2']['keterangan_lain'][$i]; ?>
                  </ul>
                </td>
                <td >
                  <ul class="list-inline">
                    
                    <?= $data['perbaikan2']['waktu'][$i][0]['waktu_hari']; ?>
                  </ul>
                </td>
                <td>
                  <ul class="list-inline">
                    <button class="btn btn-dark btn-sm btn-p-hp" data-toggle="modal" data-target="#progress" value="<?= $data['perbaikan2']['perbaikan_hp'][$i]['id_perbaikan']; ?>">
                        Persentase
                    </button>
                  </ul>
                </td>
                 <td>
                  <ul class="list-inline">
                    <?= $data['perbaikan2']['perbaikan_hp'][$i]['keterangan_mitra']; ?>
                  </ul>
                </td>
                <td >
                  <ul class="list-inline">
                    <?= $data['perbaikan2']['harga'][$i]; ?>
                  </ul>
                </td>
                 <td>
                  <ul class="list-inline">
                    <button class="btn btn-dark btn-sm btn-p-hp" data-toggle="modal" data-target="#kethp" value="<?= $data['perbaikan2']['perbaikan_hp'][$i]['id_perbaikan']; ?>">
                      Ubah Keterangan
                    </button>
                  </ul>
                </td>
               
              </tr>
            </tbody>

            <?php endif; ?>
            <?php endfor; ?>
          </table>
        </div>

  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper-->
  <!-- untuk pengubahan laptop -->
  <!-- Modal -->
  <div class="modal fade" id="ketlaptop" tabindex="-1" role="dialog" aria-labelledby="ketlaptopLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ketlaptopLabel">Beri Keterangan Lain</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group mt-20">
            <form action="<?= BASEURL; ?>/mitra/ubahperbaikan" method="POST" id="formlaptop">
              <input type="text" id="id_perbaikan_laptop" name="id_perbaikan_laptop" hidden>
              <input class="form-control" id="hrg_laptop_1" type="text" data-a-sign="Rp. " data-a-dec="," data-a-sep="." hidden>
              <button class="btn btn-dark btn_ubh_ket_lap" type="button" style="width: 49%;">
                Ubah Keterangan
              </button>
              <button class="btn btn-dark btn_ket_harga_lap" type="button" style="width: 49%;">
                Ubah Harga
              </button>
            </div>
            <div class="form-group mt-20">
               <button class="btn btn-success diskon_lap" type="button" style="width: 49%;">
                Beri Diskon
              </button>
              <button class="btn btn-warning tmb_hrg_lap" type="button" style="width: 49%;">
                Tambah Harga
              </button>
            </div>
            <div class="form-group">
               <input class="form-control" id="hrg_laptop_ds" disabled>
            </div>
            <div class="form-group mt-20">
              <select class="form-control" id="p_diskon_lap">
                  <option selected="true">Persentase Diskon</option>
                  <option>3%</option>
                  <option>5%</option>
                  <option>10%</option>
                  <option>20%</option>
                  <option>30%</option>
                  <option>40%</option>
                  <option>50%</option>
                  <option>60%</option>
                  <option>70%</option>
            </select>
            </div>
            <div class="form-group mt-20">
              <input class="form-control" id="hrg_laptop" type="text" data-a-sign="Rp. " data-a-dec="," data-a-sep="." placeholder="Harga Rupiah">
              <p class="hrg_laptop" style="color: red;"></p>
            </div>
             <div class="form-group mt-20">
              <input class="form-control" id="hrg_laptop_2" type="text" data-a-sign="Rp. " data-a-dec="," data-a-sep="." placeholder="Harga Rupiah">
              <p class="hrg_laptop_2" style="color: red;"></p>
            </div>
            <div class="form-group">
               <input class="form-control" id="hrg_laptop_t" name="hrg_laptop_t" type="text" data-a-sign="Total: Rp. " data-a-dec="," data-a-sep="." disabled>
            </div>
              <input type="text" id="hrg_laptop_final" name="hrg_laptop_final" hidden>
              <input type="text" id="pemberhentian" name="pemberhentian" hidden>
            <div class="form-group mt-20">
              <input class="form-control" id="ketlaptoplain" name="ketlaptoplain" type="text" placeholder="Keterangan">
            </div>
            <div class="form-group mt-20">
               <button class="btn btn-dark ubah_lap" type="button" style="width: 100%;">Ubah</button>
            </div>
          </div>
          </form>
      </div>
    </div>
  </div>

  <!-- untuk pengubahan hp -->
    <!-- Modal -->
  <div class="modal fade" id="ketlaptop" tabindex="-1" role="dialog" aria-labelledby="ketlaptopLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ketlaptopLabel">Beri Keterangan Lain</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group mt-20">
            <form action="<?= BASEURL; ?>/mitra/ubahperbaikan" method="POST" id="formlaptop">
              <input type="text" id="id_perbaikan_laptop" name="id_perbaikan_laptop" hidden>
              <input class="form-control" id="hrg_laptop_1" name="hrg_laptop_1" type="text" data-a-sign="Rp. " data-a-dec="," data-a-sep="." hidden>
              <button class="btn btn-dark btn_ubh_ket_lap" type="button" style="width: 49%;">
                Ubah Keterangan
              </button>
              <button class="btn btn-dark btn_ket_harga_lap" type="button" style="width: 49%;">
                Ubah Harga
              </button>
            </div>
            <div class="form-group mt-20">
               <button class="btn btn-success diskon_lap" type="button" style="width: 49%;">
                Beri Diskon
              </button>
              <button class="btn btn-warning tmb_hrg_lap" type="button" style="width: 49%;">
                Tambah Harga
              </button>
            </div>
            <div class="form-group">
               <input class="form-control" id="hrg_laptop_ds" disabled>
            </div>
            <div class="form-group mt-20">
              <select class="form-control" id="p_diskon_lap">
                  <option selected="true">Persentase Diskon</option>
                  <option>3%</option>
                  <option>5%</option>
                  <option>10%</option>
                  <option>20%</option>
                  <option>30%</option>
                  <option>40%</option>
                  <option>50%</option>
                  <option>60%</option>
                  <option>70%</option>
            </select>
            </div>
            <div class="form-group mt-20">
              <input class="form-control" id="hrg_laptop" type="text" data-a-sign="Rp. " data-a-dec="," data-a-sep="." placeholder="Harga Rupiah">
              <p class="hrg_laptop" style="color: red;"></p>
            </div>
             <div class="form-group mt-20">
              <input class="form-control" id="hrg_laptop_2" name="hrg_laptop_2" type="text" data-a-sign="Rp. " data-a-dec="," data-a-sep="." placeholder="Harga Rupiah">
              <p class="hrg_laptop_2" style="color: red;"></p>
            </div>
            <div class="form-group">
               <input class="form-control" id="hrg_laptop_t" name="hrg_laptop_t" type="text" data-a-sign="Total: Rp. " data-a-dec="," data-a-sep="." disabled>
            </div>

            <div class="form-group mt-20">
              <input class="form-control" id="ketlaptoplain" name="ketlaptoplain" type="text" placeholder="Keterangan">
            </div>
            <div class="form-group mt-20">
               <button class="btn btn-dark ubah_lap" type="button" style="width: 100%;">Ubah</button>
            </div>
          </div>
          </form>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="progress" tabindex="-1" role="dialog" aria-labelledby="progressLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      </button>
    </div>
    <div class="modal-body">
      <div class="content" style="width: 30%; position: absolute; background-color: white; right: 30%; height: 100px;">
        <div class="pers"   style="width: 90%; margin-top: 10px; margin-left: 10px;">
          <p>Persentasi Waktu Berakhir :</p>
          <div class="progress progress-sm">
            
            <div class="progress-bar hithari bg-success"></div>
          </div>
          <span class="badge bg-info persentase"></span>
          <span class="badge bg-info waktuberakhir"></span>
        </div>
      </div>
    </div>
  </form>
</div>


<script>
$(document).ready(function(){
  $('#hrg_laptop_2').hide();
  $('#hrg_laptop').hide();
  $('#hrg_laptop_ds').hide();
  $('#hrg_laptop_t').hide();
  $('#ketlaptoplain').hide();
  $('.ubah_lap').hide();
  $('.tmb_hrg_lap').hide();
  $('.diskon_lap').hide();
  $('#p_diskon_lap').hide();
  var harga_awal_lp;
  $('.btn-p-laptop').click(function(){
  <?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
  <?php if ($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 4):?>
  if ("<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>" === $(this).val()) {
    var terakhir = "<?= $data['perbaikan']['waktu'][$i][0]['berakhir']; ?>";
    //untuk mengambil sisa hari
    var now = Math.floor(parseInt(terakhir) - Math.floor(moment())) / 86400000;
    var ambilhari = "<?= $data['perbaikan']['waktu'][$i][0]['waktu_hari']; ?>";
    let jmlHari = ambilhari.split(' ', 1);
    let hariDilalui = parseInt(jmlHari) - Math.floor(now);
    var persentase = Math.floor(hariDilalui) / parseInt(Math.floor(jmlHari)) * 100;
    let get_harga_awal_lp = "<?= $data['perbaikan']['perbaikan_laptop'][$i]['harga']; ?>";
    harga_awal_lp = get_harga_awal_lp;
  
    $('#hrg_laptop_ds').val('Harga Awal : ' + harga_awal_lp);
    $('#id_perbaikan_laptop').val("<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>");
// const countday;
// alert(Math.floor(persentase));
  $('.waktuberakhir').text('waktu tinggal : '+Math.floor(now) + ' hari');
  if (persentase <= 50) {
  $('.hithari').attr('style', 'width:' + persentase + '%;');
  $('.persentase').text(Math.floor(persentase) + '%');
  }else if (persentase > 50 && persentase < 75) {
  $('.hithari').attr('style', 'width:' + persentase + '%;');
  $('.hithari').addClass('bg-warning');
  $('.persentase').text(Math.floor(persentase) + '%')
  }else{
  $('.hithari').attr('style', 'width:' + persentase + '%;');
  $('.hithari').addClass('bg-danger');
  $('.persentase').text(Math.floor(persentase) + '%')
  }
  }
<?php endif; ?>
<?php endfor; ?>
});


  $('.btn_ubh_ket_lap').click(function(){
    $('#hrg_laptop_2').hide();
    $('#hrg_laptop').hide();
    $('#hrg_laptop_ds').hide();
    $('#hrg_laptop_t').hide();
    $('#ketlaptoplain').hide();
    $('.ubah_lap').hide();
    $('.tmb_hrg_lap').hide();
    $('.diskon_lap').hide();
    $('#p_diskon_lap').hide();
    $('.tmb_hrg_lap').hide();
    $('.diskon_lap').hide();
    $('#ketlaptoplain').show();
    $('.ubah_lap').show();
  });

  $('.btn_ket_harga_lap').click(function(){
    $('.hrg_laptop_2').text('');
    $('#hrg_laptop_2').hide();
    $('#p_diskon_lap').hide();
    $('.hrg_laptop').text('');
    $('#hrg_laptop_ds').hide();
    $('#hrg_laptop_t').hide();
    $('#ketlaptoplain').hide();
    $('#hrg_laptop').hide();
    $('#hrg_laptop').val('');
    $('.ubah_lap').hide();
    $('#hrg_laptop').hide();
    $('.tmb_hrg_lap').show();
    $('.diskon_lap').show();
   });

  $('.tmb_hrg_lap').click(function(){
     $('#hrg_laptop_2').hide();
    $('#hrg_laptop').autoNumeric('init');
    $('#p_diskon_lap').hide();
    $('.hrg_laptop').text('');
    $('.tmb_hrg_lap').hide();
    $('.diskon_lap').hide();
    $('#ketlaptoplain').show();
    $('#hrg_laptop').show();
    $('.ubah_lap').show();
    $('#hrg_laptop_ds').show();
    $('#hrg_laptop_t').hide();

  });

  $('#hrg_laptop').keyup(function(){
    $('#hrg_laptop_t').autoNumeric('destroy');
    $('#hrg_laptop_1').autoNumeric('destroy');
    let harga = parseInt($(this).val().split('Rp').pop().split('.').join(""));
    let hrg_awl = parseInt(harga_awal_lp.split('Rp.').pop().split('.').join(""));
    var total = hrg_awl + harga;
    $('#hrg_laptop_t').val(total);
    $('#hrg_laptop_1').val(total);
    $('#hrg_laptop_1').autoNumeric('init');
    $('#hrg_laptop_t').autoNumeric('init');
    $('#hrg_laptop_t').show();
    // $('#hrg_laptop_ttl').show();
    var awl =  hrg_awl - harga;
    var persentase = Math.floor(harga / hrg_awl * 100);

    if (persentase > 20) {
      $('.hrg_laptop').html('Anda menaikkan ' + persentase + '% harga!'+"<br><strong>"+' Perbaikan akan di hentikan untuk menunggu persetujuan pelanggan '+"</strong><br>"+' Jika pelanggan menolak, silahkan kembalikan barang pelanggan, dan jika pelanggan menerima silahkan lanjutkan perbaikan');
    }else{
      $('.hrg_laptop').text('');
    }
  })

  $('.diskon_lap').click(function(){
    $('#p_diskon_lap').show();
    $('.hrg_laptop_2').text('');
    $('.tmb_hrg_lap').hide();
    $('.diskon_lap').hide();
    $('#ketlaptoplain').show();
    $('#hrg_laptop_2').hide();
    $('.ubah_lap').show();
    $('#hrg_laptop_ds').show();
    $('#p_diskon_lap').show();
    
  });

  $('#p_diskon_lap').change(function(){
    $('#hrg_laptop_2').autoNumeric('destroy');
    let hrg_awl = parseInt(harga_awal_lp.split('Rp.').pop().split('.').join(""));
    var diskon = hrg_awl * parseInt($('#p_diskon_lap').val()) / 100;
    var total = hrg_awl - diskon;
    $('#hrg_laptop_2').val(Math.floor(total));
    $('#hrg_laptop_2').autoNumeric('init');
    $('.hrg_laptop_2').text('Harga Awal Di Kurangi Diskon'); 
    $('#hrg_laptop_2').show();
  });

  $('#hrg_laptop_2').keyup(function(){
    let hrg_awl = parseInt(harga_awal_lp.split('Rp.').pop().split('.').join(""));
    $('.hrg_laptop_2').text('Perhatikan Harga Yang Anda Masukkan!');
    if ($(this).autoNumeric('get') >= hrg_awl) {
      $('.hrg_laptop_2').text('Harga Baru Anda Melebihi Harga Awal!!!!');
    }
  });

  $('#hrg_laptop').keyup(function(){

  //    try {
  //    var self = $(this).val();
  //    var v = self.autoNumeric('get');
  //    self.autoNumeric('destroy');
  //    self.val(v);
  //    } catch(e) {
  //      console.log(e);
  //    }
  })

  $('.ubah_lap').click(function(){
     if ($('#ketlaptoplain').val() === '') {
      alert('Keterangan Harus Di Isi');
    }else {
      if ($('#hrg_laptop_2').val() === '') {
          $('#pemberhentian').val('true');
          $('#hrg_laptop_final').val($('#hrg_laptop_1').val());
          $('#formlaptop').submit();  
      }else{
        $('#pemberhentian').val('false');
        $('#hrg_laptop_final').val($('#hrg_laptop_2').val());
        $('#formlaptop').submit();
      }
      
    }
  });

  $('#ketlaptop').on('hidden.bs.modal',function(){
    location.reload();
  });



});
</script>


<script>

// untuk hp
  
    $(document).ready(function(){
      $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        class: 'bg-white'
      })
    });
      $('.btn-p-hp').click(function(){
        <?php for ($i=0; $i < count($data['perbaikan2']['perbaikan_hp']); $i++):?>
        <?php if ($data['perbaikan2']['perbaikan_hp'][$i]['id_status_perbaikan'] == 4):?>
        if ("<?= $data['perbaikan2']['perbaikan_hp'][$i]['id_perbaikan']; ?>" === $(this).val()) {
          var terakhir = "<?= $data['perbaikan2']['waktu'][$i][0]['berakhir']; ?>";
          //untuk mengambil sisa hari
          var now = Math.floor(parseInt(terakhir) - Math.floor(moment())) / 86400000;
          var ambilhari = "<?= $data['perbaikan2']['waktu'][$i][0]['waktu_hari']; ?>";
          let jmlHari = ambilhari.split(' ', 1);
          let hariDilalui = parseInt(jmlHari) - Math.floor(now);
          var persentase = Math.floor(hariDilalui) / parseInt(Math.floor(jmlHari)) * 100;
          let get_harga_awal_lp = "<?= $data['perbaikan2']['perbaikan_hp'][$i]['harga']; ?>";
          harga_awal_lp = get_harga_awal_lp;
        
          $('#hrg_hp_ds').val('Harga Awal : ' + harga_awal_lp);
          $('#id_perbaikan_hp').val("<?= $data['perbaikan2']['perbaikan_hp'][$i]['id_perbaikan']; ?>");
      // const countday;
      // alert(Math.floor(persentase));
        $('.waktuberakhir').text('waktu tinggal : '+Math.floor(now) + ' hari');
        if (persentase <= 50) {
        $('.hithari').attr('style', 'width:' + persentase + '%;');
        $('.persentase').text(Math.floor(persentase) + '%');
        }else if (persentase > 50 && persentase < 75) {
        $('.hithari').attr('style', 'width:' + persentase + '%;');
        $('.hithari').addClass('bg-warning');
        $('.persentase').text(Math.floor(persentase) + '%')
        }else{
        $('.hithari').attr('style', 'width:' + persentase + '%;');
        $('.hithari').addClass('bg-danger');
        $('.persentase').text(Math.floor(persentase) + '%')
        }
        }
      <?php endif; ?>
      <?php endfor; ?>
      });
    });
</script>