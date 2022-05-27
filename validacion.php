<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BIENVENIDO AL SISTEMA</title>
	<link href="framework/bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="shortcut icon" type="image/x-icon" href="img/icono.ico">
</head>

<body>
	<br>
	<br>
	<form method="post">
		<div class="container" style="box-shadow: 2px 2px 2px 2px #BBBBBB; background:#E9F7FA; padding: 20px;">
			<div class="row">
				<div class="col-md-12" style="text-align: center; padding-top:20px;">
					<h3>SISTEMA DE VENTAS</h3>
				</div>
			</div>
			<hr>
			<div class="row">
				<div  class="col-md-2">
					<label><b>Email:</b></label>
				</div>
				<div  class="col-md-10">
					<input class="form-control" name="txt_email" type="email" placeholder="Ingrese su correo electrónico" required>
				</div>				
			</div>
			<br>
			<div class="row">
				<div  class="col-md-2">
					<label><b>Password:</b></label>
				</div>
				<div  class="col-md-10">
					<input class="form-control" name="txt_pass" type="password" placeholder="Ingrese su Password" required>
				</div>				
			</div>	
			<br>
			<div class="row">
				<div class="col-md-12" style="text-align: center;">
					<input class="btn btn-primary" name="btn_aceptar" type="submit" value="ACEPTAR" style="width:200px;">
				</div>
			</div>
			<br>
		</div>
	</form>
	<br>
	<br>
<?php
	if(isset($_POST["btn_aceptar"])){
		require("c_validacion.php");
	}
?>
</body>
</html>




