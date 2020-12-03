<?php

  session_start();

  include("conexion.php");

  //Variables de formulario
  $usuario = $_POST['correo'];
  $clave = $_POST['clave'];
  $nombre = $_POST['nombre'];
  $empresa = $_POST['empresa'];
  //Recorrer la tabla de usuarios
  /*
    PRINT 1 = Usuario y contraseña correctamente
    PRINT 2 = Usuario correcto contraseña incorrecta
    PRINT 3 = Usuario incorrecto
  */
  $insertarUsuario = "INSERT INTO usuarios(usuario, clave, nombre, empresa) VALUES ('$usuario', '$clave', '$nombre', '$empresa');";
  if($link->query($insertarUsuario)){
    echo "¡El usuario $usuario se ha registrado exitosamente!";
    print "1";
  }else{
    echo "Hubo un fallo al registrar el usuario.";
    print "3";
  }


 ?>
