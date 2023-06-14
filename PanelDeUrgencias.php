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
        <link rel="stylesheet" href="CSS/PanelDeControl.css">
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    </head>
    <body>
        <br></br>
        <div class="panel">
            <div class="menuLateral">
            <a href="Departamentos.php"><i class="fas fa-undo-alt"></i></a>
            <a href="Index.php" class="cerrarSesion"><i class="fas fa-power-off"></i></a>
            <a href="#" class="generarReporte"><i class="far fa-file-alt"></i></a>
            <a href="#" class="opcionesUsuario"><i class="fas fa-users"></i></a>
            </div>
            <div class="usuario">
            <div class="crud">
                <h1>Usuario</h1>
                <br/>
                
                <br></br>
                <div class="acciones">
                <div class="crear">
                <a href="AreaUrgenciaInsertar.php" class="boton"><i class="fas fa-plus"></i></a>
                </div>
                <div class="leer">
                <a href="PanelDeUrgencias.php" class="boton"><i class="fas fa-book-open"></i></a>
                </div>
                <div class="actualizar">
                <a href="AreaUrgenciaActualizar.php" class="boton"><i class="far fa-edit"></i></a>
                </div>
                <div class="eliminar">
                <a href="AreaUrgenciaEliminar.php" class="boton"><i class="fas fa-trash-alt"></i></a>
                </div>
                </div>
            </div>
            <div class="inventario">
                <h2>Urgencias</h2>
                <br></br>
                <table class=" editar_tabla table table-hover table-condensed table-bordered" >
                  <tr align= "center">

                    <td>NOMBRE DE ARTICULO</td>
                    <td>CANTIDAD EXISTENTE</td>
                    <td>UNIDADES</td>

                  </tr>
                  <?php
                  // CONSULTA SQL
                  include ("Conexion.php");
                  $conn = conexionBD :: conexion();
                  $sql1="SELECT * FROM INV_URGENCIAS
                  LEFT JOIN
                  PRESENTACIONES
                  ON
                  INV_URGENCIAS.ID_Presentacion=PRESENTACIONES.ID_Presentacion";
                 $recurso1=sqlsrv_query($conn, $sql1);
                  while ($ver=sqlsrv_fetch_array($recurso1)) {
                 $valor_0= $ver['ID_Articulo_UR'];
                   $valor_1= $ver['Nom_Articulo_UR'];
                     $valor_2= $ver['Existencia_UR'];
                       $valor_3= $ver['Presentacion'];
                   ?>
                  <tr align= "center" >

                    <td ><?php echo $valor_1; ?></td>
                    <td ><?php echo $valor_2; ?></td>
                    <td ><?php echo $valor_3; ?></td>

                    <td align= "center">
                    </td>
                  </tr>
                    <?php } ?>
                </table>
            </div>
            </div>
        </div>
    </body>
</html>
