<!DOCTYPE html>
   <head>
      <meta charset="UTF-8">
      <title>Halaman <?= $data['judul']; ?></title>
      
      <!-- bootstrap  -->
      <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
      <script type="text/javascript" src="<?= BASEURL; ?>/js/bootstrap.js"></script>
      <!-- <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" /> -->

      <!-- untuk leafletjs -->
       <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
      integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
      crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
      integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
      crossorigin=""></script>
      <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
      <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
      <script src="<?= BASEURL; ?>/js/Control.Coordinates.js"></script>
      <script src="<?= BASEURL; ?>/js/petaLokasi.js"></script>
      <link rel="stylesheet" href="<?= BASEURL; ?>/css/petaLokasi.css">
      <script src="<?= BASEURL; ?>/js/jquery-3.4.1.js"></script>
<!-- 
      <link rel="icon" href="<?= BASEURL; ?>/favicon.png" type="image/png">
      <link rel="shortcut icon" href="<?= BASEURL; ?>/favicon.ico" type="img/x-icon">
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
      <link href="<?= BASEURL; ?>/css/homecss/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="<?= BASEURL; ?>/css/homecss/style.css" rel="stylesheet" type="text/css">
      <link href="<?= BASEURL; ?>/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
      <link href="<?= BASEURL; ?>/css/homecss/responsive.css" rel="stylesheet" type="text/css">
      <link href="<?= BASEURL; ?>/css/homecss/magnific-popup.css" rel="stylesheet" type="text/css">
      <link href="<?= BASEURL; ?>/css/homecss/animate.css" rel="stylesheet" type="text/css">

 -->
      <style>
         .modal-backdrop{
            background-color: rgba(0,0,0,.0001) !important;
         }
      </style>

      <!-- untuk form regitrasi -->
      


   </head>
   <body>
      <nav class="navbar navbar-expand-lg    navbar-light bg-light">
         <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">Repairme</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               
               <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href="<?= BASEURL; ?>/mitra">Mitra</a>
                  <a class="nav-item nav-link" href="<?= BASEURL; ?>/LokasiPerbaikan">Perbaikan</a>
                  <a class="nav-item nav-link" href="<?= BASEURL; ?>/login">Login</a>
                  <a class="nav-item nav-link" href="<?= BASEURL; ?>/admin">Admin</a>
                  <a class="nav-item nav-link" href="<?= BASEURL; ?>/pelanggan">Pelanggan</a>
                  <a class="nav-item nav-link" href="<?= BASEURL; ?>/kategori">Kategori</a>
                  <a class="nav-item nav-link mdl-opn" href="<?= BASEURL; ?>/home/registrasi" data-toggle="modal" data-target="#formModal">registrasi</a>
            </div>
         </div>
      </nav>

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


