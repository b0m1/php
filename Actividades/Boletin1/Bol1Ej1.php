<?php
// Bol1Ej3
function areaCirculo($radio)
{
    return pi() * pow($radio, 2);
}

// Bol1Ej4
function numRandom()
{
    $num = rand(1, 5);
    switch ($num) {
        case '1':
            return "uno";
        case '2':
            return "dos";
        case '3':
            return "tres";
        case '4':
            return "cuatro";
        case '5':
            return "cinco";
    }
}

// Bol1Ej5
function multiplo($num1, $num2)
{
    if ($num1 % $num2 == 0) {
        echo "Son múltiplos";
    } else {
        echo "No son múltiplos";
    }
}

// Bol1Ej6
function precioMuseo($edad){
    if ($edad < 8 || $edad >= 66) {
        return 0;
    } else {
        if ($edad >= 8 && $edad <= 16 || $edad >= 56 && $edad <= 65) {
            return 5;
        } else {
            if ($edad >= 17 && $edad <= 25) {
                return 8;
            } else {
                return 10;
            }
        }
    }
}

// Bol1Ej7
function mascotas($mascota){
    switch ($mascota) {
        case 'gato':
        case 'huron':
            return 1;
        case 'perro':
            return 1.5;
        case 'loro':
            return 2;
        default:
            return "mascota no permitida";
    }
}

// Bol1Ej8
function premioBingo($edad){
    return 0.05*$edad;
}

// Bol1Ej9
function parImpar($num){
    if(!is_int($num)){
        return "no es un numero entero";
    } else{
        if($num%2==0){
            return "par";
        }else{
            return "impar";
        } 
    }
}

// Bol1Ej10
while ($a <= 10) {
    # code...
}

$num = numRandom();
echo "$num<br>";

multiplo(10, 5);

$area = areaCirculo(5);
echo "<br>$area";

$edad = rand(1, 70);
$precio = precioMuseo($edad);
echo "<br>$edad ---> $precio €";

$mascota = "pajaro";
$precio2 = mascotas($mascota);
echo "<br>$mascota: $precio2";

$edadBingo = rand(75,80);
$premio = premioBingo($edadBingo);
echo "<br> $premio";

echo "<br>".parImpar($edad);
?>