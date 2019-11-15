<div id="map"></div>
<div class='pointer'><< Click search button</div>

<script>
//	var map = L.map('map', {
    // Set latitude and longitude of the map center (required)
  //  center: [-7.91346, 113.82145],
    // Set the initial zoom level, values 0-18, where 0 is most zoomed-out (required)
  //  zoom: 10
//});



var map = L.map('map').setView([-7.91346, 113.82145], 13);

// L.control.scale().addTo(map);

// Create a Tile Layer and add it to the map
//var tiles = new L.tileLayer('http://{s}.tile.stamen.com/watercolor/{z}/{x}/{y}.png').addTo(map);
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


