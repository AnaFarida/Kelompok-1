<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Halaman <?= $data['judul']; ?></title>
      <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
      <link rel="stylesheet" href="<?= BASEURL; ?>/css/petaLokasi.css">
  
      <!-- untuk leafletjs -->
      <link rel="stylesheet" href="<?= BASEURL; ?>/css/leaflet.css" />
      <script src="<?= BASEURL; ?>/js/leaflet.js"></script>

<!--  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/> -->
    <!-- Make sure you put this AFTER Leaflet's CSS -->
<!--  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
 -->

      <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet/0.0.1-beta.5/esri-leaflet.js"></script>
      <script src="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
  
  

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
                  
               </div>
            </div>
         </div>
      </nav>