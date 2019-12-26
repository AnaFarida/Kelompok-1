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
          <h3 class="card-title">Permintaan Verifikasi</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
           <?php foreach ($data['mitra'] as $mitra) :?>
              <thead>
                  <tr>
                      <th style="width: 15%">
                          Nama Mitra
                      </th>
                      <th style="width: 15%">
                          Jenis Usaha
                      </th>
                      <th style="width: 15%">
                          Nama Usaha
                      </th>
                      <th style="width: 15%;">
                          Alamat
                      </th>
                      <th style="width: 15%;">
                          Foto Usaha
                      </th>
                      <th style="width: 15%">
                          Foto Transaksi
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          <a>
                              <?= $mitra['nama']; ?>
                          </a>                   
                      </td>
                      <td>
                          <ul class="list-inline">
                              <?= $mitra['jenis']; ?>
                          </ul>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <?= $mitra['nama_usaha']; ?>
                          </ul>
                      </td>
                      <td >
                         <ul class="list-inline">
                              <?= $mitra['alamat']; ?>
                          </ul>
                      </td>
                      <td >
                         <ul class="list-inline">
                            <img src="<?= BASEURL; ?>/img/mitra/<?= $mitra['foto_usaha']; ?>" alt="member" width="128px" height="128px">
                          </ul>
                      </td>
                      <td >
                         <ul class="list-inline">
                            <img src="<?= BASEURL; ?>/img/mitra/<?= $mitra['foto_transaksi']; ?>" alt="mitra" width="128px" height="128px">
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
           <?php endforeach; ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>