<?php
	$nombre = $_POST["txt_nombre"];
	$apellido = $_POST["txt_apellido"];
    $telefono = $_POST["txt_telefono"];
	$direccion= $_POST["txt_direccion"];
	$email = $_POST["txt_email"];
	$cmb_ciudad = $_POST["cmb_ciudad"];

	//echo $nombre." ".$apellido." ".$telefono." ".$direccion." ".$email;
	//require("BD.php");
	$sql="INSERT INTO cliente VALUES('NULL', '$nombre', '$apellido', '$telefono', '$direccion','$cmb_ciudad', '$email')";
	
    //echo $sql;
	bd::abc($sql, "connect_db.php"); //la funcion ABC ejecuta una consulta ABC y llama a la conexion.
	echo "<script>
		      alert('El Cliente se agrego correctamente');
	     </script>";
		
	echo "<meta http-equiv=\"refresh\" content=\"2;url=menu.php\">\r\n";
?>