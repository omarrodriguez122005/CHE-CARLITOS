<?php

$errorMSG = "";

// NAME
if (empty($_POST["nombre"])) {
    $errorMSG = "Su nombre y apellido son requeridos ";
} else {
    $name = $_POST["nombre"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Su correo es requerido ";
} else {
    $email = $_POST["email"];
}

// MSG Guest
if (empty($_POST["telefono"])) {
    $errorMSG .= "El teléfono es requerido ";
} else {
    $guest = $_POST["telefono"];
}


// MESSAGE
if (empty($_POST["mensaje"])) {
    $errorMSG .= "El mensaje es requerido ";
} else {
    $message = $_POST["mensaje"];
}


$EmailTo = "orodriguezhcoarcaj@gmail.com";
$Subject = "Nuevo mensaje para CHE CARLITOS ";

$Body = "";
$Body .= "Nombre: ";
$Body .= $nombre;
$Body .= "\n";
$Body .= "Correo: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $telefono;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $mensaje;
$Body .= "\n";


$success = mail($EmailTo, $Subject, $Body, "From:".$email);

if ($success && $errorMSG == ""){
   echo "Proceso exitoso";
}else{
    if($errorMSG == ""){
        echo "Algo ha ido mal :(";
    } else {
        echo $errorMSG;
    }
}

?>
