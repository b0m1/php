<?php
// Acceder al servidor  
$conexion = mysqli_connect('localhost', 'root');
// Acceder a la base de datos   
mysqli_select_db($conexion, 'usuariosbd');

//Comprobación variable 

if (isset($_GET['id'])) {
    $query = "SELECT nombre, apellidos, correo FROM usuarios WHERE id = {$_GET['id']}";
    if ($registro = mysqli_query($conexion, $query)) {
        $fila = mysqli_fetch_array($registro);

        print "<form action=\"editar.php\" method=\"post\">";
        print " <p>Nombre: <input type=\"text\" name=\"nombre\" value=" . $fila['nombre'] . "></p>  
        <p>Apellidos: <input type=\"text\" name=\"apellidos\" value=" . $fila['apellidos'] . "></p>  
        <p>Correo: <input type=\"mail\" name=\"correo\" value=" . $fila['correo'] . "></p> 
        <p>Correo: <input type=\"hidden\" name=\"id\" value=" . $_GET['id'] . "></p> 
        <input type=\"submit\" value=\"Actualizar\"><br>";
        print "</form>";
    } else {
        print "<p style=\"color:red;\"> No se ha podido realizar la petición. </p> <br>" . mysqli_error($conexion);
    }
} elseif (isset($_POST['id'])) {
    $problema = false;
    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo'])) {
        $nombre = mysqli_real_escape_string($conexion, trim($_POST['nombre']));
        $apellidos = mysqli_real_escape_string($conexion, trim($_POST['apellidos']));
        $correo = mysqli_real_escape_string($conexion, trim($_POST['correo']));
    } else {
        print "<p style=\"color:red;\"> Los campos tienen que tener valores. </p> <br>" . mysqli_error($conexion);
        $problema = true;
    }

    if (!$problema) {
        $query = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', correo='$correo' WHERE id={$_POST['id']}";
        $registro = mysqli_query($conexion, $query);
        if (mysqli_affected_rows($conexion) == 1) {
            print "<p> Se ha actualizado el usuario </p>";
        } else {
            print "<p style=\"color:red;\"> No se ha podido actualizar la información. </p> <br>" . mysqli_error($conexion);
        }
    }
} else {
    print "<p style=\"color:red;\"> No se han obtenido datos del formulario. </p> <br>" . mysqli_error($conexion);
}
