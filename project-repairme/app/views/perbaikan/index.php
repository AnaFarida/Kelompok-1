
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
.morecontent span {
    display: none;
}
.morelink {
    display: block;
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
    $('.ratingMitra').text('<?= $mitra['rating_data']; ?>');
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
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#support2">Support Question 2</a></h4>
      </div>
      <div class="panel-collapse collapse" id="support2">
        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
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
      <!-- <li><a href="#data-sheet" data-toggle="tab"><span class="icon-tools-2"></span>Data sheet</a></li>
 -->      <li><a href="#reviews" data-toggle="tab"><span class="icon-tools-2"></span>Reviews (2)</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active" id="description">
        <img class="fotoMitra" src="" alt="" width="678px" height="452px">
        <p class="font-alt mb-0 descMitra"></p>
        <div>
          <img style="vertical-align: middle;"src="http://localhost/Kelompok-1/project-repairme/public/img/images/star.png" height="20px" width="20px"  />
          <span style="" class="ratingMitra"> </span>
        </div>
        
      </div>
      <div class="tab-pane" id="data-sheet">
        <table class="table table-striped ds-table table-responsive">
          <tbody>
            <tr>
              <th>Title</th>
              <th>Info</th>
            </tr>
            <tr>
              <td>Compositions</td>
              <td>Jeans</td>
            </tr>
            <tr>
              <td>Size</td>
              <td>44, 46, 48</td>
            </tr>
            <tr>
              <td>Color</td>
              <td>Black</td>
            </tr>
            <tr>
              <td>Brand</td>
              <td>Somebrand</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="tab-pane" id="reviews">
        <div class="comments reviews">
          <div class="comment clearfix">
            <div class="comment-avatar"><img src="" alt="avatar"/></div>
            <div class="comment-content clearfix">
              <div class="comment-author font-alt"><a href="#">John Doe</a></div>
              <div class="comment-body">
                <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
              </div>
              <div class="comment-meta font-alt">Today, 14:55 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span>
            </div>
          </div>
        </div>
        <div class="comment clearfix">
          <div class="comment-avatar"><img src="" alt="avatar"/></div>
          <div class="comment-content clearfix">
            <div class="comment-author font-alt"><a href="#">Mark Stone</a></div>
            <div class="comment-body">
              <p>Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
            </div>
            <div class="comment-meta font-alt">Today, 14:59 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><span><i class="fa fa-star star-off"></i></span>
          </div>
        </div>
      </div>
    </div>
    <div class="comment-form mt-30">
      <h4 class="comment-form-title font-alt">Add review</h4>
      <form method="post">
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input class="form-control" id="name" type="text" name="name" placeholder="Name"/>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label class="sr-only" for="email">Name</label>
              <input class="form-control" id="email" type="text" name="email" placeholder="E-mail"/>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <select class="form-control">
                <option selected="true" disabled="">Rating</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <textarea class="form-control" id="" name="" rows="4" placeholder="Review"></textarea>
            </div>
          </div>
          <div class="col-sm-12">
          </div>
        </div>
      </form>
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
