<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formus.css">
    <title>formulario de registro</title>
</head>
<body>
    <div class="contenedor">
    <div class="cajaI">
            <div class="titulo">
            <h1>Solo sillas punto com</h1>
            </div>
            <div class="logo">
            <img src="img/sillaM.jpg" alt="logo" width="10%">
            </div>
    </div>
    <div class ="header">
            <header>
                <div class="botones">
                <ul>
            <li> <a href="index.php">Inicio</a></li>
            <li> <a href="nosotros.php">Nosotros</a></li>
            <li> <a href="contacto.php">Contacto</a></li>
                <li><a href="centros.php">Centros de ayuda</a></li>
                <li style="float:right"><a href="login.php">Inicio de sesion</a></li>
                </ul>
                </div>
            </header>
    </div>
    <fieldset class="inicio">
        <h1>Registro en la pagina solo sillas </h1>
        <img src="img/registro.png" alt="imagen de registro de usuario">
        <form action="" method="post">
        <label for="nombres">Ingrese sus nombres:</label>
        <input type="text" placeholder="ingrese sus nombres" name="nombres" id="nombres"/>
        <label for="apellidos">Ingrese sus apellidos:</label>
        <input type="text" placeholder="ingrese sus apellidos" name="apellidos" id="apellidos"/>
        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" placeholder="ingrese sus fecha de nacimiento" name="fecha" id="fecha"/>
        <label for="rol">Escriba su rol:</label>
        <input type="text" placeholder="ingrese sus rol" name="rol" id="rol"/>
        <label for="correo">Ingrese su correo electronico:</label>
        <input type="email" placeholder="ingrese su correo electronico" name="correo" id="correo"/>
        <label for="contrasena">Ingrese su contraseña:</label>
        <input type="password" placeholder="ingrese su contraseña" name="contrasena" id="contrasena" />
        <button type="submit" >Registrarse</button>
        </form>
    </fieldset>
    <footer class="piePag">
        <h4>Creado por: Wilmer alexander solano</h4>
        <h5>@2023 Todos los derechos reservados</h5>
    </footer> 


    </div>
</body>
</html>