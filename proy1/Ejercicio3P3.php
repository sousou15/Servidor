<?php

$arrayNumeros = array(
    $_GET['numero1'],
    $_GET['numero2'],
    $_GET['numero3'],
    $_GET['numero4'],
    $_GET['numero5']
);

$max = $arrayNumeros[0]; //suponemos maximo al primer elemento

for ($i=0; $i < count($arrayNumeros); $i++) { 
    # code...
    if($arrayNumeros[$i] >= $max){
        $max = $arrayNumeros[$i];
    }
}

echo "El mayor número es: " . $max;

?>