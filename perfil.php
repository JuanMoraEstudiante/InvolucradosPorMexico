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
    <link rel="stylesheet" href="css/profile.css">
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
        <div class="text-center">
          <img class="profile" src="img/<?php echo $_SESSION['foto']; ?>" alt="">
          <h2 class="text-center"><?php echo $_SESSION['nombre']; ?></h2>
        </div>
        <div class="info">
          <p>Correo: <?php echo $_SESSION['correo']; ?></p>
          <p>Empresa: <?php echo $_SESSION['empresa']; ?></p>
        </div>
      </div>
      <div class="col-md-8 text-center">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h5>Reservación 1</h5>
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body text-left">
                <p><strong>Lugar:</strong> Galerías Monterrey</p>
                <p><strong>Dirección:</strong> Av. Vasconcelos 5467, Centro, Monterrey, Nuevo León. México.</p>
                <p><strong>Horario:</strong> 12:00 - 12:30</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h5>Reservación 2</h5>
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body text-left">
                <p><strong>Lugar:</strong> Galerías Monterrey</p>
                <p><strong>Dirección:</strong> Av. Vasconcelos 5467, Centro, Monterrey, Nuevo León. México.</p>
                <p><strong>Horario:</strong> 14:00 - 14:30</p>
               </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h5>Reservación 3</h5>
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body text-left">
                <p><strong>Lugar:</strong> Galerías Monterrey</p>
                <p><strong>Dirección:</strong> Av. Vasconcelos 5467, Centro, Monterrey, Nuevo León. México.</p>
                <p><strong>Horario:</strong> 17:00 - 17:30</p>
               </div>
            </div>
          </div>
        </div>
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
  </body>
</html>
