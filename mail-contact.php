<?php

// Obtener los valores del formulario
$to = "dtony1727@gmail.com"; // Este es tu correo electrónico
$from = $_POST['email']; // Este es el correo del remitente (lo que el usuario ingresa)
$sender_name = $_POST['name']; // El nombre del remitente
$service = $_POST['service']; // El servicio que el usuario seleccionó
$note = ""; // No tienes un campo de nota, por lo que lo dejamos vacío

// Asunto del correo
$subject = "Confirmación de asistencia";

// Construcción del mensaje
$message = $sender_name . " ha confirmado su asistencia. Asistirá: " . $service . ". ";

if (!empty($note)) {
    $message .= "Nota adicional: " . $note . ".";
}

// Encabezados del correo
$headers = 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Enviar el correo
if (mail($to, $subject, $message, $headers)) {
    echo "Gracias por tu confirmación";
} else {
    echo "Ha ocurrido un error. Inténtalo de nuevo más tarde.";
}

?>
