<?php


function ALTA_LIMPIEZA($ID_ARTICULO,$ARTICULO,$CANTIDAD,$PRE,$PRESENTACION){
  include ("conexion.php");

 $sql1="insert into presentacion (ID_Presentacion,Presentacion) values('$PRE','$PRESENTACION')";
 $sql2="insert into almacen (ID_Articulo,Articulo,Existencia,ID_Presentacion,ID_Area) values('$ID_ARTICULO','$ARTICULO','$CANTIDAD','$PRE','area03')";

   $comprobar = 0;//Si el ID esta repetido
   $c = "R";//Concatenar si un ID esta repetido


   if (mysqli_query($conexion,$sql1)){
     $recurso2 = mysqli_query($conexion, $sql2);
     if($recurso2 != false){
       Header("Location:AreaLimpiezaInsertar.php");
     }else{
       //Si el ID esta repetido, entonces se creara un bucle que da solución al problema.
       while ($comprobar != 1){
         $ID_ARTICULO=$ID_ARTICULO.$c;
         $sql2="insert into almacen (ID_Articulo,Articulo,Existencia,ID_Presentacion,ID_Area) values('$ID_ARTICULO','$ARTICULO','$CANTIDAD','$PRE','area03')";
         $recurso = mysqli_query($conexion, $sql2);
         $c = $c."R";
         Header("Location:AreaLimpiezaInsertar.php");
         if($recurso != false){
             $comprobar = 1;
         }
       }

     }
     return true;
   }else{
     echo "<div> <h3> LO SIENTO NO SE REGISTRO</h3></div>";
   }

}

// ELIMNACION DE ARTICULOS
function BAJA_LIMPIEZA($ID_ARTICULO){

  include("Conexion.php");

   $sql="DELETE FROM almacen WHERE ID_Articulo = '$ID_ARTICULO'";
   //echo "LA SENTENCIA ES ".$sql;
   if (mysqli_query($conexion,$sql)){
     Header("Location:AreaLimpiezaActualizar.php");
     return true;
   }else{
     echo "<div> <h3> LO SIENTO NO SE REGISTRO</h3></div>";
   }
}

// ACTUALIZAR ARTICULOS

function ACTUALIZAR_LIMPIEZA($ID_ARTICULO,$ARTICULO,$CANTIDAD,$ID_PRE,$PRESENTACION){
  include("Conexion.php");
  $sql1="UPDATE presentacion SET Presentacion='$PRESENTACION' WHERE ID_Presentacion='$ID_PRE'";
  $sql2="UPDATE almacen SET Articulo='$ARTICULO',Existencia='$CANTIDAD' WHERE ID_Articulo='$ID_ARTICULO'";
   //echo "LA SENTENCIA ES ".$sql;
   if (mysqli_query($conexion,$sql1))
   {
      //echo "LA SENTENCIA ES ".$sql;
      if (mysqli_query($conexion,$sql2)){
             Header("Location:AreaLimpiezaActualizar.php");
        return true;
      }else{
        echo "<div> <h3> LO SIENTO NO SE REGISTRO</h3></div>";
      }
   }else{
     echo "<div> <h3> LO SIENTO NO SE REGISTRO</h3></div>";
   }
}


 ?>
