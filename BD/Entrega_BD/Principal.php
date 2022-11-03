<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    if (isset($_GET['error']) && !empty($_GET['error'])) {
        $error = $_GET['error'];
    }

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bwank</title>
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
            float: left;
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

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #f8edff;
            margin-bottom: 1%;
        }

        li {
            float: left;
            width: 20%;
        }

        li button {
            all: unset;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }


        li button:hover {
            background-color: #e5b8ff;
            
        }

        #imagen {
            height: auto;
            position: relative;
            float: right;
            text-align: center;
            width: 50%;
        }

        img {
            width: 100%;
            height: 100%;
        }

        #separador {
            margin-bottom: 8%;
            display: inline-block;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>

    </script>
</head>

<body>
    <div class="container">
        <div id="todo">
            <ul>
                <li>
                    <form action="mostrar.php" method="post">
                        <button type="submit" style=" cursor:pointer; ">Ver lista Clientes</button>
                    </form>
                </li>
                <li>
                    <form action="mostrar.php" method="post">
                        <button type="submit" style="color:white; cursor:pointer;">Eliminar cliente</button>
                    </form>
                </li>
                <li><button><a style=" text-decoration: none;" href="menu.php">Realizar Ingreso</a></button></li>
                <li><button style="color:white">Retirar dinero cuenta</button></li>
                <li><button><a style=" text-decoration: none;" href="menu.php">Modificar Datos</a></button></li>
            </ul>
            <div id="separador">
                <img src="divider.png">
            </div>
            <div id="formularioAdd">
                <form class="principal" action="addusuarios.php" method="post">
                    ⋘Nombre⋙<br><input type="text" name="nombre"><br>
                    ⋘Primer Apellido⋙ <br><input type="text" name="apellido1"><br>
                    ⋘Segundo Apellido⋙ <br><input type="text" name="apellido2"><br>
                    ⋘DNI⋙ <br><input type="text" name="dni"><br>
                    ⋘Telefono⋙ <br><input type="text" name="telf"><br>
                    ⋘Correo⋙ <br><input type="text" name="correo"><br>
                    ⋘Direccion⋙ <br><input type="text" name="direccion"><br>
                    ⋘Numero de Cuenta⋙ <br><input type="text" name="numero"><br>

                    <input id="botonAdd" type="submit" value="Añadir cliente"><br>
                </form>
            </div>
            <div id="imagen">
                <img src="logo.png"><br>
                <?php
                if (!empty($error)) {
                    if ($error == "vacio") {
                        echo "<p style=\"color:red;\">Debes rellenar todos los campos.</p>";
                    } else {
                        if ($error == "falso") {
                            echo "<p style=\"color:green;\">Usuario registrado con éxito.</p>";
                        } else {
                            if ($error == "exitoModificar") {
                                echo "<p style=\"color:green;\">Datos modificados con éxito.</p>";
                            } else {
                                if($error == "errorModificar"){
                                    echo "<p style=\"color:red;\">Error al modificar los datos.</p>";
                                } 
                                
          
                            }

                        }
                    }
                }
                ?>

            </div>
            <div style=" display: inline-block; margin-top: 8%;">
                <img src="divider.png">
            </div>


        </div>
    </div>
</body>

</html>