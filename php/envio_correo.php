<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    
    $asunto = "Consulta";
    $destinatario = "davidalveal92@gmail.com";
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $correo\n";
    $contenido .= "Mensaje:\n$mensaje";
    
    $cabeceras = "From: $correo";
    
    if (mail($destinatario, $asunto, $contenido, $cabeceras)) {
        echo "Gracias por tu mensaje, $nombre. Nos pondremos en contacto contigo pronto.";
        // Limpiar los campos del formulario
        $nombre = "";
        $correo = "";
        $mensaje = "";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    echo "Error al procesar el formulario.";
}
?>
