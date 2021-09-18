<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $correo . " \r\n";
$mensaje .= "Teléfono de contacto: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'omarfreefire994@gmail.com';
$asunto = 'CONTACTO';

mail($para, $asunto, utf8_decode($mensaje), $header); 

header('Location:index.html');

echo "<script>alert('Correo enviado exitosamente') </script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>
