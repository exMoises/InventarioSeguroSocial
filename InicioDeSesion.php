<?php
if (isset($_POST['INICIAR'])) {
  include("Conexion.php");
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
  $sql="SELECT * FROM usuarios WHERE USUARIO ='$usuario' AND PASSWORD = '$contraseña'";
  $consulta=mysqli_query($conexion,$sql);
  $fila=mysqli_num_rows($consulta);
  if ($fila){
    header ("Location: Departamentos.php");
    return true;
  }else{
    header("Location: UsuarioNoEncontrado.html");
    echo "<div> <h3> LO SIENTO NO SE REGISTRO</h3></div>";
  }

}



?>
