<!-- N hasta 25 || cuadrado || cubo -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include 'funciones.php';
    ?>
    <style>
        table, tr, td{
            border: 1px dotted #000;
            border-collapse: collapse;
            text-align: center;
        }
        
        .titulos{
            background-color: lightcyan;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td class="titulos">NUM</td>
            <td class="titulos">CUAD</td>
            <td class="titulos">CUBO</td>
        </tr>
        <?php
            $num = 1;

            for ($i = $num; $i < 10; $i++) {
                $cuadrado = cuad($num);
                $cubo = cubo($num);
                echo "<tr><td>" . $num . "</td><td>" . $cuadrado . "</td><td>" . $cubo . "</td><tr>";
                $num++;
            }
        ?>
    </table>

    <?php
        $n=10;
        echo "<p>".impares($n)."</p>";
    ?>
</body>

</html>