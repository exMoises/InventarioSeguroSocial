<!DOCTYPE html>
<html>
    <script src="scripts/solicitud.js"></script>
    <script src="scripts/eventos.js"></script> 
</script>
<head>
	<meta charset="utf-8">
	<title>Registros</title>
  <link rel="stylesheet" href="Reporte.css">
  <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
</head>
<body onLoad="Lista_Areas()">
<a href="../Departamentos.php" class="regresar"><i class="fas fa-undo-alt"></i> Regresar</a><br></br><br/>
<form action="ver_registros.php" method="get" class="from_search">  
<h1>Historial de peticiones</h1>	
	<label>Áreas:</label>
    <select name="areas" id="areas" required>
    <option>Seleccione un articulo</option>
    </select>
  </body>
  <label>Fecha:</label>
  <input type="date" id="fecha" name="fecha" value="2022-03-12" min="2022-01-01" max="2027-12-31">  
  <button type="submit">Buscar</button>    
</form>
<br></br>
<?php
  //include ('php/consultas.php');
  include ('php/conexion.php');
  include ('php/consultas.php');
?>
<div class="tabla">
	<table id="ListaRegistros">
	    <caption>Registro</caption>
       <tr>
          <td><strong>Articulo</strong></td>
          <td><strong>Cantidad entregada</strong></td>
        	<td><strong>Fecha de entrega</strong></td>
        	<td><strong>Nombre</strong></td>
          <td><strong>Apellido</strong></td>       	
       </tr>

       <?php
       $result = 0;
        if ($_REQUEST['areas'] != null and $_REQUEST['fecha'] != null){
          $area = strtolower($_REQUEST['areas']);
          $fecha = strtolower($_REQUEST['fecha']);

          if ($area == 'covid'){
             $sql="SELECT almacen.Articulo, reg_areacovid.Cantidad_Entregada_AR, reg_areacovid.Fecha_AR, encargado_covid.Nombre_AR, encargado_covid.Apellido_AR from almacen, reg_areacovid, encargado_covid where almacen.ID_Articulo = reg_areacovid.ID_Aritculo and reg_areacovid.ID_Encargado_AR = encargado_covid.ID_Encargado_AR and reg_areacovid.Fecha_AR = '$fecha'";
	      	   $query= mysqli_query($conn,$sql);
	           $result = mysqli_num_rows($query);
             $articulo = 'Articulo';
             $cantidad = 'Cantidad_Entregada_AR';
             $fecha = 'Fecha_AR';
             $nombre = 'Nombre_AR';
             $apellido = 'Apellido_AR';
          }

          if($area == 'urgencias'){
            $sql = "SELECT almacen.Articulo, reg_urgencia.Cantidad_Entregada_UR, reg_urgencia.Fecha_UR, encargado_urgencia.Nombre_UR, encargado_urgencia.Apellido_UR from almacen, reg_urgencia, encargado_urgencia where almacen.ID_Articulo = reg_urgencia.ID_Aritculo and reg_urgencia.ID_Encargado_UR = encargado_urgencia.ID_Encargado_UR and reg_urgencia.Fecha_UR= '$fecha'";
            $query= mysqli_query($conn,$sql);
	          $result = mysqli_num_rows($query);
            $articulo = 'Articulo';
             $cantidad = 'Cantidad_Entregada_UR';
             $fecha = 'Fecha_UR';
             $nombre = 'Nombre_UR';
             $apellido = 'Apellido_UR';
          }

          if($area == 'limpieza'){
            $sql = "SELECT almacen.Articulo, reg_limpieza.Cantidad_Entrega_LIM, reg_limpieza.Fecha_LIM, encargado_limpieza.Nombre_LIM, encargado_limpieza.Apellido_LIM from almacen, reg_limpieza, encargado_limpieza where almacen.ID_Articulo = reg_limpieza.ID_Articulo and reg_limpieza.ID_Encargado_LIM = encargado_limpieza.ID_Encargado_LIM and reg_limpieza.Fecha_LIM= '$fecha'";
            $query= mysqli_query($conn,$sql);
	          $result = mysqli_num_rows($query);
            $articulo = 'Articulo';
             $cantidad = 'Cantidad_Entrega_LIM';
             $fecha = 'Fecha_LIM';
             $nombre = 'Nombre_LIM';
             $apellido = 'Apellido_LIM';
          }

          if($area == 'laboratorio'){
            $sql = "SELECT almacen.Articulo, reg_laboratorio.Cantidad_Entregada_LAB, reg_laboratorio.Fecha_LAB, encargado_laboratorio.Nombre_LAB, encargado_laboratorio.Apellido_LAB from almacen, reg_laboratorio, encargado_laboratorio where almacen.ID_Articulo = reg_laboratorio.ID_Aritculo and reg_laboratorio.ID_Encargado_LAB = encargado_laboratorio.ID_Encargado_LAB and reg_laboratorio.Fecha_LAB = '$fecha'";
            $query= mysqli_query($conn,$sql);
	          $result = mysqli_num_rows($query);
            $articulo = 'Articulo';
             $cantidad = 'Cantidad_Entregada_LAB';
             $fecha = 'Fecha_LAB';
             $nombre = 'Nombre_LAB';
             $apellido = 'Apellido_LAB';
          }

          if($area == 'oficina'){
            $sql = "SELECT almacen.Articulo, reg_oficina.Cantidad_Entrega_OF, reg_oficina.Fecha_OF, encargado_oficina.Nombre_OF, encargado_oficina.Apellido_OF from almacen, reg_oficina, encargado_oficina where almacen.ID_Articulo = reg_oficina.ID_Aritculo and reg_oficina.ID_Encargado_OF = encargado_oficina.ID_Encargado_OF and reg_oficina.Fecha_OF = '$fecha'";
            $query= mysqli_query($conn,$sql);
	          $result = mysqli_num_rows($query);
            $articulo = 'Articulo';
             $cantidad = 'Cantidad_Entrega_OF';
             $fecha = 'Fecha_OF';
             $nombre = 'Nombre_OF';
             $apellido = 'Apellido_OF';
          }
        }

		    if($result > 0 ){
			     while($data = mysqli_fetch_array($query)){
	    	?>
				<tr>
			        <td><?php echo $data[$articulo]?></td>
			        <td><?php echo $data[$cantidad]?></td>
			        <td><?php echo $data[$fecha]?></td>
			        <td><?php echo $data[$nombre]?></td>
			        <td><?php echo $data[$apellido]?></td>
		       			        
		       </tr>
		    <?php
		     	}
		    }else{
		     	//header("location: Consultas.php");
          echo 'No se ha ingresado ningún dato aún o los registros que solicita no existen';
	     	}
	    	?>
  </table>	
      </div>
</script>
</html>

<script type="text/javascript">
  i = 0;
  ListaArea = JSON.parse('<?php echo json_encode($Lista = getAreas($conn)); ?>');
  ListaArea.sort
  console.log(ListaArea);
  Lista_Areas(ListaArea);
</script>
