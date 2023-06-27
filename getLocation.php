<!DOCTYPE html>
<html>

<head>
    <title>Konum İzni</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <?php
    if ( isset($_COOKIE['latitude']) && isset($_COOKIE['longitude']) ) {
        $latitude  = $_COOKIE['latitude'];
        $longitude = $_COOKIE['longitude'];

        echo "Latitude: " . $latitude . "<br>";
        echo "Longitude: " . $longitude;
    }
    ?>
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(getCoords);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function getCoords(position) {
            var lat = position.coords.latitude;
            var long = position.coords.longitude;

            // Konum verileri çerezlere kaydediliyor
            document.cookie = "latitude=" + lat;
            document.cookie = "longitude=" + long;
        }
    </script>

    <script>
        window.onload = function () {
            getLocation();
        }
    </script>
</body>

</html>