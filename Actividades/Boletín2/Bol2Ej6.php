<?php
$colores = array('rojo', 'verde', 'amarillo', 'azul', 'rosa');
for ($i=0; $i < count($colores); $i++) { 
    if($colores[$i] == "azul"){
        unset($colores[$i]);
    }
}

$colores2 = array_values($colores);

for ($i=0; $i < count($colores); $i++) { 
    echo "\n".$colores2[$i];
}
?>