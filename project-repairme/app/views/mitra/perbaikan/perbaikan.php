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
                  Harga Awal
                </th>
                <th style="width: 40%">
                  Keterangan
                </th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
              <?php if ($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 4):?>
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
                    
                    <?= $data['perbaikan']['waktu'][$i][0]['waktu_hari']; ?>
                  </ul>
                </td>
                <td>
                  <ul class="list-inline">
                    <button class="btn btn-dark btn-sm btn-p-laptop" data-toggle="modal" data-target="#progress" value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                        Perkembangan
                    </button>
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
                    <button class="btn btn-dark btn-sm btn-p-laptop" data-toggle="modal" data-target="#ketlaptop" value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
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
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <br><br>
      <!-- untuk hp -->
      <div class="card card-dark">
        <div class="card-header">
          <h3 class="card-title">Handphone</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
            <?php for ($i=0; $i < count($data['perbaikan2']['perbaikan_hp']); $i++):?>
            <?php if ($data['perbaikan2']['status'][$i][0]['id_status_perbaikan'] == 1):?>
            <thead>
              <tr>
                <th style="width: 20%">
                  Nama Pelanggan
                </th>
                <th style="width: 15%">
                  Merk hp
                </th>
                <th style="width: 15%">
                  Tipe hp
                </th>
                <th style="width: 15%;">
                  Kerusakan
                </th>
                <th style="width: 15%;">
                  Keterangan Lain
                </th>
                <th style="width: 15%">
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a>
                    <?= $data['perbaikan2']['pelanggan'][$i][0]['nama']; ?>
                  </a>
                </td>
                <td>
                  <ul class="list-inline">
                    <?= $data['perbaikan2']['merk_hp'][$i][0]['merk_hp']; ?>
                  </ul>
                </td>
                <td>
                  <ul class="list-inline">
                    <?= $data['perbaikan2']['tipe_hp'][$i][0]['tipe_hp']; ?>
                  </ul>
                </td>
                <td >
                  <ul class="list-inline">
                    <?= $data['perbaikan2']['kerusakan_hp'][$i][0]['kerusakan_hp']; ?>
                  </ul>
                </td>
                <td >
                  <ul class="list-inline">
                    <?= $data['perbaikan2']['keterangan_lain'][$i]; ?>
                  </ul>
                </td>
                <td >
                  <ul class="list-inline">
                  </ul>
                </td>
                <td class="project-actions text-right">
                  <button class="btn btn-success btn-sm t-terimahp" data-toggle="modal" data-target="#terimahp" value="<?= $data['perbaikan2']['perbaikan_hp'][$i]['id_perbaikan']; ?>">
                  Terima
                  </button>
                  <button class="btn btn-danger btn-sm t-tolakhp" data-toggle="modal" data-target="#tolakHp" value="<?= $data['perbaikan2']['perbaikan_hp'][$i]['id_perbaikan']; ?>">
                  Tolak
                  </button>
                </td>
              </tr>
            </tbody>
            <?php endif; ?>
            <?php endfor; ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper-->
  <!-- untuk penerimaan -->
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
            <form action="<?= BASEURL; ?>/mitra/terimaperbaikanlaptop" method="POST">
              <input type="text" id="id_perbaikan_laptop" name="id_perbaikan_laptop" hidden>
              <input type="text" id="voucherlaptop" name="voucherlaptop" hidden>
              <button class="btn btn-dark btn_ubh_ket_lap" style="width: 49%;">
                Ubah Keterangan
              </button>
              <button class="btn btn-dark btn_ket_harga" style="width: 49%;">
                Harga
              </button>
              <input class="form-control" id="tmb_laptop" name="tmb_laptop" type="text" data-a-sign="Rp. " data-a-dec="," data-a-sep="." placeholder="Harga Rupiah">
            </div>
            <p class="tmb_laptop" style="color: red;"></p>
            <div class="form-group mt-20">
              <input class="form-control" id="ketlaptoplain" name="ketlaptoplain" type="text" placeholder="Keterangan Lain">
            </div>
          </div>
          </form>
      </div>
    </div>
  </div>
  <!-- terima hp -->
  <!-- Modal -->
  <div class="modal fade" id="terimahp" tabindex="-1" role="dialog" aria-labelledby="terimahpLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="terimahpLabel">Menerima Permintaan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group mt-20">
            <form action="<?= BASEURL; ?>/mitra/terimaperbaikanhp" method="POST">
              <input type="text" id="id_perbaikan_hp" name="id_perbaikan_hp" hidden>

              <input class="form-control" id="hargahp" name="hargahp" type="text" data-a-sign="Rp. " data-a-dec="," data-a-sep="." placeholder="Harga Rupiah">
            </div>
            <p class="hargahp" style="color: red;"></p>
            <div class="form-group mt-20">
              <input class="form-control" id="kethplain" name="kethplain" type="text" placeholder="Keterangan Lain">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Terima Permintaan</button>
          </form>
        </div>
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
  $('#tmb_laptop').hide();
  $('#ketlaptoplain').hide();
$('.btn-p-laptop').click(function(){
<?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
<?php if ($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 4):?>
if ("<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>" === $(this).val()) {
var terakhir = "<?= $data['perbaikan']['waktu'][$i][0]['berakhir']; ?>";
var now = Math.floor(parseInt(terakhir) - Math.floor(moment())) / 86400000;
var ambilhari = "<?= $data['perbaikan']['waktu'][$i][0]['waktu_hari']; ?>";
let jmlHari = ambilhari.split(' ', 1);
let hariDilalui = parseInt(jmlHari) - Math.floor(now);
var persentase = hariDilalui / parseInt(Math.floor(jmlHari)) * 100;
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
<script>
    $(document).ready(function(){
        $('#tmb_laptop').autoNumeric('init');
    });
</script>