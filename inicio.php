<?php session_start(); ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Involucrados por México</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <!-- HERE JavaScript Libs & Style Sheets-->
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <!-- HERE JavaScript Libs & Style Sheets end-->
  </head>
  <body>

    <?php include("slider.php") ?>

    <!-- Page Content -->
    <div class="w3-teal">
      <div class="w3-container azul-primario">
          <button class="w3-button w3-teal w3-xlarge azul-primario" onclick="w3_open()">☰</button>
          <h1>Involucrados por México</h1>
      </div>
    </div>

    <div class="row" style="padding: 5%;">
      <div class="col-md-4">
        <h2 class="text-center">Buscar zonas</h2>
        <form>
          <div class="form-group">
            <label for="zona">Zona o ubicación: </label>
            <input type="text" class="form-control" name="zona" placeholder="Galerías Monterrey">
          </div>
          <div class="form-group">
            <button class="btn azul-secundario" type="submit" name="button" style="width:100%;">Buscar</button>
          </div>
        </form>
      </div>
      <div class="col-md-8 text-center">
        <div style="width: 100%; height:50vh;" id="mapContainer"></div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--Sidebar JS-->
    <script>
    function w3_open() {
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("myOverlay").style.display = "none";
    }
    </script>
    <!--Sidebar JS-->
    <script>

    function addMarkerToGroup(group, coordinate, html) {
      var marker = new H.map.Marker(coordinate);
      // add custom data to the marker
      marker.setData(html);
      group.addObject(marker);
      }

      /**
      * Add two markers showing the position of Liverpool and Manchester City football clubs.
      * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
      * @param  {H.Map} map      A HERE Map instance within the application
      */
      function addInfoBubble(map) {
      var group = new H.map.Group();

      map.addObject(group);

      // add 'tap' event listener, that opens info bubble, to the group
      group.addEventListener('tap', function (evt) {
      // event target is the marker itself, group is a parent event target
      // for all objects that it contains
      var bubble =  new H.ui.InfoBubble(evt.target.getGeometry(), {
        // read custom data
        content: evt.target.getData()
      });
      // show info bubble
      ui.addBubble(bubble);
      }, false);

      addMarkerToGroup(group, {lat:25.68148267821501, lng:-100.35480578727964},
      '<div><a href="#" target="_blank">Galerías Monterrey.</a>' +
      '</div><div >Monterrey, Nuevo León<br>Plazas: 8</div>');

      addMarkerToGroup(group, {lat:53.430, lng:-2.961},
      '<div><a href="http://www.liverpoolfc.tv" target="_blank">Liverpool</a>' +
      '</div><div >Anfield<br>Capacity: 45,362</div>');

      }

        //Step 1: initialize communication with the platform
        // Replace variable YOUR_API_KEY with your own apikey
        var platform = new H.service.Platform({
            apikey: 'ho_oBP7u_g9ejGDg7eVmP6O5vQFuOEI8GNuvNtPv55Y'
        });
        var defaultLayers = platform.createDefaultLayers();
        //Step 2: initialize a map - this map is centered over Europe
        var map = new H.Map(document.getElementById('mapContainer'),
            defaultLayers.vector.normal.map,
            {
                center: { lat: 50, lng: 5 },
                zoom: 4,
                pixelRatio: window.devicePixelRatio || 1
            }
        );
        // This adds a resize listener to make sure that the map occupies the whole container
        window.addEventListener('resize', () => map.getViewPort().resize());
        //Step 3: make the map interactive
        // MapEvents enables the event system
        // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

        // Create the default UI components
        var ui = H.ui.UI.createDefault(map, defaultLayers);

        addInfoBubble(map);

        // Marker code goes here
        var LocationOfMarker = { lat: 25.6223436861288, lng: -100.29218602405555 };

        // optionally - resize a larger PNG image to a specific size
        var pngIcon = new H.map.Icon("https://cdn3.iconfinder.com/data/icons/tourism/eiffel200.png", { size: { w: 56, h: 56 } });

        // Create a marker using the previously instantiated icon:
        var marker = new H.map.Marker(LocationOfMarker, { icon: pngIcon });

        // Add the marker to the map:
        map.addObject(marker);

        // Optionally,
        //Show the marker in the center of the map
        map.setCenter(LocationOfMarker)

        //Zooming so that the marker can be clearly visible
        map.setZoom(8)
    </script>
  </body>
</html>
