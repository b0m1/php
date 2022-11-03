<?php
// Acceder al servidor  
$conexion = mysqli_connect('localhost', 'root');
// Acceder a la base de datos   
mysqli_select_db($conexion, 'usuariosbd');

if (isset($_GET['id'])) {
    $query = "DELETE FROM usuarios WHERE id = {$_GET['id']}";
    if ($registro = mysqli_query($conexion, $query)) {
       print "El usuario se ha borrado";
    }else {
        print "<p style=\"color:red;\"> No se ha podido realizar la petición. </p> <br>" . mysqli_error($conexion);
    }
} else{
    print "<p style=\"color:red;\"> No se ha podido realizar la petición. </p> <br>" . mysqli_error($conexion);
}