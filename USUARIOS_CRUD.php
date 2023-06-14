<?php

function num_reg_almacen($conexion){
  $query="select count(*) from usuarios";
  $numero= mysqli_query($conexion,$query);
  $rows= mysqli_fetch_array($numero);
  return $rows[0];
}

if (isset($_POST['INSERTAR'])){
  include ("Conexion.php");
  $NUM= num_reg_almacen($conexion);
  $ID_USUARIO_IC = "USUR_".$NUM;
  $USUARIO_IC = $_POST['USUARIO_IC'];
  $CONTRASEÑA_IC = $_POST['CONTRASEÑA_IC'];
  $CORREO_IC = $_POST['CORREO_IC'];
  $ROLES_IC = $_POST['ROLES_IC'];
  if (mysqli_query($conexion,$sql)){

    return true;
  }else{
    echo "<div> <h3> LO SIENTO NO SE REGISTRO</h3></div>";
  }
  $comprobar = 0;//Si el ID esta repetido
  $c = "R";//Concatenar si un ID esta repetido
  $sql="insert into usuarios (ID_USUARIO,USUARIO,PASSWORD,CORREO,ROLES) values('$ID_USUARIO_IC','$USUARIO_IC','$CONTRASEÑA_IC','$CORREO_IC','$ROLES_IC')";
  //OF_1R
  //OF_1RR
  //OF_1RRR

  $recurso = mysqli_query($conexion, $sql);
  if($recurso != false){
  Header("Location:USUARIOS_INSERTAR.php");
  }else{
    //Si el ID esta repetido, entonces se creara un bucle que da solución al problema.
    while ($comprobar != 1){
      $ID_USUARIO_IC=$ID_USUARIO_IC.$c;
      $sql="insert into usuarios (ID_USUARIO,USUARIO,PASSWORD,CORREO,ROLES) values('$ID_USUARIO_IC','$USUARIO_IC','$CONTRASEÑA_IC','$CORREO_IC','$ROLES_IC')";
      $recurso = mysqli_query($conexion, $sql);
      $c = $c."R";
      Header("Location:USUARIOS_INSERTAR.php");
      if($recurso != false){
          $comprobar = 1;
      }
    }
  //echo ($c);
  }

}
       // ELIMINACION DE USUARIOS
      if (isset($_POST['ACTUALIZAR'])) {
      //  include("USUARIOS_CRUD.php");
        $ID_USUARIO_AC = $_POST['ID_USUARIO_AC'];
        $USUARIO_AC = $_POST['USUARIO_AC'];
        $CONTRASEÑA_AC = $_POST['CONTRASEÑA_AC'];
        $CORREO_AC = $_POST['CORREO_AC'];
        $ROLES_AC = $_POST['ROLES_AC'];
        include ("Conexion.php");

        $sql="UPDATE usuarios SET USUARIO='$USUARIO_AC',PASSWORD='$CONTRASEÑA_AC',CORREO='$CORREO_AC',ROLES='$ROLES_AC' WHERE ID_USUARIO='$ID_USUARIO_AC'";
        if (mysqli_query($conexion,$sql)){
          Header("Location:VISTA_USUARIOS.php");
          return true;
        }else{
          echo "<div> <h3> LO SIENTO NO SE REGISTRO</h3></div>";
        }

        }
        if (isset($_POST['ELIMINAR'])) {
        include ("Conexion.php");
        $ID_USUARIO_ELIMINAR = $_POST['ID_USUARIO_ELIMINAR'];
        $sql="DELETE FROM usuarios WHERE ID_USUARIO ='$ID_USUARIO_ELIMINAR'";
        if (mysqli_query($conexion,$sql)){
          Header("Location:VISTA_USUARIOS.php");
          return true;
        }else{
          echo "<div> <h3> LO SIENTO NO SE REGISTRO</h3></div>";
         }
        }


         ?>
