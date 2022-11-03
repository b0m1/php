<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        tr,
        td {
            border: 1px dotted #000;
            border-collapse: collapse;
            text-align: center;
        }

        .titulos {
            background-color: lightcyan;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td class="titulos"></td>
            <?php
            $nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
            $materias = array("Lengua", "Historia", "Inglés", "Matemáticas");
            for ($i=0; $i < count($materias); $i++) { 
                echo "<td class=\"titulos\">".$materias[$i]."</td>";
            }
            
            ?>
        </tr>
            <?php 
            for ($i=0; $i < count($nombres); $i++) { 
                echo "<tr>";          
                echo "<td class=\"titulos\">".$nombres[$i]."</td>";
                for ($j=0; $j < count($materias); $j++) { 
                    echo "<td>".rand(0,10)."</td>";
                }
                echo "</tr>";
            }

            ?>

    </table>
</body>

</html>