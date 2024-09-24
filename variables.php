<?php
$datos = explode(" ", trim(fgets(STDIN)));
if (count($datos)<2):?>
Argumentos insuficientes<?php
else:
$numero1=$datos[0];
$numero2=$datos[1];
$resultado=$numero1+$numero2;
echo $resultado;
endif;

