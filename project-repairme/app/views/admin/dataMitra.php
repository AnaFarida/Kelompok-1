        <!-- ============================================================== -->
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
                            <h2 class="pageheader-title">Data Mitra</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Mitra</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Mitra</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Tabel Mitra</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <?php foreach ($data['mitra'] as $mitra) :?>
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Nama Usaha</th>
                                                <th>email</th>
                                                <!-- <th>no telpon</th> -->
                                                <th>alamat</th>
                                                <th>fungsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?= $mitra['nama']; ?></td>
                                                <td><?= $mitra['nama_usaha']; ?></td>
                                                <td><?= $mitra['email']; ?></td>
                                                <!-- <td><?= $mitra['no_telpon']; ?></td> -->
                                                <td><?= $mitra['alamat']; ?></td>
                                                <td><a href="<?= BASEURL; ?>/mitra/delete/<?= $mitra['id_mitra']; ?>" class="badge badge-danger float-right ml-1">Hapus</a></td>
                                            </tr>
                                    
                                        </tbody>
                                    </table>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
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
    <!-- ============================================================== -->
