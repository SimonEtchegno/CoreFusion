<?php
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$mensaje = $_POST['message']

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


$mensajes = "Enviado el día " . date('d/m/Y') ." - ". date("h:i A") . " \r\n";
$mensajes .= "Este mensaje fue enviado por " . $nombre ." \r\n";
$mensajes .= "Su e-mail es: " . $mail . " \r\n";
$mensajes .= "Mensaje: " . $_POST['message'] . " \r\n";

$para = 'simonetchegno@gmail.com';
$asunto = 'Mensaje enviado desde la Web CoreFusion por ' . $nombre;

mail($para, $asunto, utf8_decode($mensaje), $header)
header("location: gracias.html");
?>