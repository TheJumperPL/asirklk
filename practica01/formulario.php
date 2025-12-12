<style>
/* Centrar el formulario en la página */
form {
  display: flex;
  flex-direction: column; /* Cada fila apilada verticalmente */
  align-items: center;    /* Centrar horizontalmente */
  justify-content: center; /* Centrar verticalmente */
  height: 100vh;          /* Ocupa toda la altura de la ventana */
  gap: 1rem;              /* Espacio entre filas */
}

/* Cada fila label+input */
form > label,
form > input[type="text"],
form > input[type="email"],
form > input[type="password"],
form > input[type="number"] {
  display: inline-block; /* Asegura que label e input estén en línea */
}

/* Para que label quede a la izquierda de su input */
label {
  display: inline-block;
  width: 120px; /* ancho fijo para alineación */
  text-align: right;
  margin-right: 0.5rem;
}

</style>

<?php
function formulario($estructura_formulario)
{
    ?>
    <form>
        <?php
        foreach ($estructura_formulario as $label => $type) {
            // var_dump($label);
            // var_dump($type);
            $_label = str_replace(' ', '_', $label);
            // var_dump($_label);
            ?>
            <div class="form-row">
                <label name='<?= $_label ?>'><?= $label ?></label>
                <input name='<?= $_label ?>' type='<?= htmlspecialchars($type) ?>'>
            </div>
        <?php
        }
        ?>
        <input type='submit'>
    </form>
    <?php
}
?>