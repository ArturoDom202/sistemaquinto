<?php
	$servidor="localhost";
	$usuario="root";
	$password="";
	$bd="sistemaquinto";

	$link = mysqli_connect($servidor,$usuario,$password,$bd);  //Conexión a la BD
	mysqli_set_charset($link,'utf8');
	//Se autoriza la utilización del alfabeto en Español (áéíóú)
	
	if(mysqli_connect_error()){
		echo "Error de Conexión";
	}else{
		echo "Bienvenido al Sistema";
	}
?>


