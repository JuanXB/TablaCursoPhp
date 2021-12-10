<?php
  //Se incluye la conexion a la base de datos.
  include('bd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Tabla</title>
</head>

<body>
  <div class="contenedor">
    <div class="sub_contenedor">
      <table>
        <tr class= "campos">
          <td>Nombre</td>
          <td>Precio</td>
          <td>Cantidad</td>
          <td>Existencia</td>
        </tr>
        <?php
          /*
          Se extraen todos los datos de la tabla.
          */
          $peticion = "SELECT*FROM tabla";
          $validacion = mysqli_query($conexion, $peticion);
          
          /* 
          Se muestran los datos extraidos.
          */
          while ($muestra = mysqli_fetch_array($validacion)) {
            
        ?>
          <tr>
            <td><?php echo $muestra['Nombre'];?></td>
            <td><?php echo $muestra['Precio'];?></td>
            <td><?php echo $muestra['Cantidad'];?></td>
            <td><?php echo $muestra['Existencias'];?></td>
          </tr>
        <?php
          } /* Se cierra el ciclo while. */
        ?>
      </table>
    </div>
    <footer>
      <h2>Curso PHP</h2>
    </footer>
  </div>
</body>
</html>