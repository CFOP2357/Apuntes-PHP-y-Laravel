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