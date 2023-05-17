<?php
$number = $_POST['num'];
 //echo ''.$number. '<br>';
$numbers = [];
array_push($numbers, $number);

// mostra el resultado
echo '<h1>Sus numeros que registro en la pagina fueron: </h1>';
echo '<h2>'.json_encode ($numbers).'</h2>';
echo '<h3>Gracias por utilizar este servicio XD</h3>';
//echo implode(', ', $numbers);
 
?>