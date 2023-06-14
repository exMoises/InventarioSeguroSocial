<?php
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
 if ($usuario == "Encargado" || $usuario == "encargado" && $contraseña == "aZ10v200") {
    header ("Location: PanelDeOficina.php");
    } else {
            header("Location: Error.html");
        }
?>