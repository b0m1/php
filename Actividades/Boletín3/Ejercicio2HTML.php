<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="Ejercicio2.php" method="post">
    <p>Rellena el siguiente formulario:</p>
        <p>Nombre: <input type="text" name="nombre" size="15"></p>
        <p>Email: <input type="email" name="email" size="15"></p>
        <p>Teléfono: <input type="text" name="telf" size="7"></p>
        <p>Mensaje: <textarea name="mensaje" rows="5" cols="30" placeholder="Escriba aquí su mensaje" ></textarea></p>
        <p><input type="submit" name="boton" value="Enviar Datos"></p>
    </form>
</body>
</html>