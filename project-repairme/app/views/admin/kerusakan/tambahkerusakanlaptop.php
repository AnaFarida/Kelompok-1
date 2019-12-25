<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Kerusakan Baru</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item"><a href="#">Kerusakan</a></li>
            <li class="breadcrumb-item active">Tambah Kerusakan Laptop Baru</li>
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
                <h3 class="card-title">Tambah Kerusakan Laptop Baru</h3>
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
                <form action="<?= BASEURL; ?>/admin/tambahkerusakanlaptopbaru" method="POST">
                  <div class="form-group row">
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="kerusakan" placeholder="Kerusakan" name="kerusakan"  style=" width: 150%; ">
                    </div>
                  </div>
                <button type="submit" class="btn btn-block btn-success" style="position: absolute; right: 20%; width: 25%; top:48%;" id="submit">TAMBAH KERUSAKAN BARU</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
           <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Kerusakan Laptop</h3>
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
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example1_length"></div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                <tr role="row"><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 10px;">No</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">Kerusakan</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 219px;">CRUD</th></tr>
                </thead>
                 
               <tbody>
                   <?php foreach ($data['kerusakan'] as $kerusakan) :?>
                <tr>
                    <td><?= $kerusakan['id_kerusakan_laptop']; ?></td>
                    <td><?= $kerusakan['kerusakan_laptop']; ?></td> 
                    <td><a href="<?= BASEURL; ?>/admin/deleteKerusakanlaptop/<?= $kerusakan['id_kerusakan_laptop']; ?>" class="badge badge-danger float-right ml-1">Hapus</a>
                     <button class="btn btn-dark btn-sm btn-u-kerusakanlap" data-toggle="modal" data-target="#modalubahlap" value="<?= $kerusakan['id_kerusakan_laptop']; ?>">
                        update
                    </button></td>                  
                </tr>
                 <?php endforeach; ?>
                  </tbody>
               
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modalubahlap" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Kerusakan Laptop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                                            
  <!-- isi dari class modal -->
                                            
     <form action="<?= BASEURL; ?>/admin/editKerusakanlaptop" method="POST">
       <input type="text" class="form-control"  id="id_kerusakanlap_ubh" name="id_kerusakanlap_ubh" hidden>
     
       <input type="text"  id="kerusakanlap_ubh" name="kerusakanlap_ubh" class="form-control mt-20">

       <div class="modal-footer">
        <button type="submit" name="submit" id="submit" class="btn btn-secondary">update</button>

      </div>
    </form>
   
    </div>
    </div>
  </div>
</div>


<script> 
    $(document).ready(function(){
      
      $('.btn-u-kerusakanlap').click(function(){
        <?php foreach ($data['kerusakan'] as $ker):?>
        // console.log($(this).val())
          // alert($(this).val())
        
        if ("<?= $ker['id_kerusakan_laptop'] ?>" === $(this).val()) {
          $('#id_kerusakanlap_ubh').val("<?= $ker['id_kerusakan_laptop']; ?>");
          $('#kerusakanlap_ubh').val("<?= $ker['kerusakan_laptop']; ?>");
        }
        <?php endforeach; ?>        
      });

  
});
   </script>