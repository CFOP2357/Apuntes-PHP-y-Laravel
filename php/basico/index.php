<?php 

	include_once('program.php'); //incluye solo una vez, no importa que se llame varias veces

	/*
	include([nombre archivo]); //funciona como include de c++, pero si no encuentra el archivo no pasa nada

	require([nombre archivo]); //si no encuentra el archivo muere
	//tambien existe require_once
	*/

 ?> 

 <!DOCTYPE html>
 <html>
 <head>
 	<title>	Basico </title>
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