<?php
$error = false;
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
} else {
    $error = true;
}
if (isset($_POST['apellido1']) && !empty($_POST['apellido1'])) {
    $apellido1 = $_POST['apellido1'];
} else {
    $error = true;
}
if (isset($_POST['apellido2']) && !empty($_POST['apellido2'])) {
    $apellido2 = $_POST['apellido2'];
} else {
    $error = true;
}
if (isset($_POST['correo']) && !empty($_POST['correo'])) {
    $correo = $_POST['correo'];
} else {
    $error = true;
}
if (isset($_POST['tipo']) && !empty($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
} else {
    $error = true;
}
if (isset($_POST['info']) && !empty($_POST['info'])) {
    $info = $_POST['info'];
} else {
    $error = true;
}

if ($error==true) {
    echo "Falta introducir algún dato";
} else{
    $info ? $informacion="Le" : $informacion="No le";  
    echo "<h1>Datos del subscriptor:</h1>";
    echo "Nombre: ".$nombre."<br>Primer Apellido: ".$apellido1."<br>Segundo Apellido: ".$apellido2;
    printf("%s enviaremos información relacionada con nuestras publicaciones al correo: %s\n",$informacion, $correo );
    echo "<br><h1>Datos de la subscripción:</h1>";
    echo "<br>";
}
