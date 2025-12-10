<?php

function es_primo2($numero){
    for($i = $numero - 1; $i > 1; $i = $i - 1){
        $valor = $numero % $i;
        if($valor == 0){
            echo "Este número NO es primo";
            return; // salimos de la función
        }
    }
    echo "Este número SÍ es primo";
}
function es_capicua($numero){
    $numero = strval($numero);
    if ($numero == strrev($numero)){
        #echo "este numero $numero es capicua";
        return true;
    }
    else{
        #echo "este numero $numero no es capicua";
        return false;
    }
}
function es_primo($numero){
        for($i = $numero - 1; $i > 1; $i--){
            $valor = $numero % $i;
            $primo = [$valor];
    
            if(in_array(0, $primo, true)){
                #echo "Este número NO es primo";
                return false;
            }
        }
    
        #echo "Este número SÍ es primo";
        return true;
}
    

es_capicua(303);
echo "<br>";
es_primo(5);


for($i = 1000000; $i < 99999999999999 ; $i = $i + 1){
    if(es_capicua($i) && es_primo($i)){
        echo "$i es el menor numero primo capicua a partir de 1000000";
        break;
    }
}
?>