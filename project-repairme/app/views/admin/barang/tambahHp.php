<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Daftar Handphone Baru</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item"><a href="#">Barang</a></li>
            <li class="breadcrumb-item active">Tambah Daftar Handphone Baru</li>
          </ol>
        </div>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Daftar Handphone</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
                </div>
              </div>
              
              <div class="card-body">
                <div class="notif" style="width: 50%; height: 10%; top: 0; left: 50%; position: absolute;">
                  <?php Flasher::flash(); ?>
                </div>
                <div class="card-body">
                  <select class="form-control select2" style="width: 50%;">
                    <option selected="selected">Merk</option>
                    <?php foreach ($data['merk'] as $merk):?>
                    <option value="<?= $merk['id_merk_hp']; ?>"><?= $merk['merk_hp']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <button type="button" class="btn btn-block btn-secondary" style="position: absolute; right: 32%; width: 15%; top:36%;" data-toggle="modal" data-target="#exampleModal2">TAMBAH MERK</button>
                <div class="card-body">
                   <form action="<?= BASEURL; ?>/admin/tambahTipeHp" method="POST" id="formKat">
                  <input type="text" name="tipehp" class="form-control" id="tipehp" placeholder="Tipe Handphone Baru" style="width: 50%;">
                </div>
                <button type="submit" class="btn btn-block btn-success" style="position: absolute; right: 32%; width: 15%; top:68%;" id="submit">TAMBAH BARANG</button>
              </div>
              <!-- /.card-body -->
             
                <input type="text" id="merkhp" name="merkhp" hidden>
              </form>
            </div>
            <!-- /.card -->
            <div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                <thead>
                <tr role="row">              
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Tipe Hp</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Merk Hp</th></tr>
                </thead>
                <tbody> 

                <!--Menampilkan data dari database-->
                <?php foreach($data['tipe']as $tipe):?>
                
                  <tr role="row" class="odd">
                  <td><?= $tipe['tipe_hp']; ?></td>
                  <td><?= $tipe['merk_hp']; ?></td>
                  
                </tbody>
                <tfoot>
                <tr>
                
                <?php endforeach;?>
                
                 </tr>
                </tfoot>
              </table></div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
  $(document).ready(function(){
  $('.select2').change(function(){
  var value = $(this).val();
  $('#merkhp').attr('value',parseInt(value));
  });
  $('#submit').click(function(){
  $('#formKat').submit();
  });
  });
  </script>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Tambah Merk Handphone Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <!-- isi dari class modal -->
          
          <form action="<?=BASEURL;?>/admin/tambahMerkHp" method="POST" id="formmodmerk" data-parsley-validate="">
            <label for="merk">Merk Handphone Baru</label>
            <input id="merk_hp" type="text" name="merk_hp" data-parsley-trigger="change"  placeholder="Isi Dengan Merk Handphone Baru" autocomplete="off" class="form-control">
            <br><br>
            <button type="submit" name="submit1" id="submit1" class="btn btn-secondary">Tambah</button>
            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel3">Tambah Tipe Handphone Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <!-- isi dari class modal -->
          
          <form action="<?=BASEURL;?>/admin/tambahTipeHp" method="POST" id="formmodmerk" data-parsley-validate="">
            <label for="tipe">Tipe Handphone Baru</label>
            <input id="tipe_hp" type="text" name="tipe_hp" data-parsley-trigger="change"  placeholder="Isi Dengan Tipe Handphone Baru" autocomplete="off" class="form-control">
            <br><br>
            <button type="submit3" name="submit3" id="submit3" class="btn btn-secondary">Tambah</button>
            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </form>
        </div>
      </div>
    </div>
  </div>