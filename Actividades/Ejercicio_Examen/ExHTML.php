<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="EjercicioEx.php" method="post">
        <p>Nombre: <input type="text" name="nombre" size="10"></p>
        <p>Primer Apellido: <input type="text" name="apellido1" size="10"></p>
        <p>Segundo Apellido: <input type="text" name="apellido2" size="10"></p>
        <p>Correo Electrónico: <input type="email" name="correo" size="10"></p>
        <br>
        <p>¿Desea recibir información sobre las publicaciones?</p>
        <p><input type="radio" value="si" name="info"> Si, estoy interesado </p>
        <p><input type="radio" value="no" name="info"> No, gracias </p>
        <br>
        <p>Publicaciones disponibles:</p>
        <p><input type="checkbox" name="revistas[]" value="natgeo">National Geographic</p>
        <p><input type="checkbox" name="revistas[]" value="electronic">Electronic Letters</p>
        <p><input type="checkbox" name="revistas[]" value="conocer">Conocer</p>
        <p><input type="checkbox" name="revistas[]" value="science">Science</p>
        <p><input type="checkbox" name="revistas[]" value="web">Desarrollo web</p>
        <br>
        <p>Formas de subscripción: <select name="tipo">
            <option value="" selected="disable">Elegir</option>
            <option value="semanal">Semanal</option>
            <option value="mensual">Mensual</option>
            <option value="anual">Anual</option>
        </select></p>
        <p><input type="submit" name="enviar" value="Subscribirme"></p>
    </form>
</body>

</html>