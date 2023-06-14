<!doctype html>
<html lang="es">
<head>
    <title>¡Contáctanos!</title>
    <meta charset="utf-8">
    <meta name="author" content="Jonatan Díaz">
    <meta name="keywords" content="Centro de salud, Almacén, Bases de datos">
    <meta name="description" content="Contacto para desarrolladores de la aplicación web para el centro de salud con servicios ampliados de Yucalpetén, Progreso Yucatán, México">
    <meta name="viewport" content="width=devide-width,initial-scale=1.0">
    <link rel="shorcut icon" type="image/x-icon" href="Imágenes/Icono.ico">
    <link rel="stylesheet" href="CSS/Contacto.css">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script> 
    <script src="JS/jquery-3.6.0.js"></script>
    <script src="JS/Contacto.js"></script>
    <script src="JS/Letras y numeros.js"></script>
</head>
<body>
<img src="Imágenes/Contacto.jpg">
<a href="Index.php"><i class="fas fa-undo-alt"></i> Regresar</a>
    <section class="form_wrap">
        <section class="contact_info">
            <section class="info_title">
                <span class="fa fa-user-circle"></span>
                <h1>INFORMACIÓN<br/>DE CONTACTO</h1>
            </section>
            <section class="info_items">
                <p><span class="fa fa-envelope"></span>L04190007@progreso.tecnm.mx</p>
                <p><span class="fa fa-mobile"></span>+52(999) 203-1112</p>
            </section>
        </section>
        <form action="EnviarMensaje.php" method="post" class="form_contact">
            <h2>Envía un mensaje</h2>
            <div class="user_info">
                <label for="names">Nombres *</label>
                <input type="text" id="names" name="nombre" placeholder="Ingresa tu nombre" onkeypress="return sololetras(event)" onpaste="return false" required>
                <label for="phone">Telefono/Celular</label>
                <input type="text" id="phone" name="telefono" placeholder="Ingresa un numero si deseas un apoyo más directo" onkeypress="return solonumeros(event)" onpaste="return false">
                <label for="email">Correo eléctronico *</label>
                <input type="text" id="email" name="correo" placeholder="Ingresa tu correo" required>
                <label for="mensaje">Mensaje *</label>
                <textarea id="mensaje" name="mensaje" placeholder="¿Necesitas algo?" required></textarea>
                <input type="submit" value="Enviar mensaje" id="btnSend">
            </div>
        </form>
    </section>
</body>
</html>