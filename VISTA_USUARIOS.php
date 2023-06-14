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
        <script src="libreria\jquery-3.6.0.min.js"></script>
        <script src="libreria/bootstrap/js/bootstrap.js"></script>
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
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
              <h1>Administración de usuarios</h1>
             <br></br>
             <br></br>

             <div id="tabla"></div>
             <br></br>
             <br></br>
             <br></br>
             <br></br>
             <br></br>
            </div>
            <!-- Modal para modificacion o edicion -->
             <form action="USUARIOS_CRUD.php" method="post">

            <div class="modal fade" id="modal_editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">Modifica tu artículo</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-groud">

                      <div class="form-groud">
                      <input type="hidden" class="form-control" id="ID_USUARIO_AC" name="ID_USUARIO_AC">
                      </div>
                      <div class="form-groud">
                      <label for="USUARIO_AC">Nombre:</label>
                      <input type="text" class="form-control" id="USUARIO_AC" name="USUARIO_AC" required><br/>
                      </div>
                      <div class="form-groud">
                      <label for="CONTRASEÑA_AC">CONTRASEÑA:</label>
                      <input type="text" class="form-control" id="CONTRASEÑA_AC" name="CONTRASEÑA_AC"required><br/>
                      </div>
                      <div class="form-groud">
                      <label for="CORREO_AC">CORREO:</label>
                      <input type="text" class="form-control" id="CORREO_AC" name="CORREO_AC" required><br/>
                      </div>
                      <div class="form-groud">
                      <label for="ROLES_AC">ROLES:</label>
                      <input type="text" class="form-control" id="ROLES_AC" name="ROLES_AC" required><br/>
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

            <div class="modal fade" id="modal_eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">

                    <h4 class="modal-title" id="myModalLabel">ELIMINAR USUARIO</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-groud">

                      <div class="form-groud">
                      <input type="hidden" class="form-control" id="ID_USUARIO_ELIMINAR" name="ID_USUARIO_ELIMINAR">
                      </div>
                      <h2>DESEA ELIMINAR AL USUARIO ??</h2>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="ELIMINAR">ELIMINAR</button>
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
    $('#tabla').load('TABLA_USUARIOS.php');
  });
</script>
