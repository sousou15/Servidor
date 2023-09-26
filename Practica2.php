<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PRACTICA2PHP</title>
    <style>
        body{
            background-color: black;
        }
        #contenedor{
            margin: 5% 5% 5% 5%;
            border: 10px solid orange;
            padding: 10px;
            border-radius: 30px ;
            background-color: whitesmoke;
            font-size: 24px;
        }
        hr{
            margin-left: 5%;
            margin-right: 5%;
        }
        h1{
            text-align: center;
    		-webkit-text-stroke: 2px orange; /* width and color */
    		font-family: sans; color: black;
    		font-size: 80px;
        }
        b{
        	color: darkorange;
        }
    </style>
</head>
<body>

<h1>Práctica 2. Inserción de código en páginas web</h1>
<div id="contenedor">
<?php
	echo "<b>Ejercicio 1</b><br>";
	$var1 = "Hola";
	$var2 = "Mundo";
 	$concatenacion = $var1 . " " . $var2;
 	echo "<b>a)</b> " . $concatenacion;
 	echo "<br>";
 	$flag = true;
 	echo "<b>b)</b> " . $flag;

 	echo "<br>";
 	$real = 3.14;
 	echo $real;
 	echo "<br>";

 	$vector = array(
    'valor1' => 1,
    'valor2' => 2,
    'valor3' => 3);
    echo "<b>c)</b> ";
    print_r($vector);


 	echo "<br>";
 	echo "<b>Ejercicio 2</b><br>";
 	$flag = false;
 	echo "->" . $flag; //no va a mostrar nada porque el valor flase corresponde al valor null en php. Un echo a este valor no aparece en pantalla. Lo concateno a una flecha para poder localizar donde estaría.

 	echo "<br>";
 	echo "<b>Ejercicio 3</b><br>";
 	$nuevo = str_replace(' ', '', $concatenacion);
 	echo $nuevo;

 	echo "<br>";
 	echo "<b>Ejercicio 4</b><br>";
 	$cadena = "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\"podemos 
	dividir valores entre variables. El símbolo del dólar \"\$\" indica que estamos 
	utilizando variables pero no lo usaremos en las constantes o globales.";
	echo $cadena;

	echo "<br>";
	echo "<b>Ejercicio 5</b><br>";
	echo "La longitud de la cade anterior es " . strlen($cadena);

	echo "<br>";
	echo "<b>Ejercicio 6</b><br>";
	$vocales = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
	$soloconsonantes = str_replace($vocales, "", $concatenacion);
	echo $soloconsonantes;

	echo "<br>";
	echo "<b>Ejercicio 7</b><br>";
	$vacia = null;
	echo is_null($vacia); // Esta sentencia devuelve "1" ya que es de tipo boolean y el valor "1" significa true.

	echo "<br>";
	echo "<b>Ejercicio 8</b><br>";
	echo intval($concatenacion); //El valor entero de var en caso de éxito, o 0 en caso de error. En este caso es error por eso obtenemos un 0.

	echo "<br>";
	echo "<b>Ejercicio 9</b><br>";
	echo "<b>a)</b> " . sqrt(144);

	echo "<br>";

	echo "<b>b)</b> " . pow(2, 8);

	echo "<br>";

	echo "<b>c)</b> " . 100%6;

	echo "<br>";

	function MCD($num1, $num2){
		if ($num1 == 0) {
			return $num2;
		}
		return MCD($num2%$num1, $num1);

	} //Función recursiva. Euclides.

	echo "<b>d)</b> " . "Maximo común divisor: " . MCD(3,6);

?>
</div>
</body>
</html>