<?php
$histograma = [3,0,2,2,1,0,0,0,1,0];

$max = max($histograma);

echo "<pre>";

for ($nivel = $max; $nivel > 0; $nivel--) {
    foreach ($histograma as $valor) {
        if ($valor >= $nivel) {
            echo " * ";
        } else {
            echo "   ";
        }
    }
    echo "\n";
}

echo str_repeat("---", count($histograma));
echo "</pre>";
?>
