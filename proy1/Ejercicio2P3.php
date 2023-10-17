<?php


$precio=$_GET['totalcompras'];


    switch ($precio) {
        case $precio<50:
            echo 'Su gastos de envio son: 3.95';
            break;
        case ($precio>50) and ($precio<75):
            echo 'Su gastos de envio son: 2.95';
            break;
        case ($precio>75) and ($precio<100):
            echo 'Su gastos de envio son: 1.95';
            break;
        case $precio > 100:
            echo 'Su gastos de envio son: GRATUITOS';
            break;
        default:
            echo "incorrecto.";
    }
?>