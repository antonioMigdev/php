<?php
$calculadora = explode(" ", trim(fgets(STDIN)));
$resultado=0;

switch ($calculadora[0]){
    case "+":
        $resultado= $calculadora[1] + $calculadora[2];
        break;
    
    case "-":
        $resultado= $calculadora[1] - $calculadora[2];
        break;

    case "x":
        $resultado= $calculadora[1] * $calculadora[2];
      
        break;

    case ":":
        $resultado= $calculadora[1] / $calculadora[2];
        break;

}
?>
<p><?php echo $calculadora[1]." ".$calculadora[0]." ".$calculadora[2]." = ".$resultado?></p>


/* OTRA RESOLUCION SERIA HACIENDO EL FORMATO DE SALIDA EN CADA RESULTADO DE CADA CASE Y LUEGO UN ECHO DE RESULTADO 
case ':':
        $res = $num1." : ".$num2." = ".($num1/$num2);
        break;
}
?>
<p><?php echo $res; ?></p>
*/
