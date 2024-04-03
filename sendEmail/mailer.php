<?php
// Incluir la clase de PHPMailer
require 'PHPMailer-master\src\PHPMailer.php';

// use PHPMailer\PHPMailer\PHPMailer;
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'vendor/autoload.php';

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['message'];

// Configurar la instancia de PHPMailer
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'mail.smtp2go.com';  // Host del servidor SMTP
$mail->SMTPAuth = true;                 // Habilitar autenticación SMTP
$mail->Username = 'webform@camilocapital.es'; // Tu dirección de correo electrónico
$mail->Password = 'NFu6J9OSLYgzh8Ot';       // Tu contraseña de correo electrónico
$mail->SMTPSecure = 'tls';               // Habilitar cifrado TLS
$mail->Port = 2525;                       // Puerto SMTP

// Configurar el contenido del correo electrónico
$mail->setFrom($email, $nombre);
$mail->addAddress('info@camilocapital.es', 'Camilo Capital');
$mail->Subject = $asunto;
$mail->Body = $mensaje;

// Procesar el envío del correo electrónico
if(!$mail->send()) {
    echo 'El mensaje no pudo ser enviado.';
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'El mensaje ha sido enviado exitosamente.';
}
?>