<style>

table {
    border-collapse: collapse;
    border-spacing: 0;
}

td {
   padding: 0;
}

img {
    display: block;
}

</style>

<?php

function mazmorra($tiles){
    echo "<table>";
    foreach ($tiles as $fila){
        ?>
        <tr>
            <?php foreach ($fila as $columna){?>
                <td><img src="tiles/<?=$columna?>.png" alt="Logo"></td>
                <?php
            } 
            ?>
        </tr>
        <?php
    }
    echo "</table";
}

?>