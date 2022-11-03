<?php
// Acceder al servidor  
$conexion = mysqli_connect('localhost', 'root');
// Acceder a la base de datos   
mysqli_select_db($conexion, 'banco');

if (isset($_GET['cuenta'])) {
    $query = "DELETE FROM clientes WHERE numero_cuenta = {$_GET['cuenta']}";
    if ($registro = mysqli_query($conexion, $query)) {
       print "El usuario se ha borrado";
       echo "<br><a href='Principal.php'>Volver al formulario</a>";
    }else {
        print "<p style=\"color:red;\"> No se ha podido realizar la petición. </p> <br>" . mysqli_error($conexion);
        echo "<br><a href='mostrarUsuarios.php'>Volver a ver los usuarios</a>";
        echo "<br><a href='Principal.php'>Volver al formulario</a>";
    }
} else{
    print "<p style=\"color:red;\"> No se ha podido realizar la petición. </p> <br>" . mysqli_error($conexion);
    echo "<br><a href='mostrarUsuarios.php'>Volver a ver los usuarios</a>";
    echo "<br><a href='Principal.php'>Volver al formulario</a>";
}