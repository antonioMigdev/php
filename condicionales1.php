<?php
$datos = explode(" ", trim(fgets(STDIN)));
if ($datos[0]<$datos[1]):?>
El mayor valor es <?php echo $datos[1];
elseif ($datos[0]==$datos[1]):?>
Pareja de <?php echo $datos[1];
elseif ($datos[0]>$datos[1]):?>
El mayor valor es <?php echo $datos[0];
endif;