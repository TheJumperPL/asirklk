<?php

for ($i = 1973; $i <= 2025; $i = $i + 1){
    $imagen = "https://www.glerl.noaa.gov/data/ice/max_anim/png/" . $i . ".png";
    echo ("<img src=" . $imagen . ">");
}
?>