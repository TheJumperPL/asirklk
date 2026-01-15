<?php
// Comprobar si el formulario fue enviado
if (isset($_POST['dias'])) {
    $dias = intval($_POST['dias']);
    $horas = intval($_POST['horas']);
    $minutos = intval($_POST['minutos']);
    $segundos = intval($_POST['segundos']);

    // Cálculo total en segundos
    $totalSegundos = ($dias * 86400) +
                     ($horas * 3600) +
                     ($minutos * 60) +
                     $segundos;
}
?>

<h2>Convertir a segundos</h2>

<form method="post">
    Días: <br>
    <input type="number" name="dias" value="0" required><br><br>

    Horas: <br>
    <input type="number" name="horas" value="0" required><br><br>

    Minutos: <br>
    <input type="number" name="minutos" value="0" required><br><br>

    Segundos: <br>
    <input type="number" name="segundos" value="0" required><br><br>

    <button type="submit">Calcular segundos</button>
</form>

<?php if (isset($totalSegundos)): ?>
    <p>
        El tiempo total en segundos es: <strong><?= $totalSegundos ?></strong>
    </p>
<?php endif; ?>

