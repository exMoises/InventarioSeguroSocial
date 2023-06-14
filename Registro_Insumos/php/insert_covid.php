<?php
include ('conexion.php');
include ('consultas.php');

$entrega = $_POST['ENT'];
$fecha = $_POST['FECH'];
//$encargado = $_POST['ENC'];
$id_insumo = $_POST['ID'];

$Id = num_registro($conn, 'REG_AREACOVID') + 1;
//$Id_ar = 'COV_'.$Id;

$query = "INSERT INTO `reg_areacovid`(`ID_Areacovid`, `Cantidad_Entregada_AR`, `Fecha_AR`, `ID_Aritculo`, `ID_Encargado_AR`)
 VALUES ('COV_$Id','$entrega','$fecha','$id_insumo','ecg1_AR')";
 
$recurso = mysqli_query($conn, $query);
if($recurso != false){
    echo "Registro realizado";
}else{
    echo "No se pudo hacer el registro";
}

/*
$i = 0;
$array_id = array();

//$Id = 9001;

while ($i < 4790){

    $Id = num_registro($conn, 'ALMACEN');
    $Id = "AR_".$Id;
    $aritculo = 'tomate';
    $cantidad = '7';
    $presentacion = 'PRE_01';
    $area = 'AREA01';

    $sql = " INSERT INTO ALMACEN (ID_Articulo, Articulo, Existencia, ID_Presentacion, ID_Area)
    VALUES ('$Id' , '$aritculo', '$cantidad' ,'$presentacion', '$area')";

    $query = sqlsrv_query( $conn, $sql);

    if($query != false){
        echo 'Se ha completado la consulta';
    }else{
        if( ($errors = sqlsrv_errors() ) != null) {
            foreach( $errors as $error ) {
                echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
                echo "code: ".$error[ 'code']."<br />";
                echo "message: ".$error[ 'message']."<br />";
            }
        }

        if($error[ 'code'] == '1105'){
            echo '<br>';
            echo '<br>';
            echo '-->No sé pudo registrar el articulo: '.$Id. ' Nombre: '.$aritculo.' cantidad: '.$cantidad.' presentación: '.$presentacion.' area: '.$area; 
            echo '<br>';
            echo '-->Por favor, inserte una unidad de memoria y configurela como memoria auxiliar parar continuar almacenando datos'; 
            echo '<br>';
            echo '<br>';
        }
    }
    $i++;
    //$Id++;
    sqlsrv_close( $conn );
}


/*for ($d = 0; $d < 2; $d++) {
    echo ('No se pudo registrar: '.$array_id[$d]);
}
*/



?>
