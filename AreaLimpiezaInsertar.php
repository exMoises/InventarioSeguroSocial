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
            <a href="Registro_Insumos/registro_limpieza.php" class="generarReporte"><i class="far fa-file-alt"></i></a>
            </div>
            <div class="usuario">
            <div class="crud">
            <br></br>    
            <h1>Acciones</h1>
                <br/>
                <div class="acciones">
                <div class="crear">
                <a href="AreaLimpiezaInsertar.php" class="boton"><i class="fas fa-plus"></i></a>
                <h6>Agregar</h6>
                </div>
                <div class="actualizar">
                <a href="AreaLimpiezaActualizar.php" class="boton"><i class="far fa-edit"></i></a>
                <h6>Ver insumos</h6>
                </div>
                <div class="usuarios">
                <a href="Registro_Insumos/ver_registros.php" class="boton"><i class="fa-solid fa-clock-rotate-left"></i></a>
                <h6>Historial</h6>
                </div>
                </div>
            </div>
            <div class="inventario">
                <h2>Inserte aquí los artículos para el área de limpieza</h2><br/>
            	<form action="LIMPIEZA_AREA_BD.php" method="post">
                <label for="ARTICULO" >Nombre:</label>
                <input type="text" id="ARTICULO" name="ARTICULO" placeholder="Ingrese el nombre del articulo" required>
                <br/>
                <label for="CANTIDAD">Cantidad:</label>
                <input type="text" id="CANTIDAD" name="CANTIDAD" placeholder="Ingrese una cantidad" onkeypress="return solonumeros(event)" onpaste="return false" required>
                <br/>
            	<label for="PRESENTACION">Presentación:</label>
                <input type="text" id="PRESENTACION" name="PRESENTACION" placeholder="Ejemplo: ml, l, gl, gr, kg" required>
                <br/>
                <button type="submit" name="Registrar">Añadir</button>
                     </form>
                </div>
              </div>
            </div>
            <br></br>
          </body>
</html>
