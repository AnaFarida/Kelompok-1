<style>
  body,
html {
  height: 100%;
  font-family:Arial;
}
  
#map {
  margin-top: 81px;
  width: 100%;
  height: 90%;
  z-index:100;
}
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
<div id="map">
<div class='pointer'> Click search button</div>

<script>
var map = L.map('map').setView([-7.91346, 113.82145], 17);
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
   var marker = L.marker([<?= $mitra['lat']; ?>, <?= $mitra['lng']; ?>]).addTo(map);
    marker.bindPopup('<?= $mitra['nama_usaha']; ?>');
</script>

<script>
  $(marker).click(function(){
    map.setView([<?= $mitra['lat']; ?>, <?= $mitra['lng']; ?>], 17);
       });
</script>

<?php endforeach; ?>