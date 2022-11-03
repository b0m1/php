<?php
// $iva = $_post['iva']/100
// $valor =  ($cantidad*$valor-$descuento)*(1+$iva)+$coste_envio
$error = false;
if (isset($_POST['precio']) && !empty($_POST['precio'])) {
    $precio = intval($_POST['precio']);
} else {
    $error = true;
}
if (isset($_POST['cantidad']) && !empty($_POST['cantidad'])) {
    $cantidad = intval($_POST['cantidad']);
} else {
    $error = true;
}
if (isset($_POST['descuento']) && !empty($_POST['descuento'])) {
    $descuento = intval($_POST['descuento']);
} else {
    $error = true;
}
if (isset($_POST['iva']) && !empty($_POST['iva'])) {
    $iva = intval($_POST['iva']);
} else {
    $error = true;
}
if (isset($_POST['envio']) && !empty($_POST['envio'])) {
    $envio = intval($_POST['envio']);
} else {
    $envio = 0;
}

if ($error == true) {
    echo "Hay que rellenar todos los datos del formulario.<br>";
    echo "<a href='Ejercicio1HTML.php'>Volver al formulario</a>";
} else {
    
    $precioFinal =  ($cantidad * $precio - $descuento) * (1 + $iva/100) + $envio;
    echo "Precio final: ".$precioFinal."€";
}
