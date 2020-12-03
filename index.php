<?php session_start(); ?>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <!--Librerías de Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="css/sidebar.css">
  <title>Login Prueba</title>
</head>

<body>

  <!--BEGIN: Navbar-->
  <div class="w3-teal">
    <div class="w3-container azul-primario">
        <h1>Involucrados por México</h1>
    </div>
  </div>
  <!--END: Navbar-->

  <div class="container w-50 p-3 h-80 m-auto">
    <h2 class="display-4">Inicio de Sesión</h2>

    <div class="container w-50">
      <form id="loginForm">
        <div class="form-group">
          <label for="correo">Correo: </label>
          <input type="email" class="form-control" name="correo" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
        </div>
        <div class="form-group">
          <label for="clave">Contraseña: </label>
          <input type="password" class="form-control" name="clave" placeholder="Ingresa tu contraseña">
        </div>
        <div class="text-center"><button id="btnSubmit" type="submit" class="btn azul-primario btn-block">Ingresar</button></div>

      </form>
      <div class="text-center">
        <a class="registro" href="registro.php">¿No tienes cuenta? Registrate aquí.</a>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!--Función Spinner-->
  <script src="js/spinner.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


  <script type="text/javascript">

  $('#btnSubmit').click(function() {

    var logForm = new FormData(document.getElementById("loginForm"));
    $.ajax({
      type: "POST",
      url: "login/ingresar.php",
      data: logForm,
      processData: false, // tell jQuery not to process the data
      contentType: false // tell jQuery not to set contentType,
    }).done(function( msg ) {
      if(msg == 1){
        window.location.replace("inicio.php");
      }else if(msg == 3){
        alert("Tu usuario o contraseña es incorrecto, intenta nuevamente.");
        location.reload();
      }
    });
  });
  </script>

</body>

</html>
