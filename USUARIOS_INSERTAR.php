<!doctype html>
<html lang="es">
    <head>
        <title>Almacén</title>
        <meta charset="utf-8">
        <meta name="author" content="Jonatan Díaz">
        <meta name="keywords" content="Centro de salud, Almacén, Bases de datos">
        <meta name="description" content="Panel de aplicación web para el centro de salud con servicios ampliados de Yucalpetén, Progreso Yucatán, México">
        <meta name="viewport" content="width=devide-width,initial-scale=1.0">
        <link rel="shorcut icon" type="image/x-icon" href="Imágenes/Icono.ico">
        <link rel="stylesheet" href="CSS/Panel.css">
        <link rel="stylesheet" type="text/css" href="libreria/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
        <script src="JS/Letras y numeros.js"></script>
    </head>
    <body style="background-color: rgb(68, 118, 212);">
        <br></br>
        <div class="panel">
            <div class="menuLateral">
            <a href="Departamentos.php"><i class="fas fa-undo-alt"></i></a>
            <a href="Index.php" class="cerrarSesion"><i class="fas fa-power-off"></i></a>
        
            </div>
            <div class="usuario">
            <div class="crud">
                <br></br>
                <h1>Acciones</h1>
                <br/>
                <div class="acciones">
                <div class="crear">
                <a href="USUARIOS_INSERTAR.php" class="boton"><i class="fas fa-plus"></i></a>
                <h6>Agregar</h6>
                </div>
                <div class="actualizar">
                <a href="VISTA_USUARIOS.php" class="boton"><i class="far fa-edit"></i></a>
                <h6>Ver insumos</h6>
                </div>
                </div>
            </div>
            <div class="inventario">
                <h2>Inserte aquí los artículos para el área covid</h2><br/>
                <form action="USUARIOS_CRUD.php" method="post">
                  <label for="USUARIO_IC">NOMBRE DEL USUARIO:</label>
                      <input type="text"  id="USUARIO_IC" name="USUARIO_IC" placeholder="Ingrese el nombre" required>
                      <br/>
                      <label for="CONTRASEÑA_IC">INSERTAR CONTRASEÑA:</label>
                      <input type="text"  id="CONTRASEÑA_IC" name="CONTRASEÑA_IC"  placeholder="Ingrese contraseña" required>
              	 	    <br/>
                      <label for="CORREO_IC">INSERTAR CORREO:</label>
                      <input type="text" id="CORREO_IC" name="CORREO_IC" placeholder="Ingrese el correo" required>
                      <br/>
                      <label for="ROLES_IC">ROLES:</label>
                      <input type="text"  id="ROLES_IC" name="ROLES_IC" placeholder="(Administrador / Usuario)" required><br/>
                      <button type="submit" name="INSERTAR">INSERTAR</button>
                  </form>
            </div>
        </div>
    </div>
    <br></br>
</body>
</html>
