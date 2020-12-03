<?php session_start(); ?>
<html>
  <head>
    <title>QR Code Scanner</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="src/styles.css" />
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
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

    <div id="container">
      <h1>Registro entrada y/o salida</h1>
      <h5>Click en el código para activar cámara</h5>

      <div class="row qr-row">
        <div class="col-md-6">
          <a id="btn-scan-qr">
            <img src="https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2017/07/1499401426qr_icon.svg">
          </a>

          <canvas hidden="" id="qr-canvas"></canvas>
        </div>
        <div class="col-md-6">
          <div id="qr-result" hidden="">
            <b>Data:</b> <span id="outputData"></span>
          </div>
        </div>
        </div>
      </div>





    <script src="./src/qrCodeScanner.js"></script>
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
  </body>
</html>
