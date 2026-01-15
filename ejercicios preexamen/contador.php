<?php
$datos = [1,3,4,5,4,3,1,1,9];

// Inicializamos el histograma con 10 ceros
$histograma = array_fill(0, 10, 0);

// Contamos las apariciones
foreach ($datos as $valor) {
    $histograma[$valor - 1]++;
}

// Mostramos el resultado
echo "<pre>";
print_r($histograma);
echo "</pre>";
?>
