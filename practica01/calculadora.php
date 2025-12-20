<?php

$factor1 = isset($_GET['factor1']) ? $_GET['factor1'] : '';
$factor2 = isset($_GET['factor2']) ? $_GET['factor2'] : '';
$operador = isset($_GET['operador']) ? $_GET['operador'] : '';
$enviar = isset($_GET['enviar']) ? $_GET['enviar'] : null;
$decimales = .01;

    // $_GET['factor1'] ?? ' ';
    // $_GET['operador'] ?? '+';
    // $_GET['factor2'] ?? ' ';

function calculadora(){    
    $factor1 = isset($_GET['factor1']) ? $_GET['factor1'] : null;
    $factor2 = isset($_GET['factor2']) ? $_GET['factor2'] : null;
    $operador = isset($_GET['operador']) ? $_GET['operador'] : '+';
    $enviar = isset($_GET['enviar']) ? $_GET['enviar'] : null;
    $total = isset($_GET['total']) ? $_GET['total'] : '';
    $limite = 10000000000000000;

    if($factor1 > $limite || $factor2 > $limite){
        echo "Error";
        die;
    }

    if($enviar && $operador == '+'){
        $total = $factor1 + $factor2;
    }

    elseif($enviar && $operador == '-'){
        $total = $factor1 - $factor2;
    }

    elseif($enviar && $operador == '/'){
        if($factor2 < 1){
            echo "Error";
            die;
        }
        $total = $factor1 / $factor2;
    }

    elseif($enviar && $operador == '*'){
        $total = $factor1 * $factor2;
    }

    elseif($enviar && $operador == '%'){
        if($factor2 < 1){
            echo "Error";
            die;
        }
        $factor1 = round($factor1);
        $factor2 = round($factor2);
        $total = $factor1 % $factor2;
    }
    if($enviar){
        echo "<p>El resultado de $factor1 $operador $factor2 es $total</p>";
    }
}
?>

<form>
        <input name='factor1' type='number' value='<?=$factor1?>' step='<?=$decimales?>' required>
        <select name='operador'>
            <option value='+'> + </option>    
            <option value='-'> - </option>    
            <option value='/'> / </option>    
            <option value='*'> * </option>
            <option value='%'> % </option>
            <!-- conseguir mantener el operando tras operacion, los numeros de los factores sean enteros y que no pete la calculadora  -->
        </select>
        <input name='factor2' type='number' value='<?=$factor2?>' step='<?=$decimales?>' required>
        <input name='enviar' type='submit'>
</form>