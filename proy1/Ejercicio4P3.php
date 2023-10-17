<?php

$datos = array
 					(
 					array(3, 1),
 					array(2, 0),
 					);
foreach ($datos as $fila) {
    
    foreach ($fila as $numeros) {
        # code...
        echo $numeros . " ";
    }
    # code...
    echo "<br>";
}


?>