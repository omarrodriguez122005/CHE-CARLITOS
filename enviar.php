<?php
$destino= "orodriguezhcoarcaj@gmail.com"; 
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino,"contacto", $contenido);
header("Location:index.html")
?>