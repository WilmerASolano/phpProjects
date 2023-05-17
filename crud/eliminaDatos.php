<?php
    include("connection.php");
    $con=conectar();
    $id = $_GET["id"];
    echo $id;
    $eliminar= "DELETE FROM registros WHERE id_registro='$id'";
    $query = mysqli_query($con, $eliminar);
    if ($query) {
      echo '<script type ="text/JavaScript">';  
      echo 'alert("Record DELETEDDDD successfully ")';  
      echo '</script>';  
      header("Location:tablero.php");
      die();
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
   }
   mysqli_close($con);
?>