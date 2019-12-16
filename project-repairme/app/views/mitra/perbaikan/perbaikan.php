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
  <?php var_dump($data['waktu'][0]['waktu_hari']); ?>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
            <?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
            <?php if ($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == 4):?>
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
                      <th style="width: 15%;">
                          Progres
                      </th>
                      <th style="width: 15%">

                      </th>
                  </tr>
              </thead>
              <tbody>
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
                            <?php foreach ($data['waktu'] as $waktu):?>
                              <?php if ($waktu['id_perbaikan_laptop'] == $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']): ?>
                                <script>
                                $(document).ready(function(){
                                  var today = Math.floor(moment().add(9,'days'));
                                  var terakhir = "<?= $data['waktu'][$i]['berakhir']; ?>";
                                  var countday = Math.floor(Math.floor(terakhir - today)) / 86400000;
                                  $('.waktuberakhir').text(Math.floor(countday) + ' hari');

                                  // untuk membuat progress
                                  var ambilhari = "<?= $data['waktu'][$i]['waktu_hari']; ?>";
                                  let jmlHari = ambilhari.split(' ', 1);
                                  // var hari = moment().add(splitHari[0], "days");  
                                  // alert(Math.floor(countday));
                                  if (Math.floor(jmlHari) == Math.floor(countday)) {
                                    $('.hithari').attr('style','width:0%;');
                                    $('.hithari').addClass('bg-success');
                                    $('.persentase').text('0%');
                                  }else if (Math.floor(jmlHari*0.9) == Math.floor(countday)) {
                                    $('.hithari').attr('style','width:10%;');
                                    $('.hithari').addClass('bg-success');
                                    $('.persentase').text('10%');
                                  }else if (Math.floor(jmlHari*0.8) == Math.floor(countday)) {
                                    $('.hithari').attr('style','width:20%;');
                                    $('.hithari').addClass('bg-success');
                                    $('.persentase').text('20%');
                                  }else if (Math.floor(jmlHari*0.7) == Math.floor(countday)) {
                                    $('.hithari').addClass('bg-success');
                                    $('.hithari').attr('style','width:30%;');
                                    $('.persentase').text('30%');
                                  }else if (Math.floor(jmlHari*0.6) == Math.floor(countday)) {
                                    $('.hithari').attr('style','width:40%;');
                                    $('.hithari').addClass('bg-success');
                                    $('.persentase').text('40%');
                                  }else if (Math.floor(jmlHari*0.5) == Math.floor(countday)) {
                                    $('.hithari').attr('style','width:50%;');
                                    $('.hithari').addClass('bg-warning');
                                    $('.persentase').text('50%');
                                  }else if (Math.floor(jmlHari*0.4) == Math.floor(countday)) {
                                    $('.hithari').attr('style','width:70%;');
                                    $('.hithari').addClass('bg-warning');
                                    $('.persentase').text('70%');
                                  }else if (Math.floor(jmlHari*0.3) == Math.floor(countday)) {
                                    $('.hithari').addClass('bg-danger');
                                    $('.hithari').attr('style','width:80%;');
                                    $('.persentase').text('80%');
                                  }else if (Math.floor(jmlHari*0.9) == Math.floor(countday)) {
                                    $('.hithari').attr('style','width:90%;');
                                    $('.hithari').addClass('bg-danger');
                                    $('.persentase').text('90%');
                                  }else if (Math.floor(jmlHari*0) == Math.floor(countday)) {
                                    $('.hithari').attr('style','width:100%;');
                                    $('.hithari').addClass('bg-danger');
                                    $('.persentase').text('100%');
                                  }
                                  alert(Math.floor(jmlHari*0.8));
                                });
                              </script>
                              <?php endif ?>
                            <?php endforeach; ?>
                                 <div class="progress progress-sm">
                                    <div class="progress-bar hithari" style="width: 100%"></div>
                                    
                                  </div>
                                  <span class="badge bg-info persentase">100%</span>
                                  <span class="badge bg-info waktuberakhir">100%</span>
                          </ul>
                      </td>
                      <td >
                         <ul class="list-inline">
                          </ul>
                      </td>
                      <td class="project-actions text-right">
                          <button class="btn btn-success btn-sm t-terimalaptop" data-toggle="modal" data-target="#terimaLaptop" value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                              Terima 
                          </button>
                          <button class="btn btn-danger btn-sm t-tolaklaptop" data-toggle="modal" data-target="#tolakLaptop" value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
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
<div class="modal fade" id="terimaLaptop" tabindex="-1" role="dialog" aria-labelledby="terimaLaptopLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="terimaLaptopLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group mt-20">
          <form action="<?= BASEURL; ?>/mitra/terimaperbaikanlaptop" method="POST">
            <input type="text" id="id_perbaikan_laptop" name="id_perbaikan_laptop" hidden>
            <input type="text" id="voucherlaptop" name="voucherlaptop" hidden>
              <input class="form-control" id="hargalaptop" name="hargalaptop" type="text" data-a-sign="Rp. " data-a-dec="," data-a-sep="." placeholder="Harga Rupiah">
            </div>
            <p class="hargalaptop" style="color: red;"></p>
            <div class="form-group mt-20">
              <input class="form-control" id="ketlaptoplain" name="ketlaptoplain" type="text" placeholder="Keterangan Lain">
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Terima Permintaan</button>
        </form>
      </div>
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
            <input type="text" id="voucherhp" name="voucherhp" hidden>
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