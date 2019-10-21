<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Google Map</title>

    <!-- Menyisipkan library Google Maps -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        //fungsi initialize untuk mempersiapkan peta
        function initialize() {
            var propertiPeta = {
                center : new google.maps.Latlng(-7.797766, 113.971469),
                zoom : 9 ,
                mapTypeId : google.maps.MapTypeId.ROADMAP
            };

            var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load 
        google.maps.event.addDomListener(WINDOW, 'load', initialize);
    </script>
</head>
<body>

        <!-- Elemen yang akan menjadi kontainer peta -->
        <div id="googleMap" style="width: 100%; height:380px;"></div>

<!-- Menentukan jarak pada titik tertentu terhadap lokasi sendiri --> 

<!-- Menentukan 2 titik pada jarak sendiri dan menentukan letak terdekat -->
<script>
    function getCentroid($coord)
    {
        $result = array_reduce( $coord, function ($x, $y) use ($ccord) {
            $coord_length = count($coord);
            return [$x[0] + $y[0]/$coord_length, $x[1], $y[1]/$second_lenght];
        }, array(0,0) );
        return $result;
    }

    var getCentroid = function (coord)
    {
        result = coord.reduce(function (x,y) {
            return [x[0] + y[0]/coord.lenght, x[1] + y[1]/coord.lenght]
        }, [0,0])
            return result;
    }
</script>


<!-- Cari cara apabila user memakai vpn -->
</body>
</html>