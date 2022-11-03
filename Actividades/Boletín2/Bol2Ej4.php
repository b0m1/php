<?php 
    $pares = array();
    $indice=0;
    
    for ($num=0; $num <=10 ; $num++) { 
        if($num%2==0){
            $pares[$indice] = $num;
            $indice++;
        }
    }

    for ($i=0; $i < count($pares); $i++) { 
        echo $pares[$i]."\n";
    }

?>