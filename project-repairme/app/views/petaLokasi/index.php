
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

</script>

<script>
   var marker = L.marker([<?= $mitra['lat']; ?>, <?= $mitra['lng']; ?>]).addTo(map);
</script>

<?php endforeach; ?>