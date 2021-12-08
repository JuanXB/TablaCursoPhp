<?php
  $conexion = mysqli_connect('localhost', 'root', '', 'muestra');

  if (!$conexion) {
    echo mysqli_error();
  }

?>