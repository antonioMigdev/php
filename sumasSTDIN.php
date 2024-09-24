Dime una lista que sume numeros separados por espacios

<?php

$datos = explode(" ", trim(fgets(STDIN)));
/* $indica que es variable de nombre datos
explode indico que quiero que corte lo que se meta por teclado. En las comillas le indico por donde 
quiero que corte.

trim quita el espacio de inicio y final

fgets indica que obtenga y con stdin le digo que lo que entre por teclado
*/

?> 

Se han introducido <?php echo count($datos) ?> numeros

<?php
echo $datos[0];
echo $datos[1];
echo $datos[2];
//para ejecutarlo desde la terminal nos vamos al directorio donde esta almacenado y ponemos php -f nombrearchivo
//no hace falta que cierre el archivo con php si no va a continuar con html