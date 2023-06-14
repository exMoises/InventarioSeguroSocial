<!DOCTYPE html>
<html>
    <script src="scripts/solicitud.js"></script>
    <script src="scripts/PDF.js"></script>
    <script src="scripts/eventos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.10/jspdf.plugin.autotable.min.js"></script>  
</script>
<head>
	<meta charset="utf-8">
	<title>Solicitud de insumos</title>
  <link rel="stylesheet" href="Reporte.css">
  <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
</head>
  <body onLoad="Lista()">
  <a href="../AreaOficinaActualizar.php" class="regresar"><i class="fas fa-undo-alt"></i> Regresar</a><br></br><br/>
    <form>
    <h1>Generar reportes del área oficina</h1>	<br/>
	  <label>Nombre:</label><br></br>
    <select name="articulo" id="articulo" onclick="capturarindex()" required>
    <option>Seleccione un artículo</option>
    </select>
    <br></br>
    <label>Unidad:</label><br></br>
    <input id="unidad" type="text"/><br></br>
    <p> Cantidad</p><br></br>
	  <label>Pedida:</label><br></br><input id="pedida" type="text"/><br></br>
	  <label>Entregada:</label><br></br><input id="entregada" type="text"/><br></br>
	  <button name="agregar" onclick="ListarInsumos()">Agregar</button>
    <button name="agregar" onclick="procesarREG()">Finalizar</button><br></br>
</form>
<br></br>
<div class="tabla">
	<table id="ListaDeInsumos">
	    <caption>Vista del reporte</caption>
       <tr>
          <td><strong>Articulo</strong></td>
          <td><strong>Unidad</strong></td>
        	<td><strong>Pedida</strong></td>
        	<td><strong>Entregada</strong></td>      	
       </tr>
  </table>	
</div>
</body>
</html>

<?php
  include ('php/consultas.php');
?>

<script type="text/javascript">
  area = 'oficina';
  i = 0;
  Listarticulos = JSON.parse('<?php echo json_encode($Lista = getArticulo($conn,"oficina")); ?>');
  Listarticulos.sort
  console.log(ListaDeInsumos);
  articulos = [];
  
     while(i < Listarticulos.length)
     {
      espacio = Listarticulos [i].indexOf(" ");
      tamaño =  Listarticulos [i].length;
      articulos [i] = Listarticulos [i].substring(espacio,tamaño);
      i++;
    }  
    Lista (articulos);
</script>
