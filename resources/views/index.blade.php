<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0
        }

        #map_canvas {
            height: 100%;
        }

        .button {
            background: none rgb(255, 255, 255);
            border: 0px;
            margin: 10px;
            padding: 10px;
            text-transform: none;
            appearance: none;
            position: absolute;
            cursor: pointer;
            user-select: none;
            border-radius: 2px;
            box-shadow: rgb(0 0 0 / 30%) 0px 1px 4px -1px;
            overflow: hidden;
            top: 0px;
            right: 50px;
            z-index: 999;
            color: #666666;
            font-weight: bold;
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3MF7G5w46dVqk3y2RhSBUv_iin5tFJIs&sensor=false&libraries=geometry,places&ext=.js">
    </script>
    <a id="drawpoly" class="button">Draw</a>

    <div id="map_canvas"></div>
    <script>
        function drawFreeHand() {
            poly = new google.maps.Polyline({
                map: map,
                clickable: false
            });

            var move = google.maps.event.addListener(map, 'mousemove', function(e) {
                poly.getPath().push(e.latLng);
            });

            google.maps.event.addListenerOnce(map, 'mouseup', function(e) {
                google.maps.event.removeListener(move);
                var path = poly.getPath();
                poly.setMap(null);
                poly = new google.maps.Polygon({
                    map: map,
                    path: path
                });

                google.maps.event.clearListeners(map.getDiv(), 'mousedown');

                enable()
            });
        }

        function disable() {
            map.setOptions({
                draggable: false,
                zoomControl: false,
                scrollwheel: false,
                disableDoubleClickZoom: false
            });
        }

        function enable() {
            map.setOptions({
                draggable: true,
                zoomControl: true,
                scrollwheel: true,
                disableDoubleClickZoom: true
            });
        }


        function initialize() {
            var mapOptions = {
                zoom: 14,
                center: new google.maps.LatLng(16.463623, 107.595239),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

            $("#drawpoly").click(function(e) {
                e.preventDefault();

                disable()

                google.maps.event.addDomListener(map.getDiv(), 'mousedown', function(e) {
                    drawFreeHand()
                });

            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>

</html>
