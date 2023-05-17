<?php
    include("connection.php");
    $con=conectar();
    
    $nombres = $_POST['fname'];
    $apellidos = $_POST['lname'];
    $edades = $_POST['age'];
    $correos = $_POST['email'];
    //echo $nombres," ", $apellidos," ", $edades," ", $correos;
    $insertar = "INSERT INTO registros (nombres, apellidos, edades, correos) VALUES(
        '$nombres', 
        '$apellidos', 
        '$edades',
        '$correos')";
    
    $query = mysqli_query($con, $insertar);
    if ($query) {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("New record created successfully ")';  
        echo '</script>'; 
        header("Location:tablero.php");
        die();
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }
  mysqli_close($con);
?>
    