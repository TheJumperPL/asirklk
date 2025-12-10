<?php
$fotos = ["annulus1.png", "annulus2.png", "ejection1.png", "ejection2.png", "ejection3.png", "encounter1.png", "encounter2.png", "formation1.png", "formation2.png", "formation3.png", "formation4.png", "formation5.png", "formation6.png", "formation7.png", "formation8.png", "formation9.png", "inclined1.png", "inclined2.png", "inclined3.png", "inclined4.png", "kozai1.png", "kozai2.png", "kozai3.png", "rmleffect1.png", "rmleffect2.png", "system1.png", "system2.png"];
$base = "https://astro.uni-bonn.de/~ithies/images/Planet_Formation_Illustrated/PNG";
$altura = 90;
$anchura = 160;
?>

<table border=1 style="text-align: center; background-color: lightblue">
    <thead>
        <th>Nombre</th>
        <th>Imagen</th>
    </thead>
<?php
foreach($fotos as $foto){
    $altura = $altura + 10;
    $anchura = $anchura + 10;
?>
     <tr>
        <td><?=$foto?> <?=$altura?>px <?=$anchura?>px</td>
        <td><img height=<?=$altura?> widht=<?=$anchura?>; src="<?=$base?>/<?=$foto?>">
    </tr>
<?php
};
?>
</table>
