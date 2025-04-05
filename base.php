<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener datos del formulario
  $nombre = htmlspecialchars($_POST['nombre']);
  $correo = htmlspecialchars($_POST['correo']);
  $asunto = htmlspecialchars($_POST['asunto']);
  $mensaje = htmlspecialchars($_POST['mensaje']);

  // Dirección de correo donde se enviarán los datos
  $to = "info@talleresbolo.com"; // Cambia esto por tu correo electrónico
  $subject = "Nuevo mensaje de contacto: " . $asunto;

  // Cuerpo del correo
  $body = "Nombre: $nombre\n";
  $body .= "Correo: $correo\n";
  $body .= "Asunto: $asunto\n";
  $body .= "Mensaje: \n$mensaje\n";

  // Cabeceras para el correo (enviar desde una dirección válida)
  $headers = "From: $correo" . "\r\n" . "Reply-To: $correo" . "\r\n" . "X-Mailer: PHP/" . phpversion();

  // Enviar el correo
  if (mail($to, $subject, $body, $headers)) {
    echo "<p>Gracias por tu mensaje. Nos pondremos en contacto contigo lo antes posible.</p>";
  } else {
    echo "<p>Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.</p>";
  }
}
?>