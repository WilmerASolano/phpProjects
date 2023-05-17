<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Tabla de registros en el sistema</title>
</head>
<body>
  <?php
  include("connection.php");
  $con=conectar();
  $buscar = "SELECT * FROM registros";

  ?>
<div class="contenido">
<h1>Tabla de registros en el sistema</h1>

<table class="tbl">
  <tbody>
    <tr>
      <th>Id</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Edades</th>
      <th>Correos</th>
      <th>Acciones</th>
    </tr>
  <?php
  if($result = $con->query($buscar)) {
  while ($row = $result->fetch_assoc()) {
  ?>
    <tr>
      <td ><?php echo $row['id_registro']?></td>
      <td ><?php echo $row['nombres']?></td>
      <td><?php echo $row['apellidos']?></td>
      <td><?php echo $row['edades']?></td>
      <td><?php echo $row['correos']?></td>
      <td><a class="edi" href="tablaEditaDatos.php?id=<?php echo $row['id_registro'];?>">Editar</a>
        <a class="eli" href="eliminaDatos.php?id=<?php echo $row['id_registro'];?>">Eliminar</a>
    </td>
    
    </tr>
    <?php
    
      }
  }
    ?>
  </tbody>
</table>
<div class="link">
<a href="index.php">Volver al formulario</a>
</div>
</div> 


</body>
</html>