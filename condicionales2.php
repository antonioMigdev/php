<?php
$puntuacion = explode(" ", trim(fgets(STDIN)));
if ($puntuacion[0]>$puntuacion[1]):?>
El jugador ganador es el 1 con <?php echo $puntuacion[0];
elseif ($puntuacion[0]<$puntuacion[1]):?>
El jugador ganador es el 2 con <?php echo $puntuacion[1];
else :?>
Ha habido empate a <?php echo $puntuacion[0];
endif;
