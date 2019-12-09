  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Profile Pelanggan</a></li>
              <li class="breadcrumb-item active">Ubah Profil</li>
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
                <h3 class="card-title">Ubah Profil</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <form action="<?= BASEURL; ?>/pelanggan/editProfilePel" method="POST">
                <input type="text" id="id_pelanggan" name="id_pelanggan" value="<?= $_SESSION['login']['data']['id_pelanggan'];?>" hidden>
                <input type="text" id="nama" name="nama">
                <input type="text" id="email" name="email">
                <input type="text" id="no_tlp" name="no_tlp">
                <input type="text" id="alamat" name="alamat">
                <button type="submit" class="btn btn-dark">ubah</button>
                </form>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- <?php foreach ($data['deskripsi'] as $result):?>
<script>
  $(document).ready(function(){
    //\ alert($result['id_mitra'])
    if (<?= $_SESSION['login']['data']['id_mitra'];?> == <?= $result['id_mitra']; ?>) {
      $('#formInsert').hide();
    }else{
      $('#formUpdate').hide();
    }
  });
</script>
<?php endforeach; ?> -->