<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
    <style>
        
        .tabla{
            border: 1px dotted pink;
            border-collapse: collapse;
            
            width:25%;
            height: 350px;
            display:inline-block;
            padding-left: 15px;
            box-sizing: content-box;
            background-color: white;
          
        }
        p, button{
            text-align: left;
           
        }
        /* .contenedor{
            padding:0;
            margin:0;
            width: 80%;
            height: auto;
            justify-content: center;
            display: flex;
            align-items: center;
        } */
        .contenedor{
           margin-top:5%;
            box-sizing: border-box;
            text-align: center;
            vertical-align: middle;

            display:inline-block;
        }
        .container {
            align-items: center;
            justify-content: center;
            margin:auto;
            width: 100%;
            height: 100%;
            display: flex;
            background-color: #292929;
        }
        body{
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #292929;
            font-family: "Courier New", "Lucida Console", monospace;
        }
    </style>
</head>
<body>

        <?php 
            // Acceder al servidor
        $conexion = mysqli_connect('localhost', 'root');
        // Acceder a la base de datos 
        mysqli_select_db($conexion, 'banco');

        $query = "SELECT * FROM clientes";
        $registros = mysqli_query($conexion, $query);
        print "<div class=\"container\">";
        print "<button style=\" background-color:white;text-align:center; width:100px; height:40px;position: absolute; top:0; margin-top:10px;\"><a style=\"color: #e5b8ff; text-decoration: none; \" href=\"Principal.php\">Volver</a></button>  ";
        print "<div class=\"contenedor\">";
        while ($fila = mysqli_fetch_array($registros)) {
            print "<div class=\"tabla\">";
            print "<p>Nombre: ".$fila['nombre']."</p>";
            print "<p>Apellidos: ".$fila['primer_apellido']." ".$fila['segundo_apellido']."</p>";
            print "<p>DNI: ".$fila['dni']."</p>";
            print "<p>Telefono: ".$fila['telefono']."</p>";
            print "<p>Correo: ".$fila['correo']."</p>";
            print "<p>Direccion: ".$fila['direccion']."</p>";
            print "<p>Num Cuenta: ".$fila['numero_cuenta']."</p>";
            if($fila['dinero_cuenta']>=0){
                print "<p style=\"color:green;\"> ".$fila['dinero_cuenta']."€</p>";
            } else{
                print "<p style=\"color:red;\"> ".$fila['dinero_cuenta']."€</p>";
            }
           
            //print "<br><button><a style=\"text-decoration: none; \" href=\"editar.php?id={$fila['id']}\">Editar</a></button>";
            print "<p><button><a style=\"color: pink; text-decoration: none; \" href=\"borrar.php?cuenta={$fila['numero_cuenta']}\">Borrar</a></button></p>";
            PRINT "</div>";
        }
        print "</div>";
       
        print "</div>";
        ?>

</body>
</html>