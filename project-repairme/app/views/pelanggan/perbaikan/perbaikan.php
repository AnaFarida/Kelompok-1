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
          <h3 class="card-title">Perbaikan Laptop</h3>

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
              <?php if ($data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == '4' || $data['perbaikan']['perbaikan_laptop'][$i]['id_status_perbaikan'] == '5'):?>
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
                        Persentase
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
                        <?php if($data['perbaikan']['notif'][$i] != NULL): ?>
                          <?php if($data['perbaikan']['notif'][$i][0]['dibaca'] == 'n'): ?>
                            <script>
                                $(document).ready(function(){
                                  $(document).Toasts('create', {
                                  title: 'Dari <?= $data['perbaikan']['mitra'][$i][0]['nama_usaha']; ?>',
                                  body: 'Pesan Untuk Anda :<strong> <?= $_SESSION['login']['data']['nama']; ?></strong><br> Anda mendapatkan pesan terbaru, terkait perbaikan yang anda lakukan.',
                                  class: 'bg-white',
                                  subtitle: 'Notifikasi',
                                  icon: 'fas fa-envelope fa-lg'
                                })
                                });
                            </script>
                        <ul class="list-inline">
                        <?php if ($data['perbaikan']['notif'][$i][0]['notifikasi'] == 'diskon'):?>
                          <a class="btn btn-app dislap" data-toggle="modal" data-target="#diskonlap" id="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan'];?>">
                            <i class="fas fa-envelope"></i>Pesan
                          </a>
                        <?php endif; ?>
                        <?php if ($data['perbaikan']['notif'][$i][0]['notifikasi'] == 'tambah_harga'):?>
                          <a class="btn btn-app tmblap" data-toggle="modal" data-target="#tambahlap" id="<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan'];?>">
                            <i class="fas fa-envelope"></i>Pesan
                          </a>
                        <?php endif; ?>
                        </ul>
                      <?php endif; ?>
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
        <!-- Modal -->

  <div class="modal fade" id="diskonlap" tabindex="-1" role="dialog" aria-labelledby="diskonlapLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="diskonlapLabel">Pemberitahuan</h5>
    
        </div>
        <div class="modal-body">
          Kepada : <?= $_SESSION['login']['data']['nama']; ?>
          <br><br>
          <strong>Anda Mendapatkan Diskon!!</strong>
          <p>Selamat untuk pelanggan yang bernama <?= $_SESSION['login']['data']['nama']; ?>, anda telah mendapatkan
            diskon dari mitra <strong class="namamitra_dislap"></strong></p>
          <p>Harga perbaikan Setelah di Diskon adalah : <strong class="harga_dislap"></strong></p>
          <p>Mitra <strong class="namamitra_dislap"></strong> memberi keterangan :  <strong class="pesan_dislap"></strong></p>
          <p>Dan TerimaKasih telah Memilih Mitra <strong class="namamitra_dislap"></strong></p>

      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-block btn-warning btn-sm arsip_dislap" data-dismiss="modal" aria-label="Close">Arsipkan</button><br>
        
        <button class="btn btn-block btn-danger btn-sm">Hapus</button>
      </div>
      <form action="<?= BASEURL; ?>/pelanggan/diskondibaca" method="POST" id="formdiskon">
        <input type="text" name="idper_dislap" id="idper_dislap" hidden>
      </form>
    </div>
  </div>
</div>
  
  <div class="modal fade" id="tambahlap" tabindex="-1" role="dialog" aria-labelledby="tambahlapLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahlapLabel">Pemberitahuan</h5>
    
        </div>
        <div class="modal-body">
          Kepada : <?= $_SESSION['login']['data']['nama']; ?>
          <br><br>
          <strong>Mitra Mengajukan Penambahan Harga</strong>
          <p>Perbaikan anda sementara terhenti karena mitra mengajukan penambahan harga, perbaikan membutuhkan biaya :</p>
          <p>Harga perbaikan : <strong class="harga_tambahlap"></strong></p>
          <p>Mitra <strong class="namamitra_tambahlap"></strong>, memberi keterangan :  <strong class="pesan_tambahlap"></strong></p>
          <p style="color:red">Mitra menunggu respon cepat dari anda, jika anda menerima, silahkan tekan tombol setuju, dan jika tidak, perbaikan akan di hentikan dan silahkan ambil barang di Mitra tempat perbaikan.</p>
          <p>Dan TerimaKasih telah Memilih Mitra <strong class="namamitra_tambahlap"></strong></p>

      </div>
      <div class="modal-footer">
       
        <button type="button" class="btn btn-block btn-success btn-sm lanjutlap" data-dismiss="modal" aria-label="Close">Ya, Setuju</button><br>
        <button class="btn btn-block btn-danger btn-sm">Tidak, Batalkan</button>
      </div>
      <form action="<?= BASEURL; ?>/pelanggan/lanjutperbaikan" method="POST" id="lanjutperbaikan">
        <input type="text" name="idper_tambahlap" id="idper_tambahlap" hidden>
      </form>
    </div>
  </div>


  <script>
    $(document).ready(function(){
      
      $('.dislap').click(function(){
        <?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
              if ("<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>" === $(this).attr('id')) {
                <?php if ($data['perbaikan']['notif'][$i] != NULL):?>
                $('.namamitra_dislap').text("<?= $data['perbaikan']['mitra'][$i][0]['nama_usaha']; ?>");
                $('.harga_dislap').text("<?= $data['perbaikan']['perbaikan_laptop'][$i]['harga']; ?>");
                $('.pesan_dislap').text("<?= $data['perbaikan']['notif'][$i][0]['keterangan']; ?>");
                $('#idper_dislap').val("<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>");
              <?php endif; ?>
              }
            
        <?php endfor; ?>
      });

      $('.arsip_dislap').click(function(){
          $('#formdiskon').submit();
      });

       $('.tmblap').click(function(){
        <?php for ($i=0; $i < count($data['perbaikan']['perbaikan_laptop']); $i++):?>
              if ("<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>" === $(this).attr('id')) {
                <?php if ($data['perbaikan']['notif'][$i] != NULL):?>
                $('.namamitra_tambahlap').text("<?= $data['perbaikan']['mitra'][$i][0]['nama_usaha']; ?>");
                $('.harga_tambahlap').text("<?= $data['perbaikan']['perbaikan_laptop'][$i]['harga']; ?>");
                $('.pesan_tambahlap').text("<?= $data['perbaikan']['notif'][$i][0]['keterangan']; ?>");
                $('#idper_tambahlap').val("<?= $data['perbaikan']['perbaikan_laptop'][$i]['id_perbaikan']; ?>");
              <?php endif; ?>
              }
        <?php endfor; ?>
      });
    
      $('.lanjutlap').click(function(){
        $('#lanjutperbaikan').submit();
      });
    });
  </script>



