$paso = 255 / 10;
for ($i = 0; $i <= 10; $i++) {
    $gris = 255 - ($i * $paso);
    echo "<div style='height:20px; background: rgb($gris,$gris,$gris)'></div>";
}
