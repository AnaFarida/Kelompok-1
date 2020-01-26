
<!-- page ini banyak menggunakan javaScript, Tolong perhatikan -->


<script>
$(document).ready(function(){
$('.miniProfile').hide();
$('.pilihMitra').hide();
});
</script>

<!-- style css tambahan -->
<style>
#mapSearchContainer{
position:fixed;
top:20px;
right: 40px;
height:30px;
width:180px;
z-index:110;
font-size:10pt;
color:#5d5d5d;
border:solid 1px #bbb;
background-color:#f8f8f8;
}
.pointer{
position:absolute;
top:86px;
left:60px;
z-index:99999;
}
</style>
<div id="map" style="position: absolute;margin-left: 1px; margin-right: 100px; margin-top: 60px; width: 70%; height: 570px; z-index:100; border: solid black 1px;">
  <div class='pointer'> Click search button</div>
  <script>
  var map = L.map('map').setView([-7.91346, 113.82145] ,17);
  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);
  var searchControl = new L.esri.Controls.Geosearch().addTo(map);
  var results = new L.LayerGroup().addTo(map);
  searchControl.on('results', function(data){
  results.clearLayers();
  for (var i = data.results.length - 1; i >= 0; i--) {
  results.addLayer(L.marker(data.results[i].latlng));
  }
  });
  
var greyIcon = new L.Icon({
  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

  setTimeout(function(){$('.pointer').fadeOut('slow');},3400);
  var c = new L.Control.Coordinates();
  c.addTo(map);
  function onMapClick(e) {
  c.setCoordinates(e);
  console.log(e);
  }
  map.on('click', onMapClick);
  </script>
</div>

<?php foreach ($data['mitra'] as $mitra) : ?>
  <script>
    var popup = L.popup();
    var marker = L.marker([<?= $mitra['lat']; ?>, <?= $mitra['lng']; ?>], {icon: greyIcon}).addTo(map)
    marker.bindPopup('<?= $mitra['nama_usaha']; ?>');
    </script>
    <script>
    $(marker).click(function(){
    $('#id').attr('value', '<?= $mitra['id_mitra']; ?>');
    
    $('.miniProfile').show();
    $('.pilihMitra').show();
    $('.tutorial').hide();
    $('.namaMitra').text('<?= $mitra['nama_usaha']; ?>');
    $('.descMitra').text('<?= $mitra['deskripsi']; ?>');
    $('.rating').text('<?= $mitra['rating']; ?>');   
    $('.fotoMitra').attr('src','<?= BASEURL; ?>/img/mitra/<?=$mitra['foto_usaha'] ?>');
    map.setView([<?= $mitra['lat']; ?>, <?= $mitra['lng']; ?>], 17);
    });
  </script>
<?php endforeach; ?>

<div class="tutorial mt-70" style="position: absolute; right: 10px; width: 28%;">
  <h4 class="font-alt mb-0">Tutorial</h4>
  <hr class="divider-w mt-10 mb-20">
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support1">Bagaimana Cara Memilih Mitra?</a></h4>
      </div>
      <div class="panel-collapse collapse in" id="support1">
        <div class="panel-body">
          Pilih mitra yang anda inginkan dengan menekan area peta, deskripsi mitra akan muncul bersamaan dengan rating mitra.
          <?php// var_dump($data['rating']); ?>
        </div>
      </div>
    </div>
        <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2">Bagaimana Cara Melakukan Perbaikan?</a></h4>
      </div>
      <div class="panel-collapse collapse" id="support2">
        <div class="panel-body">
        Pertama Pilih mitra dan pilih barang yang akan diperbaiki, selanjutnya jika mitra menerima perbaikan maka anda akan mendapatkan voucher yang selanjutnya bawa voucher ke tempat perbaikan, dan perbaikan akan berlangsung.
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-70 miniProfile" style="position: absolute; right: 10px; width: 30%; height: 500px; overflow: auto;">
  <div class="col-sm-12">
    <h4 class="font-alt mb-0 namaMitra">Mitra</h4>
    <hr class="divider-w mt-10 mb-20">
    <ul class="nav nav-tabs font-alt" role="tablist">
      <li class="active"><a href="#description" data-toggle="tab"><span class="icon-tools-2"></span>Deskripsi Mitra</a></li>
      <input type="text" id="idmitra" name="idmitra" hidden>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active" id="description">
        <img class="fotoMitra" src="" alt="" width="678px" height="452px">
        <p class="font-alt mb-0 descMitra"></p>
        <div><p class="font-alt mb-0 " style="display: inline-block;">Rating :<p class="font-alt mb-0 rating" style="display: inline-block;"></p></p></div>
       
       <!-- <i class="fa fa-star star"></i> -->

        
      </div>
      
  </div>
</div>
</div>
</div>
<div style="position: absolute; right:30px; bottom: 25px; width: 25%;" class="pilihMitra">
<form action="<?= BASEURL; ?>/perbaikan/barangkerusakan" method="POST">
<input type="text" id="id" name="id" hidden>
<button class="btn btn-d btn-round btn-block" type="submit">Pilih Mitra</button>
</form>
</div>
<script>
  $(document).ready(function(){
    $('.pilihMitra').click(function(){
      $('.LinkSelanjutnya').attr()
    })
  });
</script>
 