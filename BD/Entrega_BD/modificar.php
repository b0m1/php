<?php
// Acceder al servidor
$conexion = mysqli_connect('localhost', 'root');
// Acceder a la base de datos 
mysqli_select_db($conexion, 'banco');

$problema = false;
if (!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) && !empty($_POST['dni']) && !empty($_POST['telf']) && !empty($_POST['correo']) && !empty($_POST['direccion'])) {
    $nombre = trim($_POST['nombre']);
    $apellido1 = trim($_POST['apellido1']);
    $apellido2 = trim($_POST['apellido2']);
    $dni = trim($_POST['dni']);
    $telf= trim($_POST['telf']);
    $correo = trim($_POST['correo']);
    $direccion = trim($_POST['direccion']);
    $numero = $_POST['numero'];
} else {
    $problema = true;
   
   
    //$color = "rojo";
   
    //header('Location: modificarMenu.php?error=vacio');
   // exit;
   
}
// Control de usuario registrado
$query = "UPDATE clientes SET nombre='$nombre', primer_apellido='$apellido1', segundo_apellido='$apellido2', dni='$dni', telefono=$telf, correo='$correo', direccion='$direccion' WHERE numero_cuenta=$numero";
$registros = mysqli_query($conexion, $query);
if ($registros = mysqli_query($conexion, $query)) {
    header('Location: Principal.php?error=exitoModificar');
    exit;
} else{
    header('Location: Principal.php?error=errorModificar');
    exit;
}