<?php

/**Diseña un formulario que pida al usuario un número del 1 al 7. 
 * Al enviar el formulario, el programa debe retornar el día de 
 * la semana correspondiente (ejemplo: 1 = Lunes, 2 = Martes, etc.). 
 * Si el número está fuera de ese rango, muestra un mensaje de error.
 * */

$dia = $_GET['dia'];

switch ($dia) {
    case "1":
        echo "Lunes";
        break;
    case "2":
        echo "Martes";
        break;
    case "3":
        echo "Miércoles";
        break;
    case "4":
        echo "Jueves";
        break;
    case "5":
        echo "Viernes";
        break;
    case "6":
        echo "Sábado";
        break;
    case "7":
        echo "Domingo";
        break;
}
