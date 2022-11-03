<?php 
 function sumar($a, $b){ 
  $suma = $a + $b; 
  return $suma; 
 } 
 
 function restar($a, $b){ 
  $resta = $a - $b; 
  return $resta; 
 } 
 
 function multiplicar($a, $b){ 
  $multiplicacion = $a * $b; 
  return $multiplicacion; 
 } 
 
 function dividir($a, $b){ 
  $divide = $a / $b; 
  return $divide; 
 } 
 
 function cuad($a){ 
  $cuad = $a * $a; 
  return $cuad; 
 } 
 
 function cubo($a){ 
  $cubo = $a * $a * $a; 
  return $cubo; 
 } 

 function impares($n){
    for ($i=1; $i < $n; $i++) { 
       if($i%2!=0){
        echo $i."/";
       }
    }
 }
  
?>