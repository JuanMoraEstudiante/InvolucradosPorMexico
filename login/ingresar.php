<?php

  session_start();

  include("conexion.php");

  //Query de SQL
  $query = "SELECT *FROM usuarios";

  $result = $link->query($query);

  if (!$result) {
    $message = 'Invalid query: ' . mysql_error() . " ";
    $message .= 'Whole query: ' . $query;
    die($message);
  }

  //Variables de formulario
  $usuario = $_POST['correo'];
  $clave = $_POST['clave'];
  $lastUserQ = $result->num_rows;

  //Recorrer la tabla de usuarios
  /*
    PRINT 1 = Usuario y contraseña correctamente
    PRINT 2 = Usuario correcto contraseña incorrecta
    PRINT 3 = Usuario incorrecto
  */

    while($row = $result->fetch_array()){
      $index = 1;
      if($row['correo'] == $usuario && $row['clave'] == $clave){
        $_SESSION["nombre"] = $row['nombre'];
        $_SESSION["correo"] = $row['correo'];
        $_SESSION["clave"] = $row['clave'];
        $_SESSION["empresa"] = $row['empresa'];
        $_SESSION["foto"] = $row['foto'];
        print "1";
        break;
      }else{
        if($index == $lastUserQ){
          print "3";
          break;
        }
      }

    }


 ?>
