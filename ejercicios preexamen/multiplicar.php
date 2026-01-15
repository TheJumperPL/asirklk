<?php
    $numero = isset($_GET['numero']) ? (int)$_GET['numero'] : null;
?>

<form method='GET'>
<input type='number' name='numero' value='<?=$numero?>'>
<input type='submit'> <br>

<?php
function tabla_multiplicar($numero){
echo"<table><tr>";
        for($i = 0; $i <= 10; $i+=1){
            $total = $i * $numero;
            echo "<tr>
                    <td>$numero * $i = </td> <td>$total</td>
                 </tr>";
        }
echo"</tr></table>";
    }

    if($numero !== null){
        tabla_multiplicar($numero);
    }
?>