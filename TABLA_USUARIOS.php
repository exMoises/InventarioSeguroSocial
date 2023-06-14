<table>
           <tr style="text-align: center;">

             <th>USUARIO</th>
             <th>CONTRASEÑA</th>
             <th>CORREO</th>
             <th>ROLES</th>

           </tr>
           <?php
           // CONSULTA SQL
           include ("Conexion.php");

           $sql1="SELECT * FROM usuarios ";

          $recurso1=mysqli_query($conexion, $sql1);
          while ($ver=mysqli_fetch_array($recurso1)) {
          $datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4];

          $valor_0= $ver['ID_USUARIO'];
            $valor_1= $ver['USUARIO'];
              $valor_2= $ver['PASSWORD'];
                $valor_3= $ver['CORREO'];
                 $valor_4= $ver['ROLES'];


            ?>
           <tr style="text-align: center;">

             <td ><?php echo $valor_1; ?></td>
             <td ><?php echo $valor_2; ?></td>
             <td ><?php echo $valor_3; ?></td>
             <td ><?php echo $valor_4; ?></td>

             <td style="text-align: center;">
               <button style="border-color: black;" data-toggle="modal" data-target="#modal_editar"
               onclick="agregaform('<?php echo $datos  ?>')">
                <span>Editar</span>
               </button>
             </td>
             <td style="text-align: center;">
               <button style="border-color: black;" data-toggle="modal" data-target="#modal_eliminar"
               onclick="eliminarform('<?php echo $datos  ?>')">
                <span>ELIMINAR</span>
               </button>
             </td>
           </tr>
             <?php } ?>
         </table>


<script type="text/javascript">
function agregaform (datos){
 d=datos.split('||');
 $('#ID_USUARIO_AC').val(d[0]);
 $('#USUARIO_AC').val(d[1]);
 $('#CONTRASEÑA_AC').val(d[2]);
 $('#CORREO_AC').val(d[3]);
 $('#ROLES_AC').val(d[4]);
}
</script>

<script type="text/javascript">
function eliminarform (datos){
 d=datos.split('||');
 $('#ID_USUARIO_ELIMINAR').val(d[0]);
 $('#USUARIO_AC').val(d[1]);
 $('#CONTRASEÑA_AC').val(d[2]);
 $('#CORREO_AC').val(d[3]);
 $('#ROLES_AC').val(d[4]);
}
</script>
