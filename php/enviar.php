<?php
$destinatario = 'orodriguezhcoarcaj@gmail.com'; 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde la página CHE CARLITOS RESTAURANT"
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $correo, $mensajeCompleto, $header);
echo "<script>alert('Correo enviado exitosamente') </script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>