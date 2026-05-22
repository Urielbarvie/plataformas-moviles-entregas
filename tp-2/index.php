<?php

function sumarRecursos(int $a, int $b){
    $suma=$a+$b;
    return $suma;
}
/* ----------------------------------------------------------- */
function tieneMasRecursos(int $a, int $b){
    if($a>$b){
        return true;
    }else{
        return false;
    }
}
/* -------------------------------------------------------------*/
function lineaMayor(int $a, int $b){ 
    if($a>$b){
        return $a;
    }else{
        return $b;
    }
}
/* ------------------------------------------------------------*/

function existeLinea(array $lineas, int $cantidad){
$i=0;
while($i < count($lineas)){    
if($lineas[$i]==$cantidad){
        return true;
    }
$i++;
}
return false;
}
/*  -------------------------------------------------------*/

function lineaMaxima(array $lineas){

    for( $i=0; $i<count($lineas)-1; $i++){
        for( $j=1+$i; $j<count($lineas); $j++){
             if($lineas[$i]>$lineas[$j]){
                echo $i;

        }
    }
}
}






echo lineaMaxima([10, 6, 100, 67]);

echo existeLinea([10,6,9], 6);
echo sumarRecursos(8,1);












?>