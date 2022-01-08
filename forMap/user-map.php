<!DOCTYPE html>
<html>
<head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
</head>
<body>
<style>
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
 /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
    #map {
        height: 100%;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<?php
include 'locations_model.php';
//get_unconfirmed_locations();exit;
?>
    <style>

        input[type=text], select {
            
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            
            background-color: pink;
            color: white;
            padding: 7px 10px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color:"F9EDED" ;
            padding: 10px;
            margin-left: 0%;
            width:90%;
            
        }
        #map { position:absolute;left: 345px; top:150px; bottom:0px; height:450px ;width:660px; }
        .geocoder { position:absolute;left: 1100px; top:10px; }
    </style>

    <div class="container" >
        <form action="" id="signupForm">
        &nbsp;&nbsp;&nbsp;&nbsp;<label for="lat">lat</label> &nbsp;&nbsp;
            <input type="text" id="lat" name="lat" placeholder="Your lat.." size="15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="lng">lng</label>&nbsp;&nbsp;
            <input type="text" id="lng" name="lng" placeholder="Your lng.." size="15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" value="Submit" size="15">
        </form>
    </div>
    <div class="geocoder">
        <div id="geocoder" ></div>
    </div>
    <div id="map"></div>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.48.0/mapbox-gl.css' rel='stylesheet' />
    <style>
    </style>

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />

    <script>

        var saved_markers = <?= get_saved_locations() ?>;
        var user_location = [27.53661937199655,40.96362438071469];
        mapboxgl.accessToken = 'pk.eyJ1IjoiZmFraHJhd3kiLCJhIjoiY2pscWs4OTNrMmd5ZTNra21iZmRvdTFkOCJ9.15TZ2NtGk_AtUvLd27-8xA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v9',
            center: user_location,
            zoom: 0
        });
        //  geocoder here
        var geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            // limit results to Australia
            //country: 'IN',
        });

        var marker ;

        // After the map style has loaded on the page, add a source layer and default
        // styling for a single point.
        map.on('load', function() {
            addMarker(user_location,'load');
            add_markers(saved_markers);

            // Listen for the `result` event from the MapboxGeocoder that is triggered when a user
            // makes a selection and add a symbol that matches the result.
            geocoder.on('result', function(ev) {
                alert("aaaaa");
                console.log(ev.result.center);

            });
        });
        map.on('click', function (e) {
            marker.remove();
            addMarker(e.lngLat,'click');
            //console.log(e.lngLat.lat);
            document.getElementById("lat").value = e.lngLat.lat;
            document.getElementById("lng").value = e.lngLat.lng;

        });

        function addMarker(ltlng,event) {

            if(event === 'click'){
                user_location = ltlng;
            }
            marker = new mapboxgl.Marker({draggable: true,color:"#d02922"})
                .setLngLat(user_location)
                .addTo(map)
                .on('dragend', onDragEnd);
        }
        function add_markers(coordinates) {

            var geojson = (saved_markers == coordinates ? saved_markers : '');

            console.log(geojson);
            // add markers to map
            geojson.forEach(function (marker) {
                console.log(marker);
                // make a marker for each feature and add to the map
                new mapboxgl.Marker()
                    .setLngLat(marker)
                    .addTo(map);
            });

        }

        function onDragEnd() {
            var lngLat = marker.getLngLat();
            document.getElementById("lat").value = lngLat.lat;
            document.getElementById("lng").value = lngLat.lng;
            console.log('lng: ' + lngLat.lng + '<br />lat: ' + lngLat.lat);
        }

        $('#signupForm').submit(function(event){
            event.preventDefault();
            var lat = $('#lat').val();
            var lng = $('#lng').val();
            var url = 'locations_model.php?add_location&lat=' + lat + '&lng=' + lng;
            $.ajax({
                url: url,
                method: 'GET',
                dataType: 'json',
                success: function(data){
                    alert(data);
                    location.reload();
                }
            });
        });

        document.getElementById('geocoder').appendChild(geocoder.onAdd(map));

    </script>





</body>
</html>