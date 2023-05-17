<?php
$val= $_POST['num'];
//$num =1;
echo '<form action="muestraNumeros.php" method="post">';
// do{
//  echo '<td><input class="text" type="text" id="txtLogin" name="txtLogin" value="escriba el numero: ' .$num .': "></td><br>';
//  //echo "escriba el numero $num: <br>";
//  $num ++;
//  echo '<td><input type="submit" value="subir info" </td>';
// }while($num<= $val)
for ($x = 1; $x <= $val; $x++) {
    echo'<td>Escriba el numero ' .$x .': </td>';
    echo '<td><input class="text" type="text"  name="num[]""></td><br>';
}
echo '<td><input type="submit" value="Guardar valores" </td>';

?>