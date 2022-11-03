<?php
// Acceder al servidor
$conexion = mysqli_connect('localhost', 'root');
// Acceder a la base de datos 
mysqli_select_db($conexion, 'banco');



if (isset($_POST['cantidad'])) {
    $dinero = $_POST['cantidad'];
} else {
    $dinero = 0;
}
if (isset($_POST['cuenta'])) {
    $cuenta = trim($_POST['cuenta']);
    $query = "UPDATE clientes SET dinero_cuenta = dinero_cuenta + $dinero WHERE numero_cuenta=$cuenta";
    $registros = mysqli_query($conexion, $query);
    if ($registros = mysqli_query($conexion, $query)) {


        header('Location: Principal.php?error=exitoModificar');
        exit;
    } else {

        header('Location: Principal.php?error=errorModificar');
        exit;
    }
} else {
    echo "no post";
}
