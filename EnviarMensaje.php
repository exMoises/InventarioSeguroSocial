<?php
//llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//datos para el correo
$destinatario = "L04190007@progreso.tecnm.mx";
$asunto = "Contacto Xook Tsool";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

//enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:MensajeEnviado.html');
?>