<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<link href="framework/bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1"><br>	
	<link rel="shortcut icon" type="image/x-icon" href="img/icono.ico">
	<?php
		require("encabezado.php");
	?>
</head>

<body>
	<form method="post">
	<br>
	<br>
	<div class="container" style="box-shadow: 2px 2px 2px 2px #EBEBEB; background: #EBF9FD; height: 500px;">
		<div class="row">
			<div class="col-md-12" style="text-align: center; padding:20px;">
				<H3>BUSQUEDA DE CLIENTES</H3>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-2">
				CRITERIO
			</div>
			
			<div class="col-md-6">
				<input name="txt_criterio" type="text" class="form-control">
			</div>	
			
			<div class="col-md-4">
				<input name="btn_buscar" type="submit" value="BUSCAR" class="form-control" style="background: #0848AA; color:#FFFFFF;">
			</div>	
		</div>

<div class="col-md-12">		
<?php
	require("connect_db.php");
	
	if(isset($_POST["btn_buscar"])){
		$criterio = $_POST["txt_criterio"];
		$consulta = "SELECT cliente.id_cliente, CONCAT(cliente.apellido,' ', cliente.nombre) AS nombrex, cliente.telefono, CONCAT(cliente.direccion,', ', ciudad.ciudad) AS direccionx FROM cliente, ciudad WHERE cliente.id_ciudad=ciudad.id_ciudad AND CONCAT(cliente.nombre,cliente.apellido,cliente.telefono,cliente.direccion,ciudad.ciudad) LIKE '%$criterio%'";
		$resultado =mysqli_query($link,$consulta);
		
		$encabezado1 = "ID";
		$encabezado2 = "Nombre";
		$encabezado3 = "Teléfono";
		$encabezado4 = "Dirección";
		
		if($fila=mysqli_fetch_array($resultado)){
		  echo "<div style='border:1px solid #EBE9E9; width:95%; height: 300px; overflow-x:auto; position: absolute;'>"; 
		  echo "<table border='1' cellspacing='0' cellpadding='10' bordercolor='#BCBCBC' align='center'>
		<tr bgcolor='#030287'>
			<th width='10%' align='center' style='color:#FFFFFF;'><font size='2' face='arial'><b>ID</b></th>
			<th width='40%' align='center' style='color:#FFFFFF;'><font size='2' face='arial'>Nombre</th>
			<th width='10%' align='center' style='color:#FFFFFF;'><font size='2' face='arial'>Teléfono</th>
			<th width='40%' align='left' style='color:#FFFFFF;'><font size='2' face='arial'>Dirección</th>
		</tr>";
		
		do{
			$id_cliente=$fila["id_cliente"];
			$nombrex=$fila["nombrex"];
			$telefono=$fila["telefono"];
			$direccion=$fila["direccionx"];
			echo "<tr>
				<th>$id_cliente</th>
				<th>$nombrex</th>
				<th>$telefono</th>
				<th>$direccion</th>
			</tr>";	
		}while($fila=mysqli_fetch_array($resultado));	
		echo "</table>";
	    echo "</div>";	
			
		}else{
			
		}
	}
?>			
</div>		
	</div>	
	<br>
	</form>
</body>


	
<footer>
	<?php
		require("encabezado.php");
	?>
</footer>
</html>



