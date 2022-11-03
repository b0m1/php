<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="Ejercicio1.php" method="post">
        <p>Rellena el siguiente formulario para calcular el coste total del envío</p>
        <p>Precio: <input type="text" name="precio" size="5"></p>
        <p>Cantidad: <input type="text" name="cantidad" size="5"></p>
        <p>Descuento: <input type="text" name="descuento" size="5"></p>
        <p>IVA <input type="text" name="iva" size="3">%</p>
        <p> Método de envío: <select name="envio">
                <option value="0">Recoger en Tienda</option>
                <option value="5">Correos</option>
                <option value="8">Seur</option>
        </select>
        <p><input type="submit" name="boton" value="Calcular precio total"></p>
    </form>
</body>
</html>