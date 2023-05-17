<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar registro en el sistema</title>
</head>
<body>
<?php
    include("connection.php");
    $con=conectar();
    $id = $_GET["id"];
    echo $id;
    $buscar= "SELECT * FROM registros WHERE id_registro='$id'";
?>
  <div class="formu">
    <fieldset>
    <legend>Formulario de registro</legend>
    <div class="elements">
    <form action="editaDatos.php" method="post">
  <?php
  if($result = $con->query($buscar)) {
  while ($row = $result->fetch_assoc()) {
  ?>
   
    <input type="hidden" id="fname" name="id" value="<?php echo $row['id_registro']?>">
    <label for="fname">Nombres:</label>
    <input type="text" id="fname" name="fname" value="<?php echo $row['nombres']?>">
    <label for="lname">Apellidos:</label><br>
    <input type="text" id="lname" name="lname" value="<?php echo $row['apellidos']?>">
    <label for="lname">Edad:</label>
    <input type="text" id="age" name="age" value="<?php echo $row['edades']?>"> 
    <label for="lname">Correo:</label>
    <input type="email" id="email" name="email" value="<?php echo $row['correos']?>">
    <div class="env">
    <input type="submit" id="sub" value="Actualizar">
    </div>
    </form>
    </fieldset>
     
       
    
    <?php
      
      }
  }
    ?>

</div> 


</body>
</html>