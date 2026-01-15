<?php
$texto = isset($_GET['texto']) ? $_GET['texto'] : null;

function textoColores($texto) {
    $colores = ['red','white','pink','yellow','green'];
    $palabras = explode(' ', $texto);

    foreach ($palabras as $palabra) {
        $color = $colores[array_rand($colores)];
        echo "<span style='color:$color'>$palabra </span>";
    }
}
?>

<form method="GET">
    <input type="text" name="texto" placeholder="Escribe un texto">
    <input type="submit" value="Colorear">
</form>

<?php
if ($texto !== null) {
    textoColores($texto);
}
?>
