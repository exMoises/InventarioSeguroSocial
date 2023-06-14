<table>
           <tr style="text-align: center;">

             <th>Nombre</th>
             <th>Cantidad en existencia</th>
             <th>Presentación</th>
             <th></th>
           </tr>
           <?php
           // CONSULTA SQL
           include ("Conexion.php");
           //$sql1="SELECT * FROM `almacen` ";
          // /*
          $sql1=" SELECT almacen.ID_Articulo,almacen.Articulo,almacen.Existencia,almacen.ID_Presentacion,presentacion.Presentacion,areas.ID_Area,areas.Area  FROM almacen
          INNER JOIN presentacion ON almacen.ID_Presentacion = presentacion.ID_Presentacion
          INNER JOIN areas ON almacen.ID_Area = areas.ID_Area and areas.ID_Area = 'area03' ";
        //   */
          $recurso1=mysqli_query($conexion, $sql1);
           while ($ver=mysqli_fetch_array($recurso1)) {
             // CPMTOEME 7 DATOS EN LA TABLA
         $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver["Presentacion"];
          $valor_0= $ver["ID_Articulo"];
            $valor_1= $ver["Articulo"];
              $valor_2= $ver["Existencia"];
                $valor_3= $ver["ID_Presentacion"];
                 $valor_4= $ver["ID_Area"];
                  $valor_5= $ver["Presentacion"];

            ?>
           <tr style="text-align: center;">

             <td ><?php echo $valor_1; ?></td>
             <td ><?php echo $valor_2; ?></td>
             <td ><?php echo $valor_5; ?></td>

             <td style="text-align: center;">
               <button style="border-color: black;" data-toggle="modal" data-target="#modaleditar"
               onclick="agregaform('<?php echo $datos  ?>')">
                <span>Editar</span>
               </button>
             </td>

             <td style="text-align: center;">
               <button style="border-color: black;" data-toggle="modal" data-target="#modaleliminar"
               onclick="eliminarform('<?php echo $datos  ?>')">
                <span>Eliminar</span>
               </button>
             </td>
           </tr>
             <?php } ?>
         </table>


<script type="text/javascript">
function agregaform (datos){
 d=datos.split('||');
 $('#ID_ARTICULO_AC').val(d[0]);
 $('#ARTICULO_AC').val(d[1]);
 $('#CANTIDAD_AC').val(d[2]);
 $('#ID_PRESENTACION_AC').val(d[3]);
 $('#PRESENTACION_AC').val(d[4]);
}
</script>

<script type="text/javascript">
function eliminarform (datos){
 d=datos.split('||');
 $('#ID_ARTICULO_ELIMINAR').val(d[0]);
 $('#ARTICULO_AC').val(d[1]);
 $('#CANTIDAD_AC').val(d[2]);
 $('#ID_PRESENTACION_AC').val(d[3]);
 $('#PRESENTACION_AC').val(d[4]);
}
</script>
