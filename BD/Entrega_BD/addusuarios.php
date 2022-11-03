<?php
// Acceder al servidor
$conexion = mysqli_connect('localhost', 'root');
// Acceder a la base de datos 
mysqli_select_db($conexion, 'banco');

$problema = false;

if (!empty($_POST['nombre']) && !empty($_POST['apellido1']) && !empty($_POST['apellido2']) && !empty($_POST['dni']) && !empty($_POST['telf']) && !empty($_POST['correo']) && !empty($_POST['direccion']) && !empty($_POST['numero'])) {
    $nombre = trim($_POST['nombre']);
    $apellido1 = trim($_POST['apellido1']);
    $apellido2 = trim($_POST['apellido2']);
    $dni = trim($_POST['dni']);
    $telf= trim($_POST['telf']);
    $correo = trim($_POST['correo']);
    $direccion = trim($_POST['direccion']);
    $numero = trim($_POST['numero']);
} else {
    $problema = true;
   
   
    //$color = "rojo";
   
    header('Location: Principal.php?error=vacio');
    exit;
   
}

 // Control de usuario registrado
 $query = "SELECT * FROM clientes";
 $registros = mysqli_query($conexion, $query);
 if ($registros = mysqli_query($conexion, $query)) {
    if (empty($registros)) {
        print "<p>No hay usuarios</p>";
    } else {
        while ($fila = mysqli_fetch_array($registros)) {
            // Tengo que comprobarlo con la cuenta
            if ($fila['numero_cuenta'] == $numero) {
                
                $problema = true;
                header('Location: Principal.php?error=duplicado');
                exit;
            } 
        }
    }
} else {
    print "<p style=\"color:red\">No se ha podido hacer el registro</p>";
}
if (!$problema) {
    $peticion = "INSERT INTO clientes (id_cliente, nombre, primer_apellido,segundo_apellido, dni, telefono, correo, direccion, numero_cuenta, dinero_cuenta ) VALUES (0, '$nombre', '$apellido1', '$apellido2', '$dni', '$telf', '$correo', '$direccion', '$numero', 0)";
    if (mysqli_query($conexion, $peticion)) {
         
      
        //$color = "verde";
        
        header('Location: Principal.php?error=falso');
        
        exit;
        //print "<p>Usuario Registrado</p>";
    } else {
        print "<p style=\"color:red\">No se ha podido hacer el registro</p>";
    }
}
?>