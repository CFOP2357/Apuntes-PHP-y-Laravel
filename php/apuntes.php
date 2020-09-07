<?php 
//esta etiqueta 'lo pone en modo php'
	$var = '33'; //siempre que se quiere usar una variable se pone $
	var_dump($var); //debuguea

	$string1 = 'texto con comillas simples'; //toma todo lo que esta entre las comillas simples como texto
	$string2 = "$string1 <- concatenado papu"; //el texto entre comillas dobles permite usar variables
	$ans = 'gdsa'.$string1; //se puede concatenar con el punto
	$ans2 = '$string1 ward';

	/*
Usando comillas dobles permite usar caracteres de escape y además expanden los nombres de las variables, es decir sustituye el valor de las variables dentro de las cadenas.
	*/

	///ARRAY (aqui son mapas, por default las llaves son int)
	$array = array(
	    "curso1" => "php", 
	    "curso2" => "js",
	); 

	// a partir de PHP 5.4
	$array = [
	    "curso1" => "php",
	    "curso2" => "js",
	]; //llave, valor

	// índices numéricos
	$array = [
	    "php",
	    "js",
	]; //solo valor, las llaves son 0,1,2...

 ?> 

 <!DOCTYPE html>
 <html>
 <head>
 	<title>	APUNTES </title>
 </head>
 <body>
 	<h1>Primeros Apuntes</h1>
 	<h4>	<?php 	echo $var; ?></h4> 
 	<h4>	<?php 	echo $ans; ?></h4>
 	<h4>	<?php 	echo $ans2; ?></h4>

 	<h1>Ciclos</h1>
 	<?php 	
 		$datos = [ //los arreglos son mapas ;v
 				[
 					'title' => 'titulo 1',
 					'text' => [
 						'holi',
 						'adios',
 						'jajanocierto'
 					]
 				],
 				[
 					'title' => 'titulo 2',
 					'text' => [
 						'holi',
 						'adios',
 					]
 				],
 				[
 					'title' => 'titulo 3',
 					'text' => [
 						'holi',
 						'adios',
 						'jajanocierto',
 						'bueno ahora si adios',
 						'hasta la proxima'
 					]
 				]
 		];		

 		for($i = 0; $i<count($datos); $i++){ //count es O(1)
 			echo '<h4>' . $datos[$i]['title'] . '</h4>';
 			foreach($datos[$i]['text'] as $text)
 					echo '<h5>' . $text . '</h5>';
 		}

 		/*break y continue tambien existen*/

 		/*while y do-while tambien estan en php*/

 		/*
		todos los comparadores son los clasicos, pero es importante notar los iguales.
				== es si son iguales despues de hacer cast
				=== son iguales sin hacer cast
				!= diferentes despues de hacer cast
				<> diferentes sin hacer cast
		los operadores logicos son:
				and - And
				or - Or
				xor - Xor
				! - Not
				&& - And
				|| - Or
		Los arreglos pueden manejar los operadores de igualdad y '+' el cual es Union (de conjuntos), si los dos tienen una clave, se toma el elemento del array izquierdo
 		*/

 		/*
		anexos:
			http://php.net/manual/es/language.operators.arithmetic.php
			https://www.php.net/manual/es/language.operators.assignment.php
			https://www.php.net/manual/es/language.operators.comparison.php
			https://www.php.net/manual/es/language.operators.logical.php
 		*/
 	?>

 	<h1>Funciones</h1>
 	<?php 	
 		$time = 0;

 		function f(){
 			global $time;
 			return $time++;
 		}

 		echo '<h4>';
 		for($i = 0; $i < 5; $i++)
 			echo f() . ' ';
 		echo '</h4>';
 	?>
 </body>
 </html>