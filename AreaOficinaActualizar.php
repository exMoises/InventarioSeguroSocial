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
        <script src="libreria\jquery-3.6.0.min.js"></script>
        <script src="libreria/bootstrap/js/bootstrap.js"></script>
        <script src="JS/Letras y numeros.js"></script>
    </head>
    <body style="background-color: rgb(68, 118, 212);">
        <br></br>
        <div class="panel">
            <div class="menuLateral">
            <a href="Departamentos.php"><i class="fas fa-undo-alt"></i></a>
            <a href="Index.php" class="cerrarSesion"><i class="fas fa-power-off"></i></a>
            <a href="Registro_Insumos/registro_oficina.php" class="generarReporte"><i class="far fa-file-alt"></i></a>
            </div>
            <div class="usuario">
            <div class="crud">
            <br></br>
                <h1>Acciones</h1><br/>
                <div class="acciones">
                <div class="crear">
                <a href="AreaOficinaInsertar.php" class="boton"><i class="fas fa-plus"></i></a>
                <h6>Agregar</h6>
                </div>
                <div class="actualizar">
                <a href="AreaOficinaActualizar.php" class="boton"><i class="far fa-edit"></i></a>
                <h6>Ver insumos</h6>
                </div>
                <div class="usuarios">
                <a href="Registro_Insumos/ver_registros.php" class="boton"><i class="fa-solid fa-clock-rotate-left"></i></a>
                <h6>Historial</h6>
                </div>
                </div>
            </div>
            <div class="inventario">
                <h2>Área Oficina</h2>
                <br></br>
                <div id="tabla"></div>
              </div>

            <!-- Modal para modificacion o edicion -->
             <form action="OFICINA_AREA_BD.php" method="post">
            <div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Modifica tu artículo</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-groud">

                      <div class="form-groud">
                      <input type="hidden" class="form-control" id="ID_ARTICULO_AC" name="ID_ARTICULO_AC">
                      </div>
                        <div class="form-groud">
                        <label for="ARTICULO_AC">Nombre:</label>
                        <input type="text" class="form-control" id="ARTICULO_AC" name="ARTICULO_AC" required><br/>
                        </div>
                        <div class="form-groud">
                        <label for="CANTIDAD_AC">Cantidad en existencia:</label>
                        <input type="text" class="form-control" id="CANTIDAD_AC" name="CANTIDAD_AC"  onkeypress="return solonumeros(event)" onpaste="return false" required><br/>
                        </div>
                        <div class="form-groud">
                        <input type="hidden" class="form-control" id="ID_PRESENTACION_AC" name="ID_PRESENTACION_AC">
                        </div>
                        <div class="form-groud">
                        <label for="PRESENTACION_AC">Presentación:</label>
                        <input type="text" class="form-control" id="PRESENTACION_AC" name="PRESENTACION_AC" required><br/>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="ACTUALIZAR">Actualizar</button>
                    </div>
                </div>
              </div>
            </div>
            </div>

            <div class="modal fade" id="modaleliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">

                  <h3 class="modal-title" id="myModalLabel">El artículo será eliminado</h3>
                  </div>
                  <div class="modal-body">
                    <div class="form-groud">

                      <div class="form-groud">
                      <input type="hidden" class="form-control" id="ID_ARTICULO_ELIMINAR" name="ID_ARTICULO_ELIMINAR">
                      </div>
                      <p>¿Realmente desea eliminar el artículo?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="ELIMINAR">Eliminar</button>
                    </div>
                </div>
              </div>
            </div>
            </div>

              </form>
            </div>
              </div>
            </div>
            <br></br>
          </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
    $('#tabla').load('OFICINA_TABLA.php');
  });
</script>
