<!doctype html>
<html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/vendor/bootstrap/css/bootstrap.min.css">
        <link href="<?= BASEURL; ?>/adminSources/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/libs/css/style.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/vendor/charts/chartist-bundle/chartist.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/vendor/charts/morris-bundle/morris.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/vendor/charts/c3charts/c3.css">
        <link rel="stylesheet" href="<?= BASEURL; ?>/adminSources/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

        

        <!-- untuk leafletjs -->
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/leaflet.css" />
        <script src="<?= BASEURL; ?>/js/leaflet.js"></script>
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/petaLokasi.css">

        <title>Admin</title>
    </head>
    <body>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="index.html">ADMIN REPAIRME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <li class="nav-item">
                                <div id="custom-search" class="top-search-bar">
                                    <input class="form-control" type="text" placeholder="Search..">
                                </div>
                            </li>
                            <li class="nav-item dropdown notification">
                                <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                    <li>
                                        <div class="notification-title"> Pemberitahuan</div>
                                        <div class="notification-list">
                                            <div class="list-group">
                                                <a href="#" class="list-group-item list-group-item-action active">
                                                    <div class="notification-info">
                                                        <div class="notification-list-user-img"><img src="<?= BASEURL; ?>/adminSources/assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                        <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="<?= BASEURL; ?>/adminSources/assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                    <div class="notification-date">2 days ago</div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img src="<?= BASEURL; ?>/adminSources/assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                <div class="notification-date">2 min ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="notification-info">
                                            <div class="notification-list-user-img"><img src="<?= BASEURL; ?>/adminSources/assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                            <div class="notification-date">2 min ago</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="list-footer"> <a href="#">View all notifications</a></div>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown connection">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                    <li class="connection-list">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="<?= BASEURL; ?>/adminSources/assets/images/github.png" alt="" > <span>Github</span></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="<?= BASEURL; ?>/adminSources/assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="<?= BASEURL; ?>/adminSources/assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="<?= BASEURL; ?>/adminSources/assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="<?= BASEURL; ?>/adminSources/assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                <a href="#" class="connection-item"><img src="<?= BASEURL; ?>/adminSources/assets/images/slack.png" alt="" > <span>Slack</span></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="conntection-footer"><a href="#">More</a></div>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown nav-user">
                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= BASEURL; ?>/adminSources/assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                    <div class="nav-user-info">
                        <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                        <span class="status"></span><span class="ml-2">Available</span>
                    </div>
                    <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
</div>
<!-- ============================================================== -->
<!-- end navbar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
<div class="menu-list">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="d-xl-none d-lg-none" href="#">MENU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-column">
                <li class="nav-divider">
                    <p>Profil Admin</p>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                    <div id="submenu-1" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <!-- <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">MENU </a>
                                <div id="submenu-1-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">PENGUNJUNG REPAIRME</a>
                                        </li> -->
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                        </li> -->
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="<?= BASEURL; ?>/admin/dataMitra">Data Mitra</a>
                                        </li>
                                    </ul>
                                </div> -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/admin/dataMitra">Data Mitra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"href="<?= BASEURL; ?>/admin/index">Pengunjung Repairme</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Pengaturan</a>
                                <div id="submenu-1-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="dashboard-influencer.html">Ubah profil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="influencer-finder.html">Ubah Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="influencer-profile.html">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                    <div id="submenu-2" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/<?= BASEURL; ?>/adminSources/pages/cards.html">Cards <span class="badge badge-secondary">New</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/<?= BASEURL; ?>/adminSources/pages/general.html">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/carousel.html">Carousel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/listgroup.html">List Group</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/typography.html">Typography</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/accordions.html">Accordions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/tabs.html">Tabs</a>
                            </li>
                        </ul>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Grafik </a>
                    <div id="submenu-3" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/admin/chart">Pengunjung</a>
                           
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Mitra</a>
                    <div id="submenu-4" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/admin/dataMitra">Daftar Mitra </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/form-validation.html">Mitra Terverifikasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/multiselect.html">Mitra Menunggu Verifikasi</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/datepicker.html">Date Picker</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/bootstrap-select.html">Bootstrap Select</a>
                            </li> -->
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Pelanggan</a>
                    <div id="submenu-5" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/Pelanggan/index">Data Pelanggan</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/data-tables.html">Data Tables</a>
                            </li> -->
                        </ul>
                    </div>
                </li>
                <li class="nav-divider">
                    Features
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i>User Aktif & Nonaktif</a>
                    <div id="submenu-6" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/blank-page.html">User Aktif Mitra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/blank-page-header.html">User Nonaktif Mitra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/login.html">User Aktif Pelanggan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/404-page.html">User Nonaktif Pelanggan</a>
                            </li>
                            
                            <!-- </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/pricing.html">Pricing Tables</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/timeline.html">Timeline</a>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/sortable-nestable-lists.html">Sortable/Nestable List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/widgets.html">Widgets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/media-object.html">Media Objects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/cropper-image.html">Cropper</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/color-picker.html">Color Picker</a>
                            </li> -->
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Laporan <span class="badge badge-secondary">New</span></a>
                    <div id="submenu-7" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                        <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/sign-up.html">Laporan Pendapatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/sign-up.html">Kontrak Mitra</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/forgot-password.html">Lupa Password</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/calendar.html">Kalender</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/message-chat.html">Pesan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Promosi MItra </a>
                    <div id="submenu-8" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/icon-fontawesome.html">Diskon</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/icon-material.html">Percepatan Perbaikan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/icon-simple-lineicon.html">Harga Murah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/icon-themify.html">Komplit </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/icon-flag.html">Flag Icons</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/adminSources/pages/icon-weather.html">Weather Icon</a>
                            </li> -->
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                    <div id="submenu-9" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= BASEURL; ?>/admin/petaLokasi">Pengaturan Lokasi</a>
                            </li>
                        
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Input Kategori</a>
                    <div id="submenu-10" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Laptop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Daftar Kategori</a>
                                <div id="submenu-11" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Hp</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Laptop</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Hp dan Laptop</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->