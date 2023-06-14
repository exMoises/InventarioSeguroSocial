<!doctype html>
<html lang="es">
    <head>
        <title>Departamentos</title>
        <meta charset="utf-8">
        <meta name="author" content="Jonatan Díaz">
        <meta name="keywords" content="Centro de salud, Almacén, Bases de datos">
        <meta name="description" content="Menú de aplicación web para el centro de salud con servicios ampliados de Yucalpetén, Progreso Yucatán, México">
        <meta name="viewport" content="width=devide-width,initial-scale=1.0">
        <link rel="shorcut icon" type="image/x-icon" href="Imágenes/Icono.ico">
        <link rel="stylesheet" href="CSS/Areas.css">
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>  
</head>
<body>
    <img src="Imágenes/Departamentos.jpg">
    <div class="departamentos">
    <br/>
    <a href="Index.php" class="cerrarSesion"><i class="fas fa-power-off"></i> Cerrar sesión</a>
    <a href="VISTA_USUARIOS.php" class="roles"><i class="fas fa-users"></i> Roles</a>
    <br></br>
        <h1 class="titulo">Departamentos</h1>
        <div class="menu">
            <div class="Area_Covid">
                <i class="fas fa-virus"></i>
                <a href="AreaCovidActualizar.php" id="btn-abrir-popup1">
                    <div class="texto-animado" id="dep1">Área Covid</div>
                </a>
            </div>
            <div class="Laboratorio">
                <i class="fas fa-flask"></i>
                <a href="AreaLaboratorioActualizar.php" id="btn-abrir-popup2">
                    <div class="texto-animado" id="dep2">Laboratorio</div>
                </a>
            </div>
            <div class="Limpieza">
                <i class="fas fa-hand-sparkles"></i>
                <a href="AreaLimpiezaActualizar.php" id="btn-abrir-popup3">
                    <div class="texto-animado" id="dep3">Limpieza</div>
                </a>
            </div>
            <div class="Oficina">
                <i class="fas fa-pencil-alt"></i>
                <a href="AreaOficinaActualizar.php" id="btn-abrir-popup4">
                    <div class="texto-animado" id="dep4">Oficina</div>
                </a>
            </div>
            <div class="Urgencias">
                <i class="fas fa-procedures"></i>
                <a href="AreaUrgenciaActualizar.php" id="btn-abrir-popup5">
                <div class="texto-animado" id="dep5">Urgencias</div>
                </a>
            </div>
        </div>
    </div>
<!--abrimos popup-->
    <!--incia el div overlay-->
    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
            <h2><i><b>Para acceder al departamento 1 reconfirme su identidad</b></i></h2><br></br>
            <form action="AccesoAOficina.php" method="POST">
                <label>Usuario:</label><br/>
                <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" required/>
                <br></br>
                <label>Contraseña:</label><br/>
                <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required/>
                <br></br>
                <input type="submit" class="btn-submit" name="btn" id="btn" value="Acceder"/>
            </form>
        </div><!--cerramos el div de popup-->
    </div><!--cerramos el div de overlay-->
<!--cerramos el popup-->
</body>
<script src="JS/Pop up.js"></script>
<script src="JS/Letras caidas.js"></script>
</html>