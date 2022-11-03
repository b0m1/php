<?php
 // Acceder al servidor
 $conexion = mysqli_connect('localhost', 'root');
 // Acceder a la base de datos 
 mysqli_select_db($conexion, 'usuariosbd');

 $query = "SELECT * FROM usuarios";
 $registros = mysqli_query($conexion, $query);
 

 while ($fila = mysqli_fetch_array($registros)) {
    print "<br>Nombre: ".$fila['nombre'];
    print "<br>Apellidos: ".$fila['apellidos'];
    print "<br>Correo: ".$fila['correo'];
    print "<br><button><a style=\"text-decoration: none; \" href=\"editar.php?id={$fila['id']}\">Editar</a></button>";
    print "<br><button><a style=\"text-decoration: none; \" href=\"borrar.php?id={$fila['id']}\">Borrar</a></button>";
    PRINT "<HR>";
   }

