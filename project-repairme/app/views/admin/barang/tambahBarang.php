
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Barang Baru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item"><a href="#">Barang</a></li>
              <li class="breadcrumb-item active">Tambah Barang Baru</li>
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
                <h3 class="card-title">Pilih Kategori</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div> 
              
              <div class="card-body">
                  <select class="form-control select1" style="width: 50%;">
                    <option selected="selected">Kategori</option>
                    <option>Laptop</option>
                    <option>Handphone</option>
                  </select>
                </div>

                <button type="button" class="btn btn-block btn-secondary" style="position: absolute; right: 32%; width: 15%; top:24%;" data-toggle="modal" data-target="#exampleModal1">TAMBAH KATEGORI</button>
                <div class="card-body">
                  <select class="form-control select2" style="width: 50%;">
                    <option selected="selected">Merk</option>
                    <?php foreach ($data['barang']['merk'] as $merk):?>
                      <option value="<?= $merk['merk']; ?>"><?= $merk['merk']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                 <button type="button" class="btn btn-block btn-secondary" style="position: absolute; right: 32%; width: 15%; top:51%;" data-toggle="modal" data-target="#exampleModal2">TAMBAH MERK</button>
                <div class="card-body">
                  <select class="form-control select3" style="width: 50%;">
                    <option selected="selected">Tipe</option>
                    <?php foreach ($data['barang']['tipe'] as $tipe):?>
                      <option><?= $tipe['tipe']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <button type="button" class="btn btn-block btn-secondary" style="position: absolute; right: 32%; width: 15%; top:79%;" data-toggle="modal" data-target="#exampleModal3">TAMBAH TIPE</button>
                <button type="submit" class="btn btn-block btn-success" style="position: absolute; right: 2%; width: 25%; top:48%;" data-toggle="modal" data-target="#exampleModal3">TAMBAH BARANG BARU</button>
              </div>
              <!-- /.card-body -->
              <form action="<?= BASEURL; ?>/admin/tambahbarang" method="POST">
                <input type="text" id="brgKategori" hidden>
                <input type="text" id="brgMerk" hidden>
                <input type="text" id="brgTipe" hidden>
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
      $('.select1').change(function(){
        var value = $(this).val();
        $('#brgKategori').attr('value',value);
        alert( $('#brgKategori').val());
      });
    });
  </script>


<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">input merk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                            
  <!-- isi dari class modal -->
                                            
     <form action="<?=BASEURL;?>/admin/insertmerk" method="POST" id="formmodmerk" data-parsley-validate="">
                                                
                                                
    <label for="merk">merk</label>
    <input id="merk" type="text" name="merk" data-parsley-trigger="change"  placeholder="isikan merk" autocomplete="off" class="form-control">
    <br><br>
    <button type="submit" name="submit1" id="submit1" class="btn btn-secondary">kirim</button>
                                                
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </form>
    </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">input kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                            
  <!-- isi dari class modal -->
                                            
     <form action="<?=BASEURL;?>/admin/insertkategori" method="POST" id="formmodmerk" data-parsley-validate="">
                                                
                                                
    <label for="kategori">kategori</label>
    <input id="kategori" type="text" name="kategori" data-parsley-trigger="change"  placeholder="isikan kategori" autocomplete="off" class="form-control">
    <br><br>
    <button type="submit" name="submit" id="submit" class="btn btn-secondary">kirim</button>
                                                
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        <h5 class="modal-title" id="exampleModalLabel3">input tipe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                            
  <!-- isi dari class modal -->
                                            
     <form action="<?=BASEURL;?>/admin/inserttipe" method="POST" id="formmodmerk" data-parsley-validate="">
                                                
                                                
    <label for="tipe">tipe</label>
    <input id="tipe" type="text" name="tipe" data-parsley-trigger="change"  placeholder="isikan tipe" autocomplete="off" class="form-control">
    <br><br>
    <button type="submit3" name="submit3" id="submit3" class="btn btn-secondary">kirim</button>
                                                
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </form>
    </div>
    </div>
  </div>
</div>
