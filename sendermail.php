<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $asunto = htmlspecialchars($_POST["asunto"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    $destinatario = "feeling47@hotmail.com";
    $asuntoEmail = "Nuevo mensaje de contacto: $asunto";
    $cuerpo = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";

    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    if (mail($destinatario, $asuntoEmail, $cuerpo, $headers)) {
        echo "<script>alert('Mensaje enviado con éxito'); window.location.href='contacto.php';</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje'); window.location.href='contacto.php';</script>";
    }
} else {
    echo "Acceso denegado.";
}
?>