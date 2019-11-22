<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicons -->
    <link href="<?= BASEURL; ?>/homes/img/favicon.png" rel="icon">
    <link href="<?= BASEURL; ?>/homes/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="<?= BASEURL; ?>/homes/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?= BASEURL; ?>/homes/lib/bootstrap/css/bootstrap.css" rel="stylesheet"> -->
    <!-- Libraries CSS Files -->
    <link href="<?= BASEURL; ?>/homes/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/homes/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/homes/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/homes/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/homes/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="<?= BASEURL; ?>/homes/css/style.css" rel="stylesheet">
    <?php require 'leafletjs.php'?>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
       


  </head>
  <body>
    <!--==========================
    Header
    ============================-->
    <header id="header" class="fixed-top">
      <div class="container">
        <div class="logo float-left">
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
          <a href="#intro" class="scrollto"><img src="<?= BASEURL; ?>/homes/img/logo.png" alt="" class="img-fluid"></a>
        </div>
        <nav class="main-nav float-right d-none d-lg-block">
          <ul>
            <li class="active"><a href="<?= BASEURL; ?>">BERANDA</a></li>
            <li><a href="<?= BASEURL; ?>/LokasiPerbaikan">PERBAIKAN</a></li>
             <li><a href="<?= BASEURL; ?>/admin">ADMIN</a></li>
             <li><a href="<?= BASEURL; ?>/login">LOGIN</a></li>
            <!-- <li><a href="#about">About Us</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#team">Team</a></li> -->
            <li><a href="" data-toggle="modal" data-target="#formModal">REGISTRASI</a></li>
            <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
            <li><a href="#">Drop Down 5</a></li>
          </ul>
        </li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
      </nav><!-- .main-nav -->
      
    </div>
    </header><!-- #header -->



     <!-- Modal -->
   <div class="modal fade hide" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="judulModal">Pilih Jenis Registrasi</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               
               <!-- isi dari class modal -->
               <a href="<?= BASEURL; ?>/pelanggan/registrasi" class="btn btn-primary">Gabung Menjadi Pelanggan</a>
              
               <a href="<?= BASEURL; ?>/mitra/registrasi" class="btn btn-primary tombol-mitra">Gabung Menjadi Mitra</a>
               

               <script>
                   $(document).ready(function(){
                     $('.tombol-mitra').on('click',function(){
                        alert('oya')
                     });
                   });
               </script>

               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
</div>