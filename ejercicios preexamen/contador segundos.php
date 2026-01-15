<?php
// Comprobar si el formulario fue enviado
if (isset($_POST['segundos'])) {
    $segundosTotales = intval($_POST['segundos']);

    // Cálculos
    $dias = intdiv($segundosTotales, 86400);
    $resto = $segundosTotales % 86400;

    $horas = intdiv($resto, 3600);
    $resto = $resto % 3600;

    $minutos = intdiv($resto, 60);
    $segundos = $resto % 60;
}
?>

<h2>Conversor de segundos</h2>

<form method="post">
    <label>Introduce los segundos:</label><br>
    <input type="number" name="segundos" required>
    <br><br>
    <button type="submit">Calcular</button>
</form>

<?php if (isset($segundosTotales)): ?>
    <p>
        <?= $segundosTotales ?> segundos equivalen a:<br>
        <?= $dias ?> días,
        <?= $horas ?> horas,
        <?= $minutos ?> minutos y
        <?= $segundos ?> segundos.
    </p>
<?php endif; ?>

