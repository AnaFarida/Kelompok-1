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
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


                  