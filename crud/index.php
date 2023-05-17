<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formu">
    <fieldset>
    <legend>Formulario de registro</legend>
    <div class="elements">
    <form action="guardaDatos.php" method="post">
    <label for="fname">Nombres:</label>
    <input type="text" id="fname" name="fname" placeholder="John alexander">
    <label for="lname">Apellidos:</label><br>
    <input type="text" id="lname" name="lname" placeholder="Sanchez castro">
    <label for="lname">Edad:</label>
    <input type="text" id="age" name="age" placeholder="22">
    <label for="lname">Correo:</label>
    <input type="email" id="email" name="email" placeholder="John234@gmail.com">
    <div class="env">
    <input type="submit" id="sub" value="Submit">
    </div>
    </form>
    </fieldset>
    </div>
    <div class="link">
        <a href="tablero.php">Ver listado de registrados</a>
    </div>
    </div>
</body>
</html>