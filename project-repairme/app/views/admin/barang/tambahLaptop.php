
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Daftar Laptop Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item"><a href="#">Barang</a></li>
              <li class="breadcrumb-item active">Tambah Daftar Laptop Baru</li>
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
                <h3 class="card-title">Tambah Daftar Laptop</h3>
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
                      <option value="<?= $merk['id_merk_laptop']; ?>"><?= $merk['merk_laptop']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                 <button type="button" class="btn btn-block btn-secondary" style="position: absolute; right: 32%; width: 15%; top:36%;" data-toggle="modal" data-target="#exampleModal2">TAMBAH MERK</button>
                <div class="card-body">
                  <select class="form-control select3" style="width: 50%;">
                    <option selected="selected">Tipe</option>
                    <?php foreach ($data['tipe'] as $tipe):?>
                      <option value="<?= $tipe['id_tipe_laptop']; ?>"><?= $tipe['tipe_laptop']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <button type="button" class="btn btn-block btn-secondary" style="position: absolute; right: 32%; width: 15%; top:68%;" data-toggle="modal" data-target="#exampleModal3">TAMBAH TIPE</button>
                <button type="submit" class="btn btn-block btn-success" style="position: absolute; right: 2%; width: 25%; top:48%;" id="submit">TAMBAH BARANG BARU</button>
              </div>
              <!-- /.card-body -->
              <form action="<?= BASEURL; ?>/admin/tambahdatalaptopbaru" method="POST" id="formKat">
                <input type="text" id="merklaptop" name="merklaptop" hidden>
                <input type="text" id="tipelaptop" name="tipelaptop" hidden>
              </form>
            </div>
            <!-- /.card -->
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
        $('#merklaptop').attr('value',parseInt(value));
      });
      $('.select3').change(function(){
        var value = $(this).val();
        $('#tipelaptop').attr('value',parseInt(value));
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
        <h5 class="modal-title" id="exampleModalLabel2">Tambah Merk Laptop Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                            
  <!-- isi dari class modal -->
                                            
     <form action="<?=BASEURL;?>/admin/tambahMerkLaptop" method="POST" id="formmodmerk" data-parsley-validate="">                                                
    <label for="merk">Merk Laptop Baru</label>
    <input id="merk_laptop" type="text" name="merk_laptop" data-parsley-trigger="change"  placeholder="Isi Dengan Merk Laptop Baru" autocomplete="off" class="form-control">
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
        <h5 class="modal-title" id="exampleModalLabel3">Tambah Tipe Laptop Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                            
  <!-- isi dari class modal -->
                                            
     <form action="<?=BASEURL;?>/admin/tambahTipeLaptop" method="POST" id="formmodmerk" data-parsley-validate="">                                                                                             
    <label for="tipe">Tipe Laptop Baru</label>
    <input id="tipe_laptop" type="text" name="tipe_laptop" data-parsley-trigger="change"  placeholder="Isi Dengan Tipe Laptop Baru" autocomplete="off" class="form-control">
    <br><br>
    <button type="submit3" name="submit3" id="submit3" class="btn btn-secondary">Tambah</button>
                                                
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
    </form>
    </div>
    </div>
  </div>
</div>
