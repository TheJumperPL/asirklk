<?php
$histograma = [3,0,2,2,1,0,0,0,1,0];

foreach ($histograma as $indice => $valor) {
    $ancho = $valor * 10; // porcentaje
    echo ($indice + 1) . ": ";
    echo "<div style='
            display:inline-block;
            height:20px;
            width:{$ancho}%;
            background-color: gray;
            margin-bottom: 4px;
         '></div><br>";
}
?>
