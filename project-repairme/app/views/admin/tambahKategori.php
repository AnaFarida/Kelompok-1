<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Input barang</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Input</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah barang</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic form -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" id="formKat" data-parsley-validate="">
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <label for="kategori">Kategori </label><br>
                                    </tr>
                                    <tr>
                                        <td>
                                            
                                            <select name="kategori" id="kategori">
                                                <?php foreach ($data['kategori']['kategori'] as $kategori):?>
                                                <option value=""><?= $kategori['kategori']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                        <td>
                                            
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button ><a href="" data-toggle="modal" data-target="#formmodkat">+</a></button>
                                                    <!--   <button class="btn btn-space btn-secondary">Cancel</button> -->
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <form action="" method="POST" id="formmodmerk" data-parsley-validate="">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <label for="merk">Merk </label><br>
                                                </tr>
                                                <tr>
                                                    <td>
                                                     <select name="merk" id="merk">
                                                    <?php foreach ($data['kategori']['merk'] as $merk):?>
                                                    <option value=""><?= $merk['merk']; ?></option>
                                                    <?php endforeach; ?>
                                                     </select>
                                                    <td>
                                                        
                                                        <div class="col-sm-6 pl-0">
                                                            <p class="text-right">
                                                                <button >
                                                                    <a href="" data-toggle="modal" data-target="    #formmerk">+
                                                                    </a>
                                                                </button>
                                                            </p>
                                                        </div>        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>
                                   <form action="" method="POST" id="formmodtipe" data-parsley-validate="">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <label for="tipe">Tipe </label><br>
                                                </tr>
                                                <tr>
                                                    <td>
                                                      <select name="tipe" id="tipe">
                                                        <?php foreach ($data['kategori']['tipe'] as $tipe):?>
                                                        <option value=""><?= $tipe['tipe']; ?></option>
                                                        <?php endforeach; ?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        
                                                        <div class="col-sm-6 pl-0">
                                                            <p class="text-right">
                                                                <button >
                                                                    <a href="" data-toggle="modal" data-target="    #formtipe">+
                                                                    </a>
                                                                </button>
                                                            </p>
                                                        </div>        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>                 
                    </div>
                </div>
            </div>
        </div>
                                        <!-- ============================================================== -->
                                        <!--end world map -->
                                        <!-- ============================================================== -->
                                        <!-- ============================================================== -->
                                        <!-- footer -->
                                        <!-- ============================================================== -->
                                        <div class="footer">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="text-md-right footer-links d-none d-sm-block">
                                                            <a href="javascript: void(0);">About</a>
                                                            <a href="javascript: void(0);">Support</a>
                                                            <a href="javascript: void(0);">Contact Us</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ============================================================== -->
                                        <!-- end footer -->
                                        <!-- ============================================================== -->
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end main wrapper -->
                                <!-- ==============================================================
                                Modal -->
                                <div class="modal fade hide" id="formmodkat" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="judulModal">Tambah kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <!-- isi dari class modal -->
                                                
                                                <form action="<?=BASEURL;?>/admin/insertkategori" method="POST" id="formKat" data-parsley-validate="">
                                                    
                                                    
                                                    <label for="kategori">kategori</label>
                                                    <input id="kategori" type="text" name="kategori" data-parsley-trigger="change"  placeholder="isikan kategori" autocomplete="off" class="form-control">
                                                    
                                                    <button type="submit" name="submit" id="submit">kirim</button>
                                                    
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade hide" id="formmerk" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="judulModal">Tambah kategori</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <!-- isi dari class modal -->
                                            
                                            <form action="<?=BASEURL;?>/admin/insertmerk" method="POST" id="formmodmerk" data-parsley-validate="">
                                                
                                                
                                                <label for="merk">merk</label>
                                                <input id="merk" type="text" name="merk" data-parsley-trigger="change"  placeholder="isikan merk" autocomplete="off" class="form-control">
                                                
                                                <button type="submit" name="submit1" id="submit1">kirim</button>
                                                
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                            <div class="modal fade hide" id="formtipe" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="judulModal">Tambah kategori</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <!-- isi dari class modal -->
                                            
                                            <form action="<?=BASEURL;?>/admin/inserttipe" method="POST" id="formmodtipe" data-parsley-validate="">
                                                
                                                
                                                <label for="tipe">Tipe</label>
                                                <input id="tipe" type="text" name="tipe" data-parsley-trigger="change"  placeholder="isikan tipe" autocomplete="off" class="form-control">
                                                
                                                <button type="submit" name="submit2" id="submit2">kirim</button>
                                                
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

