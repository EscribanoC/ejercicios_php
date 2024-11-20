<?php

/**Crea un formulario que solicite la edad del usuario. 
 * Al enviar el formulario, el programa debe mostrar:
 * "Infante" si la edad es menor de 12 años.
 * "Adolescente" si tiene entre 12 y 17 años.
 * "Adulto" si está entre 18 y 60 años.
 * "Anciano" si es mayor de 60.*/

$edad = $_GET['edad'];

if ($edad <= 12) {
    echo "Infante";
} else if ($edad <= 17) {
    echo "Adolescente";
} else if ($edad <= 60) {
    echo "Adulto";
} else if ($edad > 0) {
    echo "Anciano";
} else {
    echo "No es una edad válida";
}
