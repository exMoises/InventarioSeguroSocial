<?php
include ("conexion.php");
function num_reg_almacen($conexion,$tabla){
  $query="select count(*) from ".$tabla;
  $numero= mysqli_query($conexion,$query);
  $rows= mysqli_fetch_array($numero);
  return $rows[0];
}

function num_reg_presentacion($conexion,$tabla){
  $query="select count(*) from ".$tabla;
  $numero= mysqli_query($conexion,$query);
  $rows= mysqli_fetch_array($numero);
  return $rows[0];
}

if (isset($_POST['Registrar'])) {
include("COVID_CRUD.php");
 $id= num_reg_almacen($conexion,'almacen')+1;
 $id_pre= num_reg_presentacion($conexion,'presentacion')+1;

 $PRE="COV_PRE_".$id_pre;
 $UR="COV_".$id;
 $ARTICULO = ($_POST['ARTICULO']);
 $CANTIDAD = ($_POST['CANTIDAD']);
 $PRESENTACION=($_POST['PRESENTACION']);
 ALTA_LIMPIEZA($UR,$_POST['ARTICULO'],$_POST['CANTIDAD'],$PRE,$_POST['PRESENTACION']);
}


if (isset($_POST['ACTUALIZAR'])) {
include("COVID_CRUD.php");
$PRE="pre10";
$UR= ($_POST['ID_ARTICULO_AC']);
$ARTICULO_AC = ($_POST['ARTICULO_AC']);
$CANTIDAD_AC = ($_POST['CANTIDAD_AC']);
$PRESENTACION_AC=($_POST['PRESENTACION_AC']);
$ID_PRESENTACION_AC=($_POST['ID_PRESENTACION_AC']);
ACTUALIZAR_LIMPIEZA($_POST['ID_ARTICULO_AC'],$_POST['ARTICULO_AC'],$_POST['CANTIDAD_AC'],$_POST['ID_PRESENTACION_AC'],$_POST['PRESENTACION_AC']);
}


if (isset($_POST['ELIMINAR'])) {
include("COVID_CRUD.php");
  $UR=($_POST['ID_ARTICULO_ELIMINAR']);;
	BAJA_LIMPIEZA($UR);
}

?>
