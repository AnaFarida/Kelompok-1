<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- //untuk halaman -->

      <title>Halaman <?= $data['judul']; ?></title>
      <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
      

      <!-- untuk leafletjs -->
      <link rel="stylesheet" href="<?= BASEURL; ?>/css/leaflet.css" />
      <script src="<?= BASEURL; ?>/js/leaflet.js"></script>
      <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
      <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
      <script src="<?= BASEURL; ?>/js/Control.Coordinates.js"></script>
      <script src="<?= BASEURL; ?>/js/petaLokasi.js"></script>
      <link rel="stylesheet" href="<?= BASEURL; ?>/css/petaLokasi.css">
      <script src="<?= BASEURL; ?>/js/jquery-3.4.1.js"></script>
      <style>
         .modal-backdrop{
            background-color: rgba(0,0,0,.0001) !important;
         }
      </style>

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
               <a href="<?= BASEURL; ?>/mitra/registrasi" class="btn btn-primary">Gabung Menjadi Pelanggan</a>
               <a href="<?= BASEURL; ?>/mitra/registrasi" class="btn btn-primary">Gabung Menjadi Mitra</a>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
</div>


