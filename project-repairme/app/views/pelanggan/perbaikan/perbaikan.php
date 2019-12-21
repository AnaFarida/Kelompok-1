<script src="<?= BASEURL; ?>/panel-master/plugins/moment/moment.min.js"></script>
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
                          Pengaju
                      </th>
                      <th style="width: 15%">
                          Mitra
                      </th>
                      <th style="width: 10%">
                          Laptop
                      </th>
                      <th style="width: 20%">
                          Kerusakan
                      </th>
                      
                      <th style="width: 5%;">
                          Perkiraan
                      </th>
                      <th style="width: 15%;">
                          Persentase Hari
                      </th>
                      <th style="width: 10%;">
                          Biaya
                      </th>
                      <th style="width: 10%;">
                        Keterangan Mitra
                      </th>
                  </tr>
              </thead>
            <?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
              <?php if ($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] === '4'):?>
              <tbody>
                  <tr>
                      <td>
                          <a>
                              <?php 
                              $waktu = "<script>console.log(Math.floor(moment()));</script>";
                              echo $waktu;
                               ?>
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
                      <td >
                         <ul class="list-inline">
                          <button class="btn btn-dark btn-sm btn-p-laptop" data-toggle="modal" data-target="#progress" value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                        Persentase Hari
                    </button>
                      </ul>
                      </td>
                      <td >
                         <ul class="list-inline">
                              <?= $data['perbaikan']['perbaikan_laptop'][$i]['harga']; ?>
                          </ul>
                      </td>
                       <td >
                         <ul class="list-inline">
                              <?= $data['perbaikan']['perbaikan_laptop'][$i]['keterangan_mitra']; ?>
                          </ul>
                      </td>
                      <td>
                        <?php if ($data['perbaikan']['status'][$i][0]['status_perbaikan'] == 'Mitra Menolak Perbaikan'):?>
                        <ul class="list-inline">
                          <button disabled class="btn btn-danger btn-sm t-terimalaptop" data-toggle="modal" data-target="#terimaLaptop"  value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                              Terima 
                          </button>
                        </ul>
                        <?php elseif ( $data['perbaikan']['status'][$i][0]['status_perbaikan'] == 'Menunggu Persetujuan'):?>
                          <button disabled class="btn btn-info btn-sm t-terimalaptop" data-toggle="modal" data-target="#terimaLaptop"  value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                              Terima 
                          </button>
                        <?php else: ?>
                          <button class="btn btn-success btn-sm t-terimalaptop" data-toggle="modal" data-target="#terimaLaptop" value="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>">
                              Terima 
                          </button>
                        </ul>
                        <?php endif; ?>
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