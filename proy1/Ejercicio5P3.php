<?php

$datos1 = array
 					(
 					array(1, 0),
 					array(0, 1),
 					);
                
$datos2= array
 					(
 					array(0, 1),
 					array(1, 0),
 					);
                    
                    
$resultado = array();

for ($i=0; $i <  count($datos1); $i++) { 
    # code...
    for ($j=0; $j < count($datos1[0]) ; $j++) { 
        # code...
        $resultado[$i][$j] = $datos1[$i][$j] + $datos2[$i][$j];
    }
}

foreach ($resultado as $fila) {
    
    foreach ($fila as $numeros) {
        # code...
        echo $numeros . " ";
    }
    # code...
    echo "<br>";
}

?>