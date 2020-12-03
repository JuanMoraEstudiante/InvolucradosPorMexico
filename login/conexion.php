<?php

  $link = new mysqli("127.0.0.1", "root", "", "involucrados", 3307);
  if (!$link) {
  die('Error de conexion ' . mysql_error());
  }

 ?>
