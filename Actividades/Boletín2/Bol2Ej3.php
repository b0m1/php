<?php
function validarPassword($password){
    if(is_numeric($password[0])){
        return false;
    } else {
        if (strlen($password) >=8 && strlen($password)<=12){
            return true;
        }
    }
}

$pass = "12345678";
$pass2 = "h85858558";
$pass3 = "hhjhjhj";
$pass4= "hhhhh456123123";
$valida = validarPassword($pass2);
echo ("La contraseña es ".($valida ? "válida" : "inválida"));
