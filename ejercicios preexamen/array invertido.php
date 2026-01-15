<?php
// Array original (2 datos por fila)
$array = [
    ['Juan', 25],
    ['Ana', 30],
    ['Luis', 22],
    ['María', 28]
];

echo "<h3>Array original</h3>";
echo "<pre>";
print_r($array);
echo "</pre>";

// Invertir cada fila
$arrayInvertido = [];

foreach ($array as $fila) {
    // array_reverse invierte los elementos de la fila
    $arrayInvertido[] = array_reverse($fila);
}

echo "<h3>Array invertido</h3>";
echo "<pre>";
print_r($arrayInvertido);
echo "</pre>";
?>
