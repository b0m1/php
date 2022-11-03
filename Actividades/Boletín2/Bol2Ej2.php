<?php 
function contarLetras($frase, $letra){
    $veces=0;
    for ($i=0; $i < strlen($frase); $i++) { 
        if($letra== $frase[$i]){
            $veces++;
        }
    }
    return $veces;
}
$frase = "ya fue mucho lunes toca un sabado de lokiar";
$letra = "a";
$veces = contarLetras($frase, $letra);
echo "la letra ".$letra." sale ".$veces." veces";
?>