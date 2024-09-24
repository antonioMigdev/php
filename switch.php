<?php
$calculadora = explode(" ", trim(fgets(STDIN)));
$resultado[0]= $calculadora[1] + $calculadora[2];
$resultado[1]= $calculadora[1] - $calculadora[2];
$resultado[2]= $calculadora[1] * $calculadora[2];
$resultado[3]= $calculadora[1] / $calculadora[2];

switch ($calculadora[0]){
    case "+":
        echo $calculadora[1]." ".$calculadora[0]." ".$calculadora[2]." = ".$resultado[0];
        break;
    
    case "-":
        echo $calculadora[1]." ".$calculadora[0]." ".$calculadora[2]." = ".$resultado[1];
        break;

    case "x":
        echo 
        $calculadora[1]." ".$calculadora[0]." ".$calculadora[2]." = ".$resultado[2];
        break;

    case ":":
        echo $calculadora[1]." ".$calculadora[0]." ".$calculadora[2]." = ".$resultado[3];
        break;

    }