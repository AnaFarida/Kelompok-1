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
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Pengajuan Perbaikan : Laptop</h3>

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
                      <th style="width: 15%">
                          Nama Pengaju
                      </th>
                      <th style="width: 12%">
                          Mitra
                      </th>
                      <th style="width: 10%">
                          Merk Laptop
                      </th>
                      <th style="width: 10%">
                          Tipe Laptop
                      </th>
                      <th style="width: 15%;">
                          Kerusakan
                      </th>
                      <th style="width: 15%;">
                          Keterangan Lain
                      </th>
                      <th style="width: 15%;">
                          Keterangan Mitra
                      </th>
                      <th style="width: 15%;">
                        Status Perbaikan
                      </th>
                      <th style="width: 15%;">
                        Lanjut Perbaikan
                      </th>
                  </tr>
              </thead>
            <?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
              <tbody>
                  <tr>
                      <td>
                          <a>
                              <?= $_SESSION['login']['data']['nama']; ?>
                          </a>                   
                      </td>
                      <td>
                          <ul class="list-inline">
                              <?= $data['perbaikan']['mitra'][$i][0]['nama_usaha']; ?>
                          </ul>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <?= $data['perbaikan']['merk_laptop'][$i][0]['merk_laptop']; ?>
                          </ul>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <?= $data['perbaikan']['tipe_laptop'][$i][0]['tipe_laptop']; ?>
                          </ul>
                      </td>
                      <td >
                         <ul class="list-inline">
                              <?= $data['perbaikan']['kerusakan_laptop'][$i][0]['kerusakan_laptop']; ?>
                          </ul>
                      </td>
                      <td >
                         <ul class="list-inline">
                              <?= $data['perbaikan']['keterangan_lain'][$i]; ?>
                          </ul>
                      </td>
                      <td >
                         <ul class="list-inline">
                              <?= $data['perbaikan']['perbaikan_laptop'][$i]['keterangan_mitra']; ?>
                          </ul>
                      </td>
                      <td >
                         <?php if ($data['perbaikan']['status'][$i][0]['status_perbaikan'] == 'Mitra Menolak Perbaikan'):?>
                         <ul class="list-inline" style="color: red;">
                              <?= $data['perbaikan']['status'][$i][0]['status_perbaikan']; ?>
                          </ul>
                          <?php elseif ($data['perbaikan']['status'][$i][0]['status_perbaikan'] == 'Menunggu Persetujuan'):?>
                            <ul class="list-inline" style="color: blue;">
                              <?= $data['perbaikan']['status'][$i][0]['status_perbaikan']; ?>
                          </ul>
                          <?php else: ?>
                            <ul class="list-inline" style="color: green;">
                              <?= $data['perbaikan']['status'][$i][0]['status_perbaikan']; ?>
                          </ul>
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php if ($data['perbaikan']['status'][$i][0]['status_perbaikan'] == 'Mitra Menolak Perbaikan' || $data['perbaikan']['status'][$i][0]['status_perbaikan'] == 'Menunggu Persetujuan'):?>
                        <ul class="list-inline">
                          <button disabled class="btn btn-success btn-sm t-terimalaptop" data-toggle="modal" data-target="#terimaLaptop"  value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                              Terima 
                          </button>
                        </ul>
                        <?php else: ?>
                          <button class="btn btn-success btn-sm t-terimalaptop" data-toggle="modal" data-target="#terimaLaptop" value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                              Terima 
                          </button>
                        </ul>
                        <?php endif; ?>
                      </td>
                  </tr>
              </tbody>
            <?php endfor; ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <br><br>
    <!-- untuk hp -->

          <div class="card">
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
                      <td class="project-actions text-right">
                          <a class="btn btn-success btn-sm" href="#">
                              Terima 
                          </a>
                          <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#tolakHp">
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
