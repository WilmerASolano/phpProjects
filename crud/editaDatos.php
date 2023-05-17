<?php
include("connection.php");
$con=conectar();
$id = $_POST['id'];
$nombres = $_POST['fname'];
$apellidos = $_POST['lname'];
$edades = $_POST['age'];
$correos = $_POST['email'];
$editar ="UPDATE registros SET nombres = '$nombres',apellidos ='$apellidos',edades ='$edades',correos = '$correos'
WHERE id_registro='$id'";
$query = mysqli_query($con, $editar);
if ($query) {
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Record edited successfully ")';  
    echo '</script>'; 
    header("Location:tablero.php");
    die();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

?>