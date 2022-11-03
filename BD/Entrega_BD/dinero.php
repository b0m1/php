<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .center {
            margin: auto;
            width: 30%;
            border: 3px solid #e5b8ff;
            padding: 10px;
            margin-top: 20%;
            text-align: center;
        }
    </style>

</head>

<body>
    <form action="addDinero.php" method="post">
        <div class="center">

            Introduce la cantidad que deseas sacar/ingresar:<br><input type="text" name="cantidad" >
            <input name="cuenta" type="hidden" value=<?php echo $_GET['cuenta']?>
            <br><input type="submit" value="V">
           
        </div>
    </form>

</body>

</html>