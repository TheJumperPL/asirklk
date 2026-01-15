<?php
function arbolNavidad() {
    echo "<pre>";

    for ($i = 0; $i < 8; $i++) {
        // Espacios a la izquierda
        echo str_repeat(" ", 7 - $i);
        // Asteriscos
        echo str_repeat("*", $i * 2 + 1);//texto a copiar/numero de veces
        echo "\n";
    }

    // Tronco
    echo "      |||";

    echo "</pre>";
}

arbolNavidad();
?>
