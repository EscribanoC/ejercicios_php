<?php

/**Crea un formulario en PHP que solicite al usuario tres números. 
 * Al enviar el formulario, el programa debe indicar cuál de los 
 * tres números es el mayor.
 */

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

$numMayor = max($num1, $num2, $num3);
echo $numMayor;
