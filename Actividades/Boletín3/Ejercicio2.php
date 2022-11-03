<?php
$error = false;
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
} else {
    $error = true;
}
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $error = true;
}
if (isset($_POST['telf']) && !empty($_POST['telf'])) {
    $telefono = $_POST['telf'];
} else {
    $error = true;
}
if (isset($_POST['mensaje']) && !empty($_POST['mensaje'])) {
    $mensaje = $_POST['mensaje'];
} else {
    $error = true;
}

if ($error == true) {
    echo "Hay que rellenar todos los datos del formulario.<br>";
    echo "<a href='Ejercicio1HTML.php'>Volver al formulario</a>";
} else {
    $fecha = getdate();
    echo "El mensaje " . $mensaje . " fue enviado por " . $nombre . ", teléfono " . $telefono . ".<br>Su email es: " . $email . "<br>Enviado el " . $fecha['mday'] . "/" . $fecha['month'];
}
?>