<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Clientes</title>
    <style>
        html,
        body {
            height: 100%;
            font-family: "Courier New", "Lucida Console", monospace;
        }

        .lista {
            border: 3px dashed  #e5b8ff;
            border-collapse: collapse;
            position: relative;
            top: 35%;
            margin: -10px auto;
            /* -height/2 */
            width: 24%;
            text-align: left;
            padding-left:50px;
            box-sizing: border-box;
        }
        
        button{
            border:1px ridge #e5b8ff;
   
            background-color:white;
        }
    </style>

    <?php
    // Acceder al servidor
    $conexion = mysqli_connect('localhost', 'root');
    // Acceder a la base de datos 
    mysqli_select_db($conexion, 'banco');

    $query = "SELECT * FROM clientes";
    $registros = mysqli_query($conexion, $query);

    ?>
</head>

<body>

        <div class="lista">
            <h2 style="color:#e5b8ff;">CLIENTES</h2>
            <?php
            while ($fila = mysqli_fetch_array($registros)) {
                print "<button><a style=\"color: gray; text-decoration: none; \" href=\"modificarMenu.php?cuenta={$fila['numero_cuenta']}\">Editar</a></button>  ";
                print "<button><a style=\"color: gray; text-decoration: none; \" href=\"dinero.php?cuenta={$fila['numero_cuenta']}\">Añadir/Retirar dinero</a></button>  ";
                print  $fila['numero_cuenta']. "  " . $fila['nombre'];
                

                print "<br><br>";
            }
            ?>

        </div>

</body>

</html>