<!doctype html>
<html lang="es">
    <head>
        <title>Bienvenido a Xook Tsool</title>
        <meta charset="utf-8">
        <meta name="author" content="Jonatan Díaz">
        <meta name="keywords" content="Centro de salud, Almacén, Bases de datos">
        <meta name="description" content="Login de aplicación web para el centro de salud con servicios ampliados de Yucalpetén, Progreso Yucatán, México">
        <meta name="viewport" content="width=devide-width,initial-scale=1.0">
        <link rel="shorcut icon" type="image/x-icon" href="Imágenes/Icono.ico">
        <link rel="stylesheet" href="CSS/Index.css">
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    </head>
    <body>
        <br/>
        <img src="Imágenes/Index.jpg">
        <div class="formulario">
        <h1>Centro de Salud Con Servicios Ampliados Progreso</h1><br></br>
        <form action="InicioDeSesion.php" method="POST">
        <i class="far fa-user"></i>
        <label>Usuario: </label><br></br><input type="text" placeholder="Nombre de usuario" name="usuario" required><br></br>
        <i class="fas fa-lock"></i>
        <label>Contraseña: </label><br></br><input type="password" placeholder="Contraseña" name="contraseña" required><br></br>
       <button type="submit" name="INICIAR">Iniciar sesion</button><br></br>
        <p>Xook Tsool</p>
        <div class="wrapper">
            <div class="icon gmail">
                <div class="tooltip"><a href="Contacto.php">Contacta con los desarrolladores</a></div>
                <i class="fas fa-envelope"></i>
            </div>
        </div>
        </form>
        </div>
    </body>
</html>
