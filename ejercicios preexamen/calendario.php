<?php
$ultimo_dia = isset($_GET['ultimo_dia']) ? (int)$_GET['ultimo_dia'] : null;
$primer_dia = isset($_GET['primer_dia']) ? (int)$_GET['primer_dia'] : null;

function pintarCalendario($ultimo_dia, $primer_dia) {
    echo "<table border='1'><tr>";
    $dias = ['L','M','X','J','V','S','D'];
    foreach ($dias as $d) echo "<th>$d</th>";
    echo "</tr><tr>";

    // Huecos antes del día 1
    for ($i = 0; $i < $primer_dia; $i++) {
        echo "<td></td>";
    }

    // Días del mes
    for ($dia = 1; $dia <= $ultimo_dia; $dia++) {
        echo "<td>$dia</td>";
        if ((($dia + $primer_dia) % 7) == 0) {
            echo "</tr><tr>";
        }
    }

    echo "</tr></table>";
}
?>

<form method="GET">
    Escribe un número (28,29,30,31):
    <input type="number" name="ultimo_dia" min="28" max="31" required value="<?= $ultimo_dia ?>"><br><br>

    Día de inicio:
    <select name="primer_dia">
        <?php
        for ($i = 0; $i <= 6; $i++) {
            $sel = ($primer_dia === $i) ? 'selected' : '';
            echo "<option value='$i' $sel>$i</option>";
        }
        ?>
    </select><br><br>

    <input type="submit">
</form>

<?php
if ($ultimo_dia !== null && $primer_dia !== null) {
    pintarCalendario($ultimo_dia, $primer_dia);
}
?>
