<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $data['judul']; ?></title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/panel-master/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/panel-master/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/panel-master/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?= BASEURL; ?>/panel-master/plugins/jquery/jquery.min.js"></script>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom-0">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= BASEURL; ?>" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="<?= BASEURL; ?>/panel-master/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="<?= BASEURL; ?>/panel-master/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="<?= BASEURL; ?>/panel-master/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-light elevation-2">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="<?= BASEURL; ?>/panel-master/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">Pelanggan RepairMe</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="<?= BASEURL; ?>/panel-master/dist/img/user1.png" class="img-box elevation-2" alt="Foto Profile">
            </div>
            <div class="info">
               <?php foreach ($data['pelanggan'] as $pelanggan ) :?>
              <a href="#" class="d-block"><?= $pelanggan ['nama']; ?></a>
            <?php endforeach; ?>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="<?= BASEURL; ?>/mitra" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Beranda <span class="right badge badge-success">Data Cepat</span>
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-shopping-cart"></i>
                  <p>
                    Barang
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">3</span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= BASEURL; ?>/pelanggan/pengajuanperbaikan" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pengajuan perbaikan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/boxed.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Dalam Pengerjaan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Barang Selesai Di Perbaiki</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Riwayat perbaikan</p>
                    </a>
                  </li></ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Profile Pelanggan
                    <i class="fas fa-angle-left right"></i>
                    <span class="right badge badge-warning">Edit</span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= BASEURL; ?>/pelanggan/profile" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profile</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= BASEURL; ?>/Pelanggan/editProfile" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ubah Profile</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Layout Options
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Top Navigation</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/boxed.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Boxed</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-topnav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Navbar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/fixed-footer.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Fixed Footer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Collapsed Sidebar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="nav-icon fas fa-map"></i>
                  <p>
                   Mitra
                    <i class="right fas fa-angle-left"></i>
                     <span class="badge badge-info right">2</span>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= BASEURL; ?>/perbaikan/index" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Cari Mitra</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= BASEURL; ?>/Pelanggan/beriRating" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Berikan Rating</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tree"></i>
                  <p>
                    UI Elements
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/UI/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/UI/icons.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Icons</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/UI/buttons.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Buttons</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/UI/sliders.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sliders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/UI/modals.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Modals & Alerts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/UI/navbar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Navbar & Tabs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/UI/timeline.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Timeline</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/UI/ribbons.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ribbons</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-edit"></i>
                  <p>
                    Forms
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/forms/general.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>General Elements</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/advanced.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Advanced Elements</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/editors.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Editors</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Validation</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Tables
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/tables/simple.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Simple Tables</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/tables/data.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>DataTables</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/tables/jsgrid.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>jsGrid</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">EXAMPLES</li>
              <li class="nav-item">
                <a href="pages/calendar.html" class="nav-link">
                  <i class="nav-icon fas fa-calendar-alt"></i>
                  <p>
                    Calendar
                    <span class="badge badge-info right">2</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/gallery.html" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Gallery
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Inbox</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/mailbox/compose.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Compose</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/mailbox/read-mail.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Read</p>
                    </a>
                  </li>
                </ul>
              </li>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
