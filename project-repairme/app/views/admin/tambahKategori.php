<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               
            </div>
        </div>
        <br><br>
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic form -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                    <br><br><br>
                    <P >INPUT DATA</P>
                        <form action="<?= BASEURL;?>/admin/insertbarang" method="POST" id="formKat" data-parsley-validate="">
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <label for="kategori">Kategori </label><br>
                                    </tr>
                                    <tr>
                                        <td>
                                        <select class="form-control" name="kategori" id="kategori" style="margin: 10px;">
                                              <option selected="selected">Pilih Kategori</option>
                                              <?php foreach ($data['kategori']['kategori'] as $kategori):?>
                                              <option><?= $kategori['kategori']; ?></option>
                                              <?php endforeach; ?>
                                        </select>
                                            
                                        </td>
                                        <td>
                                            
                                            <div class="col-sm-6 pl-0">
                                               
                                                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal1">+
                                                                    </button>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                    </div>
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <label for="merk">Merk </label><br>
                                                </tr>
                                                <tr>
                                                    <td>
                                       <select class="form-control" name="merk" id="merk" style="margin: 10px;">
                                              <option selected="selected">Pilih Merk</option>
                                              <?php foreach  ($data['kategori']['merk'] as $merk):?>
                                              <option><?= $merk['merk']; ?></option>
                                              <?php endforeach; ?>
                                        </select>
                                                   
                                                    <td>
                                                        
                                                        <div class="col-sm-6 pl-0">
                                        
                                                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal2">+
                                                                    </button>
                                                        </div>        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                   
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <label for="tipe">Tipe </label><br>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <select class="form-control" name="tipe" id="tipe" style="margin: 10px;">
                                              <option selected="selected">Pilih tipe</option>
                                              <?php foreach  ($data['kategori']['tipe'] as $tipe):?>
                                              <option><?= $tipe['tipe']; ?></option>
                                              <?php endforeach; ?>
                                        </select>
                                                    </td>
                                                    <td>
                                                        
                                                        <div class="col-sm-6 pl-0">
                                                          
                                                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal3">+
                                                                    </button>
                                                               
                                    
                                                        </div>        
                                                    </td>
                                                </tr>
                                            <tr>
                                            <td>
                                            <br><br>
                                            <button type="submit" class="btn btn-dark" name="submit3" id="submit3">kirim
                                                                    </button>
                                            </td>
                                            </tr>
                                            </table>
                                        </div>
                                    </form>                 
                    </div>
                </div>
            </div>
        </div>
                         
                                   
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end main wrapper -->
                                <!-- ============================================================== -->

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
                        