<?php
include("koneksi1.php");
?>
  <div id="dvMap" style="width: 1000px; height: 550px"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmHFkV2bu4qrTeYIKG_rJLCvkcqCv_ksg" async defer></script>
  <script type="text/javascript">
    var markers = [
    <?php
    $sql = mysqli_query($db, "SELECT * FROM lokasi");
    while(($data =  mysqli_fetch_assoc($sql))) {
    ?>
    {
            "latitude": '<?php echo $data['latitude']; ?>',
            "longitude": '<?php echo $data['longitude']; ?>',
            "alamat": '<?php echo $data['alamat']; ?>'
    },
    <?php
    }
    ?>
    ];
    </script>
    <script type="text/javascript">
        window.onload = function () {
            var mapOptions = {
            center: new google.maps.LatLng(-2.2459632,116.2409634),
                zoom: 5,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }; 
            var infoWindow = new google.maps.InfoWindow();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            for (i = 0; i < markers.length; i++) {
                var data = markers[i];
        var latnya = data.lat;
        var longnya = data.long;
        
        var myLatlng = new google.maps.LatLng(latnya, longnya);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: data.alamat
                });
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent('<b>Lokasi</b> :' + data.alamat + '<br>');
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }
        }
    </script>
    <script type="text/javascript">
    var markers = [
    <?php
    $sql = mysqli_query($db, "SELECT * FROM lokasi");
    while(($data =  mysqli_fetch_assoc($sql))) {
    ?>
    {
                "latitude": '<?php echo $data['latitude']; ?>',
                "longitude": '<?php echo $data['longitude']; ?>',
             "alamat": '<?php echo $data['alamat']; ?>'
    },
    <?php
    }
    ?>
    ];
    </script>
    <script type="text/javascript">
        var markers = [
            {
                "latitude" : '-7.797766',
                "longitude" : '113.971469',
                "alamat" : 'prajekan bondowoso'
            },
            {
                "latitude" : '-6.917464',
                "longitude" : '107.900447',
                "alamat" : 'jl. cempaka situbondo'
            }
        ]
        center: new google.maps.LatLng(-2.2459632,116.2409634),
    var infoWindow = new google.maps.InfoWindow();
    var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
            
            for (i = 0; i < markers.length; i++) {
                var data = markers[i];
            var latnya = data.latitude;
            var longnya = data.longitude;
        
  var myLatlng = new google.maps.LatLng(latnya, longnya);
        var marker = new google.maps.Marker({
             position: myLatlng,
             map: map,
             title: data.alamat
        });
        (function (marker, data) {
            google.maps.event.addListener(marker, "click", function (e) {
            infoWindow.setContent('<b>Lokasi</b> :' + data.alamat + '<br>');
            infoWindow.open(map, marker);
        });
     })(marker, data);
            }
    </script>