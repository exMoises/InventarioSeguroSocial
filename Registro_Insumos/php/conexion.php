<?php
  try {
    $conn = mysqli_connect("localhost","root","","Xook Tsool");
    mysqli_set_charset($conn,"utf8");
    //echo "<br><br> <h3>CONEXION EXITOSA</h3>";
  } catch (\Exception $e) {
    echo "FALLO AL CONECTARSE A LA BASE DE DATOS";
  }


?>
