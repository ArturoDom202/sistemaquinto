<?php
	$email = $_POST["txt_email"];
	$contra = $_POST["txt_pass"];
	require("BD.php");
	$consulta = "SELECT * FROM usuario WHERE email = '$email' && pass='$contra'";
	
	$registro = bd::numRegistros($consulta, "connect_db.php");

	if($registro>0){
		echo "BIENVENIDO AL SISTEMA";
		echo "<meta http-equiv=\"refresh\" content=\"2;url=menu.php\">\r\n";
	}else{
		echo "ACCESO DENENGADO";
	}
?>



