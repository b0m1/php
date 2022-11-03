<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>

<body>
    <?php
    // Acceder al servidor
    $conexion = mysqli_connect('localhost', 'root');
    // Acceder a la base de datos 
    mysqli_select_db($conexion, 'usuariosbd');

    $problema = false;

    if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['correo'])) {
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $correo = trim($_POST['correo']);
    } else {
        print "<p style=\"color:red\">Debe introducir todos los datos</p>";
        $problema = true;
    }

    // Control de usuario registrado
    $query = "SELECT * FROM usuarios";
    $registros = mysqli_query($conexion, $query);
    if ($registros = mysqli_query($conexion, $query)) {
        if (empty($registros)) {
            print "<p>No hay usuarios</p>";
        } else {
            while ($fila = mysqli_fetch_array($registros)) {
                if ($fila['nombre'] == $nombre && $fila['apellidos'] == $apellidos) {
                    print "<p>Existe un usuario con ese nombre y ap</p>";
                    $problema = true;
                } elseif($fila['correo'] == $correo){
                    print "<p>Existe un usuario con ese correo</p>";
                    $problema = true;
                }
            }
        }
    } else {
        print "<p style=\"color:red\">No se ha podido hacer el registro</p>";
    }

    if (!$problema) {
        $peticion = "INSERT INTO usuarios (id, nombre, apellidos, correo) VALUES (0, '$nombre', '$apellidos', '$correo')";
        if (mysqli_query($conexion, $peticion)) {
            print "<p>Usuario Registrado</p>";
        } else {
            print "<p style=\"color:red\">No se ha podido hacer el registro</p>";
        }
    }
    ?>
</body>

</html>