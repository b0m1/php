<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <style>
        .container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form.principal {
            overflow: hidden;
            width: 80%;
            text-align: center;
            border-radius: 25px;
            border: 2px solid #e5b8ff;
            padding: 10px;
            box-sizing: border-box;
            overflow: auto;
            background-color: #f8edff;
            display: inline-block;
        }

        html,
        body {
            font-family: "Courier New", "Lucida Console", monospace;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #292929;
        }

        #formularioAdd {
            position: relative;
            margin: auto;
            /*margin-left: 20px;*/
            width: 50%;
            align-items: center;
            text-align: center;
            float: center;
            margin-bottom:10%;
        }

        #botonAdd:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
            background-color: #e5b8ff;
        }

        #botonAdd {
            border-radius: 25px;
            border: 1px solid #e5b8ff;
            background-color: white;
            padding: 10px;
            margin-top: 10px;
            width: 80%;
            font-family: "Courier New", "Lucida Console", monospace;
        }

        input {
            margin-bottom: 10px;
            float: center;
            clear: both;
            width: 60%;
        }

        #todo {
            position: absolute;
            margin: auto;
            text-align: center;
            width: 90vmin;
            height: 90vmin;
            box-sizing: border-box;
            background-color: white;
            overflow: auto;
            /*padding-top: 8vmax;*/
        }

        img {
            width: 100%;
            height: 100%;
        }


        #separador {
            margin-bottom: 12%;
            display: inline-block;
        }
    </style>
    <?php
    // Acceder al servidor
    $conexion = mysqli_connect('localhost', 'root');
    // Acceder a la base de datos 
    mysqli_select_db($conexion, 'banco');

    $query = "SELECT * FROM clientes WHERE numero_cuenta = {$_GET['cuenta']}";
    $registros = mysqli_query($conexion, $query);
    $user = mysqli_fetch_array($registros);
    $nombre=$user['nombre'];
    $apellido1=$user['primer_apellido'];
    $apellido2=$user['segundo_apellido'];
    $dni=$user['dni'];
    $telf=$user['telefono'];
    $correo=$user['correo'];
    $direccion=$user['direccion'];
    $numero=$user['numero_cuenta'];
    ?>


</head>

<body>
    <div class="container">
        <div id="todo">
            <div id="separador">
                <img src="divider.png">
            </div>
            <button style="width:100px; height:40px; margin-bottom: 10px; background-color:white; border:none; "><a style="color: #e5b8ff; text-decoration: none;" href="Principal.php">Página Principal</a></button>
            <div id="formularioAdd">
                <form class="principal" action="modificar.php" method="post">
                    ⋘Nombre⋙<br><input type="text" name="nombre" <?php print "value=\"$nombre\"";?>><br>
                    ⋘Primer Apellido⋙ <br><input type="text" name="apellido1"<?php print "value=\"$apellido1\"";?>><br>
                    ⋘Segundo Apellido⋙ <br><input type="text" name="apellido2" <?php print "value=\"$apellido2\"";?>><br>
                    ⋘DNI⋙ <br><input type="text" name="dni" <?php print "value=\"$dni\"";?>><br>
                    ⋘Telefono⋙ <br><input type="text" name="telf" <?php print "value=\"$telf\"";?>><br>
                    ⋘Correo⋙ <br><input type="text" name="correo" <?php print "value=\"$correo\"";?>><br>
                    ⋘Direccion⋙ <br><input type="text" name="direccion" <?php print "value=\"$direccion\"";?>><br>
                    <br><input type="hidden" name="numero" <?php print "value=\"$numero\"";?>>
                    <input id="botonAdd" type="submit" value="Modificar"><br>
                </form>
            </div>
            <div style=" display: inline-block;">
                <img src="divider.png">
            </div>
        </div>
    </div>

</body>

</html>