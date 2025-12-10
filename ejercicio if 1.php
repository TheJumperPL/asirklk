<!-- 
  Ejercicio: si la multiplicación de dos variables es mayor de 50,
  muestra el resultado con fondo rojo. Si no, el fondo será transparente 
-->


<?php
    $factor1 = 7;
    $factor2 = 8;
    $multiplicacion = $factor1 * $factor2;

    if ($multiplicacion >= 50){
        $fondo = "red";
    }
    else{
        $fondo = "transparent";
    }
?>

<div style="border: 1px solid black;  text-align:center; background-color:<?=$fondo?>;">
    El resultado de multiplicar <?=$factor1?> por <?=$factor2?> es <?=$multiplicacion?>
</div>
