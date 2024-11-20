<?php
$numero = $_GET['numero'];
$resultado = 0;
for ($i = 1; $i <= $numero; $i++) {
    $resultado += $i;
}
echo $resultado;
