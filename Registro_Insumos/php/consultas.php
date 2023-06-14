<?php

include ('conexion.php');
//Retorna cuantos registros hay en una tabla (Para concatenar con una cadena y generar el ID)
function num_registro($conn, $tabla)
{
    $query = "select count(*) from " . $tabla;
    $numero = mysqli_query( $conn, $query);
    $rows = mysqli_fetch_array($numero);
    return $rows[0];
}

//Retorna una lista con el id y el nombre del articulo
function getArticulo($conn,$area)
{
    $arrayDatos = array();
    $query = "select ALMACEN.ID_Articulo, ALMACEN.Articulo from ALMACEN, areas where almacen.ID_Area = areas.ID_Area and areas.Area = '$area'";
    $Lista = mysqli_query( $conn, $query);
    while($row = mysqli_fetch_array($Lista))
    {
        $arrayDatos[] = $row["ID_Articulo"] ." ". $row["Articulo"];
    }
    return $arrayDatos;
}

function getAreas($conn){
    $arrayArea = array();
    $query = "SELECT `Area` FROM `areas`";
    $Lista = mysqli_query( $conn, $query);
    while($row = mysqli_fetch_array($Lista))
    {
        $arrayArea[] = $row["Area"];
    }
    return $arrayArea;
}

//Función para registrar las solicitudes de insumos en las tablas REG 
function registrarBD ($tabla, $campo1, $campo2, $campo3, $campo4, $campo5, 
                                $value1, $value2, $value3, $value4, $value5){

  $query = "INSERT INTO '$tabla' ('$campo1', '$campo2', '$campo3', '$campo4', '$campo5')
     VALUES ('$value1', '$value2', '$value3', '$value4', '$value5')";
  $recurso = mysqli_query($conn, $query);
  if($recurso != false){
      echo "Registro realizado";
  }else{
      echo "No se pudo hacer el registro";
  }
}

function ver_registros_covid ($conn,$fecha) {
    echo 'realizado-covid';
    $array_registros = array();
    $query = "SELECT almacen.Articulo, reg_areacovid.Cantidad_Entregada_AR, reg_areacovid.Fecha_AR, encargado_covid.Nombre_AR, encargado_covid.Apellido_AR from almacen, reg_areacovid, encargado_covid where almacen.ID_Articulo = reg_areacovid.ID_Aritculo and reg_areacovid.ID_Encargado_AR = encargado_covid.ID_Encargado_AR and reg_areacovid.Fecha_AR = '$fecha'";
    $recurso = mysqli_query($conn, $query);
    if ($recurso != null){
        echo 'vacio2';
    }
    while($row = mysqli_fetch_array($recurso))
    {
        $array_registros[] = $row["Articulo"]." ".$row["Cantidad_Entregada_AR"];
    }
    return $array_registros;
}

function ver_registros_laboratorio(){
    $array_registros = array();
    $query = "SELECT almacen.Articulo, reg_laboratorio.Cantidad_Entregada_LAB, reg_laboratorio.Fecha_LAB, encargado_laboratorio.Nombre_LAB, encargado_laboratorio.Apellido_LAB 
    from almacen, reg_laboratorio, encargado_laboratorio where almacen.ID_Articulo = reg_laboratorio.ID_Aritculo and reg_laboratorio.ID_Encargado_LAB = encargado_laboratorio.ID_Encargado_LAB";
    $recurso = mysqli_query($conn, $query);
    return $recurso;
}
?>