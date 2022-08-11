<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>How to Add Google Map in Laravel? - ItSolutionStuff.com</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <style type="text/css">
        #map {

            height: 400px;

        }
    </style>

</head>



<body>
    <input type="text" id="marketName" />

    <div class="container mt-5">

        <h2>How to Add Google Map in Laravel? - ItSolutionStuff.com</h2>

        <div id="map"></div>

    </div>


    <!-- <script type="text/javascript">
        function initMap() {
            const myLatLng = { lat: 32.896352,
                 lng: 13.228483 };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: myLatLng,
            });
  
            var locations = {{ Js::from($locations) }};
  
            var infowindow = new google.maps.InfoWindow();
  
            var marker, i;
              
            for (i = 0; i < locations.length; i++) {  
                  marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                  });
                    
                  google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                      infowindow.setContent(locations[i][0]);
                      infowindow.open(map, marker);
                    }
                  })(marker, i));
  
            }
        }
  
        window.initMap = initMap;
    </script> -->
    <script type="text/javascript">
        /**
         * @license
         * Copyright 2019 Google LLC. All Rights Reserved.
         * SPDX-License-Identifier: Apache-2.0
         */
        // In the following example, markers appear when the user clicks on the map.
        // Each marker is labeled with a single alphabetical character.
        // const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        let labelIndex = 0;

        function initMap() {
            const home = {
                lat: 32.896352,
                lng: 13.228483
            };
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 14,
                center: home,
                // mapTypeId:google.maps.MapTypeId.TERRAIN  //map type
                //     mapTypeControl: true,
                //     mapTypeControlOptions: {
                //       style: google.maps.MapTypeControlStyle.DROPDOWN_MENU, mapTypeIds: [
                //          google.maps.MapTypeId.ROADMAP,
                //          google.maps.MapTypeId.TERRAIN
                //       ]
                //    },
            });
            // This event listener calls addMarker() when the map is clicked.
            google.maps.event.addListener(map, "click", (event) => {
                addMarker(event.latLng, map);
            });
            // Add a marker at the center of the map.
            //   addMarker(home, map);
        }

        // Adds a marker to the map.
        function addMarker(location, map) {
            if ($("#marketName").val().length == 0) {
                alert("Enter Location Name")
                return false;
            }

            // Add the marker at the clicked location, and add the next-available label
            // from the array of alphabetical characters.
            // var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
            // const image =
            //     "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
            var marker = new google.maps.Marker({
                position: location,
                // icon: iconBase + 'parking_lot_maps.png',
                //icon: image,
                label: {
                    text: $("#marketName").val(),
                    color: "blue"
                },
                map: map,
                //draggable:true, //قابله لسحب
                //    icon:'/scripts/img/logo-footer.png'
                // animation:google.maps.Animation.Drop
            });
            //for window information 
            const infoWindow = new google.maps.InfoWindow({
                content: "",
                disableAutoPan: true,
            });

            marker.addListener("click", () => {

                infoWindow.setContent(marker.label.text);
                infoWindow.open(map, marker);
                //
                // map.setZoom(19);
                // map.setCenter(marker.getPosition());
            });

            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            console.log(lat);
            $("#marketName").val("");
        }

        window.initMap = initMap;


        // function initMap() {

        //     //Latitude  خط العرض


        //     const myLatLng = {
        //         lat: 32.896352,
        //         lng: 13.228483
        //     };

        //     const map = new google.maps.Map(document.getElementById("map"), {
        //         //show first one 
        //         zoom: 13,

        //         center: myLatLng,

        //     });



        //     new google.maps.Marker({

        //         position: myLatLng,

        //         map,

        //         title: "Hello hOME!",

        //     });




        // }



        window.initMap = initMap;
    </script>



    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&region=ar&callback=initMap"></script>



</body>

</html>