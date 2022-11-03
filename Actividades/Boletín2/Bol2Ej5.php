<?php
$meses = array(
    'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto',
    'septiembre', 'octubre', 'noviemnbre', 'diciembre'
);
$mesesConM = array();
$indice = 0;

for ($i = 0; $i < count($meses); $i++) {
    if (str_starts_with($meses[$i], "m")) {
        $mesesConM[$indice] = $meses[$i];
        echo $mesesConM[$indice] . "\n";
        $indice++;
    }
}
